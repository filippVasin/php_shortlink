<?php

require_once ('core/core.php');

if (ShortLink::deleteShortURL($_GET['id'])) {
    $_SESSION['messages'][] = 'Ссылка удалена';
} else {
    $_SESSION['errors'][] = 'Что-то пошло не так';
}

redirect('list.php');