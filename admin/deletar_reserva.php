<?php
    include('../includes/conexao.php');
    $id = $_GET['idreserva'];

    $sql = "DELETE FROM tb_reserva WHERE id = $id";

    $conexao->query($sql);
    $conexao->close();

    header('location: listar-reserva.php');
    exit;



?>