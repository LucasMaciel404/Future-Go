<?php
class Database //ira fazer a conexão do banco de dados;
{
    const HOST = "localhost";//nome do host;
    const DATABASE = "test";//nome do banco de dados; 
    const USER = "root";//usuario do banco de dados;
    const PASSWORD = "";//senha do banco de dados;
    private function conecte()//função fara a conexao com o banco e retornara a variavel de conexao;
    {
        try //caso a tentativa de conexao de certo;
        {
            $con = new PDO("mysql:host=" .$this::HOST. ";dbname=".$this::DATABASE,$this::USER,$this::PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $con;
        }
        catch(PDOException $e)//coloca o tipo de erro em uma variavel
        {
            echo 'ERRO: ' . $e->getMessage();////exibe o ERRO na tela caso ocorra algumproblema com a conexao do banco de dados; 
        }
    } 
    public function select()//executa o comando select do banco de dados e retorna um array associativo com informaçoes do banco de dados;
    {
        $con = $this->conecte();//utilizando a funçao conecte();
        $sql = ("SELECT *FROM alunos ");//comando que ira ser executado no banco de dados;
        $resp = $con->prepare($sql);//prepra o comando SQL para execução;
        $resp->execute(array ());//executa o comando SQL;

        $resultado = $resp->fetchAll(PDO::FETCH_ASSOC);//retorna o resultado em um array associativo;

        return $resultado;//retorna o array associativo;
    }
        /*    public function inner_join()
         *{
         *       
         *       //Puxando a conexão com o banco de dados com inner join
         *       $con = $this->conecte();
         *       $sql = "SELECT *FROM alunos INNER JOIN gmail on alunos.curso = cursos.id";
         *       $resp = $con->prepare($sql);
         *       $resp->execute(array ());
         *       $resultado = $resp->fetchAll(PDO::FETCH_ASSOC);
         *       return $resultado;
         * }
         */
    public function delet($id)//deleta uma informaçao especifica do banco de dados;
    { 
        $con = $this->conecte();//conecta ao banco de dados;
        $sql = "DELETE FROM alunos WHERE id = $id";//comando SQL;
        $resposta = $con->prepare($sql);//prepara o comando SQL para execução
        $resposta->execute();//executa o comando SQL;
    }
    public function update($id, $nome, $gmail)//atualiza informaçoes especificas do banco de dados;
    {
        $con = $this->conecte();//conecta com o banco de dados;
        $nome = htmlspecialchars($_POST['nome']?? null);//impede contra sql_inject e recebe a variavel nome via $_POST;
        $gmail = htmlspecialchars($_POST['gmail']?? null);//impede contra sql_inject e recebe a variavel gmail via $_POST;
        $sql = "UPDATE alunos SET  nome = '$nome', gmail = '$gmail' where id = $id";
        $resp = $con->prepare($sql);
        $resp->execute();
        //$sql = "UPDATE alunos SET  gmail = '$gmail' where id = $id";
        //$resp = $con->prepare($sql);
        //$resp->execute();
    }
    public function criete()//coloca uma nova informaçao no banco de dados;
    {
        $con = $this->conecte();//conecta no banco de dados
        $nome = htmlspecialchars($_POST['nome']?? null);//impede contra sql_inject e recebe a variavel nome via $_POST;
        $gmail = htmlspecialchars($_POST['curso']?? null);//impede contra sql_inject e recebe a variavel gmail via $_POST;
        $sql = "INSERT INTO alunos (nome, gmail) VALUES ('$nome','$gmail')";//comando SQL;
        $resp = $con->prepare($sql);//preparando o comando SQL para execuçao;
        $resp->execute();//executa o comando SQL;
    }
}