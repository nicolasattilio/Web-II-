<?php
  require_once('libs/Smarty.class.php');

  class partidoView{
    private $smarty;

    public function __construct(){
    $this->smarty = new Smarty;
}

public function mostrar($partidos){
  $this->smarty->assign('partidos',$partidos);
  $this->smarty->display('templates/partidos.tpl');
}
public function mostrar_par_admin($partidos){
  $this->smarty->assign('partidos',$partidos);
  $this->smarty->display('templates/adminPartidos.tpl');
}

public function mostrar_ins_partido($teams){
  $this->smarty->assign('teams',$teams);
  $this->smarty->display('templates/inscripcionPartido.tpl');
}

}
?>
