<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CAR Section</title>
    <link rel="stylesheet" type="text/css" href="../css/cars_edit(admin).css">
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
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">>&nbsp;Home Objects</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/cars(admin).php">>&nbsp;Cars</a></li>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from Cars';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){
         if($row['url'] == $_GET['name']){
           echo <<<_END

           <li class="breadcrumb-item" aria-current="page">>&nbsp;{$row['Name']}</li>

           _END;

         }
       }
     }
     ?>

  </ol>
</nav>


<?php
  $servername = "localhost";
  $username = "root";
  $password = "2912";
  $dbname = "loherhofMotors";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $sql = 'select * from Cars';
  $result = $conn->query($sql);

  if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
       if($row['url'] == $_GET['name']){
         echo <<<_END

           <div class="whole_container">
           <div class="cont">Car Details</div>
             <div class="name"><b>Name: {$row['Name']}</b></div>
             <div class="img1"><b>Image One: {$row['ImgOne']}</b></div>
             <div class="img2"><b>Image Two: {$row['ImgTwo']}</b></div>
             <div class="make"><b>Make: {$row['Make']}</b></div>
             <div class="model"><b>Model: {$row['Model']}</b></div>
             <div class="condition"><b>Condition:{$row['Cond']}</b></div>
             <div class="price"><b>Price: {$row['Price']}</b></div>
             <div class="kilo"><b>Kilometers: {$row['Kilometers']}</b></div>
             <div class="color"><b>Color: {$row['Color']}</b></div>
             <div class="feature"><b>Featured:{$row['Featured']}</b></div>
             </div>

          _END;
       }
     }
  }
  $conn->close();
 ?>
</body>
</html>
