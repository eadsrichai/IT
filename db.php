<?php

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "IoT";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    // if ($conn->connect_error) {
    //     // die("Connection failed: " . $conn->connect_error);
    //     echo "database not work";
    // }
}catch(Exception $e){
  echo "database not connect";

}


?>