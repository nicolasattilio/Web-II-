<?php
require('view/partidoView.php');
require('models/teamsModels.php');
require('models/partidoModel.php');

class partidoController{
  private $modelTeams;
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
  if(isset($_GET['id'])){
  $id= $_GET['id'];
  $partidos = $this->partidoModel->getPartidosPorEquipo($id);
  $teams = $this->modelTeams->getTeams();
  $this->partidoView->mostrar($partidos,$teams);
}else{
  $partidos = $this->partidoModel->getPartidos();
  $teams = $this->modelTeams->getTeams();
  $this->partidoView->mostrar($partidos,$teams);
  }
}

  public function borrarPartido(){
    $id=$_GET['id'];
    $partido = $this->partidoModel->getPartido($id);
    $partido = $this->partidoModel->deletePartido($partido);
    $partidos =$this->partidoModel->getPartidos();
    $this->partidoView->mostrar_par_admin($partidos);

  }

  public function editarPartido(){
    $id=$_GET['id'];
    $partido = $this->partidoModel->getPartido($id);
    $teams = $this->modelTeams->getTeams();
    $this->partidoView->mostrar_edt_partido($teams,$partido);
  }

  public function updatePartido(){
  if(isset($_POST['id_local']) && isset($_POST['id_visitante']) && !empty($_POST['fecha'])){
      $fecha = $_POST['fecha'];
      $fecha = date("Y-m-d h:i:s",strtotime($fecha));
      $partido = array('id_partido'=>$_POST['id'],'id_local'=>$_POST["id_local"],'id_visitante'=>$_POST["id_visitante"],'fecha'=>$fecha);
      $partidos = $this->partidoModel->updatePartido($partido);
      $partidos = $this->partidoModel->getPartidos();
      $this->partidoView->mostrar($partidos);
  } else{
  echo "No Cargo los datos </br></br>";
  $teams = $this->modelTeams->getTeams();
  $this->partidoView->mostrar_ins_partido($teams);
    }

}

}
?>
