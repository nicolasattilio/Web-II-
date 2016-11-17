<?php
  require_once('libs/Smarty.class.php');

  class userView{
    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty;
    }
    public function home(){
      $this->smarty->display('templates/index.tpl');
    }

    public function mostrar_inscripcion(){
      $this->smarty->display('templates/inscripciones.tpl');
    }

    public function mostrar_home(){
      $this->smarty->display('templates/navegador.tpl');
    }

  }
?>