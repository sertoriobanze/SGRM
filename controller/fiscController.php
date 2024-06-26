<?php

include_once "../classes/dbh.php";

class FiscalController extends Dbh {
    // Método protegido para adicionar um fiscal
    protected function setFiscal($nome, $apelido, $senha, $contacto, $codigoFiscal) {
        try {
            $sql = "INSERT INTO `fiscal`(`nome`, `apelido`, `senha`, `contacto`, `codigoFiscal`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $fiscal = $stmt->execute([$nome, $apelido, $senha, $contacto, $codigoFiscal]);

            if ($fiscal) {
                echo "Fiscal adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um fiscal
    protected function updateFiscal($id, $nome, $apelido, $senha, $contacto, $codigoFiscal) {
        try {
            $sql = "UPDATE `fiscal` SET `nome` = ?, `apelido` = ?, `senha` = ?, `contacto` = ?, `codigoFiscal` = ? WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$nome, $apelido, $senha, $contacto, $codigoFiscal, $id]);

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
            $fiscais = $stmt->fetchAll();

            return $fiscais;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }
    protected function getvendedores() {
        try {
            $sql = "SELECT COUNT(*) AS total_vendedores FROM vendedores;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $fiscais = $stmt->fetch();

            return $fiscais['total_vendedores'];
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }
 protected function getFisc() {
        try {
            $sql = "SELECT COUNT(*) AS total_fiscais FROM fiscal;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $fiscais = $stmt->fetch();

            return $fiscais['total_fiscais'];
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }
//    protected function getTotalValor() {
//     try {
//         $sql = "SELECT SUM(valor) AS total_valor FROM pagamentos;";
//         $stmt = $this->connect()->prepare($sql);
//         $stmt->execute();
//         $totalValor = $stmt->fetch();

//         return $totalValor['total_valor'];
//     } catch (PDOException $e) {
//         echo "Erro: " . $e->getMessage();
//         return 0;
//     }
// }
}

