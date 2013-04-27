<div id="user_form">
<?php if (isset($_SESSION['role'])) { ?>
<form>
  <div><?php echo $_SESSION['user_name']; ?></div>
  <div>
    <img src="<?php echo AVATAR_DIR . $_SESSION['user_avatar']; ?>"/>
  </div>
  <input type="submit" name="logout" value="Выйти" />
</form>
<?php } else { ?>
<form method="post" >
  <div>
    <label>login:</label> <input type="text" name="login" />
  </div>
  <div>
    <label>пароль:</label> <input type="password" name="pass" />
  </div>
  <input type="submit" value="Войти" />
</form>
<?php } ?>
</div>
