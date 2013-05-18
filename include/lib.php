<?php

function renderTemplate($filename,$data=array()) {
  foreach ($data as $key => $value) {
    $$key = $value;
  }
  global $content;
  ob_start();
  if (file_exists($filename)) {
    require $filename;
  }else{
    echo "Файл {$filename} НЕ найден!";
  }
  $content = ob_get_clean();
}

?>
