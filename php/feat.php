<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loherhof Motors | Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
    <div class="w3-container container-line">
      <div class="w3-bar w3-black">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="allCars.php" class="w3-bar-item w3-button">All Cars</a>
        <a href="feat.php" class="w3-bar-item w3-button active">Featured</a>
        <div class="w3-right">
          <button class="w3-button w3-black w3-large" onclick="w3_open()">☰</button>
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
      <form action="{% url 'web:search' %}" method="post" name="">
        <select class="form-select" aria-label="Default select example" name="car_make">
          <option selected>Car Make</option>
          <option>Toyota</option>
          <option>Nissan</option>
          <option>Mitsubishi</option>
          <option>Lexus</option>
          <option>Hyundai</option>
          <option>Renault</option>
          <option>BMW</option>
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" name="car_condition">
          <option selected>Condition</option>
          <option>New</option>
          <option>Old</option>
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" name="car_price">
          <option selected>Price</option>
          <option>Low to High</option>
          <option>High to Low</option>
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" name = "car_color">
          <option selected>Color</option>
          <option>Any</option>
          <option>White</option>
          <option>Black</option>
          <option>Gray</option>
          <option>Silver</option>
          <option>Red</option>
          <option>Blue</option>
          <option>Brown</option>
          <option>Green</option>
          <option>Beige</option>
          <option>Orange</option>
          <option>Gold</option>
          <option>Yellow</option>
          <option>Purple</option>
        </select>
        <br>
        <button type="submit" class="btn-primary" name="button">Apply Filter</button>
      </form>
    </div>
    <div class="flexbox">
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
             if($row['Featured'] == 'Yes'){
               echo <<<_END
                 <div class="w3-card-4 w3-black">
                   <img src="../img/{$row['ImgOne']}" alt="Alps">
                   <div class="w3-container w3-center">
                     <h3>{$row['Name']}</h3>
                     <hr>
                     <p>AED {$row['Price']}</p>
                     <hr>
                     <p>{$row['Color']}</p>
                     <hr>
                     <p>{$row['Kilometers']} km</p>
                     <hr>
                      <a href="car.php?name={$row['url']}"><p>View More Details</p></a>
                   </div>
                 </div>
                _END;
             }
           }
        }
       ?>
    </div>
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
</html>
