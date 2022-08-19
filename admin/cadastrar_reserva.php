<?php

include('../includes/conexao.php');

try{

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_reserva = $_POST['data_reserva'];
$mensagem = $_POST['mensagem'];
$numero_pessoas = $_POST['numero_pessoas'];

$sql = "INSERT INTO tb_reserva (nome, telefone, email, data_reserva, mensagem, numero_pessoas) VALUES ('$nome', '$telefone', '$email', '$data_reserva',' $mensagem', '$numero_pessoas')";

$conexao->query($sql);

$conexao->close();

// header('location: listar_reserva.php');

}catch(PDOException $erro){
    echo $erro->getMessage();
}



?>