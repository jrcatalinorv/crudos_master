<?php
session_start();
  if(isset($_SESSION["crudosSesion"]) && $_SESSION["crudosSesion"] == "ok"){
    if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "menu"  ||
		 $_GET["ruta"] == "buscar-rollo" ||
		 $_GET["ruta"] == "auditoria-rollo" ||
		 $_GET["ruta"] == "operadores" ||
		 $_GET["ruta"] == "auditores" ||
		 $_GET["ruta"] == "usuarios" ||
		 $_GET["ruta"] == "defectos" ||
		 $_GET["ruta"] == "mi-perfil" ||
		 $_GET["ruta"] == "datos-turno" ||
		 $_GET["ruta"] == "salir"){
        include "".$_GET["ruta"].".php";
      }else{
        include "404.php";
      }
    }else{
      include "menu.php";
    }
  }else{
    include "login.php";
  }
?> 