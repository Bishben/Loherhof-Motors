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
    <li class="breadcrumb-item"><a href="http://localhost/Loherhof-Motors/php/admin.php">>&nbsp;AUTHENTICATION AND AUTHORIZATION</a></li>
    <li class="breadcrumb-item"><a href="#">>&nbsp;Cars</a></li>
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Add Car</li>
  </ol>
</nav>
<div class="whole_container">
<div class="cont">Add Car</div>
<hr>
  <div class="name">Name: <input type="text"></div>
  <div class="img1">Image One:<input type="file"></div>
  <div class="img2">Image Two:<input type="file"></div>

  <div class="make">Make:

  <select>
    <option>-----</option>
    <option>Audi</option>
    <option>Aston Martin</option>
    <option>BMW</option>
    <option>Mercedes</option>
    <option>Nissan</option>
    <option>Opel</option>
    <option>Peugot</option>
    <option>Renault</option>
    <option>Toyota</option>
    <option>Hyundai</option>
    <option>Skoda</option>

  </select>


  <input type="submit" value="OK"></div>
  <div class="model">Model: <input type="text"></div>


  <div class="condition">Condition:

  <select>
    <option>---</option>
    <option>New</option>
    <option>Old</option>
  </select>
  </div>

  <div class="price">Price: <input type="text"></div>
  <div class="kilo">Kilometers: <input type="text"></div>


  <div class="color">Color:

    <select>
      <option>-------</option>
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

    <select>
      <option>---</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>


<div class="saving_button">
<button type="button" class="btn">SAVE</button>
</div>


</div>

</body>
</html>
