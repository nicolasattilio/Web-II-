<?php
include_once('modelDB.php');

class userModel extends modelDB
{
  function getUser($userEmail){
     $sentencia = $this->db->prepare("SELECT * from user WHERE email=?");
     $sentencia->execute(array($userEmail));
     return $sentencia->fetch(PDO::FETCH_ASSOC);
   }
}






?>
