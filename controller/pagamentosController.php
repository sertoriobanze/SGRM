<?php
session_start();
include_once "../classes/dbh.php";

class PagamentosController extends Dbh {
    // Método protegido para adicionar um pagamento
    protected function setPagamento( $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        try {
            $sql = "INSERT INTO `pagamentos`(`dataPagamento`, `valor`, `metodoPagamento`, `Status`, `codFiscal`, `codComerciante`) VALUES (now(), ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $pagamento = $stmt->execute([ $valor, $metodoPagamento, $status, $idFiscal, $idComerciante]);

            if ($pagamento) {
                echo "Pagamento adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um pagamento
    protected function updatePagamento($idPagamento, $valor, $metodoPagamento, $status, $idFiscal, $idComerciante) {
        try {
            $sql = "UPDATE `pagamentos` SET `valor` = ?, `metodoPagamento` = ?, `Status` = ?, `codFiscal` = ?, `codComerciante` = ? WHERE `idPagamento` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([ $valor, $metodoPagamento, $status, $idFiscal, $idComerciante, $idPagamento]);

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

    protected function saberVendendor($vend){
        $sql ="SELECT * from vendedores where codigo = ?";
        try{
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$vend]);
            $result = $stmt->fetchAll(); 
            if($result){
                return true;
            }else{
                $_SESSION['errorMessage'] = "O codigo do Vendedor nao existe";
             //   header("Location")
                // echo "nao existe";
            }
        }catch(PDOException $e){
           echo "Erro: " . $e->getMessage();
            return []; 
        }
    }
protected function getTotalValor() {
    try {
        $sql = "SELECT SUM(valor) AS total_valor FROM pagamentos;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $totalValor = $stmt->fetch();

        return $totalValor['total_valor'];
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        return 0;
    }
}
protected function getValorPE() {
    try {
        $sql = "SELECT SUM(valorEntregar) AS total_valor FROM fiscal;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $totalValor = $stmt->fetch();

        return $totalValor['total_valor'];
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        return 0;
    }
}



   
}

