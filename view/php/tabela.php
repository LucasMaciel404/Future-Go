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
    <div id="titulo">
        <center> <h1 >Tabela de Usuarios</h1></center>
    </div>
    

<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Numero</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php require_once __DIR__ . '/../../app/action/resources.php'; tabela(); ?>
    </tbody>
</table>
</body>
</html>