<?php
    include('../includes/conexao.php');

    $id = $_GET['idreserva'];

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data_reserva = $_POST['data_reserva'];
    $mensagem = $_POST['mensagem'];
    $numero_pessoas = $_POST['numero_pessoas'];
    

    $sql = "UPDATE tb_reserva set  nome = '$nome',  telefone = '$telefone', email = '$email', data_reserva = '$data_reserva', mensagem = '$mensagem', numero_pessoas = '$numero_pessoas' WHERE id = $id";

    $conexao->query($sql);

    $conexao->close();

    header('location: listar-reserva.php');

?>