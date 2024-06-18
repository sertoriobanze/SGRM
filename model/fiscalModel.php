<?php

include_once "../controller/fiscController.php";

class FiscalModel extends FiscalController{

 // Métodos públicos para chamar os métodos protegidos
 public function addFiscal($nome, $apelido, $senha, $contacto, $codigoFiscal) {
    $this->setFiscal($nome, $apelido, $senha, $contacto, $codigoFiscal);
}

public function modifyFiscal($id, $nome, $apelido, $senha, $contacto, $codigoFiscal) {
    $this->updateFiscal($id, $nome, $apelido, $senha, $contacto, $codigoFiscal);
}

public function removeFiscal($id) {
    $this->deleteFiscal($id);
}

public function listFiscais() {
    return $this->getFiscais();
}




}