<?php
session_start();
require_once 'db_connection.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Submitted Form</title>
    <link rel="stylesheet" type="text/css" href="./datatable_css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="./datatable_css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="./new_form_css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

</head>

<body>
    <?php
    if (isset($_SESSION['status']) == 'Succes') {

    ?>

        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>You Have Submitted Your Form Sucessfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
    <?php
        unset($_SESSION['status']);
    }
    ?>



    <?php
    if (isset($_SESSION['update']) == 'Sucess') {

    ?>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>You Have Update Your Form Sucessfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'

    <?php
        unset($_SESSION['update']);
    }
    ?>



    <?php
    if (isset($_SESSION['delete']) == 'Sucess') {

    ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>You Have Delete Your Form Sucessfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'

    <?php
        unset($_SESSION['delete']);
    }
    ?>

    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>You Have Delete Your Form Sucessfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'

        .site-header .navbar {
    /* background: #1b4e91; */
    /* background: linear-gradient(to top, #1b4e91, #       nm ); */
    
    /* background: linear-gradient(to top, #f25972, #f69062); */
    /* padding: 10px 0; */
}
         -->
    <h2 style=" background: #f09433; 
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
    background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );" class="text-white">Your Submitted Forms</h2>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Date</th>
                <th>Hobbies</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $results = mysqli_query($conn, "SELECT * FROM `user`");
            $sno = 0;
            while ($row = mysqli_fetch_array($results)) {
                $sno = $sno + 1;
            ?>
                <tr>


                    <td>
                        <?php echo "$sno"; ?>
                    </td>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['mobile']; ?>
                    </td>
                    <td>
                        <?php echo $row['city']; ?>
                    </td>
                    <td>
                        <?php echo $row['dob']; ?>
                    </td>
                    <td>
                        <?php echo $row['hobbies']; ?>
                    </td>
                    <td>
                        <?php echo $row['d']; ?>
                    </td>
                    <td>
                        <?php echo $row['image']; ?>
                    </td>
                    <td>
                        <a class='btn btn-sm btn-primary mb-3' href="/my_form/edit_form.php?id=<?php echo $row['id']; ?>">Edit</a>

                        <a class='btn btn-sm btn-primary' href="/my_form/delete.php?id=<?php echo $row['id']; ?>" class='del_btn'>Delete</a>
                    </td>
                    <td>
                        <?php
                        if ($row['status'] == 0) {
                            echo '<a class="btn btn-sm btn-success" href="status.php?id=' . $row['id'] . '&status=1">Active</a>';
                        } else {
                            echo '<a class="btn btn-sm btn-danger" href="status.php?id=' . $row['id'] . '&status=0">Inactive</a>';
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <div class="alert alert-success" role="alert" mt-3 style=" background: #f09433; 
background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );">
        <strong><a class="text-white" target="_blank" onclick="return confirm('This link will take you to an external web site.')" href="new_form.php" style="display: flex; justify-content : center">Click Here
                to
                Submit
                New Form
            </a></strong>
    </div>

    <script src="./new_form_js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./datatablecdns/jquery-3.7.0.js"></script>
    <script src="./datatablecdns/buttons.print.min.js"></script>
    <script src="./datatablecdns/dataTables.buttons.min.js"></script>
    <script src="./datatablecdns/jquery.dataTables.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>

</html>