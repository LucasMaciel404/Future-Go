<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/style/style.css">
    <title>Document</title>
</head>
<body>
    <center> <h1 id="titulo">Tabela de Usuarios</h1></center>
<div class="body">
<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">nonme</th>
        <th scope="col">curso</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php require_once __DIR__ . '/../../app/action/resources.php'; tabela(); ?>
    </tbody>
    </table>
</div>
</body>
</html>