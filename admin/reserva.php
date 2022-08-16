<?php

include('../includes/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data = $_POST['data_reserva'];
$mensagem = $_POST['mensagem'];
$pessoas = $_POST['numero_pessoas'];

$sql = "INSERT INTO tb_reserva (id, nome, telefone, email, data_reserva, mensagem, numero_pessoas) VALUES ('$nome', '$telefone', '$email', '$data_reserva',' $mensagem', '$numero_pessoas')";

$conexao->query($sql);

$conexao->close();

header('location: .php');

?>