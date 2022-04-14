<?php
class Database{
    const HOST = "localhost";
    const DATABASE = "test";
    const USER = "root";
    const PASSWORD = "";
    private function conecte(){
        try{
            $con = new PDO("mysql:host=" .$this::HOST. ";dbname=".$this::DATABASE,$this::USER,$this::PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $con;
        }
        catch(PDOException $e){
            echo 'ERRO: ' . $e->getMessage();
        }
    } 

    public function select(){
        //conecta no banco e entrega o resultado em um array
        $con = $this->conecte();
        $resp = $con->prepare("SELECT *FROM alunos ");
        $resp->execute(array ());

        $resultado = $resp->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public function inner_join(){
        
        //Puxando a conexão com o banco de dados com inner join
        $con = $this->conecte();
        $sql = "SELECT *FROM alunos INNER JOIN cursos on alunos.curso = cursos.id";
        $resp = $con->prepare($sql);
        $resp->execute(array ());
        $resultado = $resp->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function delet($id){
        $con = $this->conecte();
        $sql = "DELETE FROM alunos WHERE id = $id";
        $resposta = $con->prepare($sql);
        $resposta->execute();
        return $resposta;
    }
    public function atualizar($id, $nome, $curso){
        $con = $this->conecte();
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $sql = "UPDATE alunos SET  nome = '$nome',curso = '$curso' where id = $id";
        $resp = $con->prepare($sql);
        $resp->execute();   
    }


}