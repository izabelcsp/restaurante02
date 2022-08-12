<?php
include_once('includes/cabecalho.php');
include_once('includes/conexao.php');
?>
<div class="ghost-element">
</div>

<div class="cardapio-list small-11 large-12 columns no-padding small-centered">

    <div class="global-page-container">
        <div class="cardapio-title small-12 columns no-padding">
            <h3>Cardapio</h3>
            <hr>
            </hr>
        </div>
        <?php
        // SELECT DISTINCT = trans categorias diferentes 
        $sql = "SELECT DISTINCT categoria FROM tb_pratos";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $categoria = $row['categoria'];
        ?>
                <!-- Bloco de cardapio -->
                <div class="category-slider small-12 columns no-padding">
                    <h4><?php echo $categoria ?></h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">
                            <?php
                            $sql2 = "SELECT * FROM tb_pratos WHERE 
                                categoria = '$categoria'";

                            $result2 = $conexao->query($sql2);
                            if ($result2->num_rows > 0) {
                                while ($row2 = $result2->fetch_assoc()) {
                            ?>

                                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                                        <div class="cardapio-item">
                                            <a href="prato.php?prato=<?php echo $row2['codigo']?>">

                                                <div class="item-image">
                                                    <img src="img/cardapio/<?php echo $row2['codigo']?>.jpg" alt="<?php echo $row2['nome']?>"/>
                                                </div>

                                                <div class="item-info">


                                                    <div class="title"><?php echo $row2['nome']?></div>
                                                </div>

                                                <div class="gradient-filter">
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>

                </div>
        <?php
            }
        } else {
            echo 'não foi';
        }
        ?>
    </div>
</div>

<?php
include_once('includes/rodape.php')
?>

</html>