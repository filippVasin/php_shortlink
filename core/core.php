<?php
/**
dev env;
 */
require_once('dev.php');
/**
Путь к скрипту на сервере;
 */
// Путь к скрипту на сервере;
define('ROOT_PATH', isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] !='' ? $_SERVER['DOCUMENT_ROOT'] : '/../..');
// Маршрут который нам передал пользователь;
define('ROUTE', isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
// Адрес ресурса;
define('URL', isset($_SERVER['SERVER_NAME']) ? (isset($_SERVER["HTTPS"]) ? 'https://'.$_SERVER['SERVER_NAME'] : 'http://'.$_SERVER['SERVER_NAME']) : '');

/**
Включаем сессию;
 */
require_once (ROOT_PATH.'/core/session.php');
/**
загрузка классов;
 */
require_once  ROOT_PATH.'/classes/DB.php';
require_once  ROOT_PATH.'/classes/ShortLink.php';
/**
Доп функции;
 */
require_once (ROOT_PATH.'/core/functions.php');
/**
Подключаем vendor;
 */
require_once (ROOT_PATH. '/vendor/autoload.php');

/**
включаем шаблонизатор;
 */
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(ROOT_PATH. '/views');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));