<?php
$path = "db/";
if(strpos(pathinfo($_SERVER["SCRIPT_FILENAME"])["dirname"], 'api')) $path = "../" . $path;
include_once $path .'configDB.php';



abstract class modelDB{
  protected $db;
  function __construct() {
    try {
      $this->db = new PDO('mysql:host='.HOST.';dbname='.rtrim(DBNAME).';charset=utf8', USUARIO, DBPASS);
    } catch (PDOException $e) {
        header('Location: db/index.php');
        die();
    }
  }
}
 ?>
