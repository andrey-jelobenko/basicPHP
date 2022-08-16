<?php
require_once 'model/User.php';

session_start();

$pageHeader = 'Добро пожаловать'; // Объявим какую-нибудь переменную, которую будем использовать в view/home.php

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header('Location: index.php?controller=security');
    die();
}

require_once 'view/home.php'; // Подключаем файл с внешним видом