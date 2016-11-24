<?php
require_once('modelDB.php');
require_once('teamsModels.php');

class partidoModel extends modelDB{
  private $modelTeams;

  function __construct(){
    parent::__construct();
    $this->modelTeams = new teamsModel();

  }

  function getPartidos()  {
    $select = $this->db->prepare("SELECT * FROM partido ORDER BY fecha ASC");
    $select->execute();
    $partidos = $select->fetchAll(PDO::FETCH_ASSOC);
    foreach ($partidos as $key => $partido) {
      $partido["local"]=$this->modelTeams->getTeam($partido["id_local"]);
      $partido["visitante"]=$this->modelTeams->getTeam($partido["id_visitante"]);
      $partidos[$key]=$partido;
    }
  return $partidos;
  }

  function getPartidosPorEquipo($id){
    $equipo=$this->db->prepare("SELECT * FROM partido WHERE id_local=? OR id_visitante=?");
    $equipo->execute(array($id,$id));
    $partidos = $equipo->fetchAll(PDO::FETCH_ASSOC);
    foreach ($partidos as $key => $partido) {
      $partido["local"]=$this->modelTeams->getTeam($partido["id_local"]);
      $partido["visitante"]=$this->modelTeams->getTeam($partido["id_visitante"]);
      $partidos[$key]=$partido;
    }

  return $partidos;
}


 function insertPartido($partido){
    $insert = $this->db->prepare("INSERT INTO `partido` (`id_local`, `id_visitante`, `fecha`) VALUES (?,?,?)");
    $insert->execute(array($partido["id_local"],$partido["id_visitante"],$partido["fecha"]));
    $fk_tarea = $this->db->lastInsertId();
    }


  function getPartido($id)  {
    $select = $this->db->prepare("SELECT * FROM `partido` WHERE `partido`.`id_partido` = ?");
    $select->execute(array($id));
    $partido = $select->fetch(PDO::FETCH_ASSOC);
  return $partido;
  }

function updatePartido($partido){
  $edit =$this->db->prepare("UPDATE `partido` SET `id_local` = ?, `id_visitante` = ?, `fecha` = ? WHERE `partido`.`id_partido` = ?");
  $edit->execute(array($partido["id_local"],$partido["id_visitante"],$partido["fecha"],$partido["id_partido"]));
  }

function deletePartido($partido){
  $delete = $this->db-> prepare("DELETE FROM `partido` WHERE `partido`.`id_partido` = ?");
  $delete->execute(array($partido["id_partido"]));
  }

}
?>
