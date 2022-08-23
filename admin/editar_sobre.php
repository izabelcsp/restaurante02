<?php
include('../includes/conexao.php');
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Código fonte formulario php" />
    <meta name="keywords" content="formulario php, bootstrap, bootstrap validator" />
    <meta name="author" content="Cristiane Faria" />

    <title>Atualizar Sobre</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <style>
        main,
        footer,
        .mensagem-alerta {
            text-align: center;
        }

        form {
            max-width: 800px;
            padding-top: 30px;
            display: block;
            margin: 0 auto;
        }

        .mensagem-alerta {
            max-width: 500px;
            margin: 20px auto;
        }
    </style>

</head>
<?php
 $sql = "SELECT * FROM tb_sobre limit 1 ";
  
 $result = $conexao->query($sql);

 $dados = $result->fetch_assoc();
?>

<body>
 
    <main class="container">
        <h1>Editar Sobre</h1>
        <br>

        <form class="form-horizontal" action="atualizar_sobre.php?idreserva=<?php echo $id ?>" method="post" role="form" data-toggle="validator" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-3">Titulo</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $dados['titulo'] ?>" placeholder="Nome completo">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Texto</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleTextarea" rows="6" id="texto" name="texto" placeholder="sua mensagem" required><?php echo $dados['texto'] ?></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Imagem sobre</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="foto" id="foto" placeholder="escolha a imagem">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 text-right">
                    <input class="btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                    <a name="formulario"></a>
                    <div class="mensagem-alerta"></div>
                </div>
            </div>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>


</body>
</html>