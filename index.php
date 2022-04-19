<?php
session_start();
$_SESSION['login']?? false;
require_once __DIR__ . "/vendor/autoload.php";//importando o autoload do composer;
require_once __DIR__ . "/app/action/resources.php";//importando o autoload do composer;
require_once __DIR__ . "/app/db/database.php";//importando minhas funçoes da tabela;
require_once __DIR__ . "/includes/header.php";//importando meu nav-bar;
require_once __DIR__ . "/view/php/tabela.php";//importando a tabela que imprime meu banco de dados;
$url = "localhost:8000/index.php";
$a = (parse_url($url,  PHP_URL_PATH));
echo $a;