<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-alunos.php'; ?>
<?php verificarLogin() ?>
<?php
	$id = $_GET['id'];
	$alunos = lista_aluno_por_id($id);
?>

<div class="cointainer">
	<div class="page-header">
		<h2>Alterar<small>Aluno</small></h2>		
	</div>	
	<form action="#" method="POST">
	  <div class="form-group">
	    <label>Nome</label>
	    <input type="text" name="nome" class="form-control" value="<?php echo $alunos['nome'] ?>" required>
	</div>
    <div class="form-group">	    
	    <label>C.P.F</label>
	    <input type="text" name="cpf" class="form-control" value="<?php echo $alunos['cpf'] ?>" required>
	 </div>
    <div class="form-group">	    	    
	    <label>e-Mail</label>
	    <input type="email" name="email" class="form-control" value="<?php echo $alunos['email'] ?>" required>
	</div>
    <div class="form-group">	    	
	    <label>R.G</label>
	    <input type="text" name="rg" class="form-control" value="<?php echo $alunos['rg'] ?>" required>
	</div>
	<div class="form-group">	        
	    <label>Dta Nascimento</label>
	    <input type="date" name="dtnasc" class="form-control" value="<?php echo $alunos['dt_nascimento'] ?>" required>
	    <label>Senha</label>
	    <input type="password" name="senha" class="form-control" value="<?php echo $alunos['senha'] ?>" >
	  </div>
	  <a class="btn btn-info" href="/dexterescola/admin/alunos/index.php" role="button">Voltar</a>
	  <button type="submit" class="btn btn-default">Gravar</button>
	</form>'
</div>
<?php include_once '../layout/_rodape.php'; ?>
s
<?php 
	if ($_POST) {
		var_dump($_POST);

		update_aluno( $id,
					 $_POST['nome'],
					 $_POST['email'],
					 $_POST['senha'],
					 $_POST['cpf'],
					 $_POST['rg'],
					 $_POST['dtnasc']
			);
		header('location:index.php');
	}
?>