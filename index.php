<?php //error_reporting(0);    ?>
<?php 
require_once './config.php';
require_once './db_connect.php';
session_start();
require_once 'include/user_auth.php';
require_once ('include/page.php'); ?>
<?php
if (isset($_GET['page'])) {
  if (!isset($page[$_GET['page']])) {
    $_GET['page'] = '404';
  }else{
    if (
            (isset($page[$_GET['page']]['role'])&&
                isset($_SESSION['role'])&&
                ($page[$_GET['page']]['role']<$_SESSION['role']))
            ||
            (isset($page[$_GET['page']]['role'])&&
                !isset($_SESSION['role']))
       ) {
      $_GET['page'] = '403';
    }
  }
} else {
  $_GET['page'] = 'index';
}
?>
<?php
require_once 'include/theme.php';
if(isset($_SESSION['counter'])){
  $_SESSION['counter']++;
}else{
  $_SESSION['counter']=1;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo isset($page[$_GET['page']]['title']) ? $page[$_GET['page']]['title'] : $page[$_GET['page']]['name']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
    <?php include_once 'include/set_theme.php'; ?>
  </head>
  <body>
    <div id="wrapper">
      <?php include('include/header.php'); ?>
      <div id="middle">
        <?php include('include/sidebar.php'); ?>
        <div id="content">
          <div id="page_slogan">
            <img src="img/hotinplus.png" />
          </div>
          <ul class="breadcrambs">
            <li><a href="#">Home</a></li>
            <li><a href="#">Company</a></li>
            <li>Contacts</li>
          </ul>
          <div id="page_title">
            <h2><?php echo $page[$_GET['page']]['name']; ?></h2>
            <?php if (isset($page[$_GET['page']]['title'])) { ?>
              <div class="description">
                <?php echo $page[$_GET['page']]['title']; ?>
              </div>
            <?php } ?>
          </div>
          <div id="main_content">
            <?php
            $file_name = "include/content/" . $_GET['page'] . ".php";
            if (file_exists($file_name)) {
              include($file_name);
            } else {
              echo $page[$_GET['page']]['content'];
            }
            ?>
          </div>
        </div>
      </div>
      <?php include ('include/footer.php'); ?>
    </div>
    <script type="text/javascript" src="js/test.js"></script>
  </body>
</html>
