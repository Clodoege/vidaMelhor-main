<?php
session_start();

require_once 'inc/header-inc.php';
?>
<div class="container">
    <h1>ADICIONAR EXERCICIO</h1>  
    <form method="POST" action="adicionarExercicioSubmit.php">
        <label for="nome">Nome do exercicio</label>
        <input type="text" name= "nome"/> <br><br>

        <label for="categoria">Categoria</label>
        <input type="text" name= "categoria"/> <br><br>



