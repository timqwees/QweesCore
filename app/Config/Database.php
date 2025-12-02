<?php
/**
 *
 *  _____                                                                                _____
 * ( ___ )                                                                              ( ___ )
 *  |   |~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|   |
 *  |   |                                                                                |   |
 *  |   |                                                                                |   |
 *  |   |    ________  ___       __   _______   _______   ________                       |   |
 *  |   |   |\   __  \|\  \     |\  \|\  ___ \ |\  ___ \ |\   ____\                      |   |
 *  |   |   \ \  \___|\ \  \    \ \  \ \   __/|\ \   __/|\ \  \___|_                     |   |
 *  |   |    \ \  \\\  \ \  \  __\ \  \ \  \_|/_\ \  \_|/_\ \_____  \                    |   |
 *  |   |     \ \  \\\  \ \  \|\__\_\  \ \  \_|\ \ \  \_|\ \|____|\  \                   |   |
 *  |   |      \ \_____  \ \____________\ \_______\ \_______\____\_\  \                  |   |
 *  |   |       \|___| \__\|____________|\|_______|\|_______|\_________\                 |   |
 *  |   |             \|__|                                 \|_________|                 |   |
 *  |   |    ________  ________  ________  _______   ________  ________  ________        |   |
 *  |   |   |\   ____\|\   __  \|\   __  \|\  ___ \ |\   __  \|\   __  \|\   __  \       |   |
 *  |   |   \ \  \___|\ \  \|\  \ \  \|\  \ \   __/|\ \  \|\  \ \  \|\  \ \  \|\  \      |   |
 *  |   |    \ \  \    \ \  \\\  \ \   _  _\ \  \_|/_\ \   ____\ \   _  _\ \  \\\  \     |   |
 *  |   |     \ \  \____\ \  \\\  \ \  \\  \\ \  \_|\ \ \  \___|\ \  \\  \\ \  \\\  \    |   |
 *  |   |      \ \_______\ \_______\ \__\\ _\\ \_______\ \__\    \ \__\\ _\\ \_______\   |   |
 *  |   |       \|_______|\|_______|\|__|\|__|\|_______|\|__|     \|__|\|__|\|_______|   |   |
 *  |   |                                                                                |   |
 *  |   |                                                                                |   |
 *  |___|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|___|
 * (_____)                                                                              (_____)
 *
 * Эта программа является свободным программным обеспечением: вы можете распространять ее и/или модифицировать
 * в соответствии с условиями GNU General Public License, опубликованными
 * Фондом свободного программного обеспечения (Free Software Foundation), либо в версии 3 Лицензии, либо (по вашему выбору) в любой более поздней версии.
 *
 *
 * @license GPL-3.0-or-later (см. файл LICENSE.txt)
 * @author TimQwees
 * @link https://github.com/TimQwees/Qwees_CorePro
 *
 *
 */

namespace App\Config;

use PDO;
use RuntimeException;
use App\Models\Network\Network;
use InvalidArgumentException;

class Database extends Network
{
  private static ?PDO $instance = null;
  public static $schema_name;
  private static $folder_sqlite;

  /**
   * Инициализирует папку для хранения SQLite базы данных.
   *
   * Этот метод устанавливает путь к папке, где будут храниться файлы SQLite.
   * Если путь не был установлен ранее, по умолчанию используется папка Storage в корне приложения.
   *
   * @return void
   *
   * @example Database::initSqliteFolder();
   * @description Устанавливает путь к папке для хранения SQLite файлов / Set folder path for SQLite storage
   */
  private static function initSqliteFolder()
  {
    if (empty(self::$folder_sqlite)) {
      self::$folder_sqlite = dirname(__DIR__, 1) . "/Storage/";
    }
  }

  /**
   * Инициализирует имя схемы базы данных.
   *
   * Этот метод устанавливает имя схемы, используемое для работы с базой данных.
   * Если переменная окружения SCHEMA_NAME определена и не пуста,
   * используется путь к файлу схемы в текущей директории (__DIR__).
   * В противном случае по умолчанию используется строка 'schema'.
   *
   * @return void
   *
   * @example Database::initSchemaName();
   * @description Устанавливает имя схемы для работы с базой данных / Set schema name for database usage
   */
  public static function initSchemaName()
  {
    if (empty(self::$schema_name)) {
      self::$schema_name = dirname(__DIR__, 2) . '/setting/schema/' . (isset($_ENV['SCHEMA_NAME']) && !empty($_ENV['SCHEMA_NAME']) ? ($_ENV['SCHEMA_NAME'] . '.sql') : 'schema.sql');
    }
  }

