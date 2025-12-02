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
 *  |   |   \ \  \|\  \ \  \    \ \  \ \   __/|\ \   __/|\ \  \___|_                     |   |
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

class Session
{
  /**
   * @return [type]
   *
   * @example Session::init();
   * @description инициализирует сессию и устанавливает параметры / initialize session and set parameters
   *
   */
  public static function init()
  {
    // Не инициализировать сессию, если заголовки уже были отправлены
    if (headers_sent()) {
      // Опционально: здесь можно записать предупреждение или ошибку в лог
      return;
    }

    if (session_status() === PHP_SESSION_NONE) {
      $params = [
        'lifetime' => 86400, // 24 часа
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'] ?? '',
        'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['SERVER_PORT'] ?? null) == 443,
        'httponly' => true,
        'samesite' => 'Lax'
      ];

      // Определяем папку для хранения сессий во временной директории пользователя,
      // или используем safer location если нет прав на /tmp/<user>
      $defaultSessionSavePath = sys_get_temp_dir();
      $customSessionDir = $defaultSessionSavePath . '/session';

      // Проверяем возможность записи в директорию, иначе используем php.ini по умолчанию
      if (!is_dir($customSessionDir)) {
        @mkdir($customSessionDir, 0700, true);
      }

      if (is_writable($customSessionDir)) {
        session_save_path($customSessionDir);
      }
      // else не трогаем session.save_path, PHP сам попытается использовать значение по умолчанию

      // PHP < 7.3 совместимость (нет массива options)
      if (PHP_VERSION_ID < 70300) {
        session_set_cookie_params(
          $params['lifetime'],
          $params['path'] . '; samesite=' . $params['samesite'],
          $params['domain'],
          $params['secure'],
          $params['httponly']
        );
      } else {
        session_set_cookie_params($params);
      }

      @session_start();
      // подавляем предупреждения, которые могут возникнуть из-за отсутствия прав на папку сессий
    }
  }

  /**
   * @return [type]
   *
   * @example Session::regenerate();
   * @description регенерирует сессию для защиты от атак / regenerate session for protection against attacks
   * требуеться во всех файлах, где требуеться запрос к данным пользователя
   *
   */
  public static function regenerate()
  {
    if (session_status() === PHP_SESSION_ACTIVE) {
      if (!headers_sent()) {
        @session_regenerate_id(true);
        // подавляем возможные предупреждения, мы не хотим показывать ошибки прав пользователям
      }
      // else optionally log a warning that regeneration is not possible
    }
  }

  /**
   * @return [type]
   *
   * @example Session::destroy();
   * @description уничтожает сессию / destroy session
   *
   */
  public static function destroy()
  {
    if (session_status() === PHP_SESSION_ACTIVE) {
      $_SESSION = array();

      if (isset($_COOKIE[session_name()])) {
        if (!headers_sent()) {
          setcookie(session_name(), '', time() - 3600, '/');
        }
        // else optionally log a warning that cookie can't be set
      }

      @session_destroy();
      // подавляем возможные предупреждения на случай проблем с правами
    }
  }
}
