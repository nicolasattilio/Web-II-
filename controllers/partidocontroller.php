<?php
require('view/equipoView.php');
require('view/partidoView.php');
require('models/teamsModels.php');
require('models/partidoModel.php');

class partidoController{
  private $partidoModel;
  private $partidoView;

  public function __construct(){
    $this->modelTeams = new teamsModel();
    $this->partidoModel = new partidoModel();
    $this->partidoView = new partidoView();
  }

  public function administradorPartidos(){
    $partidos = $this->partidoModel->getPartidos();
    $this->partidoView->mostrar_par_admin($partidos);
  }
  public function mInscripcionPartido(){
    $teams = $this->modelTeams->getTeams();
    $this->partidoView->mostrar_ins_partido($teams);
  }

public function insertPartido(){
  //echo "inserta";
  //print_r($_POST['id']);

    if(isset($_POST['id_local']) && isset($_POST['id_visitante']) && !empty($_POST['fecha'])){
      $fecha = $_POST['fecha'];
      $fecha = date("Y-m-d h:i:s",strtotime($fecha));
      $partido = array('id_local'=>$_POST["id_local"],'id_visitante'=>$_POST["id_visitante"],'fecha'=>$fecha);
      $partidos = $this->partidoModel->insertPartido($partido);
      $partidos = $this->partidoModel->getPartidos();
      $this->partidoView->mostrar($partidos);
  } else{
  echo "No Cargo los datos </br></br>";
  $teams = $this->modelTeams->getTeams();
  $this->partidoView->mostrar_ins_partido($teams);
}
}


  public function mostrarPartidos(){
    $partidos = $this->partidoModel->getPartidos();
    $this->partidoView->mostrar($partidos);
  }

  public function borrarPartido(){
    $id=$_GET['id'];
    $partido = $this->partidoModel->getPartido($id);
    $partido = $this->partidoModel->deletePartido($partido);
    $partidos =$this->partidoModel->getPartidos();
    $this->partidoView->mostrar_par_admin($partidos);

  }

  public function editarPartido(){
    $teams = $this->modelTeams->getTeams();
    $this->partidoView->mostrar_ins_partido($teams);
  }

  public function updatePartido(){
    echo "actualiza";
    print_r($_POST['id']);
    /*if(isset($_POST['id_local']) && isset($_POST['id_visitante']) && !empty($_POST['fecha'])){
      $fecha = $_POST['fecha'];
      $fecha = date("Y-m-d h:i:s",strtotime($fecha));
      $partido = array('id_partido'=>$_POST['id_partido'],'id_local'=>$_POST["id_local"],'id_visitante'=>$_POST["id_visitante"],'fecha'=>$fecha);
      $partidos = $this->partidoModel->updatePartido($partido);
      $partidos = $this->partidoModel->getPartidos();
      $this->partidoView->mostrar($partidos);
  } else{
  echo "No Cargo los datos </br></br>";
  $teams = $this->modelTeams->getTeams();
  $this->partidoView->mostrar_ins_partido($teams);
    }
*/
}

}
?>
