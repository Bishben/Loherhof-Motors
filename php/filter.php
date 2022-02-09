<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loherhof Motors | Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
    <?php
      include 'nav.php';
     ?>
    </div>
    <div class="flexbox">
      <?php
        $make = trim($_GET['make']);
        $cond = trim($_GET['cond']);
        $price = trim($_GET['price']);
        $color = trim($_GET['color']);

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
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
</html>
