<?php

// Inclua a classe controladora de vendedores
include_once "../controller/sellersController.php";

// Instancie o controlador de vendedores
$sellersController = new SellersController();

// // Adicionar um vendedor
// $sellersController->addSeller("alfredo", "machiane", "autonomo", "papelaria", 8787878787, "aMachiane2");

// // Atualizar um vendedor
// $sellersController->updateSellerById(1, "nome_atualizado", "apelido_atualizado", "tipo_vendedor_atualizado", "tipo_estabelecimento_atualizado", "contacto_atualizado", "codigo_atualizado");

// // Deletar um vendedor
// $sellersController->deleteSellerById(1);

// Listar todos os vendedores
// $sellers = $sellersController->listSellers();
// foreach ($sellers as $seller) {
//     echo "ID: " . $seller['id'] . " Nome: " . $seller['nome'] . " Apelido: " . $seller['apelido'] . " Tipo de Vendedor: " . $seller['tipoVendedor'] . " Tipo de Estabelecimento: " . $seller['tipoEstabelecimento'] . " Contacto: " . $seller['contacto'] . " Código: " . $seller['codigo'] . "<br>";
// }


