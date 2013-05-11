<?php

if(isset($_SESSION['role'])){//если пользователь авторизован
  if(isset($_REQUEST['logout'])){
    unset($_SESSION['role']);
    session_destroy();
  }
}else{// пользователь не авторизован
  //если пользователь пытается авторизоваться
  if(isset($_POST['login'])&&isset($_POST['pass'])){
    //require_once 'user_data.php';
    $select_user = "SELECT role,name,avatar FROM  user WHERE (login = '{$_POST['login']}') AND (pass =  '{$_POST['pass']}')";
    if(($result_select_user = mysql_query($select_user))&&
            (mysql_num_rows($result_select_user)>0)){
      $user = mysql_fetch_assoc($result_select_user);
      $_SESSION['role']=$user['role'];
      $_SESSION['user_name']=$user['name'];
      $_SESSION['user_avatar']=$user['avatar'];
    }
  }
}
?>
