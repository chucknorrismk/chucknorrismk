<?php
$select_user = "SELECT login AS user_login, id, name, pass, avatar, role FROM  user";
if ($result_select_user = mysql_query($select_user)) {
  ?>
  <table>
    <thead>
      <tr>
        <th><a href="?obj=user&action=new">Добавить</a></th><th>id</th><th>login</th><th>пароль</th><th>роль</th><th>Имя</th><th>avatar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($user = mysql_fetch_assoc($result_select_user)) {
        ?>
        <tr>
          <td>
            <a href="?obj=user&action=delete&id=<?php echo $user['id']; ?>">Удалить</a>
            <a href="?obj=user&action=edit&id=<?php echo $user['id']; ?>">Редактировать</a>
          </td>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['user_login']; ?></td>
          <td><?php echo $user['pass']; ?></td>
          <td><?php echo $user['role']; ?></td>
          <td><?php echo $user['name']; ?></td>
          <td><img src="<?php echo AVATAR_DIR . $user['avatar']; ?>"/></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>
