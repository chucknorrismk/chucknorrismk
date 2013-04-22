$(document).on("click", ".tab", function() {
  $(this).siblings('.tab').removeClass('current');
  $(this).addClass('current');
  $(this).parent().next('.tabs-content').children('.tab-content').removeClass('current');
  $(this).parent().next('.tabs-content').children('.tab-content').eq($(this).index()).addClass('current');
  $('.move').stop();
  $('<div class="move">Новый блок</div>')
          .appendTo('body')
          .animate({'left': '+=500px'})
          .animate({'top': '+=500px'})
          .animate({'left': '-=500px'})
          .animate({'top': '-=500px'});
});
$(document).on("click", ".move", function() {
  //this.parentNode.removeChild(this); // удаление на native javascript
  $(this).remove(); // удаление на jQuery
});

$('.dc input').click(function() {
  $('#data').html($('.tabs').html());
});

$('.movement-start').click(function() {
  // объявление и инициализация локальных переменных
  var $this = this,  // сохраняем указатель на текущий элемент (нажатую кнопку)
          a_i = 500, // время анимации одного рекламного блока
          d_i = 3000,// время задержки между анимациями рекламных блоков
          ad_banner = $($this).next('.movement'), // контейнер рекламного баннера
          ad_banner_move = ad_banner.children('.movement-move'), // контейнер рекламных блоков
          i_width = ad_banner.find('.movement-item').width(),// ширина одного рекламного блока
          ad_banner_move_i_d = a_i + d_i, // интервал повторения анимации рекламного блока
          move = function() { // функция движения контейнера рекламных блоков
            ad_banner_move.animate( // двигаем контейнер рекламных блоков
              {left: '-=' + i_width + 'px'}, // с помощью смещения позиции влево
              a_i, // за такой промежуток времени (мс)
              function() { // функция обратного вызова - выполняется после завершения анимации рекламного блока
                ad_banner_move.children('.movement-item').eq(0) // первый рекламный блок
                        // перемещаем в конец контейнера рекламных блоков (для бесконечного движения)
                        .appendTo($($this).next('.movement').children('.movement-move'));
                ad_banner_move.css({left: '0px'}); // возвращаем левое смещение контейнера рекламных блоков в 0
              }
            ).delay(d_i); // задержки между анимациями рекламных блоков
          };
  move(); // стартуем сразу функция движения (однократно)
  // и запускаем бесконечный цикл (интервал) выполнения плавного движения контейнера рекламных блоков
  var ad_banner_move_i = setInterval(move, ad_banner_move_i_d);
  $($this).attr('ad_banner_move_i',ad_banner_move_i); // сохраняем указатель на интервал в атрибут кнопки старта
});
$('.movement-pause').click(function() { // пауза движения контейнера рекламных блоков
    // с помощью удаления объекта-интервала выполнения
    clearInterval($(this).next('.movement-start').attr('ad_banner_move_i'));
    // и (необязательное) удаление атрибута
    $(this).next('.movement-start').removeAttr('ad_banner_move_i')
});
// Делаем список элементов сортируемым с помощью jQuery UI
$('.ui-sortable').sortable();
