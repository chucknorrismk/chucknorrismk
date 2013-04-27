<?php require_once ('include/common_menu_data.php'); ?>
<ul class="common_menu">
  <?php foreach ($common_menu as $href => $common_menu_item_name) { ?>
    <?php
    if (!((isset($page[$href]['role'])&&isset($_SESSION['role'])&&
    ($page[$href]['role']<$_SESSION['role']))||(isset($page[$href]['role'])&&!isset($_SESSION['role'])))) {
      ?>
      <li>
        <a href="?page=<?php echo $href; ?>" title="<?php echo $common_menu_item_name['title']; ?>">
    <?php echo $common_menu_item_name['name']; ?>
        </a>
      </li>
    <?php } ?>
<?php } ?>
</ul>