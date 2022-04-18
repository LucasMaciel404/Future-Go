<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/style/cadastrar.css">
    <title>login</title>
</head>
<body>
    <form class = "box" method="POST" action="/view/php/login.php">
        <h1>login</h1>
        <input type="email" placeholder="Gmail" name="gmail">
        <input type="password" placeholder="senha" name="senha"><br>
        <input type="submit" value = "continuar" name="continuar">
        <a class="blaa"href="/index.php">voltar</a>
    </form>
</body>
</html>
<?php
require_once __DIR__ . '/../../app/db/database.php';

if ($_POST){
    $f = new Database;
    $resultado = $f->select();
    foreach($resultado as $key){
        if ($key['gmail'] == $_POST['gmail']){
            session_start();
            $_SESSION['login'] = True;
            if($key['senha'] == $_POST['senha']){header('location: /../../index.php');}
        }
    }
}