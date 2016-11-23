<?php
require_once('view/userView.php');
require_once('models/userModel.php');
require_once('models/partidoModel.php');


class userController{
  private $partidoModel;
  private $modelUser;
  private $viewUser;

  public function __construct(){
    $this->viewUser = new userView();
    $this->modelUser = new userModel();
    $this->partidoModel = new partidoModel();
}
public function home(){
    $this->viewUser->home();
}

public function mostrarhome(){
    $this->viewUser->mostrar_home();
}

public function mostrarformulario(){
    $this->viewUser->mostrar_inscripcion();
}
function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = [];
    for ($i=0; $i < count($imagenes['size']); $i++) {
      if($imagenes['size'][$i]>0 && ($imagenes['type'][$i]=="image/jpeg" || $imagenes['type'][$i]=="image/png")){
        $imagen_aux = [];
        $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
        $imagen_aux['name']=$imagenes['name'][$i];
        $imagenesVerificadas[]=$imagen_aux;
      }
    }
    return $imagenesVerificadas;
  }


public function uploadImagen(){
  $id=$_POST['id'];
  $imagenes = $_FILES['picture'];
    if (isset($imagenes)){
    $imagenesVerificadas=$this->getImagenesVerificadas($imagenes);
    $this->modelUser->cargarimagen($id,$imagenesVerificadas);
    $imagenes=$this->modelUser->verImagenes($id);
    $this->viewUser->mostrar_imagenes_comentarios($id,$imagenes);
  }else{
    $imagenes=$this->modelUser->verImagenes($id);
    $this->viewUser->mostrar_imagenes_comentarios($id,$imagenes);
  }
}

public function verImagenesYComentarios(){
  $id=$_GET['id'];
  $imagenes=$this->modelUser->verImagenes($id);
  $partido = $this->partidoModel->getPartido($id);
  $this->viewUser->mostrar_imagenes_comentarios($partido,$imagenes);

}
}


?>
