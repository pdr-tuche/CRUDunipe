<main class="container mt-5">
  <div class="bg-light p-5 rounded">
    <h1>Novo Cliente</h1>  
    <form action="salvarCliente.php" method="POST">
      <input type="hidden" name = "acao" value="cadastrar">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Digite o nome do cliente.</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
      </div>
        
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Numero</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="numero">
      </div>
         
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>      
</main>