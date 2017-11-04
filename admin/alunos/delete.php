<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-alunos.php'; ?>
<?php verificarLogin() ?>
<?php 
	$id = $_POST['id'];
	if ($_POST) {
			delete_aluno($id);
		header('location:index.php');
	}
?>