<?php
    include('../includes/conexao.php');

    $id = $_GET['idsobre'];

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagem = $_POST['imagem'];
    
    

    $sql = "UPDATE tb_sobre set  titulo = '$titulo',  texto = '$texto', foto = '$foto', WHERE id = $id";

    $conexao->query($sql);

    $conexao->close();

    header('location: listar_sobre.php');

?>