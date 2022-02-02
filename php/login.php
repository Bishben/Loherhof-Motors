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
          Loherhof Motors
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
        $servername = "localhost";
        $username = "root";
        $password = "2912";
        $dbname = "loherhofMotors";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = 'select * from Users';
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          $check = false;
          while($row = $result->fetch_assoc()){
            if($row['name'] == $user && $row['hash'] == md5($pass)){
               $check = true;
               $sql = "update users set login = 'true' where name='{$user}'";
               $conn->query($sql);
               $sql = 'select * from Users';
               $result = $conn->query($sql);
               while($Row = $result->fetch_assoc()){
                 if($user != $Row['name']){
                   $sql = "update users set login = 'false' where name='{$Row['name']}'";
                   $conn->query($sql);
                 }
               }
               break;
            }
          }
        }

        if($check == true){
          #header("Location: admin.php");
        } else{
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
