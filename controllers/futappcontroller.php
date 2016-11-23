<?php
require_once('view/futappView.php');
require_once('models/futappModel.php');
require_once('models/partidoModel.php');


class futappController{
  private $partidoModel;
  private $futappModel;
  private $futappView;
  private $user;

  public function __construct($userController){
    $this->futappView = new futappView();
    $this->futappModel = new futappModel();
    $this->partidoModel = new partidoModel();
    if ($userController->checkLogin()){
      $this->user=$userController->getUser();
    }else{
      $this->user["nivel"]=1;
    }

}
public function home(){
    $this->futappView->home($this->user);
}
public function mostrarhome(){
    $this->futappView->mostrar_home();
}

public function mostrarformulario(){
    $this->futappView->mostrar_inscripcion();
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
    $this->futappModel->cargarimagen($id,$imagenesVerificadas);
    $imagenes=$this->futappModel->verImagenes($id);
    $this->futappView->mostrar_imagenes_comentarios($id,$imagenes);
  }else{
    $imagenes=$this->futappModel->verImagenes($id);
    $this->futappView->mostrar_imagenes_comentarios($id,$imagenes);
  }
}

public function verImagenesYComentarios(){
  $id=$_GET['id'];
  $imagenes=$this->futappModel->verImagenes($id);
  $partido = $this->partidoModel->getPartido($id);
  $this->futappView->mostrar_imagenes_comentarios($partido,$imagenes);

}
}


?>
