<?php
    include("config.php"); //arquivo de coneccao conm o banco
    include("index.php"); // referenciar para ele saber quem e ?page=listar
        switch(@$_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $numero = $_POST["numero"];

            $sql = "INSERT INTO clientes (nome, numero) VALUES ('{$nome}', '{$numero}')";

            $res = $connection->query($sql);
            
            if ($res == true){
                echo "<script>alert('Cadastro feito com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $numero = $_POST["numero"];

            $sql = "UPDATE clientes SET
                        nome='{$nome}',
                        numero='{$numero}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $connection->query($sql);
            
            if ($res == true){
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel editar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            echo "OLA ".$_REQUEST["id"];
            
           /* $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];
           
        
            $res = $connection->query($sql);

            if($res==true){
                echo "<script>alert('Excluido com sucesso');</script>";
                echo "<script>location.href='?page=home';</script>";
            }else{
                echo "<script>alert('Não foi possivel Excluir');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;*/
    }
?>