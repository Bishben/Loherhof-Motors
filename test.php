<html>
    <head>

    </head>
    <body>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "2912";
            $dbname = "loherhofMotors";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully <br>";
            $sql = 'select * from Cars';
            $result = $conn->query($sql);
   
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $imgOne = "<img src='img/".$row['ImgOne']."'>";
                    $imgTwo = "<img src='img/".$row['ImgTwo']."'>";


                
                    echo "Car: {$row['Name']}  <br>" .
                        "Color: {$row['Color']}  <br>" .
                        "Condition: {$row['Price']} Dhs  <br>" .
                        "Image: {$imgOne} <br> {$imgTwo}";
                }
            } else {
                echo "0 results";
            }
            $conn->close();

            
        ?>
    </body>
</html>