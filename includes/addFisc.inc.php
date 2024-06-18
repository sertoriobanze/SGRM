<?php

include_once "../model/fiscalModel.php";

$nome = $_POST["nome"];
$cdUsuer = $_POST["cdUsuario"];
$senha = $_POST["senha"];
$confirmSenha = $_POST["ConfirmSenha"];
$contacto = $_POST["contacto"];

// var_dump($nome. " ".$cdUsuer ." ". $senha." ". $confirmSenha ." ". $contacto);

$fiscal = new FiscalModel();

$fiscal->addFiscal($nome,$senha,$contacto,$cdUsuer);


