<?php
require('controllers/partidocontroller.php');
require('controllers/userController.php');
require('controllers/equipo.controller.php');
require_once('controllers/config.php');

$controllerTeams = new teamsController();
$controllerpartido = new partidoController();
$userController = new userController();

switch (isset($_GET[config::$mode]) ? $_GET[config::$mode] : config::$mode_default) {

    case config::$mode_home:
      $userController->mostrarhome();
    break;

    case config::$mode:
      $userController->mostrarhome();
    break;

    case config::$mode_mostrarFormulario:
      $userController->mostrarformulario();
    break;

    case config::$mode_comentariosEImagenes:
      $userController->verImagenesYComentarios();
    break;

    case config::$mode_imagen:
      $userController->uploadImagen();
    break;

    //----<Datos Equipo>-----


    case config::$mode_mostrarEquipos:
      $controllerTeams->getTeams();
    break;

    case config::$mode_agregarEquipo:
    $controllerTeams->insertTeam();
    break;

    case config::$mode_actualizarEquipo:
      $controllerTeams->updateTeam();
    break;

    case config::$mode_editarEquipo:
      $controllerTeams->editTeam();
    break;

    case config::$mode_borrarEquipo:
      $controllerTeams->deleteTeam();
    break;

    case config::$mode_adminEquipos:
      $controllerTeams->administradorEquipos();
    break;

    //----<Datos Partido>-----

    case config::$mode_mostrarInscripcionPartido:
      $controllerpartido->mInscripcionPartido();
    break;

    case config::$mode_adminPartidos:
      $controllerpartido->administradorPartidos();
    break;

    case config::$mode_agregarPartido:
      $controllerpartido->insertPartido();
    break;

    case config::$mode_editarPartido:
      $controllerpartido->editarPartido();
    break;

    case config::$mode_updatePartido:
      $controllerpartido->updatePartido();
    break;

    case config::$mode_mostrarPartido:
      $controllerpartido->mostrarPartidos();
    break;

    case config::$mode_borrarPartido:
      $controllerpartido->borrarPartido();
    break;


    default:
      $userController->home();
    break;
}

?>
