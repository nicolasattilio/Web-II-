<?php
include_once(dirname(__DIR__). "/libs/Smarty.class.php");
class userView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }
  function mostrar(){
    $this->smarty->display('ingreso.tpl');
  }
  function mostrarRegistro () {
    $this->smarty->display('registroUser.tpl');
  }
  function usuarioRegistrado($user) {
    $this->smarty->assign('user',$user);
    $this->smarty->display('userRegistrado.tpl');
  }

  function mostrar_admin_usuarios($usuarios) {
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->display('adminUsuarios.tpl');
  }
}
 ?>
