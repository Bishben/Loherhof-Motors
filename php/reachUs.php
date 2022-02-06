<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loherhof Motors | Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/reachUs.css">
  </head>
  <body>
    <div class="w3-container container-line">
      <div class="w3-bar w3-black">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="allCars.php" class="w3-bar-item w3-button">All Cars</a>
        <a href="feat.php" class="w3-bar-item w3-button">Featured</a>
        <div class="w3-right">
          <button class="w3-button w3-black w3-large" onclick="w3_open()">☰</button>
          <div class="w3-dropdown-hover">
            <button class="w3-button active">Contact Us ▼</button>
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
    </div>
    <div class="pad">
      <div class="w3-panel w3-leftbar w3-rightbar w3-border-purple">
        <h2 class = "w3-center">Contact Us</h2>
        <br>
        <ol class="list-group list-group">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Mail</div>
              drivemotors@gmail.com
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Office Phone</div>
              050-1234567
            </div>
          </li>
        </ol>
        <br>
      </div>
    </div>
    <div class="pad">
      <div class="w3-panel w3-light-grey w3-leftbar w3-rightbar w3-border-purple" class="pad">
        <h2 class="w3-center">Locate Us Here</h2>
        <br>
        <h5>Loherhof Automarket Showroom:03</h5>
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.9395191839494!2d6.143780797711363!3d50.96182245577264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0a43939973327%3A0x2ac29737bf1d5efc!2sLoherhof%20Geilenkirchen%20-%20Restaurant.%20Fitness.%20Golf.%20Tennis.%20Badminton%20and%20Events.!5e0!3m2!1sen!2sde!4v1643709784323!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
</html>
