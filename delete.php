<?php
session_start();
require_once 'db_connection.php';



$id = $_REQUEST['id'];
$sql = "DELETE FROM `user` WHERE id = $id ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// print_r($sql);
// die();


if ($conn->query($sql) === TRUE) {
    $_SESSION['delete'] = "Delete";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// print_r($_SESSION);
// die();


header("Location:listing.php")


    ?>