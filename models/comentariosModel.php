<?php
require_once ("modelDB.php");
require_once("userModel.php");


class ModelComentarios extends modelDB{
  private $userModel;

  function __construct(){
    $this->userModel= new userModel();
  }

function getComentariosPorPartido($id){
  $sentencia = $this->db->prepare("SELECT * from comentario where fk_partido=?");
  $sentencia->execute(array($id));
  $comentarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  //foreach ($comentarios as $key => $comentario) {
  //  $comentarios[$key]["user"]=$this->userModel->getUser($comentario["fk_user"])["nick"];
//  }
  return $comentarios;
}
function getComentarios(){
  $comentario = $this->db->prepare("SELECT * from comentario");
  $comentario->execute();
  return $comentario->fetchAll(PDO::FETCH_ASSOC);
}
function eliminarComentario($id_comentario){
  $sentencia = $this->db->prepare("DELETE from comentario WHERE id_comentario=?");
  $sentencia->execute(array($id_comentario));
}

function crearComentario($fk_user,$comentario,$puntaje,$id_partido){
  $sentencia = $this->db->prepare("INSERT INTO comentario(fk_user,comentario,puntaje) values(?,?,?) WHERE fk_partido=?");
    $sentencia->execute(array($fk_user,$comentario,$puntaje,$id_partido));
    return $this->db->lastInsertId();
}
}
?>
