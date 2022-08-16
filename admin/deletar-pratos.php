<?php
    include('../includes/conexao.php');
    $id = $_GET['idprato'];

    $sql = "DELETE FROM tb_pratos WHERE id = $id";

    $conexao->query($sql);
    $conexao->close();

    header('location: listar-pratos.php');
    exit;



?>