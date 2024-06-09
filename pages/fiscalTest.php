<?php

// Inclua a classe controladora de fiscais
include_once "../controller/fiscController.php";

// // Instancie o controlador de fiscais
$fiscalController = new FiscalController();

// // Adicionar um fiscal
// $fiscalController->addFiscal("nome_exemplo", "senha_exemplo", "contacto_exemplo", "codigoFiscal_exemplo");

// // Atualizar um fiscal
// $fiscalController->updateFiscalById(1, "nome_atualizado", "senha_atualizada", "contacto_atualizado", "codigoFiscal_atualizado");

// Deletar um fiscal
// $fiscalController->deleteFiscalById(2);

// // // Listar todos os fiscais
// $fiscais = $fiscalController->listFiscais();
// foreach ($fiscais as $fiscal) {
//     echo "ID: " . $fiscal['id'] . " Nome: " . $fiscal['nome'] . " Contacto: " . $fiscal['contacto'] . " Código Fiscal: " . $fiscal['codigoFiscal'] . "<br>";
// }


