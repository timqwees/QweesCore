<script src="https://cdn.tailwindcss.com"></script>
<!-- icon favicon -->

<!-- Font Awesome CDN for icon support -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  ::-webkit-scrollbar {
    width: 0;
  }

  body {
    background-image:
      linear-gradient(rgba(255, 255, 255, .07) 2px, transparent 2px),
      linear-gradient(90deg, rgba(255, 255, 255, .07) 2px, transparent 2px),
      linear-gradient(rgba(255, 255, 255, .06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, .06) 1px, transparent 1px);
    background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px;
    background-position: -2px -2px, -2px -2px, -1px -1px, -1px -1px;
    font-family: "Unica One", sans-serif;
    color: white;
    font-weight: 300;
    letter-spacing: .5px;
    line-height: 1;
  }

  .glassmorphism {
    background: rgba(26, 26, 26, 0.8);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .light-beam {
    background: linear-gradient(180deg, rgba(0, 255, 136, 0.3) 0%, rgba(0, 212, 255, 0.1) 100%);
    animation: beam 3s ease-in-out infinite;
  }

  @keyframes beam {

    0%,
    100% {
      opacity: 0.3;
    }

    50% {
      opacity: 0.6;
    }
  }

  .hexagon {
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  }

  .glow {
    box-shadow: 0 0 30px rgba(0, 255, 136, 0.6);
  }

  ::selection {
    color: #00ff88;
    background: rgba(0, 255, 136, 0.15);
  }

  .selection {
    color: #00ff88;
    background: rgba(0, 255, 136, 0.15);
  }

  .view,
  .viewLeft,
  .viewRight {
    transition: all 1.5s cubic-bezier(0.4, 0, 0.2, 1);
  }
</style>

<div id="smooth-wrapper">
  <div id="smooth-content">
    <!-- Main Container -->
    <div class="min-h-screen p-8">

      <!-- Фоновое изображение -->
      <div class="absolute inset-0 -z-10 rounded-lg">
        <img src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/main/2.gif" alt="фон"
          class="w-full h-full object-cover opacity-30">
      </div>

      <!-- Header -->
      <header class="p-6 mb-12 mx-auto">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <a class="flex items-center space-x-3" href="/">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center">
              <img src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/favicon.svg"
                alt="logo">
            </div>
            <span class="text-white text-2xl font-bold">Qwees_CorePro</span>
          </a>

          <!-- Navigation -->
          <nav
            class="flex items-center space-x-2 rounded-full px-4 py-2 bg-[rgba(19,19,19,0.1)] backdrop-blur-lg shadow-[0_8px_32px_0_rgba(0,255,136,0.2)_inset]">
            <a href="#"
              class="px-4 py-2 bg-[rgba(19,19,19,0.18)] backdrop-blur-lg shadow-[0_0px_25px_0_rgba(0,255,136,0.25)_inset] text-white rounded-full text-sm">Главная</a>
            <a href="/docs" class="px-4 py-2 text-gray-400 hover:text-white transition-colors text-sm">Документация
            </a>
            <a href="#" class="px-4 py-2 text-gray-400 hover:text-white transition-colors text-sm">Примеры</a>
            <a href="#" class="px-4 py-2 text-gray-400 hover:text-white transition-colors text-sm">Сообщество</a>
            <a href="#" class="px-4 py-2 text-gray-400 hover:text-white transition-colors text-sm">Поддержка</a>
            <a href="#" class="px-4 py-2 text-gray-400 hover:text-white transition-colors text-sm">Актуальная
              версия</a>
          </nav>

          <!-- Action Buttons -->
          <div class="flex items-center space-x-4">
            <button class="text-white hover:text-super-green transition-colors">Регистрация</button>
            <button
              class="bg-[rgba(19,19,19,0.18)] backdrop-blur-lg shadow-[0_0px_25px_0_rgba(255,255,255,0.25)_inset] text-white px-4 py-2 rounded-full hover:bg-super-gray transition-colors">Войти</button>
          </div>
        </div>
      </header>

      <!-- Hero Section -->
      <div class="text-center mb-16 max-w-6xl mx-auto">
        <!-- Tag Line -->
        <div class="flex items-center justify-center space-x-4 mb-8">
          <div class="bg-super-gray text-white px-4 py-2 rounded-full text-sm flex items-center space-x-2">
            <span>Версия 1.1.0 — ещё больше возможностей</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
              </path>
            </svg>
          </div>
          <div class="bg-super-green text-super-dark w-8 h-8 rounded-full flex items-center justify-center">
            <span class="text-lg font-bold">+</span>
          </div>
          <span class="text-white text-sm">Новое</span>
        </div>

        <!-- Main Headline -->
        <h1 class="text-5xl font-bold text-white leading-tight mb-6">
          Мощный и современный PHP-фреймворк для быстрого старта <span
            class="mix-blend-color-dodge px-4 rounded-2xl bg-[#dbff7c] text-[#0a0a0a]">QweesCorePro</span>
        </h1>

        <!-- Sub-headline -->
        <p class="text-gray-300 text-xl mb-8 max-w-4xl mx-auto">
          Легкий, но функциональный фреймворк для создания современных веб-приложений с использованием
          лучших
          практик MVC, безопасной работы с базой данных и гибкой маршрутизации.
        </p>

        <!-- Input and Button -->
        <!-- <div class="glassmorphism rounded-2xl p-4 flex items-center justify-between max-w-2xl mx-auto">
        <div class="flex items-center space-x-3 text-gray-300 w-full">

          <svg class="w-10 h-10 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>

          <div class="relative w-full max-w-2xl">
            <input type="text"
              class="px-4 py-4 border-0 bg-transparent placeholder-gray-400 w-full focus:outline-none"
              style="background: transparent;" placeholder="Написать обращение команде QweesCorePro">
          </div>

          <button
            class="bg-gradient-to-r from-super-green to-super-blue text-super-dark px-5 py-3 rounded-2xl font-extrabold shadow-lg hover:from-super-blue hover:to-super-green hover:text-white transition-all duration-200 flex items-center gap-2 group"
            type="submit" title="Отправить сообщение команде">
            <i class="fa fas fas fa-terminal"></i>
            <span>Отправить</span>
          </button>

        </div>
      </div> -->

        <!-- Three Cards Section -->
        <section
          class="glassmorphism rounded-3xl p-8 max-w-7xl mx-auto mx-auto mb-16 grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Info Block 1: MVC и автозагрузка -->
          <div class="glassmorphism rounded-2xl p-6 flex flex-col items-start text-left">
            <div class="w-12 h-12 bg-super-green rounded-full flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-super-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-white font-semibold text-lg mb-2">MVC-архитектура</h3>
            <p class="text-gray-300 text-sm mb-4">Поддержка MVC-архитектуры и автозагрузки классов.
              Организуйте
              код правильно с самого начала разработки.</p>
            <div class="flex items-center gap-2 mt-auto">
              <button class="bg-super-dark text-white px-4 py-2 rounded-lg">Документация</button>
              <div class="ml-2 flex items-center">
                <span class="text-xs text-gray-400 mr-1">READY</span>
                <div class="w-8 h-4 bg-super-green rounded-full flex items-center p-1">
                  <div class="w-3 h-3 bg-white rounded-full"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Info Block 2: Безопасность БД -->
          <div class="glassmorphism rounded-2xl p-6 flex flex-col items-start text-left gap-4">
            <div class="flex items-center justify-between w-full">
              <span class="text-white font-semibold">Безопасность БД</span>
              <div class="flex gap-1">
                <span class="inline-block w-4 h-4 bg-super-green rounded-full" title="PDO"></span>
                <span class="inline-block w-4 h-4 bg-super-blue rounded-full" title="Prepared Statements"></span>
                <span class="inline-block w-4 h-4 bg-yellow-400 rounded-full" title="SQL Injection Protection"></span>
              </div>
            </div>
            <div class="bg-super-dark rounded-xl p-4 w-full flex flex-col items-start">
              <div class="flex items-center justify-between w-full mb-2">
                <span class="text-white font-semibold">Защита</span>
                <span class="text-xs text-gray-400">PDO + Prepared</span>
              </div>
              <div class="text-4xl font-bold text-white mb-1">100%</div>
              <div class="flex items-center gap-2 w-full">
                <span class="text-xs text-gray-400">SQL-инъекции</span>
                <button class="ml-auto bg-super-light-gray text-white px-2 py-1 rounded">Защищено</button>
              </div>
            </div>
            <div class="bg-super-dark rounded-xl p-3 w-full flex items-center justify-between mt-2">
              <span class="text-white text-sm">Методы защиты</span>
              <div class="flex gap-2">
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">PDO</span>
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">Валидация</span>
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">Сессии</span>
              </div>
            </div>
          </div>
          <!-- Info Block 3: Маршрутизация -->
          <div class="glassmorphism rounded-2xl p-6 flex flex-col items-start text-left">
            <div class="text-white text-5xl font-extrabold mb-4">⚡</div>
            <div class="text-white font-semibold mb-2">Гибкая маршрутизация</div>
            <p class="text-gray-300 text-sm mb-4">Система маршрутизации с поддержкой контроллеров и
              callback-функций. Простая настройка и расширяемость под ваши задачи.</p>
            <div class="mt-auto">
              <div class="flex items-center text-xs text-gray-400 mb-1">
                <span class="w-2 h-2 bg-super-green rounded-full mr-2"></span>
                Контроллеры готовы
              </div>
              <div class="flex items-center text-xs text-gray-400">
                <span class="w-2 h-2 bg-super-blue rounded-full mr-2"></span>
                Callback-функции
              </div>
            </div>
          </div>
          <!-- Background Dots -->
          <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="w-1 h-1 bg-white rounded-full absolute top-4 left-4"></div>
            <div class="w-1 h-1 bg-white rounded-full absolute top-8 right-6"></div>
            <div class="w-1 h-1 bg-white rounded-full absolute bottom-6 left-8"></div>
            <div class="w-1 h-1 bg-white rounded-full absolute bottom-4 right-4"></div>
            <div class="w-1 h-1 bg-white rounded-full absolute top-1/2 left-1/2"></div>
          </div>
        </section>
      </div>
    </div>

    <main>

      <section class="mx-auto relative m-4 p-4 pt-0 mt-0 mb-10">

        <!-- Фоновое изображение -->
        <div class="absolute inset-0 -z-10 view">
          <!-- <img src="https://i.pinimg.com/originals/39/b1/6b/39b16b66744a89df3e51cebfbfca8a3c.gif" alt="фон"
            class="w-full h-full object-cover opacity-30 rotate-180"> -->
        </div>

        <div class="mx-auto relative view">
          <h2 class="z-10 text-4xl mx-auto text-white text-center uppercase">Что нового?</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 max-w-7xl mx-auto mt-16 relative">

          <!-- Card 1: Нововведения в роутере -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left row-span-1 lg:row-span-2
          col-span-1 lg:col-span-2 rounded-tl-2xl view">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-rocket text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Нововведения в роутере</span>
            </div>
            <h3 class="text-white font-semibold text-lg mb-4">Улучшенная система маршрутизации</h3>
            <p class="text-gray-300 text-sm mb-6">Теперь вы можете вызывать функции с параметрами прямо
              в
              роутах! Поддержка динамических параметров и автоматическая подстановка значений.</p>

            <!-- Код примеров -->
            <div class="w-full space-y-4 mt-auto viewLeft">
              <div class="bg-[#282a36] rounded-lg p-4 text-sm font-mono relative border border-[#44475a]">
                <div class="flex gap-1 mb-2">
                  <span class="w-2 h-2 bg-[#ff5555] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#f1fa8c] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#50fa7b] rounded-full"></span>
                </div>
                <div class="text-[#6272a4] mb-2">// <span class="text-[#44475]">Пример простого
                    контроллера</span></div>
                <!-- <div class="selection">// Пример простого
                  контроллера</div> -->
                <pre class="text-white font-mono text-sm leading-6 whitespace-pre">
<span class="text-[#8be9fd]">Routes</span><span
                    class="text-[#f8f8f2]">::</span><span class="text-[#50fa7b]">get</span><span
                    class="text-[#f8f8f2]">(</span><span class="text-[#f1fa8c]">'/'</span><span
                    class="text-[#f8f8f2]">, </span><span
                    class="text-[#ff79c6]">'on_Main'</span><span class="text-[#f8f8f2]">);</span></pre>
              </div>
              <div class="bg-[#282a36] rounded-lg p-4 text-sm font-mono relative border border-[#44475a]">
                <div class="flex gap-1 mb-2">
                  <span class="w-2 h-2 bg-[#ff5555] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#f1fa8c] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#50fa7b] rounded-full"></span>
                </div>
                <div class="text-[#6272a4] mb-2">// <span class="text-[#44475]">Пример
                    callback-функции</span></div>
                <!-- <div class="selection">// Пример
                  callback-функции</div> -->
                <pre class="text-white font-mono text-sm leading-6 whitespace-pre">
<span class="text-[#8be9fd]">Routes</span><span
                    class="text-[#f8f8f2]">::</span><span class="text-[#50fa7b]">get</span><span
                    class="text-[#f8f8f2]">(</span><span class="text-[#f1fa8c]">'/'</span><span
                    class="text-[#f8f8f2]">, </span><span
                    class="text-[#bd93f9]">function</span><span class="text-[#f8f8f2]">(){</span> <span class="text-[#8be9fd]">echo</span><span class="text-[#f8f8f2]"></span><span class="text-[#f1fa8c]">'hello'</span><span class="text-[#f8f8f2]">; });</span></pre>
              </div>
              <div class="bg-[#282a36] rounded-lg p-4 text-sm font-mono relative border border-[#44475a]">
                <div class="flex gap-1 mb-2">
                  <span class="w-2 h-2 bg-[#ff5555] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#f1fa8c] rounded-full"></span>
                  <span class="w-2 h-2 bg-[#50fa7b] rounded-full"></span>
                </div>
                <div class="text-[#6272a4] mb-2">// <span class="text-[#44475]">Пример контроллера
                    в
                    виде массива</span></div>
                <!-- <div class="selection">// Пример контроллера в виде массива</div> -->
                <pre class="text-white font-mono text-sm leading-6 whitespace-pre">
<span class="text-[#8be9fd]">Routes</span><span
                    class="text-[#f8f8f2]">::</span><span class="text-[#50fa7b]">get</span><span
                    class="text-[#f8f8f2]">(</span><span class="text-[#f1fa8c]">'/'</span><span
                    class="text-[#f8f8f2]">, [</span><span
                    class="text-[#ff79c6]">App\Models\Router\Routes::class</span><span
                    class="text-[#f8f8f2]">, </span><span
                    class="text-[#ff79c6]">'on_Main'</span><span class="text-[#f8f8f2]">]);</span></pre>
              </div>
            </div>
          </div>


          <!-- Card 2: Безопасность и производительность -->
          <div
            class="glassmorphism p-6 flex flex-col items-start text-left min-h-[260px] col-span-1 relative overflow-hidden viewLeft">
            <div class="flex flex-col w-full">
              <div class="flex items-center mb-3">
                <span class="bg-super-dark p-2 rounded-lg mr-2">
                  <i class="fa-solid fa-shield-halved text-super-green text-xl"></i>
                </span>
                <span class="text-gray-400 text-sm font-medium">Безопасность</span>
              </div>
              <h3 class="text-white font-semibold text-lg mb-2">Ваши данные под защитой</h3>
              <p class="text-gray-300 text-xs mb-4">Современные подходы к безопасности: защита от
                SQL-инъекций, безопасная работа с сессиями, валидация данных.</p>
              <div class="mt-auto space-y-2">
                <div class="flex items-center text-xs text-gray-400">
                  <span class="w-2 h-2 bg-super-green rounded-full mr-2"></span>
                  PDO и подготовленные запросы
                </div>
                <div class="flex items-center text-xs text-gray-400">
                  <span class="w-2 h-2 bg-super-blue rounded-full mr-2"></span>
                  Система ролей и прав
                </div>
                <div class="flex items-center text-xs text-gray-400">
                  <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span>
                  Обработка ошибок и 404
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3: Интеграции -->
          <div
            class="glassmorphism rounded-tr-2xl p-6 flex flex-col items-start text-left min-h-[260px] col-span-1 relative overflow-hidden view">
            <div class="flex flex-col w-full">
              <div class="flex items-center mb-3">
                <span class="bg-super-dark p-2 rounded-lg mr-2">
                  <i class="fa-solid fa-puzzle-piece text-super-blue text-xl"></i>
                </span>
                <span class="text-gray-400 text-sm font-medium">Интеграции</span>
              </div>
              <h3 class="text-white font-semibold text-lg mb-2">Работает с вашими инструментами</h3>
              <p class="text-gray-300 text-xs mb-4">Легкая интеграция с внешними сервисами: PHPMailer,
                API
                и
                популярными платформами.</p>
              <div class="flex gap-3 mt-4 flex-wrap">
                <span class="bg-white p-2 rounded-lg text-xs font-semibold text-gray-800" title="Notion">Notion</span>
                <span class="bg-white p-2 rounded-lg text-xs font-semibold text-gray-800"
                  title="Google Analytics">Analytics</span>
                <span class="bg-white p-2 rounded-lg text-xs font-semibold text-gray-800" title="Slack">Slack</span>
                <span class="bg-white p-2 rounded-lg text-xs font-semibold text-gray-800" title="Figma">Figma</span>
              </div>
            </div>
          </div>

          <!-- Card 4: Поддержка и сообщество -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left viewRight">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-users text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Сообщество</span>
            </div>
            <h3 class="text-white font-semibold text-lg mb-2">Поддержка и сообщество</h3>
            <p class="text-gray-300 text-xs mb-4">Открытое сообщество, быстрая поддержка и регулярные
              обновления — всё для вашего удобства и развития проектов.</p>
            <!-- <div class="mt-auto">
            <div class="text-white text-sm mb-2">Присоединяйтесь к нам! 👋</div>
            <button class="bg-gradient-to-r from-super-green to-super-blue text-super-dark px-4 py-2 rounded-lg font-semibold">
              Сообщество
            </button>
          </div> -->
          </div>

          <!-- Card 5: Декоративная карточка с GIF -->
          <div
            class="glassmorphism p-6 flex flex-col items-start text-left min-h-[260px] row-span-1 lg:row-span-2 relative overflow-hidden rounded-br-2xl viewLeft">
            <!-- Фоновое изображение -->
            <img src="https://i.pinimg.com/1200x/2e/91/d7/2e91d7b9e7b54ca8f18f427c17107b2f.jpg" alt="фон"
              class="w-full h-full object-cover absolute inset-0 -z-10">

            <!-- Контент поверх GIF -->
            <div class="relative z-10 mt-auto">
              <div class="bg-super-dark/80 backdrop-blur-sm rounded-xl p-4">
                <div class="flex items-center mb-2">
                  <span class="bg-super-green p-1 rounded mr-2">
                    <i class="fa-solid fa-rocket text-super-dark text-sm"></i>
                  </span>
                  <span class="text-white font-semibold text-sm">Qwees_CorePro</span>
                </div>
                <p class="text-gray-300 text-xs">Мощный и современный PHP-фреймворк для быстрого
                  старта
                  веб-приложений</p>
              </div>
            </div>
          </div>

          <!-- Card 6: Система сессий -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left rounded-bl-2xl viewLeft">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-key text-super-blue text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Аутентификация</span>
            </div>
            <h3 class="text-white font-semibold text-lg mb-2">Встроенная система сессий</h3>
            <p class="text-gray-300 text-xs mb-4">Система сессий и аутентификации пользователей с
              управлением
              правами доступа и безопасной авторизацией.</p>
            <div class="flex items-center bg-super-dark rounded-xl p-3 mt-2 w-full">
              <div
                class="w-8 h-8 bg-gradient-to-br from-super-green to-super-blue rounded-full mr-3 flex items-center justify-center">
                <i class="fa-solid fa-user-check text-super-dark text-sm"></i>
              </div>
              <span class="text-white text-sm">Пользователь авторизован <span class="ml-1">✓</span></span>
            </div>
          </div>

          <!-- Card 7: Аналитика и мониторинг -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left min-h-[260px] viewLeft">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-chart-line text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Аналитика</span>
            </div>
            <h3 class="text-white font-semibold text-lg mb-2">Встроенные инструменты для анализа</h3>
            <p class="text-gray-300 text-xs mb-4">Получайте данные о производительности и активности
              пользователей прямо из коробки. Интеграция со сторонними сервисами аналитики.</p>
            <div class="bg-super-dark rounded-xl p-4 w-full mt-2">
              <div class="flex items-center justify-between mb-1">
                <span class="text-white font-bold text-xl">$68,900</span>
                <span class="text-xs text-super-green bg-super-dark px-2 py-1 rounded">+25%</span>
              </div>
              <div class="text-xs text-gray-400 mb-2">Рост активности пользователей</div>
              <svg viewBox="0 0 120 40" height="40" width="120">
                <polyline fill="none" stroke="#00FF88" stroke-width="3"
                  points="0,35 20,30 40,32 60,18 80,10 100,15 120,5" />
                <circle cx="120" cy="5" r="2" fill="#00FF88" />
              </svg>
            </div>
          </div>

          <!-- Card 8: Документация -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left min-h-[260px] viewRight">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-book text-super-blue text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Документация</span>
            </div>
            <h3 class="text-white font-semibold text-lg mb-2">Полная документация и примеры</h3>
            <p class="text-gray-300 text-xs mb-4">Подробная документация, примеры кода и руководства по
              быстрому
              старту. Всё необходимое для начала работы с фреймворком.</p>
            <div class="bg-super-dark rounded-xl p-4 w-full mt-2">
              <div class="flex items-center justify-between mb-1">
                <span class="text-white font-bold text-xl">95%</span>
                <span class="text-xs text-super-blue bg-super-dark px-2 py-1 rounded">Покрытие</span>
              </div>
              <div class="text-xs text-gray-400 mb-2">Документированных функций</div>
              <div class="flex gap-2 mt-3">
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">Гайды</span>
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">API</span>
                <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">Примеры</span>
              </div>
            </div>
          </div>

        </div>
      </section>

    </main>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/main/assets/view.js"></script>

<script>
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  // create the smooth scroller FIRST!
  let smoother = ScrollSmoother.create({
    smooth: 1.5,
    effects: true,
    normalizeScroll: true
  });
</script>
