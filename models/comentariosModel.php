<?php
include_once ("modelDB.php");


class ModelComentarios extends modelDB{

function getComentariosPorPartido($id){
  $comentarios = $this->db->prepare("SELECT * FROM comentario WHERE fk_partido=?");
  $comentarios->execute($id);
  return $comentarios->fetchAll(PDO::FETCH_ASSOC);
}
/*function getComentario($id_comentario){
  $comentario = $this->db->prepare("SELECT comentario.*, usuario.nombre AS usuario FROM comentario, usuario WHERE comentario.fk_id_usuario = usuario.id_usuario AND  id_comentario = ?" );
  $comentario->execute(array($id_comentario));
  return $comentario->fetch(PDO::FETCH_ASSOC);
}*/
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
