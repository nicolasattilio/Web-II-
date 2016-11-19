<?php

class teamsModel{
  private $db;

  function __construct(){
<<<<<<< HEAD
    $this->db = new PDO('mysql:host=localhost;dbname=futapp;charset=utf8', 'root', '');
=======
    $this->db = new PDO('mysql:host=localhost;dbname=futapp;charset=utf8', 'root', 'root');
>>>>>>> parent of c8fbd8f... añadiendo db
  }

  function getTeams()  {
    $select = $this->db->prepare("SELECT * FROM team ORDER BY equipo ASC");
    $select->execute();
    $equipo = $select->fetchAll(PDO::FETCH_ASSOC);
  return $equipo;
  }

  function insertTeam($team,$imagen){
     $path="imagen/".uniqid();
     move_uploaded_file($imagen, $path);
     $insert = $this->db-> prepare("INSERT INTO team(equipo, jugador_1, jugador_2, jugador_3, jugador_4, jugador_5,squad) VALUES(?,?,?,?,?,?,?)");
     $insert->execute(array($team["equipo"],$team["jugador_1"],$team["jugador_2"],$team["jugador_3"],$team["jugador_4"],$team["jugador_5"],$path));
     $fk_tarea = $this->db->lastInsertId();
  }

  function deleteTeam($team){
    $delete = $this->db-> prepare("DELETE FROM `team` WHERE `team`.`id` = ?");
    $delete->execute(array($team["id"]));
  }

  function getTeam($id)  {
    $select = $this->db->prepare("SELECT * FROM `team` WHERE `team`.`id` = ?");
    $select->execute(array($id));
    $equipo = $select->fetch(PDO::FETCH_ASSOC);
  return $equipo;
  }

  function editTeam($team,$imagen){
    $path="imagen/".uniqid();
    move_uploaded_file($imagen, $path);
    $edit = $this->db->prepare("UPDATE `team` SET `equipo` = ?, `jugador_1` = ?, `jugador_2` = ?, `jugador_3` = ?, `jugador_4` = ?, `jugador_5` = ?, `squad` = ? WHERE `team`.`id` = ?");
    $edit ->execute(array($team["equipo"],$team["jugador_1"],$team["jugador_2"],$team["jugador_3"],$team["jugador_4"],$team["jugador_5"],$path,$team["id"]));
    }
}


?>
