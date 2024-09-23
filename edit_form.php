<?php

require_once 'db_connection.php';

$id = $_GET['id'];  
// $result = mysqli_query($con, $query) or die ( mysqli_error($con));
$result = mysqli_query($conn, "SELECT * FROM `user` WHERE id=" . $id . "");
$row = mysqli_fetch_assoc($result);


?>





<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./new_form_css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Edit Your Form</title>
</head>

<body>

    <!-- PHP Start -->
 

    <?php
    $status = "";

    if (isset($_POST['new']) && $_POST['new'] == 1) {

        $id = $_GET['id'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $city = $_GET['city'];
        $dob = $_GET['dob'];
        $hobbies = $_GET['hobbies'];
        $gender = $_GET['gender'];
        $mobile = $_GET['mobile'];

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

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "upload/" . $file_name);
            } else {
                print_r($errors);
            }


        //   For Image Validation.
        $allowed = array("image/jpeg", "image/gif", "image/png");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Only jpg, gif, and png files are allowed.';

            echo $error_message;

            exit();
        }
    }


    ?>

    <!-- PHP Ends Here -->

    <div class="container">
        <form action="update.php" method="post" enctype="multipart/form-data" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
            <div class="mt-3">
                <h1>Edit The Form Sincerly</h1>

                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    value="<?php echo $row['name']; ?>" pattern="[A-Z a-z\s]{3,30}" placeholder="Enter Your Name"
                    required>


            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" name="email" id="email" placeholder="Enter Your Email"
                    value="<?php echo $row['email']; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile No</label>
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile Number"
                    value="<?php echo $row['mobile'] ?>" pattern="[0-9]{10}" value="" maxlength="10" autocomplete="off"
                    onChange="IsMobileNumber(mobile)">
                <div id="emailHelp" class="form-text">We'll never share your mobile no with anyone else.
            </div>


                <div class="mt-3">
                    <label for="city">Choose Your City:</label>
                    <select name="city" id="city" class="form-control" required>
                        <option value="city">--- Choose your city ---</option>
                        <option value="Noida" <?php echo ($row['city'] == 'Noida') ? 'selected' : '' ?>>Noida</option>
                        <option value="Delhi" <?php echo ($row['city'] == 'Delhi') ? 'selected' : '' ?>>Delhi</option>
                        <option value="Ghaziabad" <?php echo ($row['city'] == 'Ghaziabad') ? 'selected' : '' ?>>Ghaziabad
                        </option>
                    </select>
                </div>



                <div class="mt-3">

                    <label for="dob">DOB:</label>
                    <input type="date" id="dob" value="<?php echo $row['dob']; ?>" class="form-control" name="dob"
                        required max="2030-12-25">


                </div>


                <div class="mt-3">
                    <label for="hobbies" class="form-label">Tell Me About your Hobbies</label>
                    <input type="text" class="form-control" name="hobbies" id="hobbies"
                        value="<?php echo $row['hobbies']; ?>" placeholder="Write Something About Your Hobbies">
                </div>


                <div class="mt-3">
                    <p>Choose Your Gender</p>
                    <input type="radio" name="gender" value="Male" <?php echo ($row['gender'] == 'Male') ? 'checked' : '' ?> required>Male
                    <input type="radio" name="gender" value="Female" <?php echo ($row['gender'] == 'Female') ? 'checked' : '' ?> required>Female
                    <input type="radio" name="gender" value="Other" <?php echo ($row['gender'] == 'Other') ? 'checked' : '' ?> required>Other
                </div>



                <div class="mt-3">
                    <input type="hidden" name="old_image" class="form-control" id="image"
                        value="<?php echo $row['image']; ?>">
                    Select image to
                    upload:
                    <input type="file" name="image" class="form-control" id="image"
                        value="<?php echo $row['image']; ?>">
                </div>
                <img style="width:50px" src="upload/<?php echo $row['image']; ?>" />

                <div class="mb-3">
                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                </div>
                <button type="Update" class="btn btn-primary mb-3" name="Update">Update</button>
        </form>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="./new_form_js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    -->
</body>

</html>