<?php
include 'db_connection.php';
$id = $_GET['id'];
$status = $_GET['status'];
$query = "UPDATE user SET status = $status WHERE id = $id";
$result = mysqli_query($conn, $query);
if ($result) {
    header('location:listing.php');
} else {
    header('location:listing.php');
}
?>