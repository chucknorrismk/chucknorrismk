<?php error_reporting(0); ?>
<?php require_once ('include/page.php');?>
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
            <h1>Introduction</h1>
            <div id="bte">
              <h2>Best <strong>Total Enterprise</strong></h2>
              <p>Nisi lorem nunc velit, montes platea cras est, tincidunt enim sit turpis, aliquam nec auctor natoque tincidunt sit, dolor elit non eu? Magnis elementum tempor ridiculus! Facilisis? Nunc proin urna porttitor sit augue odio, rhoncus mauris nisi turpis velit cras, enim cursus quis cras dignissim, parturient! Arcu duis? Habitasse nec.</p>
              <p>Porttitor dignissim enim nunc tincidunt, pulvinar egestas, montes proin, ac lectus nisi mattis tortor lacus, odio integer? Sed odio et dis, aenean lorem, in placerat dapibus lacus porttitor urna! Augue turpis rhoncus phasellus et, lectus magna adipiscing porttitor lacus? Aliquam platea scelerisque! Arcu pid lectus integer placerat urna dis.</p>
            </div>
            <div id="chronology">
              <div id="cb01" class="cb">
                <div class="name">History</div>
                <div class="name_translation">История</div>
                <p class="description">
                  Историчекая справка по-годам ...
                </p>
              </div>
              <div id="cb02" class="cb">
                <div class="name">Adertision</div>
                <div class="name_translation">Рикламо</div>
                <p class="description">
                  Неизвестное английское слово, похожее на "рекламу" ...
                </p>
              </div>
              <div class="filter">
                <a href="#2008">2008</a>
                <a href="#2009">2009</a>
                <a href="#2010">2010</a>
                <a href="#2011">2011</a>
                <a href="#2012">2012</a>
              </div>
              <div class="filter">
                <a href="#red">red</a>
                <a href="#green">green</a>
                <a href="#blue">blue</a>
                <a href="#yellow">yellow</a>
                <a href="#white">white</a>
              </div>
              <div id="cb03" class="cb">
                <div class="name">History</div>
                <div class="name_translation">История</div>
                <p class="description">
                  Историчекая справка по-годам ...
                </p>
                <button>подробней</button>
              </div>
              <div id="cb04" class="cb">
                <div class="name">Adertision</div>
                <div class="name_translation">Рикламо</div>
                <p class="description">
                  Неизвестное английское слово, похожее на "рекламу" ...
                </p>
                <button>подробней</button>
              </div>
            </div>
            <div id="worktime">
              <div class="name" id="wtname">
                График работы
              </div>
              <div class="description">
                <p class="work_conditions">
                  У нас четкий <a href="http://webkomora.com.ua/ru/articles/aptechka/vizitki/1227.html" target="_blank">график работы</a>, который соотвествует трудовому законодательству (Южной Кореи:)
                </p>
                <div class="time_intervals">
                  <table>
                    <tr>
                      <th>Полный рабочий день</th>
                      <td>08:00</td>
                      <td>~</td>
                      <td>17:00</td>
                    </tr>
                    <tr>
                      <th>Неполный рабочий день</th>
                      <td>08:00</td>
                      <td>~</td>
                      <td>12:00</td>
                    </tr>
                  </table>
                </div>
                <p class="work_relax">Во время рабачего дня вы можете прерываться на интересные игры: настольный теннис, дартс, воздушный хоккей, ...</p>
              </div>
            </div>
            <div id="deps">
              <table>
                <thead>
                  <tr>
                    <th class="dep_name">Отдел</th>
                    <th class="fio">ФИО начальника</th>
                    <th class="email">Контактный email</th>
                    <th class="number">Кол-во сотрудников</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="tr01">
                    <th class="dep_name"><span>Отдел кадров</span></th>
                    <td class="fio">Сянь Сяо Пин</td>
                    <td class="email">syan@onplus.kr</td>
                    <td class="number">10</td>
                  </tr>
                  <tr class="tr02">
                    <th class="dep_name"><span>Отдел разработки</span></th>
                    <td class="fio">Иванов И. И.</td>
                    <td class="email">ivan@onplus.kr</td>
                    <td class="number">50</td>
                  </tr>
                  <tr class="tr03">
                    <th class="dep_name"><span>Отдел управления качеством</span></th>
                    <td class="fio">Рабинович Р. С.</td>
                    <td class="email">raba@onplus.kr</td>
                    <td class="number">20</td>
                  </tr>
                  <tr class="tr04">
                    <th class="dep_name"><span>Аналитический отдел</span></th>
                    <td class="fio">Пузновски М.</td>
                    <td class="email">puzo@onplus.kr</td>
                    <td class="number">7</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php include ('include/footer.php');?>
    </div>
    <script type="text/javascript" src="js/test.js"></script>
  </body>
</html>
