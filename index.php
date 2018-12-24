<?php

require_once ('core/core.php');

if('/' == ROUTE){
    redirect('form.php');
} else {
    $long_url = ShortLink::getLongUrl(ltrim(ROUTE,'/'));
    if ($long_url) {
        redirect($long_url);
    } else {
        echo "Нет такого сокрашения";
    }

}
