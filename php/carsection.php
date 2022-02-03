<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CAR Section</title>
    <link rel="stylesheet" type="text/css" href="../css/carsection.css">
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
    <li class="breadcrumb-item"><a href="#">>&nbsp;Cars</a></li>
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Add Car</li>
  </ol>
</nav>
<form method="post">
<div class="whole_container">
<div class="cont">Add Car</div>
  <div class="name">Name: <input type="text" name="n1"></div>
  <div class="img1">Image One: <input type="text" name="n2"></div>
  <div class="img2">Image Two: <input type="text" name="n3"></div>

  <div class="make">Make:

  <select name="n4">
    <option selected="true" disabled="disabled">Select Make</option>
    <option>Audi</option>
    <option>Aston Martin</option>
    <option>BMW</option>
    <option>Mercedes</option>
    <option>Nissan</option>
    <option>Jeep</option>
    <option>Honda</option>
    <option>Renault</option>
    <option>Toyota</option>
    <option>Hyundai</option>
    <option>Ford</option>

  </select>


  </div>
  <div class="model">Model: <input type="text" name="n5"></div>


  <div class="condition">Condition:

  <select name="n6">
    <option selected="true" disabled="disabled">Select Condition</option>
    <option>New</option>
    <option>Old</option>
  </select>
  </div>

  <div class="price">Price: <input type="text" name="n7"></div>
  <div class="kilo">Kilometers: <input type="text" name="n8"></div>


  <div class="color">Color:

    <select name="n9">
      <option selected="true" disabled="disabled">Select Color</option>
      <option>Black</option>
      <option>White</option>
      <option>Red</option>
      <option>Yellow</option>
      <option>Blue</option>
      <option>Green</option>
      <option>Brown</option>
      <option>Silver</option>
    </select>
  </div>

  <div class="feature">Featured:

    <select name="n10">
      <option selected="true" disabled="disabled">Select</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>


<div class="saving_button">
<button type="button" class="btn">SAVE</button>
</div>


</div>
</form>
<?php

  $servername = "localhost";
  $username = "root";
  $password = "2912";
  $dbname = "loherhofmotors";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nm =  $_REQUEST['n1'];
      $im1 = $_REQUEST['n2'];
      $im2 =  $_REQUEST['n3'];
      $mk =  $_REQUEST['n4'];
      $md = $_REQUEST['n5'];
      $con =  $_REQUEST['n6'];
      $pr =  $_REQUEST['n7'];
      $km = $_REQUEST['n8'];
      $cl =  $_REQUEST['n9'];
      $ft =  $_REQUEST['n10'];


      $sql = "insert into cars(Name, ImgOne, ImgTwo, Make, Model, Cond, Color, Price, Kilometers, Featured) values ('$nm', '$im1', '$im2', '$mk','$md','$con','$pr','$km','$cl','$ft',)";
      if($conn->query($sql)==TRUE){
        echo "New records created successfully";
      }else {
        echo "Error:".$sql."<br>".$conn->error;
      }
      }


 ?>
</body>
</html>
