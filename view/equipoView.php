<?php
  require_once('libs/Smarty.class.php');

  class teamsView{
    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty;
    }

    public function mostrar($teams){
      $this->smarty->assign('teams',$teams);
      $this->smarty->display('templates/equipos.tpl');
    }


    public function mostrar_inscripcion_edit($team){
      $this->smarty->assign('team',$team);
      $this->smarty->display('templates/inscripciones.tpl');
    }


    public function mostrar_ins_admin($teams){
      $this->smarty->assign('teams',$teams);
      $this->smarty->display('templates/admin.tpl');
  }

}
?>
