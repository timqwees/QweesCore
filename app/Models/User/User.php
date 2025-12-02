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

namespace App\Models\User;

use App\Config\Database;
use App\Models\Network\Network;
use App\Models\Network\Message;

class User extends Network
{
  public $table_name;

  public function __construct()
  {
    $this->table_name = 'users';
  }

  /**
   * Получает данные пользователя по определённому типу идентификатора
   *
   * @param string $type Тип идентификатора пользователя ('id', 'username', 'email' и др.)
   * @param int|string $value Значение идентификатора (например, 1, 'admin', 'admin@example.com')
   *
   * @return array|bool Массив с данными пользователя или false в случае ошибки
   *
   * @example $this->getUser('id', 1);
   * @description Получает данные пользователя по id / Get user data by id
   *
   * @example $this->getUser('username', 'admin');
   * @description Получает данные пользователя по username / Get user data by username
   *
   * @example $this->getUser('email', 'admin@example.com');
   * @description Получает данные пользователя по email / Get user data by email
   */
  public function getUser(string $type, $value): array|bool
  {
    try {
      switch ($type) {
        case 'id':
        case 'index':
        case 'identification':
          $result = Database::send("SELECT * FROM " . $this->table_name . " WHERE id = ?", [$value]);
          break;
        case 'username':
        case 'name':
        case 'nickname':
          $result = Database::send("SELECT * FROM " . $this->table_name . " WHERE username = ?", [$value]);
          break;
        case 'email':
        case 'mail':
          $result = Database::send("SELECT * FROM " . $this->table_name . " WHERE mail = ?", [$value]);
          break;
      }
      return $result;
    } catch (\PDOException $e) {
      error_log("Ошибка при получении пользователя: " . $e->getMessage());
      return false;
    }
  }

  /**
   * Обновляет данные пользователя с помощью массива данных
   *
   * @param string $tableName Имя таблицы, в которой обновлять данные
   * @param array $new_data Ассоциативный массив столбцов и их новых значений (например, ['username' => 'admin', 'email' => 'timqwees@gmail.com'])
   * @param int $userId ID пользователя, чьи данные обновляются
   *
   * @return bool true в случае успеха, false в случае ошибки
   *
   * @example $this->onUpdateProfile('users', ['username' => 'admin', 'email' => 'timqwees@gmail.com'], 1);
   * @description обновляет данные пользователя с помощью массива данных и ID пользователя / update user data with array of fields and user id
   */
  public function onUpdateProfile(string $tableName, array $new_data, int $userId)
  {
    try {

      foreach ($new_data as $column => $value) {
        Network::onColumnExists($column, $tableName);
      }

      $setColumns = [];//column
      $setParam = [];//value

      foreach ($new_data as $column => $value) {
        $setColumns[] = "`$column` = ?";
        $setParam[] = $value;
      }

      // add userId into last list
      $setParam[] = $userId;

      $result = Database::send("UPDATE " . $this->table_name . " SET " . implode(', ', $setColumns) . " WHERE id = ?", [$setParam]);

      if ($result) {
        Message::set('success', 'Профиль успешно обновлен');
        return true;
      }
      Message::set('error', 'Ошибка при обновлении профиля');
      return false;
    } catch (\PDOException $e) {
      Message::set('error', 'Ошибка при обновлении профиля: ' . $e->getMessage());
      return false;
    }
  }

  /**
   * Загружает файл и возвращает путь к нему
   * @param array $file Массив с данными файла из $_FILES
   * @param string $prefix Префикс для имени файла (обычно ID пользователя)
   * @param string|null $customName Пользовательское имя файла (без расширения)
   * @return string|false Путь к файлу или false в случае ошибки
   *
   * @example $this->uploadFile($_FILES['file'], 'id пользователя', 'имя файла');
   * @description загружает файл и возвращает путь к нему / upload file and return path to it
   */
  function uploadFile(array $file, string $prefix = '', ?string $customName = null): string|false
  {
    try {
      // Проверяем тип файла
      $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
      if (!in_array($file['type'], $allowedTypes)) {
        throw new \Exception('Недопустимый тип файла. Разрешены только JPG, PNG и GIF.');
      }

      // Проверяем размер файла (максимум 5MB)
      if ($file['size'] > 5 * 1024 * 1024) {
        throw new \Exception('Размер файла превышает 5MB.');
      }

      $uploadPath = __DIR__ . '/../../../public/avatar';

      if (!is_dir($uploadPath)) {
        if (!mkdir($uploadPath, 0777, true)) {
          throw new \Exception('Не удалось создать директорию для загрузки.');
        }
      }

      $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

      // Формируем имя файла
      if ($customName !== null) {
        // Очищаем пользовательское имя от небезопасных символов
        $customName = preg_replace('/[^a-zA-Z0-9_-]/', '', $customName);
        $fileName = $customName . ".$ext";
      } else {
        $fileName = $prefix . '_' . time() . ".$ext";
      }

      $fullPath = "$uploadPath/$fileName";

      // Проверяем, существует ли файл с таким именем
      if (file_exists($fullPath)) {
        // Добавляем временную метку к имени файла
        $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . ".$ext";
        $fullPath = "$uploadPath/$fileName";
      }

      if (!move_uploaded_file($file['tmp_name'], $fullPath)) {
        throw new \Exception('Ошибка при загрузке файла на сервер.');
      }

      // Возвращаем относительный путь для сохранения в БД
      return "avatar/$fileName";
    } catch (\Exception $e) {
      error_log("Ошибка при загрузке файла: " . $e->getMessage());
      return false;
    }
  }

  /**
   * Проверяет сессию пользователя по его ID
   *
   * @param int $index ID пользователя
   * @return bool true если сессия активна, false если нет или при ошибке
   *
   * @example $this->onSessionUser(0);
   * @description проверяет сессию пользователя с указанным ID / check user session by user ID
   */
  public function onSessionUser(int $index)
  {
    try {
      if ($index === False) {
        Network::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER'] ?: '/');
        session_destroy();
        return false;
      }

      $result = Database::send("SELECT `session` FROM " . $this->table_name . " WHERE id = ?", [$index]);

      if ($result['session'] === 'off') {//сессия отключена / вышел с аккаунта
        Network::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER'] ?: '/');
        session_destroy();
        return false;
      } else {
        Network::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER'] ?: '/');
        session_destroy();
        return true;
      }
    } catch (\PDOException $e) {
      error_log("Ошибка при проверке пользователя: " . $e->getMessage());
      Network::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER'] ?: '/');
      session_destroy();
      return false;
    }
  }

  /**
   * Обновляет статус сессии пользователя
   *
   * @param string $status Новый статус сессии ('on' или 'off')
   * @param int $userId ID пользователя
   * @return bool true в случае успеха, false в случае ошибки
   *
   * @example $this->updateSessionStatus('on', 1);
   * @description обновляет статус сессии пользователя с указанным ID / update user session status by user ID
   */
  public function updateSessionStatus(string $status, int $userId)
  {
    try {
      Database::send("UPDATE " . $this->table_name . " SET `session` = ? WHERE id = ?", [
        $status,
        $userId
      ]);
      return true;
    } catch (\PDOException $e) {
      error_log("Ошибка при обновлении статуса сессии: " . $e->getMessage());
      return false;
    }
  }
}