  /**
   * Закрыть соединение с базой данных.
   *
   * Этот метод устанавливает внутренний экземпляр PDO в null,
   * что приводит к закрытию текущего соединения с базой данных.
   * Используйте этот метод для явного завершения соединения,
   * например, при завершении работы приложения или при необходимости пересоздать соединение.
   *
   * @return void
   */
  public static function closeConnection()
  {
    self::$instance = null;
  }

  /**
   * Возвращает соединение с базой данных (PDO)
   *
   * Этот метод предоставляет экземпляр PDO для работы с базой данных.
   * В зависимости от настроек окружения, может быть использовано соединение с MySQL или SQLite.
   * Если соединение еще не было установлено, оно будет создано автоматически.
   *
   * @return \PDO Экземпляр PDO для работы с базой данных
   *
   * @example $pdo = Database::getConnection();
   * @description Возвращает объект PDO для выполнения SQL-запросов к базе данных (MySQL или SQLite)
   */
  public static function getConnection()
  {
    if (self::$instance === null) {
      self::initSqliteFolder();//получение пути storage
      self::initSchemaName();//получение имени схемы
      try {
        $db_selection = $_ENV['DATABASE'] ?? getenv('DATABASE') ?? 'sqlite';
        if ($db_selection === 'sqlite') {
          $db_base = $_ENV['SQLITE_DB_NAME'] ?? getenv('SQLITE_DB_NAME') ?: 'database';
          $db_name = $db_base . '.sqlite';
          if (!file_exists(self::$folder_sqlite . $db_name)) {
            self::$instance = self::createSQlite($db_name);
          } else {
            self::$instance = new PDO('sqlite:' . self::$folder_sqlite . $db_name);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
        } elseif ($db_selection === 'mysql') {
          // Получаем параметры окружения для MySQL
          $DB_HOST = $_ENV['DB_HOST'] ?? getenv('DB_HOST') ?: '';
          $DB_PORT = $_ENV['DB_PORT'] ?? getenv('DB_PORT') ?: '3306';
          $DB_USERNAME = $_ENV['DB_USERNAME'] ?? getenv('DB_USERNAME') ?: '';
          $DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?: '';
          $DB_NAME = $_ENV['DB_NAME'] ?? getenv('DB_NAME') ?: '';

          // Проверка обязательных параметров
          if (!$DB_HOST || !$DB_PORT || !$DB_USERNAME || $DB_NAME === null || $DB_NAME === "") {
            throw new RuntimeException('Некорректные параметры подключения к MySQL. Требуются DB_HOST, DB_PORT, DB_USERNAME, DB_NAME');
          }

          // Установка опций для PDO MySQL
          $options = [
              // Включение обработки ошибок через исключения (обязательно для правильной обработки ошибок)
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              // Устанавливаем режим по умолчанию для fetch — удобно работать с ассоциативными массивами
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              // Отключаем эмуляцию подготовленных выражений для повышения безопасности и производительности
            PDO::ATTR_EMULATE_PREPARES => false,
              // Таймаут соединения (в секундах), чтобы избежать зависаний при проблемах сети
            PDO::ATTR_TIMEOUT => 10,
              // Использовать буферизированные результаты — удобно для работы с большими наборами данных
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
              // Настройки сессии при инициализации соединения
              // Важно для корректной работы с кодировками, режимами и тайм-аутами
            PDO::MYSQL_ATTR_INIT_COMMAND =>
              // Все общие команды разделяются точкой с запятой (MySQL разрешает одну строку)
              "SET NAMES utf8mb4;" .
              "SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';" .
              "SET SESSION innodb_lock_wait_timeout=10;" .
              "SET SESSION wait_timeout=120;" .
              "SET SESSION interactive_timeout=120;" .
              "SET SESSION net_read_timeout=60;" .
              "SET SESSION net_write_timeout=60;" .
              "SET SESSION max_execution_time=2000;" .
              "SET SESSION max_allowed_packet=16777216;" .
              "SET SESSION net_buffer_length=32768;",
          ];

          // Формируем DSN для MySQL
          $dsn = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME};charset=utf8mb4";
          // Подключение к MySQL
          self::$instance = new PDO($dsn, $DB_USERNAME, $DB_PASSWORD, $options);
        } elseif (empty($db_selection)) {
          self::closeConnection();
        } else {
          throw new RuntimeException('Неизвестный тип базы данных. Укажите DATABASE=sqlite или DATABASE=mysql в .env');
        }

        return self::$instance;
      } catch (\PDOException $e) {
        error_log("Ошибка подключения к базе данных: " . $e->getMessage());
        // Не делаем редирект здесь, чтобы избежать циклических редиректов
        throw new RuntimeException('Ошибка подключения к базе данных. Пожалуйста, проверьте настройки.');
      }
    }

    return self::$instance;//PDO
  }

