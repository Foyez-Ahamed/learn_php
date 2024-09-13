<?php

include("config/database.php");

// inset query //

$date = date("y-m-d H:i:s");

$sql = "insert into users (username, password, created_at) values ('Foyez Ahamed', 'foyez1234', '$date')";

$result = $conn->query($sql);

if( $result == true ){
    echo " New record added";
} else {
    echo 'No record created, error :'. $conn->error;
}

 ?>