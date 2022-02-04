<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="../css/delete_cars.css">
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
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Delete Cars</li>
  </ol>
</nav>
  <div class=whole_contain>
  <div class="container1"></div>
  <div class="container2">
  <div class="box1">
    CARS
  </div>
  <!--<div class="container3">-->
  <?php


    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from cars';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){

           echo <<<_END
                 <p>
                 <div class=container3>
                 <div class="box2">
                   {$row['Name']}
                 </div>
                 <a href="?url={$row['url']}&name={$row['Name']}"><div class="box3"><button type="button" class="btn" >&#10060; DELETE</button></div></a>
                 </div>
                 </p>
            _END;
        }
    }

    if(isset($_GET['url'], $_GET['name'])){
      $sql = "delete from cars where url='{$_GET['url']}'";
      if($conn->query($sql) === TRUE){
        $sql = "insert into recent(name, action) values('{$_GET['name']}', 'Delete')";
        $conn->query($sql);
        echo <<<_END
          <script>
            alert("Car Deleted Successfully");
            document.location.href="http://localhost/Loherhof-Motors/php/delete_cars.php";
          </script>
        _END;
      } else{
        echo <<<_END
          <script>
            alert("An Unknown Error Occured");
            document.location.href="http://localhost/Loherhof-Motors/php/delete_cars.php";
          </script>
        _END;
      }
    }



   ?>
 <!--</div>-->
   </div>
   <div class="container1"></div>
 </div>
  </body>
</html>
