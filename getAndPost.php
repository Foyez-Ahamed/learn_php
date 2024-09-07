<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and post method</title>

    <style>
        
    </style>
</head>
<body>

<section class="form_sec">
   <form action="getAndPost.php" method="post">
    <label for="caption"> Select any course </label> <br>
    <input type="radio" value="ssc" name="course"> SSC <br>
    <input type="radio" value="hsc" name="course"> HSC <br>
    <input type="radio" value="bsc" name="course"> BSC <br>

    <input type="submit" name="confirm" value="confirm">
   </form>
</section>

<?php

if(isset($_POST["confirm"])){
    $course = null;

    if(isset($_POST["course"])){
        $course = $_POST["course"];
    }

    if($course == "ssc") {
        echo "You selected course : " . $course; 
    } else if($course == "hsc") {
        echo "You selected course : " . $course; 
    } else if($course == "bsc") {
        echo "You selected course : " . $course; 
    } else{
        echo "You don't select any other course";
    }
}

 ?>

</body>
</html>