<?php
session_start();
include_once "../model/fiscalModel.php";
$model = new FiscalModel();
$dados = $model->listFiscais();

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Table layout</title>

    <link rel="stylesheet" href="style/table.css" />
  </head>

  <body>
    <div class="contTable">
      <div class="filter"></div>

      <table>
        <tr>
          <th>#</th>

          <th>Nome</th>

          <th>Apelido</th>

          <th>Contacto</th>
        </tr>

       <?php
                 
       
       ?>
      </table>
    </div>
  </body>
</html>
