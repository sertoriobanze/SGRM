<?php

include_once "../classes/dbh.php";

class PagamentosController extends Dbh {
    // Método protegido para adicionar um pagamento
    protected function setPagamento($dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        try {
            $sql = "INSERT INTO `pagamentos`(`dataPagamento`, `valor`, `metodoPagamento`, `Status`, `idFiscal`, `idComerciante`) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $pagamento = $stmt->execute([$dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante]);

            if ($pagamento) {
                echo "Pagamento adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um pagamento
    protected function updatePagamento($idPagamento, $dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        try {
            $sql = "UPDATE `pagamentos` SET `dataPagamento` = ?, `valor` = ?, `metodoPagamento` = ?, `Status` = ?, `idFiscal` = ?, `idComerciante` = ? WHERE `idPagamento` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante, $idPagamento]);

            if ($result) {
                echo "Pagamento atualizado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para deletar um pagamento
    protected function deletePagamento($idPagamento) {
        try {
            $sql = "DELETE FROM `pagamentos` WHERE `idPagamento` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$idPagamento]);

            if ($result) {
                echo "Pagamento deletado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para listar todos os pagamentos
    protected function getPagamentos() {
        try {
            $sql = "SELECT * FROM `pagamentos`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $pagamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $pagamentos;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }

    // Métodos públicos para chamar os métodos protegidos

    public function addPagamento($dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        $this->setPagamento($dataPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante);
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
}
?>
