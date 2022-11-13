<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

echo isset($_GET['name']) ? $_GET['name'] : null;
echo isset($_GET['age']) ? $_GET['age'] : null;

if (isset($_POST['submit'])) {
    echo '<h3>' . $_POST['username'] . '</h3>';
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