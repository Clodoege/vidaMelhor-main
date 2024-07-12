<?php
session_start();

require_once 'inc/header-inc.php';
?>

<div class="container">
    <h1>ADICIONAR USUÁRIO</h1>
    <form method="POST" action="adicionarUsuarioSubmit.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" /><br><br>
       
        <label for="email">Email</label>
        <input type="text" name="email" /><br><br>
       
        <label for="senha">Senha</label>
        <input type="text" name="senha" /><br><br>

        <label for="permissoes">Permissoes</label><br>

        <input type="checkbox" id="add" name="permissoes[]" value="add">
        
        <label for="add">ADICIONAR</label><br>
       
        <input type="checkbox" id="edit" name="permissoes[]" value="edit">
        <label for = "edit">EDITAR</label><br>

        <input type="checkbox" id= "del" name="permissoes[]" value="del">
        <label for = "del">DELETAR</label><br>

        <input type="checkbox" id= "super" name="permissoes[]" value="super">
        <label for="super">SUPER</label><br>

       <!--<input type="text" name="permissoes"/><br><br>-->
        <input type="submit" name="btCadastrar" value="ADICIONAR" class="btn btn-success"/>

    </form>
   

<?php
require_once 'inc/footer-inc.php';
?>
</div>    