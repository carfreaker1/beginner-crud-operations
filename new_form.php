<?php
session_start();
?>
<!doctype html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Form for Submission</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./new_form_css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <!--Data table css and  jquery  ends  -->


    <!-- <meta http-equiv="refresh" content="0;URL='http://localhost/aman/22_New_Form.php'" />     -->
    <style>
        .dropdown-menu li {
            text-align: left;
        }
    </style>
     <style>.bg-dark {
    background-color: #3300ff61!important;
}</style>
</head>

<body>



    <?php
    if (isset($_SESSION['status'])) {
        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>You Have Submitted Your Form Sucessfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
        <?php
        unset($_SESSION['status']);
    }
    ?>


    <div class="container">
        <form action="new_form_redirect.php" method="post" enctype="multipart/form-data" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
            <div class="mt-3">
            <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">Fill The Form</div>
        </div>
    </div>


                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    pattern="[A-Z a-z\s]{3,30}" placeholder="Enter Your Name" required>


            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" name="email" id="email"
                    placeholder="Enter Your Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>



            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile No</label>
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile Number"
                    maxlength="10" autocomplete="off" required>
                <div id="emailHelp" class="form-text">We'll never share your mobile no with anyone else.
                </div>



                <div class="mt-3">
                    <label for="city">Choose Your City:</label>
                    <select name="city" id="city" class="form-control" required>
                        <option value="city">--- Select Your City ---</option>
                        <option>Noida</option>
                        <option>Delhi</option>
                        <option>Ghaziabad</option>
                    </select>
                </div>



                <div class="mt-3">

                    <label for="dob">DOB:</label>
                    <input type="date" id="dob" class="form-control" name="dob" required max="2030-12-25">


                </div>


                <div class="mt-3">
                    <label for="hobbies" class="form-label">Tell Me About your Hobbies</label>
                    <input type="text" class="form-control" name="hobbies" id="hobbies"
                        placeholder="Write Something About Your Hobbies">
                </div>


                <div class="mt-3">
                    <p>Choose Your Gender</p>
                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required>Female
                    <input type="radio" name="gender" value="Other" required>Other
                </div>



                <div class="mt-3">
                     Select image to
                        upload:
                        <input type="file" name="image" class="form-control" id="image" required>
                </div>

                <div class="mb-3">
                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                </div>
                <button type="submit" onclick="return confirm('Your Are Now Going On to The Listing Page.')"
                    class="btn btn-primary mb-3" name="submit" onclick=" function aman()">Submit</button>
        </form>

    </div>



    <div class="alert alert-success" role="alert" mt-3>
    <strong><a target="_blank" onclick="return confirm('This link will take you to on another tab .')" href="http://localhost/my_form/listing.php" style="display: flex; justify-content : center">Click Here to See Your Submitted Form
</a></strong>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./new_form_js/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- <script src="number_validation.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./new_form_js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
    <script>
        function aman() {
            alert();
        }
    </script>
</body>

</html>