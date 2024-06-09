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
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return [];
        }
    }

    // Método protegido para verificar login do usuário
    protected function checkUser($nome, $senha) {
        try {
            $sql = "SELECT * FROM `user` WHERE `nome` = ? AND `senha` = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, $senha]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return null;
        }
    }

    // Métodos públicos para chamar os métodos protegidos

    public function addUser($nome, $senha, $permisao) {
        $this->setUser($nome, $senha, $permisao);
    }

    public function updateUserById($id, $nome, $senha, $permisao) {
        $this->updateUser($id, $nome, $senha, $permisao);
    }

    public function deleteUserById($id) {
        $this->deleteUser($id);
    }

    public function listUsers() {
        return $this->getUsers();
    }

    public function loginUser($nome, $senha) {
        $user = $this->checkUser($nome, $senha);
        if ($user) {
            echo "Login bem-sucedido! Bem-vindo, " . $user['nome'];
            return $user;
        } else {
            echo "Nome ou senha incorretos.";
            return null;
        }
    }
}
?>
