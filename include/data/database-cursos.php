<?php 

require_once 'conexao.php';

function insert_curso($nome,$tipo, $carga, $requisitos){
	$con = conecta();

	$sql = "INSERT INTO tb_cursos (
								   nome,
								   tipo,
								   carga_horaria,
								   requisitos
								   ) 
								   VALUES 
								   (
								   '$nome',
								   '$tipo',
								   '$carga',
								   '$requisitos'
									)";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_cursos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_cursos";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;

}

function lista_curso_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_cursos WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

function update_curso($id, $nome,$tipo, $carga, $requisitos){
	$con = conecta();

	$sql = "UPDATE tb_cursos SET 
				nome          = '$nome',
				tipo          = '$tipo',
				carga_horaria = '$carga',
				requisitos    = '$requisitos'
			WHERE 
				id = '$id'";

	pg_query($con, $sql);
	
	desconecta($con);
}

function delete_curso($id){
	$con = conecta();

	$sql = "DELETE FROM tb_cursos WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}
