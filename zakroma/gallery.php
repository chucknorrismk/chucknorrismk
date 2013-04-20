<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
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
            <h2>Contacts</h2>
            <div class="description">
              Свяжитесь с нами
            </div>
          </div>
          <div id="main_content">
            <h3>Автор: <?php echo @$_GET['firstname'];?></h3>
            <ul>
              <li>Адресная строка браузера</li>
              <li>Форма</li>
              <li>Ссылка в теге &lt;a&gt;</li>
            </ul>
            <ol>
              <li>Picture</li>
              <li>Picture</li>
              <li>Picture</li>
              <li>Picture</li>
              <li>Picture</li>
              <li>Picture</li>
              <li>Picture</li>
            </ol>
          </div>
        </div>
      </div>
      <?php include ('include/footer.php'); ?>
    </div>
    <script type="text/javascript" src="js/test.js"></script>
  </body>
</html>
