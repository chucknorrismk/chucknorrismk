<?php
if (isset($_POST['theme'])) {
  setcookie('theme', $_POST['theme'], time() + 315360000);
  $_COOKIE['theme'] = $_POST['theme'];
} else {
  if (!isset($_COOKIE['theme'])) {
    $_COOKIE['theme'] = 'lightblue';
  }
}
?>

