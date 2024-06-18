<?php

include_once "../model/sellersModel.php";

$nome = $_POST["nome"];
$apelido = $_POST["apelido"];
$tipo= $_POST["tipo"];
$contacto = $_POST["contacto"];
$codigo = $_POST["codigo"];
$tipoVendedor;

// var_dump($codigo . $apelido . $contacto . $tipo . $nome);

$seller = new SellersModel();
$seller->addSeller($nome,$apelido,$tipoVendedor,$tipo,$contacto,$codigo);
