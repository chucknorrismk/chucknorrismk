<legend>Пользователи</legend>
<?php if ($users) { ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th><a href="?obj=user&action=add">Добавить</a></th><th>id</th><th>login</th><th>пароль</th><th>роль</th><th>Имя</th><th>avatar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($users as $user) { ?>
        <tr>
          <td>
            <a href="?obj=user&action=delete&id=<?php echo $user['id']; ?>">Удалить</a>
            <a href="?obj=user&action=edit&id=<?php echo $user['id']; ?>">Редактировать</a>
          </td>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['login']; ?></td>
          <td><?php echo $user['pass']; ?></td>
          <td><?php echo $user['role']; ?></td>
          <td><?php echo $user['name']; ?></td>
          <td><img style="max-height: 50px;" src="<?php echo ADMIN_AVATAR_DIR . $user['avatar']; ?>"/></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>