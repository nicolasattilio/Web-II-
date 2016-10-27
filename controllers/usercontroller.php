<?php
require('view/userView.php');


class userController{

  private $viewUser;

  public function __construct(){
    $this->viewUser = new userView();
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
}

?>
