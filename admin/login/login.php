  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php include_once dirname(dirname(dirname(__FILE__))) . '/site/layout/_topo.php'; ?>

<?php 
	
	if ($_POST) {
		if (login($_POST)) 
    {
			header('Location:../home/index.php');
		} else {
      ?>  <div class="alert alert-danger"><strong>Erro!</strong> Usuário ou senha inválidos. </div><?php
    }

	}
 ?>
<h1>Login</h1>

<form action="#" method="POST">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="senha" class="form-control" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>

<?php require_once '../layout/_rodape.php'; ?>