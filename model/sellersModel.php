<?php
include_once "../controller/sellersController.php";

class SellersModel extends SellersController{

     // Métodos públicos para chamar os métodos protegidos

     public function addSeller($nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo) {
        $this->setSeller($nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo);
    }

    public function updateSellerById($id, $nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo) {
        $this->updateSeller($id, $nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo);
    }

    public function deleteSellerById($id) {
        $this->deleteSeller($id);
    }

    public function listSellers() {
        return $this->getSellers();
    }
}