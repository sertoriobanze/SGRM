<?php

include_once "../classes/dbh.php";

class FiscalController extends Dbh {
    // Método protegido para adicionar um fiscal
    protected function setFiscal($nome, $senha, $contacto, $codigoFiscal) {
        try {
            $sql = "INSERT INTO `fiscal`(`nome`, `senha`, `contacto`, `codigoFiscal`) VALUES (?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $fiscal = $stmt->execute([$nome, $senha, $contacto, $codigoFiscal]);

            if ($fiscal) {
                echo "Fiscal adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um fiscal
    protected function updateFiscal($id, $nome, $senha, $contacto, $codigoFiscal) {
        try {
            $sql = "UPDATE `fiscal` SET `nome` = ?, `senha` = ?, `contacto` = ?, `codigoFiscal` = ? WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$nome, $senha, $contacto, $codigoFiscal, $id]);

            if ($result) {
                echo "Fiscal atualizado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para deletar um fiscal
    protected function deleteFiscal($id) {
        try {
            $sql = "DELETE FROM `fiscal` WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$id]);

            if ($result) {
                echo "Fiscal deletado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para listar todos os fiscais
    protected function getFiscais() {
        try {
            $sql = "SELECT * FROM `fiscal`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $fiscais = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $fiscais;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }

    // Métodos públicos para chamar os métodos protegidos

    public function addFiscal($nome, $senha, $contacto, $codigoFiscal) {
        $this->setFiscal($nome, $senha, $contacto, $codigoFiscal);
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
?>
