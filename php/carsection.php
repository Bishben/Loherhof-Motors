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
    <div class="name">Name: <input type="text" name="name" reuired></div>
    <div class="img1">Image One: <input type="text" name="imgOne" required></div>
    <div class="img2">Image Two: <input type="text" name="imgTwo" required></div>

    <div class="make">Make:

    <select name="make" required>
      <option selected disabled>Select Make</option>
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
    <div class="model">Model: <input type="text" name="model" required></div>


    <div class="condition">Condition:

    <select name="cond" required>
      <option selected="true" disabled="disabled">Select Condition</option>
      <option>New</option>
      <option>Old</option>
    </select>
    </div>

    <div class="price">Price: <input type="text" name="price" required></div>
    <div class="kilo">Kilometers: <input type="text" name="km" required></div>


    <div class="color">Color:

      <select name="color" required>
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

      <select name="featured" required>
        <option selected="true" disabled="disabled">Select</option>
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>


  <div class="saving_button">
  <button type="submit" class="btn">SAVE</button>
  </div>


  </div>
</form>
<?php
  if (isset($_POST['name'], $_POST['imgOne'], $_POST['imgTwo'], $_POST['make'], $_POST['model'], $_POST['cond'], $_POST['price'], $_POST['km'], $_POST['color'], $_POST['featured'])){
    $name = ucfirst($_POST['name']);
    $model = ucfirst($_POST['model']);
    $url = strtolower(str_replace(' ', '',  $name));


    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofmotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "insert into cars (Name, ImgOne, ImgTwo, Make, Model, Cond, Color, Price, Kilometers, Featured, url, time_stamp) values ('{$name}', '{$_POST['imgOne']}', '{$_POST['imgTwo']}', '{$_POST['make']}', '{$model}', '{$_POST['cond']}', '{$_POST['color']}', '{$_POST['price']}', '{$_POST['km']}', '{$_POST['featured']}','$url',CURRENT_TIMESTAMP)";
    if($conn->query($sql) === TRUE){
      $sql = "insert into recent(name, action) values('{$name}', 'Add')";
      $conn->query($sql);
      echo "<script>alert('Car Added Successfully')</script>";
    } else{
      echo "<script>alert('An Unknown Error Occured')</script>";
    }



  } else{
    echo "<script>alert('Please Enter In All Input Details";
  }




 ?>
</body>
</html>
