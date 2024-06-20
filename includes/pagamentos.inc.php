<?php
include_once "../model/pagamentosModel.php";
session_start();

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    $idFiscal = $user["codigoFiscal"];
   
    $cdVendedor = $_POST["cdFiscal"];
    $tipo = $_POST["tipo"];
    $Valor = $_POST["valor"];
    $status = "pendente";
    // echo $nome;

    var_dump($Valor);
    $model = new PagamentosModel();

    $saber = $model->knowUser($cdVendedor);

    if ($saber) {
        $model->addPagamento($Valor, $tipo, $status, $idFiscal, $cdVendedor);
        $_SESSION['validMessage'] = "Pagamento feito com sucesso";
        header("Location: ../pages/fiscal.php");
    } else {
        $_SESSION['errorMessage'] = "O Codigo do Vendedor nao Existe, Verefique e Tente Novamente";

        header("Location: ../pages/fiscal.php");
    }
} else {
    header("Location: ../pages/login.html");
}
