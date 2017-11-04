<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-cursos.php'; ?>
<?php verificarLogin() ?>
<div class="cointainer">
	<div class="page-header">
		<h2>Novo <small>Curso</small></h2>		
	</div>	
	<form action="#" method="POST">
	  	<div class="form-group">
	    	<label>Nome</label>
	    	<input type="text" name="nome" class="form-control" placeholder="digite o nome do curso" required>
	 	</div>
		<div class="form-group">
		    <label>Tipo</label>
			<select name="tipo">
			  <option value="EAD">EAD</option> 
			  <option value="Presencial" selected>Presencial</option>
			</select		    
		</div>  
		<div class="form-group">
		    <label>Carga Horaria</label>
		    <input type="text" name="carga" class="form-control" placeholder="Carga Horaria" required>
		</div>  
		<div class="form-group">
		    <label>Pré Requisitos</label>
		    <input type="text" name="requisitos" class="form-control" placeholder="Requisitos" required>
		</div>  

		<a class="btn btn-info" href="/dexterescola/admin/cursos/index.php" role="button">Voltar</a>
		<button type="submit" class="btn btn-default">Gravar</button>
	</form>'
</div>
<?php
	if ($_POST) {
		insert_curso($_POST['nome'],
					 $_POST['tipo'],
					 $_POST['carga'],
					 $_POST['requisitos']
			);
	}
?>
<?php include_once '../layout/_rodape.php'; ?>