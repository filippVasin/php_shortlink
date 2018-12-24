<?php

/**
Включаем сессию;
 */
if (session_id() == '') {
    session_start();
}
/**
Массив ошибок;
 */
$errors = array();
if (!empty($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $item) {
        $errors[] = $item;
    }
    unset($_SESSION['errors']);
}

/**
Массив сообщений;
 */
$messages = array();
if (!empty($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $item) {
        $messages[] = $item;
    }
    unset($_SESSION['messages']);
}