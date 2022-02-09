<?php
  $servername = "localhost";
  $username = "root";
  $password = "2912";
  $dbname = "loherhofMotors";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 ?>
<div class="w3-container container-line bc-navy">
  <div class="w3-bar bc-navy">
    <a href="index.php" class="w3-bar-item nav-link">Home</a>
    <a href="allCars.php" class="w3-bar-item nav-link">All Cars</a>
    <a href="feat.php" class="w3-bar-item nav-link">Featured</a>
    <div class="w3-right">
      <button class="w3-button bc-navy w3-large" onclick="w3_open()">☰</button>
      <div class="w3-dropdown-hover">
        <button class="w3-button">Contact Us ▼</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="reachUs.php" class="w3-bar-item w3-button">Our Contact</a>
          <a href="reachUs.php" class="w3-bar-item w3-button">Our Location</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Loherhof Motors &nbsp; &times;</button>
  <form method="post" name="filter">
    <select class="form-select" aria-label="Default select example" name="make" required>
      <option selected disabled>Car Make</option>
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
    <br>
    <select class="form-select" aria-label="Default select example" name="cond" required>
      <option selected disabled>Condition</option>
      <option>New</option>
      <option>Used</option>
    </select>
    <br>
    <select class="form-select" aria-label="Default select example" name="price" required>
      <option selected disabled>Price</option>
      <option value='1'>Low to High</option>
      <option value='2'>High to Low</option>
    </select>
    <br>
    <select class="form-select" aria-label="Default select example" name = "color" required>
      <option selected disabled>Color</option>
      <option value='0'>Any</option>
      <option>Black</option>
      <option>White</option>
      <option>Red</option>
      <option>Yellow</option>
      <option>Blue</option>
      <option>Green</option>
      <option>Brown</option>
      <option>Silver</option>
    </select>
    <br>
    <button type="submit" class="btn-primary" name="button">Apply Filter</button>
  </form>
  <?php
    if(isset($_POST['make']) && isset($_POST['cond']) && isset($_POST['price']) && isset($_POST['color'])){
      header("Location: filter.php?make={$_POST['make']}&cond={$_POST['cond']}&price={$_POST['price']}&color={$_POST['color']}");
    }
   ?>
