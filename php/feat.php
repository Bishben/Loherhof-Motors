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
        $conn->close();
       ?>
    </div>
  </body>
  <script type="text/javascript" src="../js/index.js"></script>
</html>
