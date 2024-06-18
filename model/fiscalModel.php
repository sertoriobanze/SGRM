<?php

include_once "../controller/fiscController.php";

class FiscalModel extends FiscalController{


    public function addFiscal($nome, $senha, $contacto, $codigoFiscal) {
        $this->setFiscal($nome, $senha, $contacto, $codigoFiscal);
    // return $user;
    }

    public function updateFiscalById($id, $nome, $senha, $contacto, $codigoFiscal) {
        $this->updateFiscal($id, $nome, $senha, $contacto, $codigoFiscal);
    }

    public function deleteFiscalById($id) {
        $this->deleteFiscal($id);
    }

    public function listFiscais() {
        return $this->getFiscais();
    }




}