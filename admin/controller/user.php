<?php

function indexAction() {
  //TODO: Вызвать метод получения всех пользователей из модели
  require_once MODEL_PATH.'user.php';
  $users = array();
  $users = getUsers();
  renderTemplate(VIEW_PATH.'users_list.php',array('users'=>$users));
}
/**
 * @author Ogurtsoveht Vitaliy <vitaliy.ogurtsov@hneu.net>
 * @return void Нет возвращаемого значения
 */
function addAction() {
  renderTemplate(VIEW_PATH.'user_form.php');
}

function insertAction($data) {
  if($data){
    require_once MODEL_PATH.'user.php';
    $avatar = $data['avatar'];
    $filename = '';
    if($avatar){
      $filename = $avatar['name'];
      move_uploaded_file($avatar['tmp_name'], ADMIN_AVATAR_DIR . $filename);
    }
    $data['avatar'] = $filename;
    insertUser($data);
  }
  header("Location: ?obj=user");
}

function editAction($id) {
  require_once MODEL_PATH.'user.php';
  $user = getUser($id);
  renderTemplate(VIEW_PATH.'user_form.php',array('user'=>$user));
}

function updateAction($data) {
   if($data){
    require_once MODEL_PATH.'user.php';
    $avatar = $data['avatar'];
    $filename = '';
    if($avatar){
      $filename = $avatar['name'];
      move_uploaded_file($avatar['tmp_name'], ADMIN_AVATAR_DIR . $filename);
    }
    $data['avatar'] = $filename;
    updateUser($data);
  }
  header("Location: ?obj=user");
}

function deleteAction($id) {
  require_once MODEL_PATH.'user.php';
  deleteUser($id);
  header("Location: ?obj=user");
}

?>
