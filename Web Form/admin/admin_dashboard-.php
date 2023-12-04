<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>


<?php
// Database connection

$servername = "localhost";
$username = "theradiantitserv_theradiantitser";
$password = "Jupiter@45";
$dbname = "theradiantitserv_student";

// Create connection
$conn = new mysqli($servername, $email, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Step 1: Retrieve the user count from the database
$sql = "SELECT COUNT(*) AS studentCount FROM students_form";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $studentCount = $row['studentCount'];
} else {

    $studentCount = 0;
}

// Step 2: Retrieve the admin count from the database
$sql = "SELECT COUNT(*) AS adminCount FROM admin_login";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $adminCount = $row['adminCount'];
} else {
    
    $adminCount = 0;
}


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
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add this link in the <head> section of your PHP file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-P3GRZ1z2EDMz3z2wXQdO7vqA4Y55v6q9rU3ZMD4BxIJUqVT1ImHHq9SQq1ivILyf6S5wQz4nDhrSpzadn8WJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* Custom styles for the cards */
        .dashboard-card {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .dashboard-card .card-body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex " id="wrapper">
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
                            <!-- <li class="nav-item">
                                </a></li> -->
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#logoutModal">Logout</a>
                            </li> -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoutModal"
                                id="sidebarToggle">Logout</button>

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
            <!-- Page content-->
            <div class="container-fluid mt-4">
                <div class="container">
                    <h4 class="mt-4">Admin Dashboard</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, autem, consectetur accusantium
                        totam architecto dolores ab quas iste voluptas explicabo deleniti reprehenderit animi dicta nemo
                        sequi! Esse laudantium libero accusantium!Lorem Lorem ipsum dolor sit, amet consectetur
                        adipisicing
                        elit. Quasi repudiandae rem suscipit sapiente doloremque voluptatem voluptate quo, ab dolorum
                        nam
                        repellat unde voluptatibus rerum aperiam. Nobis earum ipsa tempora adipisci.
                    </p>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card dashboard-card">
                                    <div class="card-header">
                                        <a href="student-registered.php" class="text-white text-decoration-none">Total
                                        <i class="bi bi-people-fill"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <?php echo $studentCount; ?>
                                        </h3>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card dashboard-card">
                                    <div class="card-header">
                                        <a href="admin_show.php" class="text-white text-decoration-none">Total Admin
                                        <i class="bi bi-person-plus-fill"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <?php echo $adminCount; ?>
                                        </h3>

                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card dashboard-card">
                                    <div class="card-header">
                                        <a href="admin_show.php" class="text-white text-decoration-none">Total Admin
                                        <i class="bi bi-person-plus-fill"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                           
                                        </h3>

                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card dashboard-card">
                                    <div class="card-header">
                                        <a href="admin_show.php" class="text-white text-decoration-none">Total Admin
                                        <i class="bi bi-person-plus-fill"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            
                                        </h3>

                                    </div>
                                </div>
                            </div> -->

                            
                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>










