<?php
require_once 'api.php';
require_once ('../models/comentariosModel.php');


class ComentariosApi extends Api {
  private $model;
  public function __construct($request)
  {
    parent::__construct($request);
    $this->model = new ModelComentarios();
  }
  protected function comentarios($argumentos){
    switch ($this->method) {
      case 'GET':
        if(count($argumentos)>0){
            $comentario = $this->model->getComentariosPorPartido($argumentos[0]);
            $error['Error'] = "No exiten comentarios";
            return ($comentario) ? $comentario : $error;
          }else{
            return $this->model->getComentarios();
          }
      break;
       case 'DELETE':
        if(count($argumentos)>0){
        $error['Error'] = "El comentario no existe";
        $success['Success'] = "El comentario se ha borrado";
        $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
        return ($filasAfectadas == 1) ? $success : $error;
      }
      break;
      case 'POST':
      if(count($argumentos)==0){
        if(isset($_POST['id_partido']) && isset($_POST['id_user']) && isset($_POST['comentario']) && isset($_POST['puntaje'])) {
          $id_partido = $_POST['id_partido'];
          $usuario = $_POST['id_user'];
          $comentario = $_POST['comentario'];
            $puntaje = $_POST['puntaje'];
            $error['Error'] = "El comentario no se creo";
            $id_comentario = $this->model->crearComentario($id_partido,$usuario,$comentario,$puntaje);
            return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
        }
       }
       break;
      default:
      return "Only accepts GET";
      break;
    }
  }
}
?>
