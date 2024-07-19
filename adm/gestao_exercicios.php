<?php
include 'classes/exercicios.class.php';
$exercicio = new Exercicios();
?>
<h1>Gestão de Exercicios Vida Melhor</h1>

<hr>
<button><a href="adicionarExercicio.php">ADICIONAR</></button>
<br><br>
<table border="3" width=100%>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CATEGORIA</th>
        <th>AÇÕES</th>
    </tr>

    <?php
        $lista = $exercicio->listar();
        foreach ($lista as $item):
    ?>
        <tbody>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['categoria']; ?></td>

                <td>
                    <a href="editarExercicio.php?id=<?php echo $item['id']; ?>">EDITAR</a>
                    <a href="excluirExercicio.php?id=<?php echo $item['id']; ?>" onclick ="return confirm('Tem certeza que quer excluir este exercício?')">| EXCLUIR</a>
                </td>
            </tr>
        </tbody>
    <?php
    endforeach;
    ?>
</table>
