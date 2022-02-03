 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loherhof Motors | Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from Users';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $logged = false;
        if($row['login'] == "true"){
          $logged = true;
          $name = ucfirst($row['name']);
          break;
        }
      }
      if($logged==false){
        header("Location: login.php");
      }
    }
     ?>
    <div class="headerContainer">
      <div class="compName">
        Loherhof Motors
      </div>
      <div class="nav">
        <?php
              echo <<<_END
                <span class="yellow">Welcome, {$name}.</span>&nbsp;<a href="index.php">VIEW SITE</a>&nbsp;/&nbsp;<a href="?link=1">LOG OUT</a>
              _END;

        if(isset($_GET['link'])){
          $link = $_GET['link'];
          $check = false;
          if($link == '1'){
              $sql = "update users set login = 'false' where name='{$name}'";
              $conn->query($sql);
              $check = true;
          }
          if ($check = true){
            header("Location: login.php");
          }
        }
         ?>
      </div>
    </div>
    <div class="siteText">Site administration</div>
    <div class ="flexContainer">
      <div class="flexOne">
        <div class="mainContainerOne">
          <div class="containerOne">
            AUTHENTICATION AND AUTHORIZATION
          </div>
          <div class="containerTwo">
            <div class="subHead">
              <a href="http://localhost/Loherhof-Motors/php/user.php">Users</a>
            </div>
            <div class="func view">
              <a href="http://localhost/Loherhof-Motors/php/user.php"><span class="green">&#128065;</span>&nbsp;View</a>
            </div>
          </div>
        </div>
        <div class="mainContainerOne">
          <div class="containerOne">
            HOME OBJECTS
          </div>
          <div class="containerTwo">
            <div class="subHead cars">
              <a href="#">Cars</a>
            </div>
            <div class="func">
              <a href="http://localhost/Loherhof-Motors/php/carsection.php"><span class="green">&#10010;</span>&nbsp;Add<a>&nbsp;&nbsp;&nbsp;<a href="#"><span class="size-down">&#10060;</span>&nbsp;Remove</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mainContainerTwo">
        <div class="subHeadTwo">
          Recent Actions
        </div>
        <div class="actions">
          <span class="green">&#10010;</span>&nbsp;Nissan Patrol Platinum
        </div>
        <div class="actions">
          <span class="green">&#10010;</span>&nbsp;Toyota Landcruiser
        </div>
        <div class="actions">
          <span class="size-down">&#10060;</span>&nbsp;Nissan Patrol Platinum
        </div>
        <div class="actions">
          <span class="size-down">&#10060;</span>&nbsp;Nissan Xtrail
        </div>
        <div class="actions">
          <span class="green">&#10010;</span>&nbsp;Nissan Xtrail
        </div>
      </div>
    </div>
  </body>
</html>
