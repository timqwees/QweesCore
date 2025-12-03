<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script defer>
  async function loadMainJS(url) {
    try {
      const res = await fetch(url);
      if (!res.ok) throw new Error('404 или нет доступа');
      const code = await res.text();

      const script = document.createElement('script');
      script.textContent = code;
      document.head.appendChild(script);
      console.log('QweesCore - Добро пожаловать!');
    } catch (e) {
      console.error('❌ Не удалось загрузить js страницы:', e);
    }
  }

  tailwind.config = {
    theme: {
      extend: {
        colors: {
          'super-dark': '#0A0A0A',
          'super-gray': '#1A1A1A',
          'super-light-gray': '#2A2A2A',
          'super-green': '#00FF88',
          'super-blue': '#00D4FF'
        }
      }
    }
  }

  loadMainJS('https://raw.githubusercontent.com/timqwees/QweesCore/view/main/assets/js/main.js?' + Date.now());
</script>
<!-- styles -->
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
    background-color: #0A0A0A;
    font-family: system-ui, "Unica One", sans-serif;
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
<!-- page code -->
<div id="smooth-wrapper">
  <div id="smooth-content">
    <!-- Main Container -->
    <div class="min-h-screen p-8">

      <!-- Фоновое изображение -->
      <div class="absolute inset-0 -z-10 rounded-lg">
        <img src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/main/assets/img/2.gif" alt="фон"
          class="w-full h-full object-cover opacity-30">
      </div>

      <!-- Header -->
      <header class="p-6 mb-12 mx-auto">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <a class="flex items-center space-x-3 relative w-[120px]" href="/">
            <img src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/favicon.svg"
              alt="logo" class="h-10 w-10">
            <!-- <span class="text-white text-2xl font-bold">QweesCore</span> -->
            <img src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/qwees_name.png"
              alt="qwees name">
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
            <span>Версия 2.0.0— ещё больше возможностей</span>
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
            class="mix-blend-color-dodge px-4 rounded-2xl bg-[#dbff7c] text-[#0a0a0a]">QweesCore</span>
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

      <section class="mx-auto relative mb-20">

        <!-- Фоновое изображение -->
        <!-- <div class="absolute inset-0 -z-10 view">
          <img src="https://i.pinimg.com/originals/39/b1/6b/39b16b66744a89df3e51cebfbfca8a3c.gif" alt="фон"
            class="w-full h-full object-cover opacity-50 rotate-180">
        </div> -->

        <div class="mx-auto relative view w-full flex justify-center items-center">
          <h2 class="z-10 text-4xl mx-auto text-white text-start uppercase flex justify-center"><img
              src="/public/pages/main/qwees_name.png" alt="qwees name" class="max-w-[75%] mx-2 "> V2.0.0
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 max-w-7xl mx-auto mt-16 relative">

          <!-- QweesCore 2.0: Основные возможности -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left row-span-1 lg:row-span-2
