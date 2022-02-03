<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="../css/us.css">
  </head>
  <body>
    <?php
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
      while($row = $result->fetch_assoc()){
        $logged = false;
        if($row['login'] == "true"){
          $logged = true;
          $name = ucfirst($row['name']);
          break;
        }
      }
      if($logged==false){
        header("Location: login.php");
      }
    }
     ?>
    <div class="headerContainer">
      <div class="compName">
        Loherhof Motors
      </div>
      <div class="nav">
        <?php
              echo <<<_END
                <span class="yellow">Welcome, {$name}.</span>&nbsp;<a href="index.php">VIEW SITE</a>&nbsp;/&nbsp;<a href="?link=1">LOG OUT</a>
              _END;

        if(isset($_GET['link'])){
          $link = $_GET['link'];
          $check = false;
          if($link == '1'){
              $sql = "update users set login = 'false' where name='{$name}'";
              $conn->query($sql);
              $check = true;
          }
          if ($check = true){
            header("Location: login.php");
          }
        }
         ?>
      </div>
    </div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">Home</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">>&nbsp;AUTHENTICATION AND AUTHORIZATION</a></li>
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Users</li>
  </ol>
</nav>
<div class="tables">
  <div class="e1"></div>
  <table class="responstable">
  <tr>
    <th>USERNAME</th>
    <th>STAFF STATUS</th>
  </tr>

  <?php


    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from users';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){
         $name = strtoupper($row['name']);
         if($row['login'] == 'true'){
           echo <<<_END
                 <tr>
                   <td>{$name}</td>
                   <td>&#9989;</td>
                 </tr>
            _END;
          } else{
            echo <<<_END
                  <tr>
                    <td>{$name}</td>
                    <td>&#10060;</td>
                  </tr>
             _END;
          }
         }
       }

   ?>
 </table>
   <div class="e1"></div></div></body>
</html>
