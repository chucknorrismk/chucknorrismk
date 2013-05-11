<?php

function indexAction() {
  $users = getUsers();
  renderTemplate('',$users);
}
function addAction() {
  renderTemplate('файл шаблона нового пользователя (форма)');
}

?>