col-span-1 lg:col-span-2 rounded-tl-2xl view">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-rocket text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">QweesCore 2.0</span>
            </div>

            <h3 class="text-white font-semibold text-lg mb-4">
              Лёгкое ядро, router с параметрами, встроенные инструменты
            </h3>

            <ul class="text-gray-300 text-sm mb-4 list-disc list-inside space-y-1">

              <li><b>PSR-4 автозагрузка</b> + Composer-совместимость</li>

              <li><b>Маршрутизация с параметрами</b> — поддержка
                <span class="font-mono">{id}</span>,
                нескольких параметров и привязка к контроллерам
              </li>

              <li><b>Простая MVC-архитектура</b> — Controllers / Models / Views / Config</li>

              <li><b>Система ошибок</b> — обработка, кастомизация страниц, debug-режим</li>

              <li><b>Session/Auth</b> — авторизация, flash-сообщения, базовые роли</li>

              <li><b>Network-ядро</b> — отправка сообщений Message::, сетевые действия внутри проекта</li>

              <li><b>Поддержка БД</b> — SQLite / MySQL / PostgreSQL через Database конфиг</li>

              <li><b>Изоляция ядра</b> — директория <span class="font-mono">setting/</span></li>

              <li><b>Минимальные зависимости</b> — работает без сторонних библиотек</li>

              <li><b>Простая установка</b>:
                <span class="font-mono">npx qwees install &lt;app_name&gt;</span>
              </li>

            </ul>

            <div class="w-full mt-auto">
              <a href="#"
                class="bg-super-green hover:bg-transparent hover:text-white hover:border text-super-dark px-4 py-4 rounded-lg font-semibold transition duration-200 text-center block">
                Подробнее в документации
              </a>
            </div>
          </div>

          <!-- Session/Auth -->
          <div
            class="glassmorphism p-6 flex flex-col items-start text-left min-h-[210px] col-span-1 relative overflow-hidden viewLeft">
            <div class="flex flex-col w-full">
              <div class="flex items-center mb-3">
                <span class="bg-super-dark p-2 rounded-lg mr-2">
                  <i class="fa-solid fa-key text-super-blue text-xl"></i>
                </span>
                <span class="text-gray-400 text-sm font-medium">Session/Auth</span>
              </div>

              <h3 class="text-white font-semibold text-lg mb-2">Базовая система авторизации</h3>

              <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
                <li>Вход/Регистрация/Обновление/Загрузка фотографий/Выход пользователей</li>
                <li>Получения пользователя по (id, email, name)</li>
                <li>CSRF-токены и управлениями сессиями</li>
              </ul>
            </div>
          </div>

          <!-- Routing -->
          <div
            class="glassmorphism rounded-tr-2xl p-6 flex flex-col items-start text-left min-h-[210px] col-span-1 relative overflow-hidden view">
            <div class="flex flex-col w-full">
              <div class="flex items-center mb-3">
                <span class="bg-super-dark p-2 rounded-lg mr-2">
                  <i class="fa-solid fa-route text-super-green text-xl"></i>
                </span>
                <span class="text-gray-400 text-sm font-medium">Маршрутизация</span>
              </div>

              <h3 class="text-white font-semibold text-lg mb-2">Router с параметрами</h3>

              <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
                <li>
                  Маршрутыс методами <font class="text-black bg-white ">GET
                  </font> и <font class="text-black bg-white">
                    POST</font>
                </li>
                <li>Параметры маршрута: <font class="text-black bg-white"><span class="font-mono">/user/{id}</span>,
                  </font> и <font class="text-black bg-white"><span class="font-mono">/user={id}</span></font>
                </li>
                <li>Поддержка нескольких параметров: <font class="text-black bg-white">
                    <span class="font-mono">/user/{id}/{email}</span>
                  </font>
                </li>
                <li>
                  <font class="text-black bg-white">Работа с контроллерами и функциями</font>:
                  <span class="font-mono">[UserController::class, 'show']</span>
                  или <span class="font-mono">function($id) {...}</span>
                </li>
                <li>
                  <font class="text-black bg-white">Публичные функции</font> в
                  <span class="font-mono">setting/route/functions</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- CLI (нет встроенного CLI → пишем честно) -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left viewRight">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-terminal text-super-blue text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Установка</span>
            </div>

            <h3 class="text-white font-semibold text-lg mb-2">Qwees Installer</h3>

            <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
              <li>Установка проекта через npx</li>
              <li>Готовая структура проекта</li>
              <li>Composer-инициализация</li>
            </ul>

            <div class="flex gap-2 mt-2 relative w-full">
              <span id="copy-qwees-install"
                class="bg-super-light-gray text-white py-1 rounded text-xs font-mono w-full outline-none pr-8">
                <font class="text-black bg-white rounded-lg px-2 py-2">npx
                  qwees install</font>
                <font color='violet'>&lt;app_name&gt;</font>
              </span>

              <button
                onclick="navigator.clipboard.writeText('npx qwees install <name_project>'); this.innerText='✓'; setTimeout(()=>this.innerText='⧉',1500);"
                class="absolute right-2 top-1/2 -translate-y-1/2 text-white text-xs px-1 cursor-pointer bg-super-dark rounded"
                title="Copy command">⧉</button>
            </div>
          </div>

          <!-- Decor card оставляем -->
          <div
            class="glassmorphism p-6 flex flex-col items-start text-left min-h-[210px] row-span-1 lg:row-span-2 relative overflow-hidden rounded-br-2xl viewLeft">
            <img src="https://i.pinimg.com/1200x/2e/91/d7/2e91d7b9e7b54ca8f18f427c17107b2f.jpg" alt="фон"
              class="w-full h-full object-cover absolute inset-0 -z-10">

            <div class="relative z-10 mt-auto">
              <div class="bg-super-dark/80 backdrop-blur-sm rounded-xl p-4">
                <div class="flex items-center mb-2">
                  <span class="bg-super-green p-1 rounded mr-2">
                    <i class="fa-solid fa-rocket text-super-dark text-sm"></i>
                  </span>
                  <span class="text-white font-semibold text-sm">QweesCore 2.0</span>
                </div>
                <p class="text-gray-300 text-xs">Лёгкость, минимализм и расширяемость</p>
              </div>
            </div>
          </div>

          <!-- Docs -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left rounded-bl-2xl viewLeft">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-book text-super-blue text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Документация</span>
            </div>

            <h3 class="text-white font-semibold text-lg mb-2">README + Документация</h3>

            <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
              <li>Полное описание ядра</li>
              <li>Примеры роутов</li>
              <li>Примеры работы с Auth, Network и DB</li>
            </ul>

            <div class="flex gap-2 mt-3">
              <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">Гайды</span>
              <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">API</span>
              <span class="bg-super-light-gray text-white px-2 py-1 rounded text-xs">FAQ</span>
            </div>
          </div>

          <!-- Integrations -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left min-h-[210px] view">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-database text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">База данных</span>
            </div>

            <h3 class="text-white font-semibold text-lg mb-2">Настройки БД</h3>

            <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
              <li>SQLite</li>
              <li>MySQL</li>
              <li>PostgreSQL</li>
            </ul>

            <p class="text-gray-400 text-xs mt-2">
              Управление через <span class="font-mono">setting/schema/</span>
            </p>
          </div>

          <!-- Community -->
          <div class="glassmorphism p-6 flex flex-col items-start text-left min-h-[210px] viewRight">
            <div class="flex items-center mb-3">
              <span class="bg-super-dark p-2 rounded-lg mr-2">
                <i class="fa-solid fa-users text-super-green text-xl"></i>
              </span>
              <span class="text-gray-400 text-sm font-medium">Сообщество</span>
            </div>

            <h3 class="text-white font-semibold text-lg mb-2">Связь и поддержка</h3>

            <ul class="text-gray-300 text-xs mb-4 list-disc list-inside space-y-1">
              <li>GitHub Issues</li>
              <li>Telegram чат</li>
            </ul>

            <div class="flex gap-2 mt-3">
              <a href="https://github.com/timqwees" target="_blank"
                class="bg-white text-gray-800 px-3 py-1 rounded text-xs font-bold hover:bg-super-blue transition">GitHub</a>
              <a href="https://t.me/timqwees" target="_blank"
                class="bg-super-blue text-white px-3 py-1 rounded text-xs font-bold hover:bg-super-green transition">Telegram</a>
            </div>
          </div>



        </div>
      </section>

      <footer class="w-full py-8 text-center text-gray-400 text-sm">
        ©
        <?php echo date("Y"); ?> QweesCore. Создаем будущее вместе с вами.
      </footer>

    </main>

  </div>
</div>
