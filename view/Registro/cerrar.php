<?php

  ///print 'verificar los okkkkkkkkkkkkkkkkkkkkiodos <a href="../index.php">Volver</a>';
  //header('location: ./');

  $userController = new App\Controllers\UserController;
  $users = $userController->registerSessionFinish();
  
  // session_start();
  session_regenerate_id(true);
  session_unset();
  session_destroy();
  session_write_close();
  setcookie(session_name(),'',0,'/');
  header('location: ./');
  
?>
