<?php
	require_once 'conexao.php';

	function aluno_login($email,$senha){
	$con = conecta();

	$sql = "SELECT * FROM tb_alunos WHERE email = '{$email}' and senha = '{$senha}'";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

?>