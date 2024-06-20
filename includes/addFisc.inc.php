<?php

include_once "../model/fiscalModel.php";

$nome = $_POST["nome"];
$cdUsuer = $_POST["cdUsuario"];
$senha = $_POST["senha"];
$contacto = $_POST["contacto"];
$apelido = $_POST["apelido"];

// var_dump($nome. " ".$cdUsuer ." ". $senha." ". $confirmSenha ." ". $contacto . "" . $apelido);

$fiscal = new FiscalModel();

$fiscal->addFiscal($nome,$apelido,$senha,$contacto,$cdUsuer);


