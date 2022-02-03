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
        <a href="index.php" class="w3-bar-item w3-button active">Home</a>
        <a href="allCars.php" class="w3-bar-item w3-button">All Cars</a>
        <a href="feat.php" class="w3-bar-item w3-button">Featured</a>
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
      <form method="post" name="filter">
        <select class="form-select" aria-label="Default select example" name="make" required>
          <option selected disabled>Car Make</option>
          <option>Toyota</option>
          <option>Nissan</option>
          <option>Mitsubishi</option>
          <option>Lexus</option>
          <option>Hyundai</option>
          <option>Renault</option>
          <option>BMW</option>
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
        $make = trim($_GET['make']);
        $cond = trim($_GET['cond']);
        $price = trim($_GET['price']);
        $color = trim($_GET['color']);


        $servername = "localhost";
        $username = "root";
        $password = "2912";
        $dbname = "loherhofMotors";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        if ($color ==  '0'){
          if($price == '1'){
            $sql = "select * from cars where Make='{$make}' AND Cond='{$cond}' order by Price ASC";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){

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
          } else{
            $sql = "select * from cars where Make='{$make}' AND Cond='{$cond}' order by Price DESC";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){

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
        } else{
            if($price == '1'){
              $sql = "select * from cars where Make='{$make}' AND Cond='{$cond}' AND Color='{$color}' order by Price ASC";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

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
          } else{

            $sql = "select * from cars where Make='{$make}' AND Cond='{$cond}' AND Color='{$color}' order by Price DESC";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){

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

        }
        if($result->num_rows == 0){
          echo <<<_END
            <div class="errorContainer">Sorry :( <br> No Cars Available To Show</div>
          _END;
        }
        $conn->close();
       ?>
    </div>
    <?php
    if(isset($_POST['make']) && isset($_POST['cond']) && isset($_POST['price']) && isset($_POST['color'])){
      header("Location: filter.php?make={$_POST['make']}&cond={$_POST['cond']}&price={$_POST['price']}&color={$_POST['color']}");
    }
     ?>
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
</html>
