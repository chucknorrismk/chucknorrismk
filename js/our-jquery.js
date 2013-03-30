// прячем все ячейки
//jQuery('td').hide(); // jQuery
// native javascript
//var tds = document.getElementsByTagName('td');
//for(var td in tds){
//  
//  tds[td].style.display = 'none';
//}
//------------------
//jQuery('td+td').show();
var val1 = $('td input').val();
var val2 = 40 + val1;
$('td input:eq(0)').val(val2);
$('li:not(".even")').css({'background-color': 'red', 'border': '3px dotted yellow'});
$('table+ul').each(function() {
  $(this).attr('start_width', $(this).width());
});
$('h1+p').toggle(
        function() {
          $('table+ul').animate({'width': '300px'}, 600);
        },
        function() {
          $('table+ul').animate({'width': '0px'}, 600);
        },
        function() {
          $('table+ul').animate({'width': '300px'}, 600);
        },
        function() {
          $('table+ul').animate({'width': $(this).attr('start_width') + 'px'}, 600);
        }
);