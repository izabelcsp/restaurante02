<?php 
include('../includes/conexao.php');
?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="index.php">Add New Record</a></p>
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title">CRUD Operation Using PHP PDO</h3> </div>
          <div class="panel-body">
          <?php
          $query = "SELECT * from tb_pratos";
          $res = mysqli_query($conexao,$query);

          // conta o numero de registros
          $total = mysqli_num_rows($res);

          ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Código</th>
                  <th>Nome do Prato</th>
                  <th>Categoria</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Calorias</th>
                  <th>Destaque</th>
                  
                </tr>
              </thead>
              <tbody>
      <?php
      // adiciona uma linha e retorna para a execução 
      while($dados=mysqli_fetch_array($res)){
        $id = $dados['id']
        ?>
                  <tr>
                    <td><?php echo $dados ['id'] ?></td>
                    <td><?php echo $dados ['codigo'] ?></td>
                    <td><?php echo $dados ['nome'] ?></td>
                    <td><?php echo $dados ['categoria'] ?></td>
                    <td><?php echo $dados ['descricao'] ?></td>
                    <td><?php echo $dados ['preco'] ?></td>
                    <td><?php echo $dados ['calorias'] ?></td>
                    <td><?php echo $dados ['destaque'] ?></td>
                    <td><button><a href="editar_pratos.php?idprato=<?php echo $id ?>">Alterar</button></a></td>
                    <td><button><a href="">Excluir</button></a></td>
                  </tr> 
                  <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>