<?php

require_once ('core/core.php');

if (empty($_POST['long_url'])) {
    $_SESSION['errors'][] = 'Введите URL';
    redirect('/form.php');
}

$short_url = ShortLink::createShortUrl($_POST['long_url']);

if ($short_url) {
    $_SESSION['messages'][] = 'Добавлена ссылка - '. $_SERVER['SERVER_NAME'] . '/' .$short_url;
} else {
    $_SESSION['errors'][] = 'Что-то пошло не так';
}

redirect('/form.php');