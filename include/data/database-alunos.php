<?php 

require_once 'conexao.php';

function insert_aluno($nome,$email, $senha, $cpf,$rg,$dtnasc){
	$con = conecta();

	$sql = "INSERT INTO tb_alunos (
								   nome,
								   email,
								   senha,
								   cpf,
								   rg,
								   dt_nascimento) 
								   VALUES 
								   (
								   '$nome',
								   '$email',
								   '$senha',
								   '$cpf',
								   '$rg',
								   '$dtnasc'
									)";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_alunos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;

}

function lista_aluno_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_alunos WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

function update_aluno($id, $nome, $email, $senha, $cpf,$rg,$dtnasc){
	$con = conecta();

	$sql = "UPDATE tb_alunos SET 
				nome          = '$nome',
				email         = '$email',
				senha         = '$senha',
				cpf           = '$cpf',
				rg            = '$rg',
				dt_nascimento =  '$dtnasc'
			WHERE 
				id = '$id'";

	pg_query($con, $sql);
	
	desconecta($con);
}

function delete_aluno($id){
	$con = conecta();

	$sql = "DELETE FROM tb_alunos WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}
