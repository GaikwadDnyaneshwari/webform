<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "radiant";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM students_form";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

function display_data()
{
    global $conn;
    $query = "SELECT * FROM students_form";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return $result;
}

$result = display_data();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add this link in the <head> section of your PHP file -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-P3GRZ1z2EDMz3z2wXQdO7vqA4Y55v6q9rU3ZMD4BxIJUqVT1ImHHq9SQq1ivILyf6S5wQz4nDhrSpzadn8WJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Custom styles */
        .table-card {
            border: 1px solid #dee2e6;
        }

        .table-card .card-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 0.75rem;
        }

        .table-card .card-body {
            padding: 0;
        }

        .table-responsive {
            /* max-height: 550px; */
            overflow-y: auto;
        }

    
    </style>


    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="admin_dashboard.php">Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="student-registered.php">Registered Students</a>
                
                <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a> -->
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="admin_show.php">Admin</a>
                
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="admin_dashboard.php">Home</a>
                            </li>

                            <li class="nav-item active">
                                <span class="nav-link">
                                    <img src="admin.png" class="avatar">
                                    Welcome,
                                    <?php echo $_SESSION['email']; ?>
                                </span>
                            </li>
                            <li class="nav-item">
                                </a></li><button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#logoutModal" id="sidebarToggle">Logout</button>

                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#logoutModal">Logout</a>
                            </li> -->

                            <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li> -->
                        </ul>
                    </div>
                </div>
                <!-- Logout Confirmation Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-top">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to logout?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Registered Students</h5>
                                    <!-- <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addUserModal">Add Students</button> -->
                                </div>
                            </div>
                            <div class="card-body">
                            <?php
                        $conn=mysqli_connect("localhost","root","","radiant");
                        $query="SELECT * FROM students_form";
                        $query_run=mysqli_query($conn,$query);

                        
                        ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="text-black bg bg-primary text-white">
                                            <tr>
                                                <th>ID</th>
                                                
                                                <th>Training Course</th>
                                                <th>photo</th>
                                                <th>First Name</th>
                                                <th>Counsellors Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Mobile</th>
                                                <th>Signature</th>

                                                

                                                
                                                <th colspan='3'>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        if(mysqli_num_rows($query_run)>0)//record is there or not 
                        {
                                foreach ($query_run as $row) {
                                //    echo $row['id'];
                               
                                ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['training_course'];?></td>
            <!-- <td><img src="<?php echo "uploads/".$row['photo'];?>" alt="Image" width="100px">  </td> -->
            <td><?php echo $row['counsellor_name'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['middle_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td class='phone-width'><?php echo $row['mobile'];?></td>
            <!-- <td><img src="<?php echo "upload_sign/".$row['signature'];?>" alt="Image" width="100px">  </td> -->
           
           
            <td>
                <a href="edit.php?id=<?php echo $row['id'];?>" class='btn btn-primary'>Update</a>
            </td>
            <td>
            <a href="javascript:void(0);" onclick="confirmDelete('?id=<?php echo $row['id'];?>')" class="btn btn-danger" name="delete">Delete</a>

            </td>
            <td>
                <a href="view.php?id=<?php echo $row['id'];?>" class='btn btn-success' name='view'> View</a>
            </td>
        </tr>
        <?php
                                }
                        }
                        else{
                                ?>
                                        <tr>
                                            <td>id</td>
                                        </tr>
                                <?php
                        }
                        ?>
</tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <script>
                function confirmDelete(id) {
                    var result = confirm("Are you sure you want to delete this item?");
                    if (result) {
                        window.location.href = 'delete.php?id=' + id;
                    } else {
                        
                    }
                }
            </script>

            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>


</html>