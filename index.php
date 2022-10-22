<!-- ⦁	Crie uma aplicação WEB (AGENDA) que salve em Banco de Dados o nome de telefone para contato; -->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

    <link href="./assets/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Clientes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    
    
    <div class = "container">
      <div class = "row">
        <div class = "col mt-5">
          <?php
            switch(@$_REQUEST["page"]){ // o @ na frente do request tira o warning => Warning: Undefined array key "page" in C:\xampp\htdocs\CRUD_unipe\CRUD_unipe\index.php on line 49
              case "novo":
                include("novoCliente.php");
                break;
              case "listar":
                include("listarCliente.php");
                break;
              case "salvar":
                include("salvarCliente.php");
                break;
              case "editar":
                include("editarCliente.php");
                break;
              default:
                echo "<h1> Bem Vindo =) </h1>";
            }
          ?>
        </div>
      </div>
    </div>

   
        <script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
    
      </body>
    </html>
