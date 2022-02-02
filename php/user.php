<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="../css/us.css">
  </head>
  <body>
    <div class="headerContainer">
      <div class="compName">
        Loherhof Motors
      </div>
      <div class="nav">
        <span class="yellow">Welcome.</span>&nbsp;<a href="localhost/index.html">VIEW SITE</a>&nbsp;/&nbsp;<a href="localhost/login.php">LOG OUT</a>
      </div>
    </div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="localhost/admin.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">>&nbsp;AUTHENTICATION AND AUTHORIZATION</a></li>
    <li class="breadcrumb-item" aria-current="page">>&nbsp;Users</li>
  </ol>
</nav>
<div class="tables">
  <div class="e1"></div>
  <table class="responstable">
  <tr>
    <th>USERNAME</th>
    <th>STAFF STATUS</th>
  </tr>

  <?php


    $servername = "localhost";
    $username = "root";
    $password = "2912";
    $dbname = "loherhofMotors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'select * from users';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       while($row = $result->fetch_assoc()){
         if($row['login'] == 'true'){
           echo <<<_END




                 <tr>
                   <td>{$row['name']}</td>
                   <td>&#9989;</td>
                 </tr>


            _END;
          } else{
            echo <<<_END




                  <tr>
                    <td>{$row['name']}</td>
                    <td>&#10060;</td>
                  </tr>


             _END;
          }
         }
       }

   ?>
 </table>
   <div class="e1"></div></div></body>
</html>


<!--<td>{if($row['login']=='true') &#9989; else &#10060; }</td>
</tr>

<tr>
<td>jayesh</td>
<td>&#9989;</td>
</tr>

<tr>
<td>bartu</td>
<td>&#9989;</td>
</tr>

<tr>
<td>tobi</td>
<td>&#9989;</td>
</tr>-->
