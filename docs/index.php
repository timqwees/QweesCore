<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Документация — QweesCore</title>
  <meta name="description" content="Документация по фреймворку QweesCore">
  <link rel="icon" type="image/png" href="/app/Models/Network/assets/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml"
    href="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/favicon.svg" />
  <link rel="shortcut icon" href="/app/Models/Network/assets/favicon.ico" />
  <title>QweesCore — Добро пожаловать</title>
  <meta name="description" content="Узнайте о QweesCore и как начать работу">
  <meta name="application-name" content="QweesCore">
  <meta name="generator" content="Mintlify">
  <meta name="apple-mobile-web-app-title" content="QweesCore">
  <meta name="msapplication-TileColor" content="#0C0C15">
  <meta name="og:site_name" content="QweesCore">
  <meta name="og:locale" content="ru_RU">
  <meta name="og:logo" content="/images/logo/app-logo.svg">
  <meta name="article:publisher" content="Anysphere Inc.">
  <meta name="twitter:url" content="/">
  <link rel="alternate" type="application/xml" href="/sitemap.xml">
  <meta property="og:title" content="QweesCore — Добро пожаловать">
  <meta property="og:description" content="Узнайте, как начать работу с QweesCore">
  <meta property="og:image"
    content="https://mintlify.s3.us-west-1.amazonaws.com/cursor/images/og/welcome.png?v=1751378843099">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="QweesCore – Welcome">
  <meta name="twitter:description" content="Learn about QweesCore and how to get started">
  <meta name="twitter:image"
    content="https://mintlify.s3.us-west-1.amazonaws.com/cursor/images/og/welcome.png?v=1751378843099">
  <meta name="twitter:image:width" content="1200">
  <meta name="twitter:image:height" content="630">
  <link rel="apple-touch-icon" href="/app/Models/Network/assets/apple-touch-icon.png" type="image/png" sizes="180x180">
  <link rel="icon" href="/app/Models/Network/assets/favicon-96x96.png" type="image/png" sizes="32x32">
  <link rel="shortcut icon" href="/app/Models/Network/assets/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.0/dist/katex.min.css" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      background: white;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #eeee;
      border-radius: 10px;
      border: none;
    }

    html {
      scrollbar-width: thin;
      scrollbar-color: #eeee white;
      scrollbar-gutter: stable;
    }

    html.dark {
      scrollbar-width: thin;
      scrollbar-color: #222 #222;
      scrollbar-gutter: stable;
    }

    html.dark ::-webkit-scrollbar-track {
      background: #222;
    }

    html.dark ::-webkit-scrollbar-thumb {
      background-color: #222;
    }

    html.dark ::-webkit-scrollbar-thumb:hover {
      background-color: #333;
    }

    a:has(> code) {
      border-bottom: none !important;
    }

    a>code {
      cursor: pointer;
      border-bottom: #0c0c15 1px solid !important;
    }

    a>code:hover {
      border-bottom: #0c0c15 2px solid !important;
    }

    #content-area>div.leading-6.mt-14>footer>div.sm\:flex>a {
      display: none;
    }

    * {
      /* Use system font stack as the default font */
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      /* Disable all font-feature-settings */
      font-feature-settings: normal;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: unset;
    }

    code * {
      font-family: monospace;
    }

    #header h1 {
      font-size: 2.25rem;
    }

    /* #content-container h2 {
    font-size: 2rem;
}

#content-container h3 {
    font-size: 1.75rem;
}

#content-container h4 {
    font-size: 1.25rem;
} */

    .full-width-table table {
      display: table;
    }

    .equal-table-columns table {
      width: 100%;
      table-layout: fixed;
    }

    .full-width-table table th {
      text-align: left;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .full-width-table table th:nth-child(3),
    .full-width-table table th:nth-child(4),
    .full-width-table table th:nth-child(5) {
      text-align: center;
    }

    @media (max-width: 640px) {

      .full-width-table table th:nth-child(2),
      .full-width-table table td:nth-child(2) {
        display: none;
      }
    }



    :not(.dark) .prose :where(a):not(:where([class~=not-prose], [class~=not-prose] *)):not(h1, h1 *, h2, h2 *, h3, h3 *, h4, h4 *, h5, h5 *, h6, h6 *) {
      border-bottom: #666666 1px solid;
    }


    /* img {
    border-radius: 0.5rem;
} */

    .max-pill {
      background-color: white;
      color: #0c0c15;
      padding: 1px 4px;
      border-radius: 8px;
      font-size: 0.6rem;
      font-weight: 500;
      display: inline-block;
      margin-left: 2px;
      margin-right: 4px;
      line-height: 1.2;
      border: 1px solid #0c0c15;
    }

    .dark .max-pill {
      background-color: #0c0c15;
      color: white;
      border-color: white;
    }

    .footnotes-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-auto-flow: row;
      margin-top: -14px;
      padding-bottom: 1rem;
      border-bottom: 1px solid rgb(var(--gray-800)/.5);
      line-height: 1.6;
    }

    @media (max-width: 640px) {
      .footnotes-container {
        grid-template-columns: 1fr;
      }
    }


    .footnotes-container p {
      font-size: 0.8rem;
      opacity: 0.9;
      margin: 0 0 0 0.35em;
    }

    .dark .footnotes-container {
      border-bottom-color: rgb(var(--gray-800)/.5);
    }

    .no-wrap {
      white-space: nowrap;
    }

    .flowchart {
      margin: 0 auto;
    }

    #mcp-servers {
      max-width: 52rem;
      margin: 0 auto;
    }

    #mcp-servers .card h2 {
      font-size: 1.25rem;
    }

    #mcp-servers .card>div {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    #mcp-servers .card>div>div:last-child {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    #mcp-servers .card>div>div>div {
      flex: 1;
      display: flex;
      gap: 1rem;
      align-items: flex-start;
      flex-direction: column;
      justify-content: space-between;
    }

    .mcp-install-examples img {
      margin: 0;
    }

    html.dark .server-icon svg:not(.no-invert) [fill="white"] {
      fill: black;
    }

    /* Sidebar keyboard shortcuts styling */
    .kbd-shortcut {
      margin-left: auto;
      padding: 2px 6px;
      font-size: 0.75rem;
      font-family: monospace;
      background-color: rgba(0, 0, 0, 0.08);
      border-radius: 4px;
      color: #666;
      white-space: nowrap;
      line-height: 1.2;
      font-weight: 500;
      opacity: 0.7;
      transition: opacity 0.2s ease;
    }

    /* Dark mode styling for shortcuts */
    html.dark .kbd-shortcut {
      background-color: rgba(255, 255, 255, 0.1);
      color: #aaa;
    }

    /* Hover effect */
    nav a:hover .kbd-shortcut {
      opacity: 1;
    }

    /* Ensure proper spacing in sidebar links */
    nav a[href] {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 8px;
    }

    /* Prevent text wrapping in sidebar links */
    nav a[href]>span:first-child {
      flex: 1;
      min-width: 0;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    p[data-component-part="step-title"] {
      margin-bottom: 0;
    }

    /* Step component content styling */
    div[data-component-part="step-content"] p {
      margin: 0;
    }

    /* Chat Assistant Sheet - Solid background for better visibility */
    #chat-assistant-sheet {
      background-color: white;
    }

    html.dark #chat-assistant-sheet {
      background-color: #0c0c15;
    }
  </style>
</head>

