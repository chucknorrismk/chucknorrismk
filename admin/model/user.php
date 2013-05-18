<?php

function getUsers() {
  $select_users = "SELECT * FROM user";
  if($result_select_users = mysql_query($select_users)){
    while($row = mysql_fetch_assoc($result_select_users)){
      $users[] = $row;
    }
    return $users;
  }else{
    return array();
  }
  
}
function getUser($id) {
  $select_users = "SELECT * FROM user WHERE id=".  intval($id);
  if($result_select_users = mysql_query($select_users)){
    $user = mysql_fetch_assoc($result_select_users);
    return $user;
  }else{
    return array();
  }
  
}

function insertUser($user) {
  $insert_user = "INSERT INTO user (login,pass,name,avatar,role) 
    VALUES ('{$user['login']}','{$user['pass']}','{$user['name']}','{$user['avatar']}',{$user['role']})";
  mysql_query($insert_user);
}
function updateUser($user) {
  $avatar_update = ($user['avatar'])?",avatar='{$user['avatar']}":"";
  $insert_user = "UPDATE user SET login='{$user['login']}',pass='{$user['pass']}',name='{$user['name']}'{$avatar_update},role={$user['role']} WHERE id=".  intval($user['id']);
  mysql_query($insert_user);
}
function deleteUser($id) {
  $delete_user = "DELETE FROM user WHERE id=".intval($id);
  mysql_query($delete_user);
}
?>
