<?php
include_once('models/modelDB.php');

class futappModel extends modelDB{

  function verImagenes($id){
    $select=$this->db->prepare("SELECT * FROM imagen WHERE fk_partido=?");
    $select->execute(array($id));
    $imagenes = $select->fetchAll(PDO::FETCH_ASSOC);
    return $imagenes;
  }

  function cargarimagen($id,$imagenes){
    foreach ($imagenes as $key => $imagen) {
      $path="imagen/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insert=$this->db->prepare("INSERT INTO imagen(fk_partido,picture) VALUES (?,?)");
      $insert->execute(array($id,$path));
    }
  }
}
