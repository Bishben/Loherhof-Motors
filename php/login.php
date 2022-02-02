<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loherhof Motors | Admin</title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <form class="" action="" method="post">
        <div class="container">
          Jayesh
        </div>
        <div id="error"></div>
        <div class="inputContainer">
          <label for="user">Username:</label><br>
          <input type="text" name="user" value="" required>
        </div>
        <div class="inputContainer">
          <label for="pass">Password:</label><br>
          <input type="password" name="pass" value="" required>
        </div>
        <div class="btn-login">
          <button type="submit" name="button">Log in</button>
        </div>
    </form>
    <?php
      if (isset($_POST['user']) && isset($_POST['pass'])){
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);
        $file = "up.txt";
        $f = fopen($file, 'r') or die ("405 Error");
        $loggedin = false;
        while (! feof($f)){
          $line = fgets($f, 4069);
          $line = trim($line);
          $up = explode(";", $line);
          if($user == trim($up[0]) && md5($pass) == trim($up[1])){
            header("Location: admin.php" );
            $loggedin = true;
          }
        }
        if ($loggedin == false){
          echo <<<_END
          <script>
            error = document.getElementById('error')
            error.innerHTML = "Login Failed. Please use a staff account to log in."
            error.classList.add('errorContainer')
          </script>
          _END;
        }
      }
     ?>
  </body>
</html>
