<?php

function renderTemplate($filename,$data=array()) {
  foreach ($data as $key => $value) {
    $$key = $value;
  }
  global $content;
  ob_start();
  require $filename;
  $content = ob_get_clean();
}

?>
