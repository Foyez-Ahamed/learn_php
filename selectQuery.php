<?php 

include("config/database.php");

$sql = " select id, username, created_at from users where id = 4 ";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($rows = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($rows);
    }
}

?>