<?php
    include('../includes/conexao.php');

    $id = $_GET['idprato'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $calorias = $_POST['calorias'];
    $destaque = $_POST['destaque'];

    $sql = "UPDATE tb_pratos set  codigo = '$codigo', nome = '$nome',  categoria = '$categoria', preco = '$preco', calorias = '$calorias', descricao = '$descricao', destaque = '$destaque' WHERE id = $id";

    $conexao->query($sql);

    $conexao->close();

    header('location: listar-pratos.php');

?>