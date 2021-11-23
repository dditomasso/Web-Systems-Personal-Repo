<?php 

  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    $JSON = file_get_contents("info.json");
    $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($JSON, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

    foreach ($jsonIterator as $key => $val) {
        if(!is_array($val)) {
            if($key == "Lectures") {
                print "<br/>";
            }
            if($key == "Labs") {
                print "<br/>";
            }
        print $val . "<br/>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Lab 8</title>
    </head>

    <body>
        <div class="navbar">
            <a href="#index">Home</a>
            <a href="#login">Login</a>            
            <a href="#logout">Logout</a>
        </div>

        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Logout</a>

        <script>
            <button onClick="window.location.href=window.location.href">Refresh Page</button>
        </script>
    </body>

</html>

<?php 
} else {
  header("Location: login.php");
  exit();
}
?>