<?php
include_once('modelDB.php');

class userModel extends modelDB
{
  function getUser($userid){
     $sentencia = $this->db->prepare("SELECT * from user WHERE id_user=?");
     $sentencia->execute(array($userid));
     return $sentencia->fetch(PDO::FETCH_ASSOC);
   }
   function getUserEmail($email){
      $sentencia = $this->db->prepare("SELECT * from user WHERE email=?");
      $sentencia->execute(array($email));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    function crearUsuario ($nuevoUsuario) {
     $sentencia = $this->db->prepare("INSERT INTO user(nick,email,pass) VALUES(:nombre,:email,:password)");
     $sentencia->execute($nuevoUsuario);
 }
}






?>
