<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-cursos.php'; ?>
<?php verificarLogin() ?>
<?php
	var_dump($_GET);
	$id = $_GET['id'];
	$cursos = lista_curso_por_id($id);
?>
<div class="cointainer">
	<div class="page-header">
		<h2>Novo <small>Curso</small></h2>		
	</div>	
	<form action="#" method="POST">
	  	<div class="form-group">
	    	<label>Nome</label>
	    	<input type="text" name="nome" class="form-control" value="<?php echo $cursos['nome']?>" required>
	 	</div>
		<div class="form-group">
		    <label>Tipo</label>
		    <input type="text" name="tipo" class="form-control" value="<?php echo $cursos['tipo']?>" required>
		</div>  
		<div class="form-group">
		    <label>Carga Horaria</label>
		    <input type="text" name="carga" class="form-control" value="<?php echo $cursos['carga_horaria']?>" required>
		</div>  
		<div class="form-group">
		    <label>Pré Requisitos</label>
		    <input type="text" name="requisitos" class="form-control" value="<?php echo $cursos['requisitos']?>" required>
		</div>  

		<a class="btn btn-info" href="/dexterescola/admin/cursos/index.php" role="button">Voltar</a>
		<button type="submit" class="btn btn-default">Gravar</button>
	</form>'
</div>
<?php
	if ($_POST) {
		update_curso( $id,
					 $_POST['nome'],
					 $_POST['tipo'],
					 $_POST['carga'],
					 $_POST['requisitos']
			);
	}
?>
<?php include_once '../layout/_rodape.php'; ?>