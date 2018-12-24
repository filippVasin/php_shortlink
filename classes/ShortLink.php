<?php

require_once 'DB.php';

class ShortLink
{

    private static $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    /**
    Создание короткой сссылки;
     */
    public static function createShortUrl($url){

        if ($res = self::checkLongUrl($url)) {
            // если ссылка уже была, тогда восстонавливаем её
            if ($res['deleted_at'] != null) {
                self::restoreShortURL($res['id']);
                return $res['short_url'];
            }
        }

        // получаем будуший id для генерации кода короткой ссылки на его основе
        $new_id = DB::getValue("SELECT auto_increment FROM information_schema.tables WHERE table_name='short_links'");
        $code = self::generationShortCode($new_id);

        $short_url = $code;
        // приводим к формату перед записью
        $url = self::clearUrl($url);

        // добавляем ссылку в базу
        DB::add("INSERT INTO `short_links` SET `long_url` = ? , `short_url` = ?, `create_date` = now()",
            [$url, $short_url]);

        return $short_url;
    }
    /**
    Есть ли ссылка;
     */
    public static function checkLongUrl($url){
        $url = self::clearUrl($url);
        $res = DB::getRow('SELECT * FROM short_links WHERE long_url like ?', $url);
        return $res;
    }
    /**
    Получаем длинную ссылку из короткой;
     */
    public static function getLongUrl($short_url) {
        $long_url = DB::getValue("SELECT `long_url` FROM `short_links` WHERE short_url = ?", array($short_url));

        // приводим к формату
        if (!preg_match('#^http(s)?://#', $long_url)) {
            $long_url = 'http://' . $long_url;
        }

        return $long_url;
    }
    /**
    Список ссылок;
     */
    public static function urlList() {
        $urls = DB::getAll("SELECT * FROM short_links WHERE deleted_at is null");
        foreach ($urls as &$url) {
            $url['server_short_url'] = $_SERVER['SERVER_NAME'] . '/' . $url['short_url'];
        }
        return $urls;
    }
    /**
    Генерация кода короткой ссылки из id;
    */
    public static function generationShortCode($id) {
        $length = strlen(self::$chars);
        $code = "";
        while ($id > $length - 1) {
            // Определяем значение следующего символа
            // в коде и подготавливаем его
            $code = self::$chars[intval(fmod($id, $length))] . $code;
            // Сбрасываем $id до оставшегося значения для конвертации
            $id = floor($id / $length);
        }

        // Оставшееся значение $id меньше, чем
        // длина self::$chars
        $code = self::$chars[intval($id)] . $code;

        return $code;
    }
    /**
    чистим url;
     */
    public static function clearUrl($raw_url){
        $raw_url = trim($raw_url);
        // приводим к формату
        if (!preg_match('#^http(s)?://#', $raw_url)) {
            $raw_url = 'http://' . $raw_url;
        }
        // валидация ссылки
        if (filter_var($raw_url, FILTER_VALIDATE_URL) === FALSE) {
            die('Not a valid URL');
        }
        $urlParts = parse_url($raw_url);

        $url = preg_replace('/^www\./', '', $urlParts['host']);

        if (array_key_exists("path", $urlParts)) {
            $url .= rtrim($urlParts['path'],'/');
        }

        if (array_key_exists("query", $urlParts)) {
            $url .= '?'. $urlParts['query'];
        }

        return $url;
    }
    /**
    мягкое удаление;
     */
    public static function deleteShortURL($id) {
        return DB::set("UPDATE short_links SET deleted_at = now() WHERE id = ?", array($id));
    }
    /**
    восстановление удалённоей ссылки;
     */
    public static function restoreShortURL($id) {
        return DB::set("UPDATE short_links SET deleted_at = null WHERE id = ?", array($id));
    }
    //
    /**
    конечное удаление;
     */
    public static function forceDeleteShortURL($id) {
        return DB::set("DELETE FROM short_links WHERE id = ?", array($id));
    }

}