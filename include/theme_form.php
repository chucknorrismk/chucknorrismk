<?php require_once 'theme_data.php'; ?>
<form method="post">
  <select name="theme" size="1">
    <?php foreach ($theme as $color => $theme_name) {?>
    <option<?php echo ($_COOKIE['theme']==$color)?' selected="selected"':'';?> value="<?php echo $color;?>"><?php echo $theme_name;?></option>
    <?php } ?>
  </select>
  <input type="submit" value="сменить" />
</form>
