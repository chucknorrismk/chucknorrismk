<?php
error_reporting(0);
require_once '../config.php';
require_once '../db_connect.php';
require_once '../include/lib.php';
session_start();
require_once '../include/user_auth.php';
$content = '';
if (isset($_SESSION['role'])) {
  //обработка запроса для авторизованного пользователя

  if (isset($_GET['obj'])) {
    $filename = CONTROLLER_PATH . $_GET['obj'] . ".php";
    if (file_exists($filename)) {
      require $filename;
      if (!isset($_GET['action'])) {
        $_GET['action'] = 'index';
      }
      if (function_exists($_GET['action'] . "Action")) {
        switch ($_GET['action']) {
          case 'index':
            indexAction();
            break;
          case 'add':
            addAction();
            break;
          case 'insert':
            insertAction(array_merge($_POST,$_FILES));
            break;
          case 'edit':
            editAction($_GET['id']);
            break;
          case 'update':
            updateAction(array_merge($_POST,$_FILES));
            break;
          case 'delete':
            deleteAction($_GET['id']);
            break;
          default:

            break;
        }
      }
    } else {
      echo "Файл {$filename} НЕ найден!!!";
    }
  } else {
    // TODO: вывод страницы по умоланию, например - информационная панель 
    $filename = CONTROLLER_PATH . "default.php";
    if (file_exists($filename)) {
      renderTemplate($filename);
    } else {
      echo "Файл {$filename} НЕ найден!!!";
    }
  }
} else {
  renderTemplate('../include/user_form.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style>
      #header,#footer{
        background-color: #1c67a8;
        color: white;
      }
      #middle{
        width: 1000px;
        margin: 5px auto;
      }
    </style>
  </head>
  <body>
    <div id="header">
      Заголовок страницы
    </div>
    <div id="middle">
      <?php
      //include $template;
      echo $content;
      ?>
    </div>
    <div id="footer">
      Подвал страницы
    </div>
  </body>
</html>
