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

namespace App\Controllers;

use App\Config\Database;
use App\Models\Network\Network;
use App\Models\User\User;
use App\Models\Network\Message;

class AuthController extends Network
{

    /**
     * @return [type]
     * 
     * @example $this->onLogin();
     * @description вход в систему / login to system
     * 
     */
    public function onLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
            return false;
        }

        $mail = trim($_POST['mail'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($mail) || empty($password)) {
            Message::set('error', 'Пожалуйста, заполните все поля');
            self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
        }

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            Message::set('error', 'Неверный формат почты');
            self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
        }

        try {
            $user = (new User())->getUser('mail', $mail);

            if ($user && password_verify($password, $user['password'])) {
                // Регенерируем ID сессии
                Network::regenerate();

                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'mail' => $user['mail']
                ];
                Message::set('success', 'Вы успешно вошли в систему');
                return self::onRedirect($_ENV['REDIRECT_SIGN_USER']);
            } else {
                Message::set('error', 'Неверная почта или пароль');
                return self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
            }
        } catch (\Exception $e) {
            Message::set('error', 'Произошла ошибка при входе в систему');
            return self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
        }
    }

    /**
     * @return [type]
     * 
     * @example $this->onRegist();
     * @description регистрация пользователя / register user
     * 
     */
    public function onRegist()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = (string) trim($_POST['mail'] ?? '');
            $username = (string) trim($_POST['username'] ?? '');
            $password = $_POST['password'] ?? '';
            $group = (int) $_POST['group'] ?? '';

            // Валидация
            if (empty($username) || empty($password) || empty($mail) || empty($group)) {
                Message::set('error', 'Пожалуйста, заполните все поля');
                return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
            }

            if (strlen($username) < 3) {
                Message::set('error', 'Имя пользователя должно содержать минимум 3 символа');
                return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
            }

            if (strlen($password) < 6) {
                Message::set('error', 'Пароль должен содержать минимум 6 символов');
                return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
            }

            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                Message::set('error', 'Неверный формат почты');
                return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
            }

            try {
                $result_name = Database::send("SELECT COUNT(*) as count FROM " . User::$table_name . " WHERE username = ?", [$username]);
                if (is_array($result_name) && $result_name[0]['count'] > 0) {
                    Message::set('error', "Пользователь с именем: $username уже существует");
                    self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
                    return false;
                }

                $result_email = Database::send("SELECT COUNT(*) as count FROM " . User::$table_name . " WHERE mail = ?", [$mail]);
                if (is_array($result_email) && $result_email[0]['count'] > 0) {
                    Message::set('error', "Почта: $mail уже существует");
                    return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
                }

                Database::send("INSERT INTO " . User::$table_name . " (username, mail, password, `group`, session) VALUES (?, ?, ?, ?, ?)", [
                    $username,
                    $mail,
                    password_hash($password, PASSWORD_DEFAULT),
                    $group,
                    'on' //session element
                ]);
                Message::set('success', "Регистрация успешна! $username, Теперь вы можете войти");
                return self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
            } catch (\PDOException $e) {
                Message::set('error', 'Ошибка при регистрации: ' . $e->getMessage());
                return self::onRedirect($_ENV['REDIRECT_REG_UNSIGN_USER']);
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
            $userModel = new User();
            $userModel->updateSessionStatus('off', $_SESSION['user']['id']);
        }

        // Уничтожаем сессию
        Network::destroy();

        Message::set('success', 'Вы успешно вышли из системы');
        return self::onRedirect($_ENV['REDIRECT_LOG_UNSIGN_USER']);
    }
}