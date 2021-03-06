<?php
require('controllers/usercontroller.php');
require('controllers/partidocontroller.php');
require('controllers/futappController.php');
require('controllers/equipo.controller.php');
require_once('controllers/config.php');

$userController = new userController();
$controllerTeams = new teamsController();
$controllerpartido = new partidoController();
$futappController = new futappController($userController);

switch (isset($_GET[config::$mode]) ? $_GET[config::$mode] : config::$mode_default) {

    case config::$mode_home:
      $futappController->mostrarhome();
    break;

    case config::$mode:
      $futappController->mostrarhome();
    break;

    case config::$mode_eliminarUsuario:
      $userController->eliminarUsuario();
    break;
    case config::$mode_cambiarNivel:
      $userController->cambiarNivel();
    break;

    case config::$mode_ingresar:
      $userController->login();
    break;

    case config::$mode_adminUsuario:
      $userController->adminUsuarios();
    break;
    case config::$mode_nuevoUsuario:
      $userController->nuevoUsuario();
    break;

    case config::$mode_registroUsuario:
      $userController->mostrarRegistro();
    break;

    case config::$mode_salir:
      $userController->logout();
    break;


    case config::$mode_mostrarFormulario:
      $futappController->mostrarformulario();
    break;

    case config::$mode_comentariosEImagenes:
      $futappController->verImagenesYComentarios();
    break;

    case config::$mode_imagen:
      $futappController->uploadImagen();
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
      $futappController->home();
    break;
}

?>
