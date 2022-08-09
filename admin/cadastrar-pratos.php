<?php
    include('../includes/conexao.php');

    $imagem = $_FILES['imagem'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $calorias = $_POST['calorias'];
    $destaque = $_POST['destaque'];

    $dir = "../img/cardapio/";

    // para renomear a img
    $imagem["name"] = $codigo."jpg";

    if(move_uploaded_file($imagem["tmp_name"], "$dir".$imagem["name"])){echo "arquivo enviador com sucesso";
    }
    else {
        echo "Erro ao cadastrar";
    }

    $sql = "INSERT INTO tb_pratos (codigo, nome, categoria, descricao, preco, calorias, destaque) VALUES ('$codigo', '$nome', '$categoria', '$destaque', '$preco','$calorias','$destaque')";

    $conexao->query($sql);

    $conexao->close();

    header('location: listar-pratos.php');

?>

