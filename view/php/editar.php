<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/style/editar.css">
    <title>Editar</title>
</head>
<body>
    <!-- FORMULARIO DE METODO POST -->
    <form class='box' method='POST' action='#'>
        <h1>Editar</h1>
        <input type='text' placeholder='nome' value = "" name="nome">
        <input type="email" placeholder="gmail" name="gmail">
        <input type="password" placeholder="senha" name="senha">
        <input type="text" placeholder="numero de telefone" name="numero"><br>
        <input type="submit" value = "editar" name="editar">
        <a class="blaa"href="/index.php">voltar</a>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../../app/action/resources.php";
editar();
