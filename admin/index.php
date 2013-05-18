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
            insertAction(array_merge($_POST, $_FILES));
            break;
          case 'edit':
            editAction($_GET['id']);
            break;
          case 'update':
            updateAction(array_merge($_POST, $_FILES));
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
      require_once $filename;
      indexAction();
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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="js/menu.js" type="text/javascript"></script>
    
  </head>
  <body>
    <div class="container-fluid">
      <div id="header" class="row-fluid">
        <div class="navbar navbar-static-top">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li>
                  <a href="/admin">Информационная панель</a>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle"
                     data-toggle="dropdown"
                     href="#">
                    Пользователи
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="?obj=user">Список пользователей</a></li>
                    <li><a href="?obj=user&action=add">Добавить пользователя</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="middle" class="container row">
          <div class="span12">
            <?php
            //include $template;
            echo $content;
            ?>
          </div>
        </div>
        <div id="footer" class="row-fluid">
          <div class="container">
            Подвал страницы
          </div>
        </div>
      </div>
  </body>
</html>
