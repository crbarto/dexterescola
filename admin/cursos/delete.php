<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-cursos.php'; ?>
<?php verificarLogin() ?>
<?php 
	$id = $_POST['id'];
	if ($_POST) {
		delete_curso($id);
		header('location:index.php');
	}
?>
