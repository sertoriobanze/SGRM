<?php

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