<?php

  ///print 'verificar los okkkkkkkkkkkkkkkkkkkkiodos <a href="../index.php">Volver</a>';
  //header('location: ./');
  session_start();
  session_destroy();
  session_unset();
  session_destroy();
  session_write_close();
  setcookie(session_name(),'',0,'/');
  session_regenerate_id(true);
  header('location: ./');
  
?>
