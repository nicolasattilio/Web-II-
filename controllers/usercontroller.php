<?php
include_once (dirname(__DIR__). "/view/userView.php");
include_once (dirname(__DIR__). "/models/userModel.php");

class UserController
{
  private $userView;
  private $userModel;
  function __construct()
  {
    $this->userModel= new userModel();
    $this->userView = new userView();
  }

  public function login(){
    if(!isset($_POST['usuario']) && !isset($_POST["password"]))
    $this->userView->mostrar([]);
    else {
      $user = $_POST['usuario'];
      $pass = $_POST['password'];
      $hash = $this->userModel->getUserEmail($user)['pass'];
    if(password_verify($pass,$hash))  {
        session_start();
        $_SESSION['USER'] = $user;
        header("Location: index.php");
        die();
      }
      else
      {
        $error = "User pass error";
        echo($error);
      }
     }
  }
  public function checkRol ($rol) {
    session_start();
    if(!isset($_SESSION['USER']) || $rol != $this->userModel->getRol($_SESSION['USER'])){
        header("Location: index.php");
        die();
    }
  }
  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      return false;
    }
    return true;
  }

  public function check(){
    if(!isset($_SESSION['USER'])){
      return false;
    }
    return true;
  }

  public function getUser () {
    return $this->userModel->getUserEmail($_SESSION['USER']);
  }
  public function getRol(){
    session_start();
    $rol=$this->userModel->getRol($_SESSION['USER']);
    return $rol;
  }
  public function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }
  public function mostrarRegistro () {
      $this->userView->mostrarRegistro();
  }
  public function nuevoUsuario () {
    if(isset($_POST['email'])) {
      if(!$this->userModel->getUser($_POST['email'])) {
        $nuevoUsuario = array();
        $nuevoUsuario['nombre'] = $_POST['nombreUsuario'];
        $nuevoUsuario['email'] = $_POST['email'];
        $nuevoUsuario['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->userModel->crearUsuario($nuevoUsuario);
        $this->userView->usuarioRegistrado($nuevoUsuario['nombre']);
      }
      else {
        echo "Usuario ya existe";
      }
    }
  }

  public function adminUsuarios(){
    $usuarios=$this->userModel->getUsuarios();
    $this->userView->mostrar_admin_usuarios($usuarios);
  }
}
?>
