<?php
include 'classes/exercicios.class.php';
$exercicio = new Exercicios();

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];

    $exercicio->adicionar($nome, $categoria);
    header('Location: gestao_exercicios.php');

}else{
    echo '<script type="text/javascript">alert("Exercicio inexistente");</script>';
    
}