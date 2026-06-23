<?php
  include 'conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AULA PIOLI</title>
</head>
<body>
    <center><h1>AULA PIOLI</h1></center>
    <hr/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div class="text-center my-3">
        <button type="button" class="btn-btn-warining" data-bs-target="modal" data-bs-target="#exampleModal">
        <b>CADASTRAR ALUNOS</b>
        </button>
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 card mb-4 rouneded-3 shadow-sm text-start -p0">
                <div class="card-header">
                    <b>LOGIN</b>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <label class="form-label">Login</label>
                        <input class="form-control" name="login" type="text" required/>
                        <br/>
                        <label class="form-label">Senha</label>
                        <input class="form-control" name="senha" type="password" required/>
                        <br/>
                        <button type="submit" class="btn btn-success">LOGAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>