<?php
 include_once "../classes/dbh.php";

include_once "../controller/userController.php";

class UserModel extends UserController{

public function addUser($nome,$senha){
    $this->setUser($nome,$senha);
    echo"certo";
}
public function addUser2($nome,$senha){
   
    $sql = "INSERT INTO users(nome,senha) VALUES (?,?)";
    $stmt = $this->connect()->prepare($sql);
   $user = $stmt->execute([$nome,$senha]);
   if($user){
    echo"certor 2";
   }
}




}