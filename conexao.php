<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "submit";

// Conexão com o banco de dados
$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}
?>
