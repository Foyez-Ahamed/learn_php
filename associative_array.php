<?php 

$employees = array(
    "Foyez" => "Software Engineer", 
    "Konok" => "Web developer",
    "Kakon" => "Web Designer"
);

$keys = array_keys($employees);

$values = array_values($employees);

$employees = array_flip($employees);

$employees = array_reverse($employees);

echo "<pre>";
print_r($values);
print_r($employees);

exit;

?>

<?php

foreach($employees as $key => $value){

?>

<p> <b> <?php echo ucwords($key) ?> </b> : <?php echo $value ?>  </p>

<?php } ?>

<!-- associtive array function  -->




