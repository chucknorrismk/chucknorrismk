$('.tab').click(function(){
  $('.tab').removeClass('current');
  $(this).addClass('current');
  $('.tab-content').removeClass('current');
  $('.tab-content').eq($(this).index()).addClass('current');
  $('.move').stop();
  $('<div class="move">Новый блок</div>')
          .appendTo('body')
          .animate({'left':'+=500px'})
          .animate({'top':'+=500px'})
          .animate({'left':'-=500px'})
          .animate({'top':'-=500px'});
});
$(document).on("click", ".move",function(){
  this.parentNode.removeChild(this);
});
