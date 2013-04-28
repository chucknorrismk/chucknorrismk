<?php

$page['index']=array(
    'content'=>'Содержимое главной страницы',
    'title'=>'Главная страница нашего самого лучшего сайта',
    'name'=>'Главная',
    );
$page['html-data']=array(
    'content'=>'',
    'title'=>'Получение данных из html-таблицы',
    'name'=>'Получение данных из html-таблицы',
    );
$page['forum']=array(
    'content'=>'Содержимое нашего форума',
    'title'=>'Форум по бизнес-тематикам',
    'name'=>'Форум',
    );
$page['gallery']=array(
    'content'=>'Здесь перечислены наши бизнес-проекты',
    'title'=>'Проекты для демонстрации наших успехов',
    'name'=>'Галерея',
    'role'=>ROLE_OPERATOR,
    );
$page['company']=array(
    'content'=>'Описание компании',
    'name'=>'О компании',
    );
$page['sitemap']=array(
    'content'=>'',
    'name'=>'Карта сайта',
    'notsitemap'=>true,
    );
$page['phpinfo']=array(
    'content'=>'',
    'name'=>'Информация о параметрах PHP',
    );
$page['404']=array(
    'content'=>'Запрашиваемая страница отсутствует',
    'title'=>'404 - страница не найдена',
    'name'=>'404',
    'notsitemap'=>true,
    );
$page['403']=array(
    'content'=>'У Вас, к большому сожалению, нет прав на доступ к данной странице',
    'title'=>'403 - доступ запрещен',
    'name'=>'403',
    'notsitemap'=>true,
    );
?>
