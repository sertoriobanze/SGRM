<?php

include_once "../model/userModel.php";

$nome =  $_POST["nome"];
$senha =  $_POST["senha"];

// echo "nome:" . $nome ."Senha:" . $senha;

$usm = new UserModel();
$usm->loginUser($nome,$senha);