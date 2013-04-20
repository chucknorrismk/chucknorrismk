<ul>
  <?php foreach ($page as $href => $page_value) { ?>
    <?php if (!isset($page_value['notsitemap'])) { ?>
      <li>
        <a href="?page=<?php echo $href; ?>"><?php echo $page_value['name']; ?></a>
      </li>
    <?php } ?>
  <?php } ?>
</ul>
