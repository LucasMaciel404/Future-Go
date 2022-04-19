<?php
require_once __DIR__ . "/../db/database.php";
function tabela()//funçao tabela(); imprime a tabela na minha tela com os valores do banco de dados;
{
    $a = new Database; //colocando a classe Database em uma variavel;
    $resultado = $a->select();// a funçao select me retorna um array associativo com os dados do banco de dados (tendo a chave primaria como chave do array); 
    $cont = 0;//variavel criada para listar os numeros em sequencia;
    foreach($resultado as $key)//ira percorrer meu banco de dados;
    {
        $cont += 1;//contador ira receber sempre +1;
        $id = $key['id'];//recebera o id para mandar por via $_GET;
        $nome = $key['nome'];//pega a variavel nome da minha tabela;
        $gmail = $key['gmail'];//pega a variavel gmail do meu banco de dados;
        $senha = $key['senha'];//pega a variavel senha do meu banco de dados;
        $numero = $key['numero'];//pega a variavel numero do meu banco de dados;
        echo"   <tr><th scope='row'>$cont</th>
                    <td>$nome</td>
                    <td>$gmail</td>
                    <td>$senha</td>
                    <td>$numero</td>
                    "; //vai exibir conteudo em uma tabela stilizada;
        if ($_SESSION['login']?? false){
            echo"<td class='bla'><a class='btn2' href='/view/php/editar.php?nid=$id'>Editar</a></td>
                 <td class='bla'><a class='btn1' href='/view/php/excluir.php?nid=$id'>Excluir</a></td>
                 </tr>";
        }
        else{
            echo"<td></td>
                <td></td>
                </tr>";
        }
    }

}
function sair(){
     session_destroy();
}
function excluir($id)//exclue uma informaçao da tabela;
{
    $a = new Database;
    $a->delet($id);//usa a funçao da minha classe database;
}
function editar()//edita uma variavel especifica;
{
    require_once __DIR__ . "/../../app/db/database.php";
    $con = new database;
    $id = $_GET['nid'];//recebe uma variavel nid repassada pelo metodo get;
    $nome = $_POST['nome']?? null;//recebe a variavel nome pelo metodo post;
    $curso = $_POST['curso']?? null;//recebe a variavel curso pelo metodo post;
    if (isset($_POST['editar']) and isset($_POST['nome']) and isset($_POST['gmail']))//verifica se há conteudo nas variaveis;
    {
        $con->update($id, $nome,$curso);//atualiza os valores em suas respectivas variaveis;
        header('location: /index.php');//retorna o usuario para a tela inicial;
    }
}