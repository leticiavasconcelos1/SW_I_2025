<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="css/estilo_index.css" rel="stylesheet" />
</head>
<body>
    <h1> Bem Vindo ao Projeto </h1>
    <div class="container"> 
    <form action="processa.php" method="post">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Digite seu email </label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="senha" />
    <label class="form-label" for="form2Example2">Digite sua senha </label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
        <label class="form-check-label" for="form2Example34">Lembre de mim </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Esqueceu a senha?</a>
    </div>
  </div>

  <!-- Submit button -->
  <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
<input type="submit" class="btn btn-primary btn-block mb-4" value="entrar">


</form>

    </div>
    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>
