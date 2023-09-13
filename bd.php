<?php
//valida as informações enviadas ao banco de dados
 require_once("conexao.php");

 $name = $_POST ['nome'];
 $email = $_POST ['email'];
 $telefone = $_POST ['telefone'];
 $mensagem = $_POST ['mensagem'];

 $sql = "INSERT INTO  cadastro (nome, email, telefone, mensagem) VALUES ('$name', '$email', '$telefone', '$mensagem')";
 $result = $mysqli->query($sql);



?>