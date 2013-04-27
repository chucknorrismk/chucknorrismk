<?php

if(isset($_SESSION['role'])){//если пользователь авторизован
  if(isset($_REQUEST['logout'])){
    unset($_SESSION['role']);
    session_destroy();
  }
}else{// пользователь не авторизован
  //если пользователь пытается авторизоваться
  if(isset($_POST['login'])&&isset($_POST['pass'])){
    require_once 'user_data.php';
    if(isset($user[$_POST['login']])&&
            ($user[$_POST['login']]['pass']==$_POST['pass'])){
      $_SESSION['role']=$user[$_POST['login']]['role'];
      $_SESSION['user_name']=$user[$_POST['login']]['name'];
      $_SESSION['user_avatar']=$user[$_POST['login']]['avatar'];
    }
  }
}
?>
