<?php 
//////////////////////////////////////////
// Conexao com o postgree
//psql -h localhost aula04 barto
//////////////////////////////////////////

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "barto";
$password = "1234";


$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

function conecta(){
	global $connection_string;
 	return pg_connect($connection_string);
}

function desconecta($con){
	pg_close($con);
}