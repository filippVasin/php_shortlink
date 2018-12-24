<?php

require_once ('core/core.php');

$urls = ShortLink::urlList();

echo $twig->render('list.html', [
    'title' => 'Список ссылок',
    'messages' => $messages,
    'errors' => $errors,
    'urls' => $urls,
]);
