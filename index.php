<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learning PHP </title>
</head>
<body>

<div>
  <h3>Hello world</h3>
</div>
 
    
</body>
</html>

<?php 

 $hours = 39;
 $rate = 10;
 $weeklyPay = 0;

 if($hours <= 0){
  $weeklyPay = 0;
 } else if($hours <= 40){
   $weeklyPay = $hours * $rate;
 } else { 
   $weeklyPay =  40 * $rate  +  ($hours - 40) * 5 ;
 }

 echo " Your weekly payment is BDT = " . $weeklyPay;
 
 ?>