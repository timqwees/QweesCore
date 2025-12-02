<?php
namespace App\Models\Router;

use App\Models\Network\Network;
use Setting\Route\Function\Functions;

class Routes extends Network
{
  /**
   * Регистрирует маршрут с указанным HTTP-методом, путем и обработчиком
   *
   * @param string $method HTTP-метод (например, 'GET', 'POST', 'PUT', 'DELETE')
   * @param string $path Путь маршрута (например, '/user/{id}')
   * @param callable|array|string $callback Обработчик маршрута: функция, массив [Класс, метод] или имя встроенной функции
   *
   * @return void
   *
   * @example self::addRoute('GET', '/user/{id}', [UserController::class, 'show']);
   * @description Регистрирует маршрут GET /user/{id} с обработчиком UserController::show
   *
   * @example self::addRoute('POST', '/login', 'loginFunction');
   * @description Регистрирует маршрут POST /login с обработчиком loginFunction
   */
  public static function addRoute(string $method, string $path, $callback): void
  {
    $method = strtoupper($method);

    // Преобразуем плейсхолдеры в пути в именованные группы RegExp
    // Примеры преобразования:
    // "/user/{id}"         => "~^/user/(?P<id>[^/]+)$~"
    // "/item={sku}/view"   => "~^/item=(?P<sku>[^/&?]+)/view$~"

    // Сначала ищем ключ=значение с плейсхолдером: параметр в виде "item={sku}"
    $path = preg_replace('~([a-zA-Z0-9_-]+)=\{([a-zA-Z0-9_]+)\}~', '$1=(?P<$2>[^/&?]+)', $path);
    // Затем обычный плейсхолдер "{id}"
    $pattern = preg_replace('~\{([a-zA-Z0-9_]+)\}~', '(?P<$1>[^/]+)', $path);
    // Начало и конец строки, общая регулярка
    $pattern = "~^" . $pattern . "$~";

    // вызов встроенных функций
    if (is_string($callback) && method_exists(Functions::class, $callback)) {
      Network::$patterns[$method][$pattern] = [Functions::class, $callback];
      //вызов ручных функций
    } elseif (is_callable($callback)) {
      Network::$patterns[$method][$pattern] = $callback;
      //вызов контроллеров
    } elseif (is_array($callback) && isset($callback[0], $callback[1])) {
      Network::$patterns[$method][$pattern] = [$callback[0], $callback[1]];
    } else {
      Network::handleInvalidCallback($path, $callback);
    }
  }

  /**
   * Регистрирует маршрут GET с указанным путем и обработчиком
   *
   * @param string $path Путь маршрута (например, '/user/{id}')
   * @param callable|array|string $callback Обработчик маршрута: функция, массив [Класс, метод] или имя встроенной функции
   *
   * @return void
   *
   * @example self::get('/user/{id}', [UserController::class, 'show']);
   * @description Регистрирует маршрут GET /user/{id} с обработчиком UserController::show
   *
   * @example self::get('/login', 'loginFunction');
   * @description Регистрирует маршрут GET /login с обработчиком loginFunction
   */
  public static function get(string $path, $callback): void
  {
    self::addRoute('GET', $path, $callback);
  }

  /**
   * Регистрирует маршрут POST с указанным путем и обработчиком
   *
   * @param string $path Путь маршрута (например, '/user/{id}')
   * @param callable|array|string $callback Обработчик маршрута: функция, массив [Класс, метод] или имя встроенной функции
   *
   * @return void
   *
   * @example self::post('/user/{id}', [UserController::class, 'update']);
   * @description Регистрирует маршрут POST /user/{id} с обработчиком UserController::update
   *
   * @example self::post('/login', 'loginFunction');
   * @description Регистрирует маршрут POST /login с обработчиком loginFunction
   */
  public static function post(string $path, $callback): void
  {
    self::addRoute('POST', $path, $callback);
  }

