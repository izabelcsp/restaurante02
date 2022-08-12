<?php
    include('includes/cabecalho.php');
    include('includes/conexao.php');

    $cprato = $_GET['prato'];

    $sql = "SELECT * FROM tb_pratos WHERE codigo = '$cprato'";

    $dados = $conexao->query($sql);

    $dados = $result->fetch_assoc();

?>

		<div class="ghost-element">
		</div>
           
        <div class="product-page small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">

                <div class="product-section">
                    <div class="product-info small-12 large-5 columns no-padding">

                        <h3><?php echo $dados['nome']?></h3>
                        <h4><?php echo $dados['categoria']?></h4>
                        <p><?php echo $dados['descricao']?></p>

                        <h5><b>Preço: </b><?php echo $dados['preco']?></h5>
                        <h5><b>Calorias: </b><?php echo $dados['caloria']?></h5> 
                    </div>

                    <div class="product-picture small-12 large-7 columns no-padding">
                        <img src="img/cardapio/<?php echo $dados ['codigo']?>.jpg" alt="picanha">
                    </div>

                </div>

                <div class="go-back small-12 columns no-padding">
                    <a href="cardapio.html"><< Voltar ao Cardápio</a>
                </div>

            </div>
        </div>
            
<?php
    include_once('includes/rodape.php');
?>