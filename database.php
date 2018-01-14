<?php
/* Connection to the server MySQL */
$mysqli = new mysqli('testreg', 'root', '2018JulBon', 'registered_users13');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

echo 'success';

