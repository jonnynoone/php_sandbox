<?php
if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = htmlspecialchars($_POST['password']);

    // $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $username;
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Stacy&age=22">Click</a>

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<div>
  <label>Username: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>