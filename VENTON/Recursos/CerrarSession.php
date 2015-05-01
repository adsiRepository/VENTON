<?php

  session_start();
  
  unset($_SESSION['usuario']); 
  unset($_SESSION['tipo']);
  
  session_destroy();
  
  header("Location: ../index_main.php");
  
  exit;

