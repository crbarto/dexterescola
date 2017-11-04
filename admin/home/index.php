 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php include_once '../layout/_topo.php'; ?>
<?php verificarLogin() ?>

<h1>Home Admin</h1>
  <div class="alert alert-success"><strong><?php echo $_SESSION['usuario']?></strong> Bem, vindo.</div>

<?php include_once '../layout/_rodape.php'; ?>