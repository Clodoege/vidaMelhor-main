<?php
require 'conexao.class.php';

class Exercicios
{
    private $con;

    private $id;

    private $nome;

    private $categoria;

    public function __construct()
    {
        $this->con = new Conexao();
    }

    public function __set($atributo, $valor)
    {
        $this->atributo = $valor;
    }

    public function __get($atributo)
    {
        return $this->atributo;
    }

    public function adicionar($nome, $categoria)
    {
      try{
          $this->nome = $nome;
          $this->categoria = $categoria;

          $sql = $this->con->conectar()->prepare('INSERT INTO exercicio(nome, categoria)
              VALUES(:nome, :categoria)');  // parei aqui em 02/05/2024
          $sql->bindParam(":nome");
          $sql->bindParam(":categoria");

          $sql->execute();
          return TRUE;

        }catch (PDOException $ex){
            return 'ERRO: '.$ex->getMessage();

        }
    }
    
}