  /**
   * Выполняет подготовленный SQL-запрос с параметрами
   *
   * @param string $sql SQL-запрос с плейсхолдерами (например, "SELECT * FROM users WHERE id = ?")
   * @param array $params Массив параметров для запроса (например, [1])
   *
   * @return array|bool Возвращает массив результата для SELECT-запроса, true для успешного изменения данных (INSERT/UPDATE/DELETE), false при ошибке
   *
   * @example Database::send("SELECT * FROM users WHERE id = ?", [1]);
   * @description Выполняет SQL-запрос с параметрами и возвращает результат: для SELECT — массив данных, для других запросов — true/false
   */
  public static function send(string $sql, array $params = [])
  {
    // Проверка, что ни один из параметров не является массивом
    foreach ($params as $key => $value) {
      if (is_array($value)) {
        error_log("Ошибка: параметр (ключ: $key) должен быть скалярным, получен массив");
        throw new InvalidArgumentException("Параметр для запроса не должен быть массивом (ключ: $key)");
      }
    }

    try {
      $pdo = self::getConnection();
      if ($pdo === null)
        return false;
      $stmt = $pdo->prepare($sql);
      if ($stmt === false) {
        $errorInfo = $pdo->errorInfo();
        $errorMsg = "Ошибка подготовки запроса: " . implode(", ", $errorInfo) . " | SQL: $sql | Параметры: " . json_encode($params, JSON_UNESCAPED_UNICODE);
        error_log($errorMsg);
        return false;
      }

      // Определяем тип базы данных
      $db_selection = $_ENV['DATABASE'] ?? getenv('DATABASE') ?? 'sqlite';
      if ($db_selection === 'mysql') {
        // Явно привязываем параметры с типами для MySQL
        foreach ($params as $index => $value) {
          $paramType = PDO::PARAM_STR; // По умолчанию строка
          if (is_int($value) || is_bool($value)) {
            $paramType = is_bool($value) ? PDO::PARAM_BOOL : PDO::PARAM_INT;
          } elseif (is_null($value)) {
            $paramType = PDO::PARAM_NULL;
          }
          $stmt->bindValue($index + 1, $value, $paramType);
        }
        // Выполняем запрос без параметров, так как они уже привязаны
        $result = $stmt->execute();
      } else {
        // Для SQLite используем стандартный метод
        $result = $stmt->execute($params);
      }

      // Проверяем тип запроса (SELECT/SHOW/EXPLAIN)
      $queryType = strtoupper(strtok(ltrim($sql), " \t\n\r"));
      if (in_array($queryType, ['SELECT', 'SHOW', 'EXPLAIN', 'DESCRIBE'])) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data !== false ? $data : [];
      }

      // Для UPDATE/INSERT/DELETE запросов проверяем количество затронутых строк
      if (in_array($queryType, ['UPDATE', 'INSERT', 'DELETE'])) {
        $rowCount = $stmt->rowCount();
        if ($rowCount === 0 && $queryType === 'UPDATE') {
          $errorMsg = "WARNING: UPDATE запрос выполнен, но не обновил ни одной строки (0 rows affected) | SQL: $sql | Параметры: " . json_encode($params, JSON_UNESCAPED_UNICODE);
          error_log($errorMsg);
          return false;
        }
        // Для INSERT возвращаем true, если execute был успешным (даже если rowCount === 0 для некоторых СУБД)
        if ($queryType === 'INSERT') {
          return $result === true ? true : false;
        }
        error_log("DEBUG: Запрос $queryType выполнен успешно, затронуто строк: $rowCount");
      }

      // Для остальных запросов возвращаем true/false об успехе execute
      return $result;
    } catch (\PDOException $e) {
      $errorMsg = "Ошибка выполнения запроса: " . $e->getMessage() . " | SQL: $sql | Параметры: " . json_encode($params, JSON_UNESCAPED_UNICODE) . " | Code: " . $e->getCode();
      error_log($errorMsg);
      return false;
    } catch (InvalidArgumentException $e) {
      $errorMsg = "Ошибка параметров запроса: " . $e->getMessage() . " | SQL: $sql | Параметры: " . json_encode($params, JSON_UNESCAPED_UNICODE);
      error_log($errorMsg);
      return false;
    }
  }

  /**
   * Создает (или открывает) файл базы данных SQLite в указанной папке (по умолчанию /app/Storage/)
   *
   * @param string $db_name Имя файла базы данных (например, 'mydb.sqlite')
   *
   * @return \PDO Объект PDO для работы с SQLite
   *
   * @example Database::createSQlite('mydb.sqlite');
   * @description Создает или открывает файл базы данных SQLite с указанным именем в папке хранения. Если файл не существует, он будет создан и инициализирован схемой из schema.sql (если она есть).
   */
  public static function createSQlite($db_name)
  {
    try {
      if (!is_dir(self::$folder_sqlite)) {//не найден
        mkdir(self::$folder_sqlite, 0777, true);//создаем
      }
      $db_path = rtrim(self::$folder_sqlite, '/\\') . '/' . $db_name;
      $isDATABASE = !file_exists($db_path);
      $pdo = new PDO('sqlite:' . $db_path);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if ($isDATABASE) {
        $schema_file = self::$schema_name;//schema
        if (file_exists($schema_file)) {
          $schema = file_get_contents($schema_file);
          if ($schema !== false && trim($schema) !== '') {
            $statements = preg_split('/;\s*[\r\n]+/', $schema);
            foreach ($statements as $statement) {
              $statement = trim($statement);
              if ($statement !== '') {
                try {
                  $pdo->exec($statement);
                } catch (\PDOException $e) {
                  error_log("Ошибка выполнения SQL для SQLite: " . $e->getMessage() . " | SQL: " . $statement);
                }
              }
            }
          }
        } else {
          error_log("Файл схемы SQLite не найден: " . $schema_file);
        }
      }

      return $pdo;
    } catch (\PDOException $e) {
      error_log("Ошибка создания SQLite: " . $e->getMessage());
      throw new RuntimeException('Ошибка создания SQLite базы данных: ' . $e->getMessage());
    } catch (RuntimeException $e) {
      error_log($e->getMessage());
      throw $e;
    }
  }

  /**
   * Обновляет базу данных SQLite по текущей схеме из файла схемы.
   *
   * Этот метод выполняет все SQL-выражения из файла схемы (обычно schema.sql) для обновления структуры базы данных SQLite.
   * Не поддерживает сложные миграции — просто применяет все SQL-операторы из схемы к существующей базе данных.
   * Используйте для синхронизации структуры базы данных с актуальной схемой.
   *
   * @param string $db_name Имя файла базы данных (например, 'mydb.sqlite')
   *
   * @return void
   *
   * @example Database::updateSqlite('mydb.sqlite');
   * @description Выполняет все SQL-выражения из файла схемы для обновления структуры указанной базы данных SQLite / Executes all SQL statements from schema file to update SQLite database structure
   */
  public static function updateSqlite($db_name)
  {
    $db_path = rtrim(self::$folder_sqlite, '/\\') . '/' . $db_name;
    if (!file_exists($db_path)) {
      throw new RuntimeException("База данных не найдена: $db_path");
    }
    $schema_file = self::$schema_name;
    if (!file_exists($schema_file)) {
      throw new RuntimeException("Файл схемы не найден: $schema_file");
    }
    $schema = file_get_contents($schema_file);
    if ($schema === false || trim($schema) === '') {
      throw new RuntimeException("Схема пуста или не может быть прочитана: $schema_file");
    }
    $pdo = new PDO('sqlite:' . $db_path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statements = preg_split('/;\s*[\r\n]+/', $schema);
    foreach ($statements as $statement) {
      $statement = trim($statement);
      if ($statement !== '') {
        try {
          $pdo->exec($statement);
        } catch (\PDOException $e) {
          error_log("Ошибка выполнения SQL при обновлении схемы: " . $e->getMessage() . " | SQL: " . $statement);
        }
      }
    }
  }

}
