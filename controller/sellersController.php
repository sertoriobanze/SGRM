<?php

include_once "../classes/dbh.php";

class SellersController extends Dbh {
    // Método protegido para adicionar um vendedor
    protected function setSeller($nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo) {
        try {
            $sql = "INSERT INTO `vendedores`(`nome`, `apelido`, `tipoVendedor`, `tipoEstabelecimento`, `contacto`, `codigo`) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $seller = $stmt->execute([$nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo]);

            if ($seller) {
                echo "Comerciante adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um vendedor
    protected function updateSeller($id, $nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo) {
        try {
            $sql = "UPDATE `vendedores` SET `nome` = ?, `apelido` = ?, `tipoVendedor` = ?, `tipoEstabelecimento` = ?, `contacto` = ?, `codigo` = ? WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$nome, $apelido, $tipoVendedor, $tipoEstabelecimento, $contacto, $codigo, $id]);

            if ($result) {
                echo "Comerciante atualizado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para deletar um vendedor
    protected function deleteSeller($id) {
        try {
            $sql = "DELETE FROM `vendedores` WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$id]);

            if ($result) {
                echo "Comerciante deletado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para listar todos os vendedores
    protected function getSellers() {
        try {
            $sql = "SELECT * FROM `vendedores`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $sellers = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $sellers;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }

   
}

