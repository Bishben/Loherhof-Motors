<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="../css/cars(admin).css">
  </head>
  <body>
    <div class="headerContainer">
      <div class="compName">
        Loherhof Motors
      </div>
      <div class="nav">
        <span class="yellow">Welcome.</span>&nbsp;<a href="http://localhost/Loherhof-Motors/php/index.php">VIEW SITE</a>&nbsp;/&nbsp;<a href="http://localhost/Loherhof-Motors/php/login.php">LOG OUT</a>
      </div>
    </div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">Home</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">>&nbsp;AUTHENTICATION AND AUTHORIZATION</a></li>
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Cars</li>
  </ol>
</nav>
  <div class=whole_contain>
  <div class="container1"></div>
  <div class="container2">
  <div class="box1">
    CARS
  </div>

  <?php


    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from cars';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){

           echo <<<_END
                 <div class="box2">
                   <a href="cars_edit(admin).php?name={$row['url']}">{$row['Name']}</a>
                 </div>
            _END;
        }
    }



   ?>
   </div>
   <div class="container1"></div>
 </div>
  </body>
</html>
