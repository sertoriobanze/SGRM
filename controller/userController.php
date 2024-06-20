<?php

include_once "../classes/dbh.php";

class UserController extends Dbh {
    // Método protegido para adicionar um usuário
    protected function setUser($nome, $senha, $permisao) {
        try {
            $sql = "INSERT INTO `user`(`nome`, `senha`, `permisao`) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $user = $stmt->execute([$nome, $senha, $permisao]);

            if ($user) {
                echo "Usuário adicionado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para atualizar um usuário
    protected function updateUser($id, $nome, $senha, $permisao) {
        try {
            $sql = "UPDATE `user` SET `nome` = ?, `senha` = ?, `permisao` = ? WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$nome, $senha, $permisao, $id]);

            if ($result) {
                echo "Usuário atualizado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para deletar um usuário
    protected function deleteUser($id) {
        try {
            $sql = "DELETE FROM `user` WHERE `id` = ?";
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$id]);

            if ($result) {
                echo "Usuário deletado com sucesso!";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Método protegido para listar todos os usuários
    protected function getUsers() {
        try {
            $sql = "SELECT * FROM `user`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll();

            return $users;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }

    // Método protegido para verificar login do usuário
    protected function checkUser($nome, $senha) {
        try {
            $sql = "SELECT * FROM `user` WHERE `usuario` = ? AND `senha` = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, $senha]);
            $user = $stmt->fetch();

            return $user;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
    }
protected function checkFiscal($codigoFiscal, $senha) {
        try {
            $sql = "SELECT * FROM `fiscal` WHERE `codigoFiscal` = ? AND `senha` = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$codigoFiscal, $senha]);
            $fiscal = $stmt->fetch();

            return $fiscal;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
    }
    

   
}

