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

namespace App\Models\Network;

class Message
{
  /**
   * Устанавливает уведомление в сессию
   *
   * @param string $type Тип уведомления (например, 'success', 'error', 'info')
   * @param string $message Текст уведомления
   *
   * @return void
   *
   * @example Message::set('success', 'Операция выполнена успешно');
   * @description Сохраняет уведомление с указанным типом и сообщением в сессию / Set notification with type and message to session
   */
  public static function set($type, $message)
  {
    $_SESSION['notification'] = [
      'type' => $type,
      'message' => $message
    ];
  }

  /**
   * Получает уведомление из сессии и удаляет его
   *
   * @return array|null Массив с уведомлением (['type' => ..., 'message' => ...]) или null, если уведомление отсутствует
   *
   * @example Message::getAll();
   * @description Получает уведомление из сессии и удаляет его / Get notification from session and remove it
   */
  public static function getAll()
  {
    if (isset($_SESSION['notification'])) {
      $message = $_SESSION['notification'];//array
      unset($_SESSION['notification']);
      return $message;
    }
    return null;
  }

  /**
   * Проверяет, существует ли уведомление в сессии
   *
   * @return bool true если уведомление существует, false если нет
   *
   * @example Message::has();
   * @description Проверяет, установлено ли уведомление в сессии / Check if notification exists in session
   */
  public static function has()
  {
    return isset($_SESSION['notification']);
  }

  /**
   * Возвращает пустое уведомление (массив с пустыми значениями типа и сообщения)
   *
   * @return array Массив с ключами 'type' и 'message', оба значения пустые строки
   *
   * @example Message::null();
   * @description возвращает массив с пустыми значениями для типа и сообщения / returns array with empty type and message
   */
  public static function null()
  {
    return ['type' => '', 'message' => ''];
  }

  /**
   * Автоматически возвращает уведомление из сессии, если оно существует, иначе возвращает пустое уведомление
   *
   * @return array Массив с уведомлением (['type' => ..., 'message' => ...]) или массив с пустыми значениями, если уведомление отсутствует
   *
   * @example Message::controll();
   * @description Проверяет наличие уведомления в сессии и возвращает его, либо возвращает массив с пустыми значениями / Checks if notification exists in session and returns it, or returns array with empty values
   */
  public static function controll()
  {
    return Message::has() ? Message::getAll() : Message::null();
  }

}
