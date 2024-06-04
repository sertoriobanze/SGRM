<?php

include_once "../classes/dbh.php";

class UserController extends Dbh {

protected function setUser($nome, $senha){

    $sql = "INSERT INTO users(nome,senha) VALUES (?,?)";
    $stmt = $this->connect()->prepare($sql);
   $user = $stmt->execute([$nome,$senha]);
   if($user){
    echo"certor 2";
   }
}
    


}