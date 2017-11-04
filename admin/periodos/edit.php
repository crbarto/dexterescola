<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>

<?php 

	$id = $_GET['id'];
	$periodo = lista_periodo_por_id($id);
	var_dump($periodo);
?>

<h1>Editar<small>periodo</small></h1>

<form action="#" method="POST">
  <div class="form-group">
    <label>ID</label>
    <input type="text" name="id" value="<?php echo $periodo['id']; ?>" class="form-control" disabled>
  </div>
  <div class="form-group">
    <label>Descricao</label>
    <input type="text" name="descricao" value="<?php echo $periodo['descricao']; ?>" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-default">Atualizar</button>

</form>'
<?php require_once '../layout/_rodape.php'; ?>