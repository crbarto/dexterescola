<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">
	<div class="page-header">
		<h2>Novo <small>período</small></h2>		
	</div>	
	<form action="#" method="POST">
	  <div class="form-group">
	    <label>Descricao</label>
	    <input type="text" name="descricao" class="form-control" placeholder="digite a descricao" required>
	  </div>
	  <a class="btn btn-info" href="/dexterescola/admin/periodos/index.php" role="button">Voltar</a>
	  <button type="submit" class="btn btn-default">Gravar</button>
	</form>'
</div>
<?php include_once '../layout/_rodape.php'; ?>

<?php 
	if ($_POST) {
		insere_periodo($_POST['descricao']);
	}
?>