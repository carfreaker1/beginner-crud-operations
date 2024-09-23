<?php

$servername ='localhost';
$username = 'root';
$password ='';
$dbname = 'new_form';


$conn = new mysqli($servername, $username, $password, $dbname);

// echo "<pre>";
print_r($conn);


?>