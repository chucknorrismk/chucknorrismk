<style>
  #data{
    width: 600px;
    margin: 5px 0px;
  }
  td{
    border: 1px solid #aaa;
  }
  #get-data{
    background-color: #1c67a8;
    color: white;
    border: #aaa 1px solid;
    padding: 2px 10px;
    cursor: pointer;
  }
  #data-copy{
    margin: 5px 0px;
    padding: 10px;
  }
</style>
<table id="data">
  <tr><td>12</td><td>5</td><td>25</td><td>3</td><td>67</td></tr>
  <tr><td>17</td><td>74</td><td>26</td><td>21</td><td>8</td></tr>
  <tr><td>85</td><td>43</td><td>2</td><td>42</td><td>14</td></tr>
  <tr><td>55</td><td>44</td><td>22</td><td>33</td><td>66</td></tr>
  <tr><td>4</td><td>7</td><td>8</td><td>32</td><td>18</td></tr>
  <tr><td>19</td><td>15</td><td>41</td><td>21</td><td>92</td></tr>
  <tr><td>63</td><td>73</td><td>43</td><td>16</td><td>8</td></tr>
</table>
<span id="get-data">Получить данные</span>
<div id="data-copy"></div>
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script>
  jQuery('#get-data').click(function() {
    var table_data = [], i, j;
    jQuery('table#data tr').each(function() {
      i = jQuery(this).index();//№ строки
      table_data[i] = [];
      jQuery(this).children('td').each(function() {
        j = jQuery(this).index();//№ столбца (ячейки)
        table_data[i][j] = jQuery(this).html();
      });
    });

    for (var x = 0; x <= i; x++) {
      var tr = "строка №" + x + " - ";
      for (var y = 0; y <= j; y++) {
        tr += table_data[x][y] + ", ";
      }
      console.log(tr);// вывод текущей (отформатированной) строки в консоль
      // вывод текущей (отформатированной) строки в div#data_copy
      jQuery('#data-copy').html(jQuery('#data-copy').html() + "<div>" + tr + "</div>");
    }
  });
</script>