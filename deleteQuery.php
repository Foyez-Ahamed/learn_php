<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>

<?php 

include("config/database.php");

$sql = "delete from users where id=4";

$result = $conn->query($sql);

if($result) {
    echo '<script type="text/javascript">toastr.success("Data Deleted Successfully")</script>';
} else{
    echo "Data not deleted" . $conn->error;
}

?>

    
</body>
</html>

