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

             
                    <td><button><a href="">Alterar</button></a></td>
                    <td><button><a href="">Excluir</button></a></td>
                  </tr>  
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