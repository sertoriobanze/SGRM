<?php

include_once "../controller/pagamentosController.php";

class PagamentosModel extends PagamentosController{

     // Métodos públicos para chamar os métodos protegidos

    public function addPagamento( $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        $this->setPagamento($valor, $metodoPagamento, $status, $idFiscal, $idComerciante);
    }

    public function updatePagamentoById($idPagamento, $dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        $this->updatePagamento($idPagamento, $dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante);
    }

    public function deletePagamentoById($idPagamento) {
        $this->deletePagamento($idPagamento);
    }

    public function listPagamentos() {
        return $this->getPagamentos();
    }
    public function knowUser($name){
    return $this->saberVendendor($name);
}

public function listTotalValor() {
    return $this->getTotalValor();
}
public function listValorPE() {
    return $this->getValorPE();
}
}