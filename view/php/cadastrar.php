<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/style/cadastrar.css">
    <title>Sing Up</title>
</head>
<body>
    <form class = "box" method="POST" action="/view/php/cadastrar.php">
        <h1>Sing Up</h1>
        <input type="text" placeholder="nome" name="nome">
        <input type="email" placeholder="Gmail" name="gmail">
        <input type="password" placeholder="senha" name="senha">
        <input type="text" placeholder="numero de telefone" name="numero"><br>
        <input type="submit" value = "continuar" name="continuar">
        <a class="blaa"href="/index.php">voltar</a>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../../app/db/database.php";
$con = new Database;
if (isset($_POST['continuar']) and isset($_POST['nome']) and isset($_POST['gmail']) and isset($_POST['senha']) and isset($_POST['numero']))//verifica se a conteudo nas variaveis;
{
    $con->criete($nome,$gmail);
    header("location: /index.php");
}