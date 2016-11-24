<?php
require_once ("modelDB.php");
require_once("userModel.php");
require_once("partidoModel.php");


class ModelComentarios extends modelDB{
  private $userModel;
  private $partidoModel;

  function __construct(){
    parent::__construct();
    $this->userModel= new userModel();
    $this->partidoModel=new partidoModel();

  }

function getComentariosPorPartido($id_partido){
  $sentencia= $this->db->prepare("SELECT * from comentario where fk_partido=?");
  $sentencia->execute(array($id_partido));
  $comentarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($comentarios as $key => $comentario) {
    $comentarios[$key]["user"]=$this->userModel->getUser($comentario["fk_user"])["nick"];
  }
  return $comentarios;
}

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * from comentario where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    $comentario = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $comentario;
  }

function getComentarios(){
  $sentencia = $this->db->prepare("SELECT * from comentario");
  $sentencia->execute();
  $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($comentarios as $key => $comentario) {
    $comentarios[$key]["email"]=$this->userModel->getUser($comentario["fk_user"])["email"];
    $comentarios[$key]["partido"]=$this->partidoModel->getPartido($comentario["fk_partido"])["id_partido"];
  }
  return $comentarios;
}



function eliminarComentario($id_comentario){
  $sentencia = $this->db->prepare("DELETE from comentario WHERE id_comentario=?");
  $sentencia->execute(array($id_comentario));
}

function crearComentario($id_partido,$usuario,$comentario,$puntaje){
  $sentencia = $this->db->prepare("INSERT INTO comentario(fk_partido,fk_user,comentario,puntaje) values(?,?,?,?)");
    $sentencia->execute(array($id_partido,$usuario,$comentario,$puntaje));
    return $this->db->lastInsertId();
}
}
?>
