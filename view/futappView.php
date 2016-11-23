<?php
  require_once('libs/Smarty.class.php');

  class futappView{
    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty;
    }
    public function home($user){
      $this->smarty->assign('user',$user);
      $this->smarty->display('templates/index.tpl');
    }

    public function mostrar_inscripcion(){
      $this->smarty->display('templates/inscripciones.tpl');
    }

    public function mostrar_imagenes_comentarios($partido,$imagenes){
      $this->smarty->assign('imagenes',$imagenes);
      $this->smarty->assign('partido',$partido);
      $this->smarty->display('templates/imagenesComentarios.tpl');
    }

    public function mostrar_home(){
      $this->smarty->display('templates/navegador.tpl');
    }

  }
?>
