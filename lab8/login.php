<!-- Insecure login form -->

<!DOCTYPE html>

<html>
<head>
  <title>Insecure login form</title>
</head>

<body>
<div class="container">
  <h1>Login</h1>
  <p>Please fill out the required fields to sign into your account.</p>
  <hr>
  <form action="db.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="username" placeholder="Username"><br />
      <label for="psw"><b>Password</b></label>
      <input type="password" name="password" placeholder="Password"><br />
      <button type="submit">Login</button>
    </div>
  </form>
</body>
</html>
