<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21333469_igorowen"; // usuário do MySQL
$pass = "SenhaDoWebhost1@"; // senha do MySQL
$dbname = "id21333469_fatectesteaulamarcio"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
