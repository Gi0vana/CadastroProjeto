<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark"">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOVIE STARS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novoCadastro">Cadastro Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=filme">Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=categoria">Categorias</a>
        </li>
        <li class="nav-item">

        <a class="nav-link active" aria-current="page" href="?page=atore">Atores</a>
        </li>
        <li class="nav-item">
</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <?php
      include("config.php");
      switch(@$_REQUEST["page"]){
      case "novoCadastro";
      include("projetoCadastro/index.php");
      break;
      case "filme";
      include("projetoFilme/index.php");
      break;
      case "categoriar";
      include("salvar-usuario.php");
      break;
      case "ator";
      include("editar-usuario.php");
      break;
      default:
      print "<h1>Bem vindos!</h1>";
    }
    ?>
      
    </div>
  </div>
</nav>

  </body>
</html>