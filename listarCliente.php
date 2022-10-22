<h1>Listar Clientes</h1>
<?php
    include("config.php");

    $sql = "SELECT * FROM clientes";

    $res = $connection->query($sql);

    $quantidadeLinhas = $res->num_rows;

    if($quantidadeLinhas > 0){
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>Numero</th>";
        echo "<th>Ações</th>";
        while($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->nome."</td>";
            echo "<td>".$row->numero."</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";
            echo '</tr>';
        }
        echo "</table>";
    }else{
        echo "<p class='alert alert=danger'> Nao encontrou resultados!</p>";
    }
?>