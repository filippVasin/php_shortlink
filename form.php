<?php

require_once ('core/core.php');

echo $twig->render('form.html', [
    'title' => 'Введите URL',
    'messages' => $messages,
    'errors' => $errors,
]);

