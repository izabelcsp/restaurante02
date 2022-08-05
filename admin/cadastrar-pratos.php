<?php
    include('../includes/conexao.php');

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $calorias = $_POST['calorias'];
    $destaque = $_POST['destaque'];

    $sql = "INSERT INTO tb_pratos (codigo, nome, categoria, descricao, preco, calorias, destaque) VALUES ('$codigo', '$nome', '$categoria', '$destaque', '$preco','$calorias','$destaque')";

    $conexao->query($sql);

    $conexao->close();

    header('location: listar-pratos.php');

?>

