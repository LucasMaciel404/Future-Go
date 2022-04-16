<?php
require_once __DIR__ . "/../../app/db/database.php";
require_once __DIR__ . "/../../app/action/resources.php";
$id  = $_GET['nid'];
excluir($id);
header("location: /index.php");//redireciona para a tela inicial;