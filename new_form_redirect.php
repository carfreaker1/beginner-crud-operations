<?php
session_start();


require_once 'db_connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $hobbies = $_POST['hobbies'];
    $gender = $_POST['gender'];
    
    
    // For Image
    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

    }

    if ($file_size > 5242880) {
        $errors[] = 'File size must be excately 5 MB';
    }
    if ($file_tmp)
    
    $allowed = array("image/jpeg", "image/gif", "image/png");
    if (!in_array($file_type, $allowed)) {
        $error_message = 'Only jpg, gif, and png files are allowed.';

        echo $error_message;

        exit();
    }

        if (empty([$errors] [$error_message]) == true) {
            move_uploaded_file($file_tmp, "upload/" . $file_name);
        } else {
            print_r($errors);
        }


    //   For Image Validation.

    


}
//   insert query
$sql = "INSERT INTO user (name, email, mobile, city, dob, hobbies,  gender, image)
        VALUES ( '{$name}', '{$email}','{$mobile}', '{$city}', '{$dob}', '{$hobbies}', '{$gender}', '{$file_name}')";{

          

   }
print_r($sql);


// Connection Query
if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = "Succes";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:listing.php")








    ?>