<?php
require_once('models/teamsModels.php');
require_once('models/partidoModel.php');
require_once('view/equipoView.php');

class teamsController{

  private $modelTeams;
  private $teamView;

  public function __construct(){
    $this->modelTeams = new teamsModel();
    $this->viewTeams = new teamsView();

  }
  public function getTeams(){
    $teams = $this->modelTeams->getTeams();
    $this->viewTeams->mostrar($teams);
  }


  public function insertTeam(){
    if(isset($_POST["equipo"]) && isset($_POST["jugador_1"]) && isset($_POST["jugador_2"]) && isset($_POST["jugador_3"]) && isset($_POST["jugador_4"]) && isset($_POST["jugador_5"]) && isset($_FILES["escudo"])){
        $team = array('equipo' => $_POST["equipo"] ,'jugador_1'=> $_POST["jugador_1"] , 'jugador_2'=> $_POST ["jugador_2"],'jugador_3'=> $_POST["jugador_3"],'jugador_4'=> $_POST["jugador_4"],'jugador_5'=> $_POST["jugador_5"]);
        $teams = $this->modelTeams->insertTeam($team,$_FILES["escudo"]["tmp_name"]);
        $teams = $this->modelTeams->getTeams();
        $this->viewTeams->mostrar($teams);
      } else{
      echo "Debes llenar todo el formulario: </br></br>";
      $this->viewTeams->mostrar_inscripcion();
        }
      }

  public function updateTeam(){
    if(isset($_POST["equipo"]) && isset($_POST["jugador_1"]) && isset($_POST["jugador_2"]) && isset($_POST["jugador_3"]) && isset($_POST["jugador_4"]) && isset($_POST["jugador_5"]) && isset($_FILES["escudo"])){
        $team = array('id' => $_POST['id'],'equipo' => $_POST["equipo"] ,'jugador_1'=> $_POST["jugador_1"] , 'jugador_2'=> $_POST ["jugador_2"],'jugador_3'=> $_POST["jugador_3"],'jugador_4'=> $_POST["jugador_4"],'jugador_5'=> $_POST["jugador_5"]);
        $teams = $this->modelTeams->editTeam($team,$_FILES["escudo"]["tmp_name"]);
        $teams = $this->modelTeams->getTeams();
        $this->viewTeams->mostrar_ins_admin($teams);
      } else{
      echo "Debes llenar todo el formulario: </br></br>";
      $this->viewTeams->mostrar_inscripcion();
    }

  }


  public function administradorEquipos(){
    $teams = $this->modelTeams->getTeams();
    $this->viewTeams->mostrar_ins_admin($teams);
  }


  public function editTeam(){
    if (isset($_GET['id'])){
    $id=$_GET['id'];
    $team = $this->modelTeams->getTeam($id);
    $this->viewTeams->mostrar_inscripcion_edit($team);
    }
}

  public function deleteTeam(){
      if (isset($_GET['id'])){
      $id=$_GET['id'];
      $team = $this->modelTeams->getTeam($id);
      $team = $this->modelTeams->deleteTeam($team);
      $teams = $this->modelTeams->getTeams();
      $this->viewTeams->mostrar_ins_admin($teams);
    }
  }


}

?>
