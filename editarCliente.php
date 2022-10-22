<h1>Editar Cliente</h1>
<?php
include('config.php');
    $sql = "SELECT * FROM clientes WHERE id= ".$_REQUEST["id"];
    $res = $connection->query($sql);
    $row = $res->fetch_object();
?>
<form action="salvarCliente.php" method="POST">
      <input type="hidden" name = "acao" value="editar">
      <input type="hidden" name = "id" value="<?php echo $row->id; ?>">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Digite o nome do cliente.</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="<?php echo $row->nome; ?>">
      </div>
        
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Numero</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="numero" value="<?php echo $row->numero; ?>">
      </div>
         
      <button type="submit" class="btn btn-primary">Salvar</button>
</form>