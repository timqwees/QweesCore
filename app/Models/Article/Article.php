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

namespace App\Models\Article;

use App\Config\Database;
use App\Models\Network\Network;
use App\Models\Network\Message;
use PDO;

class Article extends Network
{
    public $table_name;

    public function __construct()
    {
        $this->table_name = 'article';
    }

    /**
     * Добавляет новую статью в базу данных
     * 
     * @param string $title Заголовок статьи
     * @param string $content Содержимое статьи
     * @param int $userId ID пользователя (автора)
     * 
     * @return bool true в случае успеха, false в случае ошибки
     * 
     * @example $this->addArticle('Заголовок', 'Текст статьи', 1);
     * @description добавляет новую статью с указанным заголовком, содержимым и ID пользователя / add new article with title, content and user id
     */
    public function addArticle(
        string $title,
        string $content,
        int $userId
    ) {
        $timestamp = (self::$db->getAttribute(PDO::ATTR_DRIVER_NAME) === 'sqlite') ? 'CURRENT_TIMESTAMP' : 'NOW()';
        try {
            if (Database::send("INSERT INTO " . $this->table_name . " (title, content, user_id, created_at) VALUES (?, ?, ?, $timestamp)")) {//проблема с показом сооющения при обновлении сраниц
                return Message::set('success', 'Статья успешно создана') && true;
            }
            Message::set('error', 'Ошибка при создании статьи');
            return false;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при создании статьи: ' . $e->getMessage());
            return false;
        }
    }


    /**
     * Удаляет статью по её ID и ID пользователя
     * 
     * @param int $id ID статьи
     * @param int $userId ID пользователя (автора)
     * @return bool true в случае успеха, false в случае ошибки
     * 
     * @example $this->removeArticle(5, 1);
     * @description удаляет статью с указанным ID, принадлежащую пользователю с данным ID / remove article by id and user id
     */
    public function removeArticle(int $id, int $userId)
    {
        try {
            self::$db->beginTransaction();
            $result = Database::send("DELETE FROM " . $this->table_name . " WHERE id = ? AND user_id = ?", [$id, $userId]);
            Message::set('success', 'Статья успешно удалена');

            if ($result) {
                self::$db->commit();
                return true;
            }

            Message::set('error', 'Ошибка при удалении статьи');
            self::$db->rollBack();//отмена транзакции
            return false;
        } catch (\PDOException $e) {
            if (self::$db->inTransaction()) {//если транзакция активна
                self::$db->rollBack();
            }
            Message::set('error', 'Ошибка при удалении статьи: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Получает статью по её ID и ID пользователя
     * 
     * @param int $user_index ID пользователя (автора)
     * @param int $article_index ID статьи
     * 
     * @return array|false Массив с данными статьи и пользователя или false в случае ошибки
     * 
     * @example $this->currentArticle(1, 5);
     * @description получает статью с указанным ID, принадлежащую пользователю с данным ID / get article by article id and user id
     */
    public function currentArticle(int $user_index, int $article_index)
    {
        try {
            $send = Database::send("SELECT art.*, user.username FROM " . $this->table_name . " art JOIN users_php user ON art.user_id = user.id WHERE art.user_id = ? AND art.id = ?", [$user_index, $article_index]);
            return $send ? $send : false;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при получении статьи: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Получает все статьи с именами пользователей
     * 
     * @return array|false Массив со всеми статьями и именами пользователей или false в случае ошибки
     * 
     * @example $this->getArticleAll();
     * @description получает все статьи с именами пользователей / get all articles with usernames
     */
    public function getArticleAll()
    {
        try {
            $result = Database::send("SELECT art.*, user.username FROM " . $this->table_name . " art JOIN users_php user ON art.user_id = user.id ORDER BY art.created_at DESC");
            return $result;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при получении статей: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Получает все статьи пользователя по его ID
     * 
     * @param int $user_index ID пользователя (автора)
     * 
     * @return array|false Массив со статьями пользователя или false в случае ошибки
     * 
     * @example $this->getAllArticleById(1);
     * @description получает все статьи, принадлежащие пользователю с данным ID / get all articles by user id
     */
    public function getAllArticleById(int $user_index)
    {
        try {
            $result = Database::send("SELECT art.*, user.username FROM " . $this->table_name . " art JOIN users_php user ON art.user_id = user.id WHERE art.user_id = ?", [$user_index]);
            return $result;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при получении статьи: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Получает все статьи пользователя по его ID
     * 
     * @param int $my_id ID пользователя (автора)
     * 
     * @return array|false Массив со статьями пользователя или false в случае ошибки
     * 
     * @example $this->getListMyArticle(1);
     * @description получает все статьи, принадлежащие пользователю с данным ID / get all articles by user id
     */
    public function getListMyArticle(int $my_id)
    {
        try {
            $result = Database::send("SELECT art.*, user.username FROM " . $this->table_name . " art JOIN users_php user ON art.user_id = user.id WHERE user.id = ? ORDER BY art.created_at DESC", [$my_id]);
            return $result;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при получении статей пользователя: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Получает статью пользователя по его ID и ID статьи
     * 
     * @param int $user_index ID пользователя (автора)
     * @param int $article_index ID статьи
     * 
     * @return array|false Массив с данными статьи или false в случае ошибки
     * 
     * @example $this->getMyArticle(1, 5);
     * @description получает статью, принадлежащую пользователю с данным ID и ID статьи / get article by user id and article id
     */
    public function getMyArticle(int $user_index, int $article_index)
    {
        try {
            $result = Database::send("SELECT art.*, user.username FROM " . $this->table_name . " art JOIN users_php user ON art.user_id = user.id WHERE user.id = ? AND art.id = ?", [$user_index, $article_index]);
            return $result;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при получении статей пользователя: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Обновляет статью по её ID и ID пользователя
     * 
     * @param string $title Заголовок статьи
     * @param string $content Содержимое статьи
     * @param int $articleId ID статьи
     * @param int $userId ID пользователя (автора)
     * 
     * @return bool true в случае успеха, false в случае ошибки
     * 
     * @example $this->onUpdateArticle('Новый заголовок', 'Новый контент', 5, 1);
     * @description обновляет статью с указанным ID и ID пользователя / update article by article id and user id
     */
    public function onUpdateArticle(string $title, string $content, int $articleId, int $userId)
    {
        try {
            $timestamp = (self::$db->getAttribute(PDO::ATTR_DRIVER_NAME) === 'sqlite') ? 'CURRENT_TIMESTAMP' : 'NOW()';
            $result = Database::send("UPDATE " . $this->table_name . " SET title = ?, content = ?, created_at = $timestamp WHERE id = ? AND user_id = ?", [$title, $content, $articleId, $userId]);
            if ($result) {
                Message::set('success', 'Статья успешно обновлена');
                return true;
            }
            Message::set('error', 'Ошибка при обновлении статьи');
            return false;
        } catch (\PDOException $e) {
            Message::set('error', 'Ошибка при обновлении статьи: ' . $e->getMessage());
            return false;
        }
    }
}