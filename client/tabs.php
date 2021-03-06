<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="../js/jquery/ui/theme/le-frog/jquery.ui.all.css" />
    
    <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="../js/jquery-migrate-1.1.1.js"></script>
    <!--script type="text/javascript" src="js/jquery/ui/minified/jquery-ui.custom.min.js"></script-->
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/jquery/ui/jquery.ui.sortable.js"></script>
  </head>
  <body>
    <div class="tabs">
      <div class="tabs-header">
        <div class="tab current">1</div>
        <div class="tab">2</div>
        <div class="tab">3</div>
      </div>
      <div class="tabs-content">
        <div class="tab-content current">
          C1
        </div>
        <div class="tab-content">
          C2
        </div>
        <div class="tab-content">
          C3
        </div>
      </div>
    </div>
    <div class="dc">
      <input type="button" value="Получить"/>
      <div id="data">Здесь будут отображаться наши данные</div>
    </div>
    <input type="button" class="movement-pause" value="Пауза" />
    <input type="button" class="movement-start" value="Поехали" />
    <div class="movement">
      <ul class="movement-move">
        <li class="movement-item">
          Реклама 1
        </li><li class="movement-item">
          Реклама 2
        </li><li class="movement-item">
          Реклама 3
        </li><li class="movement-item">
          Реклама 4
        </li><li class="movement-item">
          Реклама 5
        </li>
      </ul>
    </div>
    <ul class="ui-sortable">
      <li class="ui-state-default">Элемент 1</li>
      <li class="ui-state-default">Элемент 2</li>
      <li class="ui-state-default">Элемент 3</li>
      <li class="ui-state-default">Элемент 4</li>
      <li>Элемент 5</li>
      <li class="ui-state-default">Элемент 6</li>
    </ul>
    <script type="text/javascript" src="../js/tabs.js"></script>
  </body>
</html>
