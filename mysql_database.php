<?php 
// OOP format connection

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbName = "learnphp";

// create connection

// $conn = new mysqli($servername, $username, $password, $dbName);

// check connetion

// if($conn->connect_error){
//     die("Connection failed" . $conn->connect_error);
// }

// echo "Connection successful";


// connecting my sql with procedural approach //


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "learnphp";

$conn = @mysqli_connect(
    $servername,
    $username,
    $password,
    $dbName
);

if($conn){
    echo "Database connection successfully";
} else {
    echo "Failed to connect to database error : " . mysqli_connect_error();
}
?>

