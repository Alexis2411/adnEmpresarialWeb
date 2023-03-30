<?php
 function authenticatedUser(){
    if(!checkUser()){
      header('Location: InicioSesion.php?archivo=' . $_SESSION['archivo']);
      exit();
    } 
  }

   function checkUser(){
    return isset($_SESSION['usuario']);
   }

   session_start();
   authenticatedUser();