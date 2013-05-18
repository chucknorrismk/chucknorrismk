<div id="user_form">
  <form method="post" action="?obj=user&action=<?php echo (isset($user))?"update":"insert";?>" enctype="multipart/form-data" >
    <div>
      <label>login:</label> <input type="text" name="login" value="<?php echo @$user['login'];?>" />
      <input type="hidden" name="id" value="<?php echo @$user['id'];?>" />
    </div>
    <div>
      <label>пароль:</label> <input type="password" name="pass" value="<?php echo @$user['pass'];?>" />
    </div>
    <div>
      <label>Имя:</label> <input type="text" name="name" value="<?php echo @$user['name'];?>" />
    </div>
    <div>
      <label>Аватар:</label> <input type="file" name="avatar" />
      <?php if (isset($user['avatar'])){?><img style="max-height: 50px;" src="<?php echo ADMIN_AVATAR_DIR . $user['avatar']; ?>"/><?php } ?>
    </div>
    <div>
      <label>Роль:</label> <input type="text" name="role" value="<?php echo @$user['role'];?>" />
    </div>

    <input type="submit" value="Сохранить" />
  </form>
</div>
