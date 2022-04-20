<?php
use App\db\Database;
session_start();
$_SESSION['login'] ?? false;

require_once __DIR__ . "/vendor/autoload.php";//importando o autoload do composer;
require_once __DIR__ . "/includes/header.php";//importando meu nav-bar;
require_once __DIR__ . "/view/php/tabela.php";//importando a tabela que imprime meu banco de dados;
//$url = "localhost:8000/index.php";
//$a = (parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH));
//var_dump($a);