  /**
   * Запускает процесс маршрутизации и обрабатывает входящий HTTP-запрос
   *
   * @return void
   *
   * @example self::dispatch();
   * @description Запускает маршрутизатор, сопоставляет текущий URI и метод запроса с зарегистрированными маршрутами и вызывает соответствующий обработчик.
   *
   * Если маршрут найден, вызывается соответствующий контроллер или функция-обработчик с параметрами из URI.
   * Если маршрут не найден, возвращается страница 404.
   */
  public static function dispatch(): void
  {
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
    if ($uri === '') {
      $uri = '/';
    }

    $routes = Network::$patterns[$method] ?? [];

    foreach ($routes as $pattern => $callback) {
      if (preg_match($pattern, $uri, $matches)) {
        array_shift($matches);

        // Извлекаем именованные параметры
        // Пример:
        //   URI:            '/pay_send/100/VPN7/123456'
        //   $matches:       [0=>'100', 1=>'VPN7', 2=>'123456']
        //   $named_params:  ['param_function_1'=>'100', 'param_function_2'=>'VPN7', 'param_function_3'=>'123456']
        $named_params = [];
        foreach ($matches as $key => $value) {
          if (is_string($key)) {
            $named_params[$key] = $value;
          }
        }

        if (is_array($callback) && isset($callback[0], $callback[1])) {
          // Контроллеры получают позиционные аргументы пути:
          //   $controller->$action(...$matches)
          // где порядок соответствует порядку плейсхолдеров в маршруте
          $controllerClass = $callback[0];
          $action = $callback[1];

          // Проверяем, является ли метод статическим
          $reflection = new \ReflectionClass($controllerClass);
          $isStatic = false;
          if ($reflection->hasMethod($action)) {
            $method = $reflection->getMethod($action);
            $isStatic = $method->isStatic();
          }

          if ($isStatic) {
            // Вызываем статический метод напрямую
            if (method_exists($controllerClass, $action)) {
              if (isset($callback[2])) {
                $params_string = $callback[2];
                $params = [];
                if (!empty($params_string)) {
                  $params_string = trim($params_string);
                  if (preg_match('/^[\'"](.+)[\'"]$/', $params_string, $quote_matches)) {
                    $params = [$quote_matches[1]];
                  }
                }
                $controllerClass::$action(...$params);
              } else {
                $controllerClass::$action(...$matches);
              }
              return;
            }
          } else {
            // Вызываем метод через экземпляр
            $controller = is_string($controllerClass) ? new $controllerClass : $controllerClass;
            if (method_exists($controller, $action)) {
              // Если есть третий элемент (параметры для метода класса)
              if (isset($callback[2])) {
                $params_string = $callback[2];
                $params = [];
                if (!empty($params_string)) {
                  $params_string = trim($params_string);
                  if (preg_match('/^[\'"](.+)[\'"]$/', $params_string, $quote_matches)) {
                    $params = [$quote_matches[1]];
                  }
                }
                $controller->$action(...$params);
              } else {
                $controller->$action(...$matches);
              }
              return;
            }
          }
        } elseif (is_callable($callback)) {
          // Замыкания/функции получают именованные параметры по ключам
          // Пример вызова для URI выше: function ($amount, $description, $telegram_id)
          //   call_user_func_array($callback, ['amount'=>'100','description'=>'VPN7','telegram_id'=>'123456'])
          call_user_func_array($callback, $named_params);
          return;
        }
        Network::handleInvalidCallback($uri, $callback);
        return;
      }
    }

    // Если маршрут не найден, показываем 404
    self::error_404($uri);
  }

  /**
   * Страница 404
   */

  public static function error_404(
    string $path
  ) {
    $link = dirname(__DIR__, 2) . '/Models/Router/view/404/404.html';
    if (file_exists($link)) {
      include_once $link;
    }
  }

  /**
   * Автоматически подключает и отображает элемент по указанному пути
   *
   * @param string $path Путь к файлу, который необходимо подключить
   * @return void
   *
   * @example self::auto_element('/path/to/file.php');
   * @description Подключает файл по указанному пути, если он существует, иначе вызывает страницу 404
   */
  public static function auto_element($path)
  {
    if (file_exists($path)) {
      include_once $path;
    } else {
      self::error_404(__METHOD__);
    }
  }

}
include_once dirname(__DIR__, 3) . '/setting/route/function/functions.php';
