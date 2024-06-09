<?php

// Inclua a classe controladora de usuários
include_once "../controller/userController.php";

// Instancie o controlador de usuários
$userController = new UserController();

// Chame a função addUser com os parâmetros desejados
// $userController->addUser("teste", 123, "teste");

// Tentar login com um nome de usuário e senha
// $user = $userController->loginUser("sertorio", "1234");

// if ($user) {
//     // Login bem-sucedido
//     echo "Bem-vindo, " . $user['nome'];
// } else {
//     // Falha no login
//     echo "Nome ou senha incorretos.";
// }


// // Atualizar um usuário
// $userController->updateUserById(2, "nome_atualizado", "senha_atualizada", "user");

// Listar todos os usuários
// $users = $userController->listUsers();
// foreach ($users as $user) {
//     echo "ID: " . $user['id'] . " Nome: " . $user['nome'] . " Permissão: " . $user['permisao'] . "<br>";
// }

// Deletar um usuário
// $userController->deleteUserById(2);