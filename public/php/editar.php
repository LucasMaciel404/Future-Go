<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/style/editar.css">
    <title>Login</title>
</head>
<body>
    <form class="box" method="POST" action="#">
        <h1>Login</h1>
        <input type="text" placeholder="nome do aluno" name="nome">
        <input type="text" placeholder="Curso" name="Curso"> <br>
        <input type="submit" value = "editar" name="submit">
        <a class="blaa"href="/index.php">voltar</a>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../../app/db/database.php";
$con = new database;
$id = $_GET['nid'];
$nome = $_POST['nome'];
$curso = $_POST['curso'];
if (isset($_POST)){
    $con->atualizar($id, $nome,$curso);
}