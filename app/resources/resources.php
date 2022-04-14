<?php
require_once __DIR__ . "/../db/database.php";
function tabela(){
    $a = new Database;
    $resultado = $a->select();
    $cont = 0;
    foreach($resultado as $key){
        $cont += 1;
        $id = $key['id'];
        $nome = $key['nome'];
        $curso = $key['curso'];
        echo"   <tr><th scope='row'>$cont</th>
                    <td>$nome</td>
                    <td>$curso</td>
                    <td><a class='btn1' href='/public/php/editar.php'>Editar</a></td>
                    <td><a class='btn2' href='/public/php/excluir.php?nid=$id'>Excluir</a></td>
                </tr>"; 
    }

}