<?php

session_start();

include_once "../controller/userController.php";

class UserModel extends UserController{

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

    // public function loginUser($nome, $senha) {
    //     $user = $this->checkUser($nome, $senha);
    //     if ($user) {
    //         echo "Login bem-sucedido! Bem-vindo, " . $user['nome'];
    //         $_SESSION['user'] = $user;

    //         header("Location: ../pages/dashbord.php");
    //         return $user;
    //     } else {
    //         echo "Nome ou senha incorretos.";
    //         return null;
    //     }
    // }

    public function loginUser($nome, $senha) {
        // Tentar autenticar como usuário
        $user = $this->checkUser($nome, $senha);
        if ($user) {
            echo "Login bem-sucedido! Bem-vindo, " . $user['nome'];
            $_SESSION['user'] = $user;
            header("Location: ../pages/dashbord.php");
            return $user;
        }

        // Tentar autenticar como fiscal
        $fiscal = $this->checkFiscal($nome, $senha);
        if ($fiscal) {
            echo "Login bem-sucedido! Bem-vindo, " . $fiscal['nome'];
            $_SESSION['user'] = $fiscal;
            header("Location: ../pages/fiscal.php");
            return $fiscal;
        }

        // Se não autenticou em nenhuma das tabelas
        echo "Nome ou senha incorretos.";
        return null;
    }

}