<body>
  <div class="relative antialiased text-gray-500 dark:text-gray-400">

    <!-- navbar top -->
    <header id="navbar"
      class="z-30 fixed lg:sticky top-0 w-full peer is-not-custom peer is-not-center peer is-wide peer is-not-frame">
      <div id="navbar-transition"
        class="absolute w-full h-full backdrop-blur flex-none transition-colors duration-500 border-b border-gray-500/5 dark:border-gray-300/[0.06] data-[is-opaque=true]:bg-background-light data-[is-opaque=true]:supports-backdrop-blur:bg-background-light/95 data-[is-opaque=true]:dark:bg-background-dark/75 data-[is-opaque=false]:supports-backdrop-blur:bg-background-light/60 data-[is-opaque=false]:dark:bg-transparent"
        data-is-opaque="false"></div>
      <div class="max-w-8xl mx-auto relative">
        <div class="relative">
          <div class="flex items-center lg:px-12 h-16 min-w-0 mx-4 lg:mx-0">
            <div
              class="h-full relative flex-1 flex items-center gap-x-4 min-w-0 border-b border-gray-500/5 dark:border-gray-300/[0.06]">
              <div class="flex-1 flex items-center gap-x-4">
                <a href="#">
                  <span class="sr-only">QweesCore — главная</span>
                  <img class="nav-logo w-auto h-7 relative object-contain block dark:hidden"
                    src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/favicon.svg"
                    alt="light logo">
                  <img class="nav-logo w-auto h-7 relative object-contain hidden dark:block"
                    src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/favicon.svg"
                    alt="dark logo">
                </a>

                <div class="hidden lg:flex items-center gap-x-2">
                  <button type="button" id="radix-_R_18ldbsnpfcutqbsnpfdb_" aria-haspopup="menu" aria-expanded="false"
                    data-state="closed"
                    class="group bg-background-light dark:bg-background-dark disabled:pointer-events-none [&amp;>span]:line-clamp-1 overflow-hidden group outline-none gap-1 group-hover:text-gray-950/70 dark:group-hover:text-white/70 text-xs text-gray-500 dark:text-gray-400 leading-5 font-semibold border border-gray-200 dark:border-gray-800 hover:border-gray-300 dark:hover:border-gray-700 rounded-full py-1 pl-2 pr-3 flex items-center whitespace-nowrap">
                    <div class="relative w-4 h-4 rounded-full"><img class="w-full h-full rounded-full" alt="US"
                        src="https://d3gk2c5xim1je2.cloudfront.net/flags/RU.svg">
                      <div
                        class="absolute top-0 left-0 w-full h-full border rounded-full bg-primary-light/10 border-black/10">
                      </div>
                    </div>
                    <p class="truncate pl-0.5 pr-0.5">Russian</p><svg xmlns="http://www.w3.org/2000/svg" width="12"
                      height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="relative hidden lg:flex items-center gap-2.5 flex-1"><button type="button"
                  class="flex pointer-events-auto rounded-xl w-full items-center text-sm leading-6 h-9 pl-3.5 pr-3 shadow-sm text-gray-500 dark:text-white/50 bg-background-light dark:bg-background-dark dark:brightness-[1.1] dark:ring-1 dark:hover:brightness-[1.25] ring-1 ring-gray-400/20 hover:ring-gray-600/25 dark:ring-gray-600/30 dark:hover:ring-gray-500/30 focus:outline-primary justify-between truncate gap-2 min-w-[43px]"
                  id="search-bar-entry">
                  <div class="flex items-center gap-2 min-w-[42px]"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-search min-w-4 flex-none text-gray-700 hover:text-gray-800 dark:text-gray-400 hover:dark:text-gray-200">
                      <circle cx="11" cy="11" r="8"></circle>
                      <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <div class="truncate min-w-0">Поиск...</div>
                  </div><span class="flex-none text-xs font-semibold">⌘<!-- -->K</span>
                </button><button type="button"
                  class="flex-none hidden lg:flex items-center justify-center gap-1.5 pl-3 pr-3.5 h-9 rounded-xl shadow-sm bg-background-light dark:bg-background-dark dark:brightness-[1.1] dark:ring-1 dark:hover:brightness-[1.25] ring-1 ring-gray-400/20 hover:ring-gray-600/25 dark:ring-gray-600/30 dark:hover:ring-gray-500/30 focus:outline-primary"
                  id="assistant-entry" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                    height="18" viewBox="0 0 18 18"
                    class="w-4 h-4 shrink-0 text-gray-700 hover:text-gray-800 dark:text-gray-400 hover:dark:text-gray-200">
                    <g fill="currentColor">
                      <path
                        d="M5.658,2.99l-1.263-.421-.421-1.263c-.137-.408-.812-.408-.949,0l-.421,1.263-1.263,.421c-.204,.068-.342,.259-.342,.474s.138,.406,.342,.474l1.263,.421,.421,1.263c.068,.204,.26,.342,.475,.342s.406-.138,.475-.342l.421-1.263,1.263-.421c.204-.068,.342-.259,.342-.474s-.138-.406-.342-.474Z"
                        fill="currentColor" data-stroke="none" stroke="none"></path>
                      <polygon
                        points="9.5 2.75 11.412 7.587 16.25 9.5 11.412 11.413 9.5 16.25 7.587 11.413 2.75 9.5 7.587 7.587 9.5 2.75"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"></polygon>
                    </g>
                  </svg><span class="text-sm text-gray-500 dark:text-white/50 whitespace-nowrap">Спросить
                    AI</span></button></div>

              <div class="flex-1 relative hidden lg:flex items-center ml-auto justify-end space-x-4">
                <a href="https://cursor.com/dashboard"
                  class="font-medium text-gray-700 dark:text-gray-200 hover:text-primary dark:hover:text-primary border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-2 transition-all shadow-sm bg-background-light dark:bg-background-dark hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary/40"
                  target="_blank">Войти</a>

                <div class="flex items-center">
                  <button class="group p-2 flex items-center justify-center" aria-label="Toggle dark mode">
                    <i class="fa fa-sun"></i>
                  </button>
                </div>

              </div>

              <div class="flex lg:hidden items-center gap-3"><button type="button"
                  class="text-gray-500 w-8 h-8 flex items-center justify-center hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300"
                  id="search-bar-entry-mobile"><span class="sr-only">Поиск...</span><svg
                    class="h-4 w-4 bg-gray-500 dark:bg-gray-400 hover:bg-gray-600 dark:hover:bg-gray-300"
                    style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/magnifying-glass.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/magnifying-glass.svg);mask-repeat:no-repeat;mask-position:center"></svg></button><button
                  id="assistant-entry-mobile"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18"
                    class="size-4.5 text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    <g fill="currentColor">
                      <path
                        d="M5.658,2.99l-1.263-.421-.421-1.263c-.137-.408-.812-.408-.949,0l-.421,1.263-1.263,.421c-.204,.068-.342,.259-.342,.474s.138,.406,.342,.474l1.263,.421,.421,1.263c.068,.204,.26,.342,.475,.342s.406-.138,.475-.342l.421-1.263,1.263-.421c.204-.068,.342-.259,.342-.474s-.138-.406-.342-.474Z"
                        fill="currentColor" data-stroke="none" stroke="none"></path>
                      <polygon
                        points="9.5 2.75 11.412 7.587 16.25 9.5 11.412 11.413 9.5 16.25 7.587 11.413 2.75 9.5 7.587 7.587 9.5 2.75"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                      </polygon>
                    </g>
                  </svg></button><button aria-label="More actions" class="h-7 w-5 flex items-center justify-end"><svg
                    class="h-4 w-4 bg-gray-500 dark:bg-gray-400 hover:bg-gray-600 dark:hover:bg-gray-300"
                    style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/ellipsis-vertical.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/ellipsis-vertical.svg);mask-repeat:no-repeat;mask-position:center"></svg></button>
              </div>
            </div>
          </div>

          <button type="button" class="flex items-center h-14 py-4 px-5 lg:hidden focus:outline-none w-full text-left">
            <div class="text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300">
              <span class="sr-only">Navigation</span><svg class="h-4" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                </path>
              </svg>
            </div>

            <div class="ml-4 flex text-sm leading-6 whitespace-nowrap min-w-0 space-x-3 overflow-hidden">
              <div class="flex items-center space-x-3 flex-shrink-0"><span>Начало работы</span><svg width="3"
                  height="24" viewBox="0 -9 3 24" class="h-5 rotate-0 overflow-visible fill-gray-400">
                  <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                  </path>
                </svg></div>
              <div class="font-semibold text-gray-900 truncate dark:text-gray-200 min-w-0 flex-1">
                Добро пожаловать</div>
            </div>
          </button>
        </div>
        <div class="hidden lg:flex px-12 h-12">
          <div class="nav-tabs h-full flex text-sm gap-x-6"><a
              class="link nav-tabs-item group relative h-full gap-2 flex items-center hover:text-gray-800 dark:hover:text-gray-300 text-gray-800 dark:text-gray-200 font-semibold"
              href="/en/welcome">Документация<div
                class="absolute bottom-0 h-[1.5px] w-full bg-primary dark:bg-primary-light">
              </div>
            </a><a
              class="link nav-tabs-item group relative h-full gap-2 flex items-center font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300"
              href="/en/cli/overview">CLI<div
                class="absolute bottom-0 h-[1.5px] w-full group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
              </div></a><a
              class="link nav-tabs-item group relative h-full gap-2 flex items-center font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300"
              href="/en/guides/working-with-context">Руководства<div
                class="absolute bottom-0 h-[1.5px] w-full group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
              </div></a><a
              class="link nav-tabs-item group relative h-full gap-2 flex items-center font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300"
              href="/en/tools/mcp">Инструменты<div
                class="absolute bottom-0 h-[1.5px] w-full group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
              </div></a></div>
        </div>
      </div>
    </header>

    <main
      class="peer-[.is-not-center]:max-w-8xl peer-[.is-center]:max-w-3xl peer-[.is-not-custom]:px-4 peer-[.is-not-custom]:mx-auto peer-[.is-not-custom]:lg:px-8 peer-[.is-wide]:[&amp;>div:last-child]:max-w-6xl peer-[.is-custom]:contents peer-[.is-custom]:[&amp;>div:first-child]:!hidden peer-[.is-custom]:[&amp;>div:first-child]:sm:!hidden peer-[.is-custom]:[&amp;>div:first-child]:md:!hidden peer-[.is-custom]:[&amp;>div:first-child]:lg:!hidden peer-[.is-custom]:[&amp;>div:first-child]:xl:!hidden peer-[.is-center]:[&amp;>div:first-child]:!hidden peer-[.is-center]:[&amp;>div:first-child]:sm:!hidden peer-[.is-center]:[&amp;>div:first-child]:md:!hidden peer-[.is-center]:[&amp;>div:first-child]:lg:!hidden peer-[.is-center]:[&amp;>div:first-child]:xl:!hidden">

      <!-- menu list -->
      <aside class="bg-white z-20 hidden lg:block fixed bottom-0 right-auto w-[18rem]"
        style="top: 7.1rem; height: auto;">
        <div class="absolute inset-0 z-10 stable-scrollbar-gutter overflow-auto pr-8 pb-10" id="sidebar-content">
          <div class="relative lg:text-sm lg:leading-6">
            <div class="sticky top-0 h-8 z-10 bg-gradient-to-b from-background-light dark:from-background-dark"></div>
            <div id="navigation-items">
              <!-- Основные ссылки -->
              <li class="list-none">
                <a href="https://t.me/timqwees"
                  class="link nav-anchor pl-4 group flex items-center lg:text-sm lg:leading-6 mb-5 sm:mb-4 font-medium text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                  <div
                    class="mr-4 rounded-md p-1 shadow-sm text-gray-400 dark:text-white/50 dark:bg-background-dark group-hover:brightness-100 ring-1 ring-gray-950/5 dark:ring-gray-700/40">
                    <svg class="h-4 w-4 bg-gray-400 dark:bg-gray-500"
                      style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/duotone/headset.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/duotone/headset.svg);mask-repeat:no-repeat;mask-position:center"></svg>
                  </div>Поддержка
                </a>
              </li>

              <!-- Раздел: Введение -->
              <div class="mt-6 lg:mt-8">
                <div
                  class="sidebar-group-header flex items-center gap-2.5 pl-4 mb-3.5 font-semibold text-gray-900 dark:text-gray-200">
                  <h5>Введение</h5>
                </div>

                <ul>
                  <li data-toggle-section="main" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Добро пожаловать
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="other" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Установка
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Быстрый старт
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Базовая настройка
                      </span>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Раздел: Руководство -->
              <div class="mt-6 lg:mt-8">
                <div
                  class="sidebar-group-header flex items-center gap-2.5 pl-4 mb-3.5 font-semibold text-gray-900 dark:text-gray-200">
                  <h5>Руководство</h5>
                </div>
                <ul>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Контроллеры
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Модели
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Виды
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Роутинг
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Middleware
                      </span>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Раздел: Расширения -->
              <div class="mt-6 lg:mt-8">
                <div
                  class="sidebar-group-header flex items-center gap-2.5 pl-4 mb-3.5 font-semibold text-gray-900 dark:text-gray-200">
                  <h5>Расширения</h5>
                </div>
                <ul>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Аутентификация
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Базы данных
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Очереди
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Кэширование
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Почта
                      </span>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Раздел: Инструменты -->
              <div class="mt-6 lg:mt-8">
                <div
                  class="sidebar-group-header flex items-center gap-2.5 pl-4 mb-3.5 font-semibold text-gray-900 dark:text-gray-200">
                  <h5>Инструменты</h5>
                </div>
                <ul>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Консоль (CLI)
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <a class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Тестирование
                      </span>
                    </a>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Отладка
                      </span>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Раздел: Дополнительно -->
              <div class="mt-6 lg:mt-8">
                <div
                  class="sidebar-group-header flex items-center gap-2.5 pl-4 mb-3.5 font-semibold text-gray-900 dark:text-gray-200">
                  <h5>Дополнительно</h5>
                </div>
                <ul>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Конфигурирование
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Окружение
                      </span>
                    </div>
                  </li>
                  <li data-toggle-section="" class="cursor-pointer">
                    <div
                      class="group flex items-center pr-3 py-1.5 rounded-xl hover:bg-gray-600/5 dark:hover:bg-gray-200/5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300"
                      style="padding-left:1rem">
                      <span class="flex-1 flex items-center space-x-2.5">
                        Диагностика
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </aside>

      <!-- ################# CONTENT ####################-->
      <div id="content-container">

        <!-- CONTENT === MAIN -->
        <section class="flex flex-row-reverse gap-12 box-border w-full pt-40 lg:pt-10" data-section="main">
          <div
            class="relative grow box-border flex-col w-full mx-auto px-1 lg:pl-[23.7rem] lg:-ml-12 xl:w-[calc(100%-19rem)] xl:min-w-full">

            <div class="mt-2.5 flex flex-col gap-6">
              <!-- Breadcrumbs and Title -->
              <div class="flex flex-col gap-2">
                <div class="breadcrumb-list flex flex-row items-center gap-1.5">
                  <div
                    class="breadcrumb-item inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                    <a href="/en/welcome">Ознакомление</a>
                  </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center relative gap-2">
                  <h1
                    class="inline-block text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight dark:text-gray-200">
                    QweesCore — Современный фраймворк
                  </h1>
                </div>
              </div>

            </div>


            <div class="flex flex-col gap-8"></div>
            <div class="mdx-content relative prose prose-gray dark:prose-invert m-2 my-4">
              <span>
                Добро пожаловать! QweesCore — это современный фреймворк для быстрого создания приложений любого
                масштаба.
                Его
                главная
                особенность — простота внедрения, мощная CLI и поддержка гибких моделей.
                <br>
                Не тратьте время на рутину: напишите, что хотите реализовать, и дайте QweesCore сгенерировать
                заготовку
                за вас!
              </span>

              <div class="frame mt-4 p-2 not-prose relative bg-gray-50/50 rounded-2xl overflow-hidden dark:bg-gray-800/25
                mb-8">
                <div class="relative rounded-xl overflow-hidden flex justify-center">
                  <img src="https://github.com/timqwees/QweesCore/blob/view/docs/im.png?raw=true" alt="Добро пожаловать"
                    class="object-contain rounded-lg">
                </div>
              </div>

              <div class="card-group not-prose grid gap-x-4 sm:grid-cols-3">
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="/en/get-started/installation">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/rocket.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Быстрый старт
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Как установить QweesCore — пошаговая инструкция.</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="/en/get-started/concepts">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/lightbulb.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Основные концепции
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Узнайте, как работает QweesCore и как строить архитектуру приложений.</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="/en/models">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/brain.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Модели данных
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Обзор моделей, взаимодействие и база знаний по выбору подходящей.</div>
                      </div>
                    </div>
                  </div>
                </a>

                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="/en/guides/working-with-context">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/book.svg">

                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Руководства
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Выжимка лучших практик, готовые решения и интеграции.</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="/en/cli/overview">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/terminal.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Командная строка
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Используйте CLI для генерации, миграций и управления проектами.</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="https://forum.cursor.com" target="_blank" rel="noreferrer">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/message.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Сообщество
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Общайтесь на форуме, делитесь опытом, задавайте вопросы.</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="mailto:hi@cursor.com">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/headset.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Поддержка
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Есть вопросы по аккаунту или оплате? Напишите нам — поможем!</div>
                      </div>
                    </div>
                  </div>
                </a>
                <a class="card block font-normal group relative my-2 ring-2 ring-transparent rounded-2xl bg-white dark:bg-background-dark border border-gray-950/10 dark:border-white/10 overflow-hidden w-full cursor-pointer hover:border-green-500 transition dark:hover:border-green-500-light"
                  href="https://cursor.com/downloads" target="_blank" rel="noreferrer">
                  <div class="px-6 py-5 relative">
                    <div class="h-6 w-6 fill-gray-800 dark:fill-gray-100 text-gray-800 dark:text-gray-100">
                      <img class="h-6 w-6 bg-primary dark:bg-primary-light !m-0 shrink-0"
                        src="https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/regular/download.svg">
                    </div>
                    <div>
                      <h2 class="not-prose font-semibold text-base text-gray-800 dark:text-white mt-4">
                        Скачать приложение
                      </h2>
                      <div class="prose mt-1 font-normal text-sm leading-6 text-gray-600 dark:text-gray-400">
                        <div>Получите desktop-версию QweesCore для вашего ПК.</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="leading-6 mt-14">
              <div class="flex flex-col md:flex-row md:justify-between gap-4 pb-10">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                  Остались вопросы или предложения? Присоединяйтесь к нашему <a href="https://t.me/qweescore"
                    class="text-primary dark:text-primary-light underline">форуму</a> или напишите на <a
                    href="mailto:hi@qweescore.com" class="text-primary dark:text-primary-light underline">почту
                    поддержки</a>.
                </div>
                <div>
                  <a href="/"
                    class="inline-block px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition">В
                    начало документации</a>
                </div>
              </div>
              <div class="feedback-toolbar pb-8 w-full flex flex-col gap-y-6 border-t dark:border-gray-700 mt-12 pt-8">
                <div
                  class="flex flex-row gap-5 items-center grow justify-between md:justify-start xl:justify-between min-[1400px]:justify-start">
                  <p class="text-sm text-gray-600 dark:text-gray-400">Эта страница была полезной?</p>
                  <div class="flex flex-row gap-3 items-center">
                    <button
                      class="px-3.5 py-2 flex flex-row gap-3 items-center border-standard rounded-xl text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 bg-white/50 dark:bg-codeblock/50 hover:border-gray-500 hover:dark:border-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        class="fill-current">
                        <path
                          d="M10.1187 1.08741C8.925 0.746789 7.67813 1.43741 7.3375 2.63116L7.15938 3.25616C7.04375 3.66241 6.83438 4.03741 6.55 4.34991L4.94688 6.11241C4.66875 6.41866 4.69062 6.89366 4.99687 7.17179C5.30312 7.44991 5.77813 7.42804 6.05625 7.12179L7.65938 5.35929C8.1 4.87491 8.42188 4.29679 8.6 3.66866L8.77812 3.04366C8.89062 2.64679 9.30625 2.41554 9.70625 2.52804C10.1063 2.64054 10.3344 3.05616 10.2219 3.45616L10.0437 4.08116C9.86562 4.70304 9.58437 5.29054 9.2125 5.81554C9.05 6.04366 9.03125 6.34366 9.15938 6.59366C9.2875 6.84366 9.54375 6.99991 9.825 6.99991H14C14.275 6.99991 14.5 7.22491 14.5 7.49991C14.5 7.71241 14.3656 7.89679 14.175 7.96866C13.9438 8.05616 13.7688 8.24992 13.7094 8.49054C13.65 8.73117 13.7125 8.98429 13.875 9.16866C13.9531 9.25616 14 9.37179 14 9.49991C14 9.74366 13.825 9.94679 13.5938 9.99054C13.3375 10.0405 13.1219 10.2187 13.0312 10.4624C12.9406 10.7062 12.9813 10.9843 13.1438 11.1905C13.2094 11.2749 13.25 11.3812 13.25 11.4999C13.25 11.7093 13.1187 11.8937 12.9312 11.9655C12.5719 12.1062 12.3781 12.4937 12.4812 12.8655C12.4937 12.9062 12.5 12.953 12.5 12.9999C12.5 13.2749 12.275 13.4999 12 13.4999H8.95312C8.55937 13.4999 8.17188 13.3843 7.84375 13.1655L5.91563 11.8812C5.57188 11.6499 5.10625 11.7437 4.875 12.0905C4.64375 12.4374 4.7375 12.8999 5.08437 13.1312L7.0125 14.4155C7.5875 14.7999 8.2625 15.003 8.95312 15.003H12C13.0844 15.003 13.9656 14.1405 14 13.0655C14.4563 12.6999 14.75 12.1374 14.75 11.503C14.75 11.3624 14.7344 11.228 14.7094 11.0968C15.1906 10.7312 15.5 10.153 15.5 9.50304C15.5 9.29991 15.4688 9.10304 15.4125 8.91866C15.775 8.55304 16 8.05304 16 7.49991C16 6.39679 15.1063 5.49991 14 5.49991H11.1156C11.2625 5.17491 11.3875 4.83741 11.4844 4.49366L11.6625 3.86866C12.0031 2.67491 11.3125 1.42804 10.1187 1.08741ZM1 5.99991C0.446875 5.99991 0 6.44679 0 6.99991V13.9999C0 14.553 0.446875 14.9999 1 14.9999H3C3.55313 14.9999 4 14.553 4 13.9999V6.99991C4 6.44679 3.55313 5.99991 3 5.99991H1Z">
                        </path>
                      </svg>
                      <small class="text-sm font-normal leading-4">Да</small>
                    </button>
                    <button
                      class="px-3.5 py-2 flex flex-row gap-3 items-center border-standard rounded-xl text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 bg-white/50 dark:bg-codeblock/50 hover:border-gray-500 hover:dark:border-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        class="fill-current">
                        <path
                          d="M10.1187 14.9124C8.925 15.253 7.67813 14.5624 7.3375 13.3687L7.15938 12.7437C7.04375 12.3374 6.83438 11.9624 6.55 11.6499L4.94688 9.8874C4.66875 9.58115 4.69062 9.10615 4.99687 8.82803C5.30312 8.5499 5.77813 8.57178 6.05625 8.87803L7.65938 10.6405C8.1 11.1249 8.42188 11.703 8.6 12.3312L8.77812 12.9562C8.89062 13.353 9.30625 13.5843 9.70625 13.4718C10.1063 13.3593 10.3344 12.9437 10.2219 12.5437L10.0437 11.9187C9.86562 11.2968 9.58437 10.7093 9.2125 10.1843C9.05 9.95615 9.03125 9.65615 9.15938 9.40615C9.2875 9.15615 9.54375 8.9999 9.825 8.9999H14C14.275 8.9999 14.5 8.7749 14.5 8.4999C14.5 8.2874 14.3656 8.10303 14.175 8.03115C13.9438 7.94365 13.7688 7.7499 13.7094 7.50928C13.65 7.26865 13.7125 7.01553 13.875 6.83115C13.9531 6.74365 14 6.62803 14 6.4999C14 6.25615 13.825 6.05303 13.5938 6.00928C13.3375 5.95928 13.1219 5.78115 13.0312 5.53428C12.9406 5.2874 12.9813 5.0124 13.1438 4.80615C13.2094 4.72178 13.25 4.61553 13.25 4.49678C13.25 4.2874 13.1187 4.10303 12.9312 4.03115C12.5719 3.89053 12.3781 3.50303 12.4812 3.13115C12.4937 3.09053 12.5 3.04365 12.5 2.99678C12.5 2.72178 12.275 2.49678 12 2.49678H8.95312C8.55937 2.49678 8.17188 2.6124 7.84375 2.83115L5.91563 4.11553C5.57188 4.34678 5.10625 4.25303 4.875 3.90615C4.64375 3.55928 4.7375 3.09678 5.08437 2.86553L7.0125 1.58115C7.5875 1.19678 8.2625 0.993652 8.95312 0.993652H12C13.0844 0.993652 13.9656 1.85615 14 2.93115C14.4563 3.29678 14.75 3.85928 14.75 4.49365C14.75 4.63428 14.7344 4.76865 14.7094 4.8999C15.1906 5.26553 15.5 5.84365 15.5 6.49365C15.5 6.69678 15.4688 6.89365 15.4125 7.07803C15.775 7.44678 16 7.94678 16 8.4999C16 9.60303 15.1063 10.4999 14 10.4999H11.1156C11.2625 10.8249 11.3875 11.1624 11.4844 11.5062L11.6625 12.1312C12.0031 13.3249 11.3125 14.5718 10.1187 14.9124ZM1 11.9999C0.446875 11.9999 0 11.553 0 10.9999V3.9999C0 3.44678 0.446875 2.9999 1 2.9999H3C3.55313 2.9999 4 3.44678 4 3.9999V10.9999C4 11.553 3.55313 11.9999 3 11.9999H1Z">
                        </path>
                      </svg>
                      <small class="text-sm font-normal leading-4">Нет</small>
                    </button>
                  </div>
                </div>
              </div>
              <div id="pagination"
                class="mb-12 px-0.5 flex items-center text-sm font-semibold text-gray-700 dark:text-gray-200">
                <a class="flex items-center ml-auto space-x-3 group" href="/en/get-started/installation">
                  <span class="group-hover:text-gray-900 dark:group-hover:text-white">Перейти к установке</span>
                  <svg viewBox="0 0 3 6"
                    class="rotate-180 h-1.5 stroke-gray-400 overflow-visible group-hover:stroke-gray-600 dark:group-hover:stroke-gray-300">
                    <path d="M3 0L0 3L3 6" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- CONTENT === INSTALLER -->
        <section class="w-full flex flex-row box-border pt-40 lg:pt-10 gap-0 hidden" data-section="other"
          style="min-height:400px;">
          <aside class="hidden lg:block w-[19rem] flex-shrink-0"></aside>
          <main class="flex-1 flex flex-col px-0 md:px-4 lg:px-8">
            <div class="mt-2.5 flex flex-col gap-6">
              <!-- Breadcrumbs and Title -->
              <div class="flex flex-col gap-2">
                <div class="breadcrumb-list flex flex-row items-center gap-1.5">
                  <div
                    class="breadcrumb-item inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                    <a href="#">Начало</a>
                  </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center relative gap-2">
                  <h1
                    class="inline-block text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight dark:text-gray-200">
                    Установка
                  </h1>
                </div>
              </div>

              <div class="relative mdx-content relative prose prose-gray dark:prose-invert">
                <!-- #############################################-->

                <h2 class="text-2xl font-bold text-primary dark:text-primary-light mb-6 flex items-center gap-3">
                  <i class="h-6 w-6 text-primary dark:text-primary-light fab fa-discourse"></i>
                  Автоматическая установка
                </h2>

                <!-- Автоматическая установка -->
                <div class="mb-8">
                  <h3 id="auto-install"
                    class="text-lg font-semibold text-gray-900 dark:text-gray-100 flex items-center gap-2">
                    <i class="far fa-check-circle bg-green-200 p-1.5 rounded-full"></i>
                    Автоматическая установка через консоль
                  </h3>
                  <p class="mt-1 text-gray-500 dark:text-gray-400">
                    Самый быстрый способ начать работу с QweesCore — выполните команду в терминале. <span
                      class="hidden md:inline">Перейдите в нужную папку и выполните:</span>
                  </p>
                  <div class="relative mt-4 rounded-lg overflow-hidden group">
                    <pre
                      class="bg-gray-900 text-white text-base px-5 py-4 rounded-lg font-mono shadow-inner flex items-center gap-2 select-all transition-all border border-gray-700">
                      <span class="text-pink-400">npx</span> <span class="text-purple-300">qwees</span> <span class="text-purple-300">install</span> <span class="italic text-white">имя_проекта</span>
                    </pre>
                    <button
                      class="absolute top-3 right-3 bg-white/20 dark:bg-gray-700/60 hover:bg-primary/90 hover:text-white text-primary dark:text-primary-light rounded-md p-2 text-xs font-semibold transition flex items-center gap-1 shadow"
                      onclick="navigator.clipboard.writeText('npx qwees install имя_проекта');this.innerHTML='<span class=\'text-white\'>Скопировано</span>';setTimeout(()=>{this.innerHTML='<i class=\'far fa-copy text-gray\'></i>Копировать'},2500);">
                      <i class="far fa-copy text-gray"></i>
                      Копировать
                    </button>
                  </div>

                  <ul class="list-disc ml-7 mt-4 space-y-1 text-gray-600 dark:text-gray-300 text-sm">
                    <li><b class="text-gray-900 dark:text-gray-100">npx</b> — запускает последнюю версию инструмента
                      без глобальной установки.</li>
                    <li><b class="text-gray-900 dark:text-gray-100">qwees install</b> — скачивает и инициализирует
                      шаблон QweesCore в новую папку.</li>
                    <li><b class="text-gray-900 dark:text-gray-100">имя_проекта</b> — папка, куда будет установлен
                      ваш проект (замените на своё название).</li>
                  </ul>
                  <div
                    class="mt-4 inline-flex items-center gap-2 bg-primary/10 dark:bg-primary-light/10 border border-primary/20 dark:border-primary-light/30 text-primary dark:text-primary-light rounded-lg px-4 py-2 text-sm font-medium">
                    <span
                      class="bg-primary/60 dark:bg-primary-light/50 h-6 w-6 rounded-full flex items-center justify-center text-white dark:text-black font-bold mr-1">
                      <i class="fas fa-info-circle text-black"></i></span>
                    <span>Перейдите в созданную директорию:
                      <code class="bg-gray-900 text-white p-1 rounded italic">cd имя_проекта</code>
                    </span>
                  </div>
                </div>

                <!-- Ручная установка -->
                <h2 class="text-2xl font-bold text-primary dark:text-primary-light mb-6 flex items-center gap-3">
                  <i class="h-6 w-6 text-primary dark:text-primary-light fas fa-hand-sparkles"></i>
                  Ручная установка
                </h2>

                <ol class="list-decimal ml-7 mt-4 space-y-3">
                  <li>
                    <b>Клонируйте репозиторий:</b>
                    <div class="relative mt-1">
                      <pre
                        class="bg-gray-900 text-white text-base px-5 py-3 rounded-lg font-mono shadow-inner select-all border border-gray-700">git clone https://github.com/timqwees/QweesCore my-app</pre>
                      <button
                        class="absolute top-2.5 right-3 bg-white/20 dark:bg-gray-700/60 hover:bg-primary/90 hover:text-white text-primary dark:text-primary-light rounded-md p-2 text-xs font-semibold transition flex items-center gap-1 shadow"
                        onclick="navigator.clipboard.writeText('git clone https:\/\/github.com/timqwees/QweesCore my-app');this.innerHTML='<span class=\'text-white\'>Скопировано</span>';setTimeout(()=>{this.innerHTML='<i class=\'far fa-copy text-gray\'></i>Копировать'},2500);">
                        <i class="far fa-copy text-gray"></i>
                        Копировать
                      </button>
                    </div>
                  </li>
                  <li>
                    <b>Перейдите в директорию проекта:</b>
                    <div class="relative mt-1">
                      <pre
                        class="bg-gray-900 text-white text-base px-5 py-3 rounded-lg font-mono shadow-inner select-all border border-gray-700">cd my-app</pre>
                      <button
                        class="absolute top-2.5 right-3 bg-white/20 dark:bg-gray-700/60 hover:bg-primary/90 hover:text-white text-primary dark:text-primary-light rounded-md p-2 text-xs font-semibold transition flex items-center gap-1 shadow"
                        onclick="navigator.clipboard.writeText('cd my-app');this.innerHTML='<span class=\'text-white\'>Скопировано</span>';setTimeout(()=>{this.innerHTML='<i class=\'far fa-copy text-gray\'></i>Копировать'},2500);">
                        <i class="far fa-copy text-gray"></i>
                        Копировать
                      </button>
                    </div>
                  </li>
                  <li>
                    <b>(Опционально) Свяжите глобально для dev-команд:</b>
                    <div class="relative mt-1">
                      <pre
                        class="bg-gray-900 text-white text-base px-5 py-3 rounded-lg font-mono shadow-inner select-all border border-gray-700">npm link</pre>
                      <button
                        class="absolute top-2.5 right-3 bg-white/20 dark:bg-gray-700/60 hover:bg-primary/90 hover:text-white text-primary dark:text-primary-light rounded-md p-2 text-xs font-semibold transition flex items-center gap-1 shadow"
                        onclick="navigator.clipboard.writeText('npm link');this.innerHTML='<span class=\'text-white\'>Скопировано</span>';setTimeout(()=>{this.innerHTML='<i class=\'far fa-copy text-gray\'></i>Копировать'},2500);">
                        <i class="far fa-copy text-gray"></i>
                        Копировать
                      </button>
                    </div>
                  </li>
                  <li>
                    <b>Запустите проект:</b>
                    <div class="relative mt-1">
                      <pre
                        class="bg-gray-900 text-white text-base px-5 py-3 rounded-lg font-mono shadow-inner select-all border border-gray-700">qwees start</pre>
                      <button
                        class="absolute top-2.5 right-3 bg-white/20 dark:bg-gray-700/60 hover:bg-primary/90 hover:text-white text-primary dark:text-primary-light rounded-md p-2 text-xs font-semibold transition flex items-center gap-1 shadow"
                        onclick="navigator.clipboard.writeText('qwees start');this.innerHTML='<span class=\'text-white\'>Скопировано</span>';setTimeout(()=>{this.innerHTML='<i class=\'far fa-copy text-gray\'></i>Копировать'},2500);">
                        <i class="far fa-copy text-gray"></i>
                        Копировать
                      </button>
                    </div>
                  </li>
                </ol>

                <div
                  class="mt-5 bg-primary/10 dark:bg-primary-light/20 border border-primary/20 dark:border-primary-light/30 text-primary dark:text-primary-light rounded-lg px-4 py-3 text-base items-center flex gap-2">
                  <span
                    class="bg-primary/60 dark:bg-primary-light/50 h-6 w-6 rounded-full flex items-center justify-center text-white dark:text-black font-bold mr-1">⚡</span>
                  <span>
                    <b>Не забудьте:</b> <code class="bg-primary/10 px-1 rounded">qwees start</code> — основная
                    команда запуска локального сервера и горячей перезагрузки в <b>dev-режиме</b>.
                  </span>
                </div>
              </div>

              <div class="leading-6 mt-14">
                <div class="flex flex-col md:flex-row md:justify-between gap-4 pb-10">
                  <div class="text-sm text-gray-600 dark:text-gray-400">
                    Остались вопросы или предложения? Присоединяйтесь к нашему <a href="https://t.me/qweescore"
                      class="text-primary dark:text-primary-light underline">форуму</a> или напишите на <a
                      href="mailto:hi@qweescore.com" class="text-primary dark:text-primary-light underline">почту
                      поддержки</a>.
                  </div>
                  <div>
                    <a href="/"
                      class="inline-block px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition">В
                      начало документации</a>
                  </div>
                </div>
                <div
                  class="feedback-toolbar pb-8 w-full flex flex-col gap-y-6 border-t dark:border-gray-700 mt-12 pt-8">
                  <div
                    class="flex flex-row gap-5 items-center grow justify-between md:justify-start xl:justify-between min-[1400px]:justify-start">
                    <p class="text-sm text-gray-600 dark:text-gray-400">Эта страница была полезной?</p>
                    <div class="flex flex-row gap-3 items-center">
                      <button
                        class="px-3.5 py-2 flex flex-row gap-3 items-center border-standard rounded-xl text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 bg-white/50 dark:bg-codeblock/50 hover:border-gray-500 hover:dark:border-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                          class="fill-current">
                          <path
                            d="M10.1187 1.08741C8.925 0.746789 7.67813 1.43741 7.3375 2.63116L7.15938 3.25616C7.04375 3.66241 6.83438 4.03741 6.55 4.34991L4.94688 6.11241C4.66875 6.41866 4.69062 6.89366 4.99687 7.17179C5.30312 7.44991 5.77813 7.42804 6.05625 7.12179L7.65938 5.35929C8.1 4.87491 8.42188 4.29679 8.6 3.66866L8.77812 3.04366C8.89062 2.64679 9.30625 2.41554 9.70625 2.52804C10.1063 2.64054 10.3344 3.05616 10.2219 3.45616L10.0437 4.08116C9.86562 4.70304 9.58437 5.29054 9.2125 5.81554C9.05 6.04366 9.03125 6.34366 9.15938 6.59366C9.2875 6.84366 9.54375 6.99991 9.825 6.99991H14C14.275 6.99991 14.5 7.22491 14.5 7.49991C14.5 7.71241 14.3656 7.89679 14.175 7.96866C13.9438 8.05616 13.7688 8.24992 13.7094 8.49054C13.65 8.73117 13.7125 8.98429 13.875 9.16866C13.9531 9.25616 14 9.37179 14 9.49991C14 9.74366 13.825 9.94679 13.5938 9.99054C13.3375 10.0405 13.1219 10.2187 13.0312 10.4624C12.9406 10.7062 12.9813 10.9843 13.1438 11.1905C13.2094 11.2749 13.25 11.3812 13.25 11.4999C13.25 11.7093 13.1187 11.8937 12.9312 11.9655C12.5719 12.1062 12.3781 12.4937 12.4812 12.8655C12.4937 12.9062 12.5 12.953 12.5 12.9999C12.5 13.2749 12.275 13.4999 12 13.4999H8.95312C8.55937 13.4999 8.17188 13.3843 7.84375 13.1655L5.91563 11.8812C5.57188 11.6499 5.10625 11.7437 4.875 12.0905C4.64375 12.4374 4.7375 12.8999 5.08437 13.1312L7.0125 14.4155C7.5875 14.7999 8.2625 15.003 8.95312 15.003H12C13.0844 15.003 13.9656 14.1405 14 13.0655C14.4563 12.6999 14.75 12.1374 14.75 11.503C14.75 11.3624 14.7344 11.228 14.7094 11.0968C15.1906 10.7312 15.5 10.153 15.5 9.50304C15.5 9.29991 15.4688 9.10304 15.4125 8.91866C15.775 8.55304 16 8.05304 16 7.49991C16 6.39679 15.1063 5.49991 14 5.49991H11.1156C11.2625 5.17491 11.3875 4.83741 11.4844 4.49366L11.6625 3.86866C12.0031 2.67491 11.3125 1.42804 10.1187 1.08741ZM1 5.99991C0.446875 5.99991 0 6.44679 0 6.99991V13.9999C0 14.553 0.446875 14.9999 1 14.9999H3C3.55313 14.9999 4 14.553 4 13.9999V6.99991C4 6.44679 3.55313 5.99991 3 5.99991H1Z">
                          </path>
                        </svg>
                        <small class="text-sm font-normal leading-4">Да</small>
                      </button>
                      <button
                        class="px-3.5 py-2 flex flex-row gap-3 items-center border-standard rounded-xl text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 bg-white/50 dark:bg-codeblock/50 hover:border-gray-500 hover:dark:border-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                          class="fill-current">
                          <path
                            d="M10.1187 14.9124C8.925 15.253 7.67813 14.5624 7.3375 13.3687L7.15938 12.7437C7.04375 12.3374 6.83438 11.9624 6.55 11.6499L4.94688 9.8874C4.66875 9.58115 4.69062 9.10615 4.99687 8.82803C5.30312 8.5499 5.77813 8.57178 6.05625 8.87803L7.65938 10.6405C8.1 11.1249 8.42188 11.703 8.6 12.3312L8.77812 12.9562C8.89062 13.353 9.30625 13.5843 9.70625 13.4718C10.1063 13.3593 10.3344 12.9437 10.2219 12.5437L10.0437 11.9187C9.86562 11.2968 9.58437 10.7093 9.2125 10.1843C9.05 9.95615 9.03125 9.65615 9.15938 9.40615C9.2875 9.15615 9.54375 8.9999 9.825 8.9999H14C14.275 8.9999 14.5 8.7749 14.5 8.4999C14.5 8.2874 14.3656 8.10303 14.175 8.03115C13.9438 7.94365 13.7688 7.7499 13.7094 7.50928C13.65 7.26865 13.7125 7.01553 13.875 6.83115C13.9531 6.74365 14 6.62803 14 6.4999C14 6.25615 13.825 6.05303 13.5938 6.00928C13.3375 5.95928 13.1219 5.78115 13.0312 5.53428C12.9406 5.2874 12.9813 5.0124 13.1438 4.80615C13.2094 4.72178 13.25 4.61553 13.25 4.49678C13.25 4.2874 13.1187 4.10303 12.9312 4.03115C12.5719 3.89053 12.3781 3.50303 12.4812 3.13115C12.4937 3.09053 12.5 3.04365 12.5 2.99678C12.5 2.72178 12.275 2.49678 12 2.49678H8.95312C8.55937 2.49678 8.17188 2.6124 7.84375 2.83115L5.91563 4.11553C5.57188 4.34678 5.10625 4.25303 4.875 3.90615C4.64375 3.55928 4.7375 3.09678 5.08437 2.86553L7.0125 1.58115C7.5875 1.19678 8.2625 0.993652 8.95312 0.993652H12C13.0844 0.993652 13.9656 1.85615 14 2.93115C14.4563 3.29678 14.75 3.85928 14.75 4.49365C14.75 4.63428 14.7344 4.76865 14.7094 4.8999C15.1906 5.26553 15.5 5.84365 15.5 6.49365C15.5 6.69678 15.4688 6.89365 15.4125 7.07803C15.775 7.44678 16 7.94678 16 8.4999C16 9.60303 15.1063 10.4999 14 10.4999H11.1156C11.2625 10.8249 11.3875 11.1624 11.4844 11.5062L11.6625 12.1312C12.0031 13.3249 11.3125 14.5718 10.1187 14.9124ZM1 11.9999C0.446875 11.9999 0 11.553 0 10.9999V3.9999C0 3.44678 0.446875 2.9999 1 2.9999H3C3.55313 2.9999 4 3.44678 4 3.9999V10.9999C4 11.553 3.55313 11.9999 3 11.9999H1Z">
                          </path>
                        </svg>
                        <small class="text-sm font-normal leading-4">Нет</small>
                      </button>
                    </div>
                  </div>
                </div>
                <div id="pagination"
                  class="mb-12 px-0.5 flex items-center text-sm font-semibold text-gray-700 dark:text-gray-200">
                  <a class="flex items-center ml-auto space-x-3 group" href="/en/get-started/installation">
                    <span class="group-hover:text-gray-900 dark:group-hover:text-white">Перейти к установке</span>
                    <svg viewBox="0 0 3 6"
                      class="rotate-180 h-1.5 stroke-gray-400 overflow-visible group-hover:stroke-gray-600 dark:group-hover:stroke-gray-300">
                      <path d="M3 0L0 3L3 6" fill="none" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                      </path>
                    </svg>
                  </a>
                </div>
              </div>
              <!-- #############################################-->

            </div>
          </main>
        </section>

        <!-- #### CONTENT === ШАБЛОН #### -->
        <section class="w-full flex flex-row box-border pt-40 lg:pt-10 gap-0 hidden" data-section=""
          style="min-height:400px;">
          <aside class="hidden lg:block w-[19rem] flex-shrink-0"></aside>
          <main class="flex-1 flex flex-col px-0 md:px-4 lg:px-8">
            <div class="mt-2.5 flex flex-col gap-6">
              <!-- Breadcrumbs and Title -->
              <div class="flex flex-col gap-2">
                <div class="breadcrumb-list flex flex-row items-center gap-1.5">
                  <div
                    class="breadcrumb-item inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                    <a href="#">Breadcrumb</a>
                  </div>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center relative gap-2">
                  <h1
                    class="inline-block text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight dark:text-gray-200">
                    Название секции
                  </h1>
                </div>
              </div>

              <div class="relative mdx-content relative m prose prose-gray dark:prose-invert">
                <!-- #############################################-->
                <p>Шаблон секции. Заполните содержимое здесь.</p>
                <!-- #############################################-->
              </div>

            </div>
          </main>
        </section>
        <!-- ####  CONTENT === ШАБЛОН ### -->

      </div>
    </main>

    <footer class="advanced-footer flex flex-col items-center mx-auto border-t border-gray-100 dark:border-gray-800/50">
      <div class="flex w-full flex-col gap-12 justify-between px-8 py-16 md:py-20 lg:py-28 max-w-[984px] z-0">
        <div class="flex flex-col md:flex-row gap-8 justify-between min-h-[76px]">
          <div
            class="flex md:flex-col justify-between items-center md:items-start min-w-16 md:min-w-20 lg:min-w-48 md:gap-y-24">
            <a href="/">
              <span class="sr-only">QweesCore — главная</span>
              <img class="nav-logo w-auto relative object-contain block dark:hidden max-w-48 h-[26px]"
                src="https://raw.githubusercontent.com/timqwees/QweesCore/refs/heads/view/assets/fline_black.png"
                alt="light logo">
            </a>
            <div class="flex gap-4 min-w-[140px] max-w-[492px] flex-wrap h-fit md:hidden justify-end">
              <a href="https://t.me/timqwees" target="_blank" class="h-fit">
                <span class="sr-only">telegram</span>
                <svg class="w-5 h-5 bg-gray-500 dark:bg-gray-600 hover:bg-gray-600 dark:hover:bg-gray-500"
                  style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/brands/telegram.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/brands/telegram.svg);mask-repeat:no-repeat;mask-position:center"></svg>
              </a>
              <a href="https://github.com/timqwees/qweescore" target="_blank" class="h-fit">
                <span class="sr-only">github</span>
                <svg class="w-5 h-5 bg-gray-500 dark:bg-gray-600 hover:bg-gray-600 dark:hover:bg-gray-500"
                  style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/brands/github.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/brands/github.svg);mask-repeat:no-repeat;mask-position:center"></svg>
              </a>
              <a href="https://qweescore.ru" target="_blank" class="h-fit">
                <span class="sr-only">website</span>
                <svg class="w-5 h-5 bg-gray-500 dark:bg-gray-600 hover:bg-gray-600 dark:hover:bg-gray-500"
                  style="-webkit-mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/earth-americas.svg);-webkit-mask-repeat:no-repeat;-webkit-mask-position:center;mask-image:url(https://d3gk2c5xim1je2.cloudfront.net/v6.6.0/solid/earth-americas.svg);mask-repeat:no-repeat;mask-position:center"></svg>
              </a>
            </div>
          </div>
          <div class="flex flex-col sm:grid max-md:!grid-cols-2 gap-8 flex-1"
            style="grid-template-columns:repeat(3, minmax(0, 1fr))">
            <div class="flex flex-col gap-4 flex-1 whitespace-nowrap w-full md:items-center">
              <div class="flex gap-4 flex-col">
                <p class="text-sm font-semibold text-gray-950 dark:text-white mb-1">QweesCore</p>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://github.com/timqwees/qweescore" target="_blank" rel="noreferrer">GitHub</a>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://qweescore.ru" target="_blank" rel="noreferrer">Официальный сайт</a>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://t.me/timqwees" target="_blank" rel="noreferrer">Telegram support</a>
              </div>
            </div>
            <div class="flex flex-col gap-4 flex-1 whitespace-nowrap w-full md:items-center">
              <div class="flex gap-4 flex-col">
                <p class="text-sm font-semibold text-gray-950 dark:text-white mb-1">Для начинающих</p>
                <span class="text-sm text-gray-950/50 dark:text-white/50">Документация пишется...</span>
                <span class="text-sm text-gray-950/50 dark:text-white/50">Community развивается</span>
                <span class="text-sm text-gray-950/50 dark:text-white/50">Функционала пока мало 😊</span>
              </div>
            </div>
            <div class="flex flex-col gap-4 flex-1 whitespace-nowrap w-full md:items-center">
              <div class="flex gap-4 flex-col">
                <p class="text-sm font-semibold text-gray-950 dark:text-white mb-1">Полезное Ресурсы</p>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://cursor.com/terms-of-service" target="_blank" rel="noreferrer">Условия</a>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://cursor.com/changelog" target="_blank" rel="noreferrer">Changelog</a>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://x.com/cursor_ai" target="_blank" rel="noreferrer">Twitter</a>
                <a class="text-sm max-w-36 whitespace-normal md:truncate text-gray-950/50 dark:text-white/50 hover:text-gray-950/70 dark:hover:text-white/70"
                  href="https://github.com/getcursor/cursor" target="_blank" rel="noreferrer">GitHub</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script>
    document.querySelectorAll('[data-toggle-section]').forEach(button => {
      button.addEventListener('click', function () {
        var sectionId = button.getAttribute('data-toggle-section');
        // Скрыть все секции с плавным исчезновением
        document.querySelectorAll('[data-section]').forEach(section => {
          //анимации исчезнавения
          section.style.transition = 'opacity 0.3s';
          section.style.opacity = 0;
          setTimeout(function () {
            section.classList.add('hidden');
          }, 300);
        });
        // Показать выбранную секцию с плавным появлением
        var targetSection = document.querySelector('[data-section="' + sectionId + '"]');
        if (targetSection) {
          // Сначала убираем класс hidden, выставляем прозрачность
          setTimeout(function () {
            targetSection.classList.remove('hidden');
            targetSection.style.transition = 'opacity 0.3s';
            targetSection.style.opacity = 0;
            // Затем заставляем браузер "увидеть" 0, и только потом плавно делаем 1
            setTimeout(function () {
              targetSection.style.opacity = 1;
            }, 10);
          }, 300);
        }
      });
    });
  </script>
</body>

</html>
