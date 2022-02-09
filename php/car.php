<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
            <title>Loherhof Motors | {$row['Name']}</title>
            _END;
         }
       }
    }
     ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/car.css">
  </head>
  <body>
    <?php
      include 'nav.php';
     ?>
    </div>
    <div class="flexbox">
      <?php
        $sql = 'select * from Cars';
        $result = $conn->query($sql);

        if($result->num_rows > 0){
           while($row = $result->fetch_assoc()){
             if($row['url'] == $_GET['name']){
               echo <<<_END
                <div class="w3-card-4">

                  <header class="w3-container c-grey">
                  <h1>{$row['Name']}</h1>
                  </header>

                  <div class="w3-container">
                    <div class="w3-content w3-display-container w3-white">
                      <img class="mySlides" src="../img/{$row['ImgOne']}">
                      <img class="mySlides" src="../img/{$row['ImgTwo']}">
                      <div class="w3-center w3-display-bottommiddle c-grey" style="width:100%">
                        <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
                        <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                        <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                      </div>
                    </div>
                    <div class="w3-container w3-white w3-center">
                      <br>
                      <div class="fw-bold">Make</div> {$row['Make']}
                      <hr>
                      <div class="fw-bold">Model</div> {$row['Model']}
                      <hr>
                      <div class="fw-bold">Conditon</div> {$row['Cond']}
                      <hr>
                      <div class="fw-bold">Price</div> DHS {$row['Price']}
                      <hr>
                      <div class="fw-bold">Color</div> {$row['Color']}
                      <hr>
                      <div class="fw-bold">Kilometers</div> {$row['Kilometers']} km
                      <br><br>
                    </div>

                  </div>

                  <footer class="w3-container c-grey w3-center">
                    <h5><a href="reachUs.php"<button class="w3-button w3-white w3-border w3-round-large">Contact Us</button></a></h5>
                  </footer>

                </div>
                _END;
             }
           }
        }
        $conn->close();
       ?>
    </div>
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
  <script type="text/javascript" src="../js/car.js"></script>
</html>
