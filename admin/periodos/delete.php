<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>
<?php 
	$id = $_POST['id'];
	if ($_POST) {
			exclui_periodo($id);
		header('location:index.php');
	}
?>

