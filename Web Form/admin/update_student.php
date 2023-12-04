<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated data from the form

    $id = $_POST['id'];
    // $photo=$_POST['photo'];
    $trainingCourse = $_POST["trainingCourse"];
    $trainingFees = $_POST["trainingFees"];
    $counsellors_name = $_POST["counsellors_name"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $age = $_POST["age"];
    $permanentAddress = $_POST["permanentAddress"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $mothersName = $_POST["mothersName"];
    $same_as_permanent = isset($_POST['same_as_permanent']) ? 1 : 0;
    $correspondenceAddress = $same_as_permanent ? $permanentAddress : $_POST['correspondenceAddress'];
    $physicallyChallenged = $_POST["physicallyChallenged"];
    $ssc_instituteName = $_POST["ssc_instituteName"]; 
    $ssc_place = $_POST["ssc_place"];
    $ssc_university = $_POST["ssc_university"];
    $ssc_percentage = $_POST["ssc_percentage"];
    $ssc_yearOfPassing = $_POST["ssc_yearOfPassing"];
    $hsc_instituteName = $_POST["hsc_instituteName"]; 
    $hsc_place = $_POST["hsc_place"];
    $hsc_university = $_POST["hsc_university"];
    $hsc_percentage = $_POST["hsc_percentage"];
    $hsc_yearOfPassing = $_POST["hsc_yearOfPassing"];
    $graduation_instituteName = $_POST["graduation_instituteName"]; 
    $graduation_place = $_POST["graduation_place"];
    $graduation_university = $_POST["graduation_university"];
    $graduation_percentage = $_POST["graduation_percentage"];
    $graduation_yearOfPassing = $_POST["graduation_yearOfPassing"];
    $postgraduation_instituteName = $_POST["postgraduation_instituteName"]; 
    $postgraduation_place = $_POST["postgraduation_place"];
    $postgraduation_university = $_POST["postgraduation_university"];
    $postgraduation_percentage = $_POST["postgraduation_percentage"];
    $postgraduation_yearOfPassing = $_POST["postgraduation_yearOfPassing"];
    $achievement_text = $_POST["achievement_text"];
    $activity_text = $_POST["activity_text"];
    $hobbies_interests_text= $_POST["hobbies_interests_text"];
    $english_read = $_POST["english_read"]?? '';
    $english_write = $_POST["english_write"]?? '';
    $english_speak = $_POST["english_speak"]?? '';
    $hindi_speak = $_POST["hindi_speak"]?? '';
    $hindi_read = $_POST["hindi_read"]?? '';
    $hindi_write = $_POST["hindi_write"]?? '';
    $marathi_speak = $_POST["marathi_speak"]?? '';
    $marathi_read = $_POST["marathi_read"]?? '';
    $marathi_write = $_POST["marathi_write"]?? '';
    $first_ref_name = $_POST["first_ref_name"];
    $first_ref_address = $_POST["first_ref_address"];
    $first_ref_relation = $_POST["first_ref_relation"];
    $first_ref_mobile = $_POST["first_ref_mobile"];
    $first_ref_email = $_POST["first_ref_email"];
    $second_ref_name = $_POST["second_ref_name"];
    $second_ref_address = $_POST["second_ref_address"];
    $second_ref_relation = $_POST["second_ref_relation"];
    $second_ref_mobile = $_POST["second_ref_mobile"];
    $second_ref_email = $_POST["second_ref_email"];
    $experience = $_POST["experience"];
    $organization = $_POST["organization"]; 
    $designation = $_POST["designation"];
    $from_date = $_POST["from_date"];
    // Convert empty date input to NULL
    $from_date = !empty($from_date) ? date("Y-m-d", strtotime($from_date)) : null;

    $to_date = $_POST["to_date"];

    // Convert empty date input to NULL
    $to_date = !empty($to_date) ? date("Y-m-d", strtotime($to_date)) : null;

    $organization1 = $_POST["organization1"]; 
    $designation1 = $_POST["designation1"];
    $from_date1 = $_POST["from_date1"];
    // Convert empty date input to NULL
    $from_date1 = !empty($from_date1) ? date("Y-m-d", strtotime($from_date1)) : null;

    $to_date1 = $_POST["to_date1"];

    // Convert empty date input to NULL
    $to_date1 = !empty($to_date1) ? date("Y-m-d", strtotime($to_date1)) : null;
    $pune = $_POST["pune"]?? '';
    $mumbai = $_POST["mumbai"]?? '';
    $bangalore = $_POST["bangalore"]?? '';
    $courseName = $_POST["courseName"];
    $courseFees = $_POST["courseFees"];
    $fee = $_POST["fee"];
    $amount = $_POST["amount"];
    $Schedule = $_POST["Schedule"];
    $paymentType = $_POST['paymentType'];
    $leftFees = $_POST["leftFees"];
    $paymentMode = $_POST["paymentMode"];
    $EMI_NO_1 = $_POST["EMI_NO_1"];
    $EMI_NO_1_date = $_POST["EMI_NO_1_date"];
    $EMI_NO_1_Amount = $_POST["EMI_NO_1_Amount"];
    $EMI_NO_2 = $_POST["EMI_NO_2"];
    $EMI_NO_2_date = $_POST["EMI_NO_2_date"];
    $EMI_NO_2_Amount = $_POST["EMI_NO_2_Amount"];
    $EMI_NO_3 = $_POST["EMI_NO_3"];
    $EMI_NO_3_date = $_POST["EMI_NO_3_date"];
    $EMI_NO_3_Amount = $_POST["EMI_NO_3_Amount"];
    // $signature = $_POST["signature"];
    $date_submission = $_POST["date_submission"];
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radiant";
    

// Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE students_form SET 
  
    training_course = '$trainingCourse',
    training_fees = '$trainingFees',
    counsellor_name = '$counsellors_name',
    first_name = '$firstName',
    middle_name = '$middleName',
    last_name = '$lastName',
    date_of_birth = '$dateOfBirth',
    age = '$age',
    permanent_address = '$permanentAddress',
    mobile = '$mobile',
    email = '$email',
    mothers_name = '$mothersName',
    correspondence_address = '$correspondenceAddress',
    physically_challenged = '$physicallyChallenged',
    ssc_institute_name = '$ssc_instituteName',
    ssc_place = '$ssc_place',
    ssc_university = '$ssc_university',
    ssc_percentage = '$ssc_percentage',
    ssc_year_of_passing = '$ssc_yearOfPassing',
    hsc_institute_name = '$hsc_instituteName',
    hsc_place = '$hsc_place',
    hsc_university = '$hsc_university',
    hsc_percentage = '$hsc_percentage',
    hsc_year_of_passing = '$hsc_yearOfPassing',
    graduation_institute_name = '$graduation_instituteName',
    graduation_place = '$graduation_place',
    graduation_university = '$graduation_university',
    graduation_percentage = '$graduation_percentage',
    graduation_year_of_passing = '$graduation_yearOfPassing',
    postgraduation_institute_name = '$postgraduation_instituteName',
    postgraduation_place = '$postgraduation_place',
    postgraduation_university = '$postgraduation_university',
    postgraduation_percentage = '$postgraduation_percentage',
    postgraduation_year_of_passing = '$postgraduation_yearOfPassing',
    achievement_text = '$achievement_text',
    activity_text = '$activity_text',
    hobbies_interests_text = '$hobbies_interests_text',
    english_read = '$english_read',
    english_write = '$english_write',
    english_speak = '$english_speak',
    hindi_read = '$hindi_read',
    hindi_write = '$hindi_write',
    hindi_speak = '$hindi_speak',
    marathi_read = '$marathi_read',
    marathi_write = '$marathi_write',
    marathi_speak = '$marathi_speak',
    first_ref_name = '$first_ref_name',
    first_ref_address = '$first_ref_address',
    first_ref_relation = '$first_ref_relation',
    first_ref_mobile = '$first_ref_mobile',
    first_ref_email = '$first_ref_email',
    second_ref_name = '$second_ref_name',
    second_ref_address = '$second_ref_address',
    second_ref_relation = '$second_ref_relation',
    second_ref_mobile = '$second_ref_mobile',
    second_ref_email = '$second_ref_email',
    experience = '$experience',
    organization = '$organization',
    designation = '$designation',
    from_date = '$from_date',
    to_date = '$to_date',
    organization1 = '$organization1',
    designation1 = '$designation1',
    from_date1 = '$from_date1',
    to_date1 = '$to_date1',
    preferred_job_location_pune = '$pune',
    preferred_job_location_mumbai = '$mumbai',
    preferred_job_location_bangalore = '$bangalore',
    course_name = '$courseName',
    course_fees = '$courseFees',
    fee = '$fee',
    amount = '$amount',
    schedule = '$Schedule',
    payment_mode = '$paymentMode',
    left_fees = '$leftFees',
    payment_type = '$paymentType',
    emi_no_1 = '$EMI_NO_1',
    emi_no_1_date = '$EMI_NO_1_date',
    emi_no_1_amount = '$EMI_NO_1_Amount',
    emi_no_2 = '$EMI_NO_2',
    emi_no_2_date = '$EMI_NO_2_date',
    emi_no_2_amount = '$EMI_NO_2_Amount',
    emi_no_3 = '$EMI_NO_3',
    emi_no_3_date = '$EMI_NO_3_date',
    emi_no_3_amount = '$EMI_NO_3_Amount',
   
    date_submission = '$date_submission'
WHERE id = $id";


    if ($conn->query($sql) === TRUE) {
        
        echo '<script>alert("Student  Data updated successfully!");</script>';
        echo '<script>window.location.href = "student-registered.php";</script>';
        
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radiant";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id']; // Replace with the actual student's ID
$sql = "SELECT * FROM students_form WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Student not found!";
}

$conn->close();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-P3GRZ1z2EDMz3z2wXQdO7vqA4Y55v6q9rU3ZMD4BxIJUqVT1ImHHq9SQq1ivILyf6S5wQz4nDhrSpzadn8WJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- <link rel="css/stylesheet" href="custom.css"> -->

    <style>
        .form-bg{
    border: 1px solid #00000050;
    /* margin-left: 5%; */
      /* margin-right: 5%; */
  
}
.img-bg{
    background: #6464643b;
    padding: 14px;
}
@media (max-width: 1920px) {
    .form-body{
      
        padding: 14px 32px;
     
    }
}

@media (max-width: 444px) {
    .form-body{
    
        padding: 14px 14px;
       
    }
}
.res-table{
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling:touch
}

.navbar {
    margin-bottom: 20px;
    height: 100px;
    margin-bottom: 20px;
}

.navbar-brand img {
    max-height: 40px;
}

.navbar-nav>li {
    margin-right: 10px;
}

.nav-link {
    font-size: 14px;
    color: var(--black-100);
}

@media (max-width: 767px) {
    .navbar-nav {
        text-align: center;
    }

    .navbar-nav>li {
        display: block;
        margin-right: 0;
        margin-bottom: 10px;
    }

    .navbar-collapse {
        margin-top: 40px;
        text-align: center;
    }

    .navbar-toggler {
        float: none;
    }
}


/* custom-dropdown */
.custom-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
}

.custom-dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu.columns-3 {
    margin-top: 0;
    /* Adjust as needed */
    min-width: 500px;
}

.dropdown-menu.columns-3 a {
    display: block;
    padding: 5px 10px;
}


/* Adjust breadcrumb styles */
.breadcrumb {
    background-image: url('custom-enrollment-images/breadcrumb.jpg');
    height: 300px;
    background-size: cover;
    background-position: center;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Change breadcrumb text color */
.breadcrumb-item a {
    color: white;
    text-decoration: none;
}

/* Change the color of the active breadcrumb item */
.breadcrumb-item.active {
    color: white;
}

/* Reset default margin and bullet of breadcrumb items */
.breadcrumb-item {
    margin: 0;
    list-style: none;
}

.navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar-brand img {
    max-height: 40px;
}

.navbar-nav>li {
    margin-right: 10px;
}

.navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar-brand img {
    max-height: 50px;
}

.underlined {
    text-decoration: underline;
    margin-bottom: 100px;
}





/* Customize the background color of the mobile menu */
@media (max-width: 767px) {
    .navbar-toggler {}

    .navbar-toggler-icon {
        background-color: white;
        /* Change this color to your desired icon color */
    }

    .navbar-collapse {
        background-color: #F8F9FA;
        /* Change this color to your desired menu background color */
    }
}

.navbar-nav>li {
    margin-right: 10px;
}

.container-fluid.bg-light.p-8 {
    /* Add background image */
    background-image: url('custom-enrollment-images/12.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;

}

/* Add custom CSS for the sticky WhatsApp button */
.sticky-whatsapp {
    position: fixed;
    bottom: 80px;
    right: 20px;
    z-index: 999;
    display: flex;
    align-items: center;
}

.whatsapp-icon {
    width: 65px;
    height: 65px;
    margin-right: 8px;
}

/* Media query for mobile view */
@media (max-width: 767px) {
    .sticky-whatsapp {
        /* display: flex; You can remove this line, as display is already flex by default */
        margin-right: 16rem;
        /* Adjust this margin value as needed */
    }

    .whatsapp-icon {
        width: 60px;
        height: 60px;
        margin-left: 8px;
    }
}



/* Custom CSS to remove underlines from <a> tags within the footer */
footer a {
    text-decoration: none;
}

/* Custom styles for the footer */
.footer-area {

    color: #fff;
    /* padding: 50px 0; */
}

.footer-top {
    /* border-bottom: 1px solid #555; */
    padding: 30px 0;
}

.footer-logo img {
    max-height: 50px;
    width: auto;
}

.footer-address {
    margin-top: 20px;
    color: #bbb;
}

.footer-address a {
    color: #bbb;
}

.footer-text h3 {
    color: #fff;
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-text-all {
    list-style: none;
    padding: 0;
}

.footer-text-all li {
    margin-bottom: 5px;
}

.footer-text-all a {
    color: #bbb;
    text-decoration: none;
}

.footer-bottom {

    padding: 10px 0;
}

.footer-bottom-text p {
    margin: 0;
    color: #bbb;
}

/* Additional styling for the form */
.footer-text form input[type="text"],
.footer-text form input[type="email"],
.footer-text form input[type="tel"],
.footer-text form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #fff;
    border-radius: 4px;
    background-color: #fff;
    color: #fff;
}

.footer-text form button.submit {
    background-color: #05C2F9;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.footer-text form button.submit:hover {
    background-color: #777;
}

.footer-area {
    background-image: url('13.jpg');
    background-size: cover;
    color: #fff;
    padding: 50px 0;
}

.footer-top {
    background-image: url('custom-enrollment-images/13.jpg');
    background-size: cover;
    /* border-bottom: 1px solid #555; */
    padding: 30px 0;
}

/* Custom styles for the footer */


.footer-area {
    position: relative;
    min-height: 100%;
}

.footer-content {
    padding-bottom: 60px;
    /* Adjust this value as needed */
}

.footer-bottom {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #fff;
    /* Change background color to white */
    padding: 15px 0;
}

.footer-bottom-text p {
    margin: 0;
    color: #fff;
    /* Change text color */
}

.footer-bottom-text a {
    color: #555;
    /* Change link color */
}


/* Enrollment form  */

/* Custom styles for the QR image and positioning */
#qrImage {
    display: none;
    width: 160px;
    /* Adjust the width as needed */
    height: 160px;
    /* Adjust the height as needed */
    margin-left: 10px;
    vertical-align: middle;
    border: 1px solid #ccc;
    /* Add border style */
    padding: 2px;
    /* Add padding for border */
}

@media print {
    .page-break {
        page-break-before: always;
    }
}

/* Style for the passport size photo */
.img-fluid {
    width: 4.5cm;
    /* Adjust the width as needed */
    height: 6cm;
    /* Adjust the height as needed */
    object-fit: cover;
    /* Maintain aspect ratio and cover the container */
    border: 1px solid #ccc;
    /* Optional: Add a border around the photo */
    margin-bottom: 20px;
    margin-right: 50px;
}

/* Style to hide "Browse" text */
.custom-file-input::-webkit-file-upload-button {
    visibility: hidden;
}

.custom-file-input::before {
    content: 'Choose Photo';
    display: inline-block;
    background: linear-gradient(top, #f9f9f9, #e3e3e3);
    border: 1px solid #999;
    border-radius: 3px;
    padding: 5px 8px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    text-shadow: 1px 1px #fff;
    font-weight: 700;
    font-size: 10pt;
}

.custom-file-input:hover::before {
    border-color: black;
}

.custom-file-input:active::before {
    background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

/* Custom styles for horizontal image */
.horizontal-image {
    display: flex;
    align-items: center;

}

.horizontal-image img {
    max-width: 100%;
  
}

.fixed-heading {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: white;
    /* Set the background color as needed */
    z-index: 1000;
    /* Adjust the z-index as needed to ensure it appears above other content */
    padding: 10px;
    /* Add padding to create spacing around the heading */
}

/* Style for the image upload box */
.image-upload-box {
    /* border: 1px solid #ccc; */
    padding: 0;
    justify-content: left;
    /* Remove padding to fit the image perfectly */
    position: relative;
    margin-top: 20px;
    height: 130px;
    /* Set the desired height of the box */
    width: 100%;
    /* Make the box take the full width of its container */
    background-size: contain;
    /* Fit the image within the box */
    background-repeat: no-repeat;
    /* Prevent repeating of the image */
    background-position: center;
    /* Center the background image */
    box-sizing: border-box;
    /* Include border within the box dimensions */
}


/* Hide the file input's default text */
#image-input {
    display: none;
}

/* Style a custom label as a button */
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

/* Hide the custom-file-upload button when an image is selected */
.custom-file-upload.hidden {
    display: none;
}

@media print {
    .page-break {
        margin-top: 2rem;
        /* Add margin at the top of the new page content */
        page-break-before: always;
        /* Force page break before the content */
    }
}

.hidden {
    display: none; 
}

/* Define modal styles */
.modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

img {
    max-width: 80%;
    max-height: 80%;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
}

/* Hide the table by default */
#experienceTable {
    display: none;
}


  /* Custom styles for better mobile responsiveness */
  .custom-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
}
    </style>


</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="admin_dashboard.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="student-registered.php">Registered Student</a>
                
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admin_show.php">Admin</a>
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
                                    <img src="admin.png"  class="avatar">
                                    Welcome,
                                    <?php echo $_SESSION['email']; ?>
                                </span>
                            </li>
                            <li class="nav-item">
                                </a></li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#logoutModal">Logout</a>
                            </li>
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
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Admin Panel</title>
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
            </head>

            <body>
                
            <div class="container border shadow" style="margin-top:25px; padding:25px; width:75%">
            
              <div class="row justify-content-center">

             
              <div class="col-md-12">
                <div class="form-bg" id="enrollment">
                    <div class="img-bg" >
                        <div class="horizontal-image justify-content-center " >
                            <img src="header.png" alt="Horizontal Image" class="img"
                                style="height: 80px;">
                        </div>
                    </div>
                    <div class="col-md-12"  >
                        <h5 class="text-center mt-3">Student Enrollment Form</h5>
                    </div>
                    <div class="form-body">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin-top: 100px;">
                            <div>

                               <input class="form-control" type="hidden" name="id"
                                 value="<?php echo $row['id']; ?>">
                            </div>
                            <div class="form-group d-none" id="displayPhotoSection">
                                <label for="uploadedPhoto"></label>
                                <label id="clickToChangeLabel" class="float-right" style="cursor: pointer;"></label>
                                <img id="uploadedPhoto" class="img-fluid float-right" src="#" alt="Uploaded Photo">
                            </div>

                            <!-- Display Uploaded Photo
                            <div class="form-group text-right">
                                <label for="photo"></label>
                                <div class="custom-file col-12" style="width: 195px;">
                                    <input type="file" class="custom-file-input" id="photo" name="photo"<?php echo $row["photo"];?>
                                        accept="image/*"  onchange="checkFileSize()">
                                    <label class="custom-file-label text-left" for="photo" id="photoLabel">Upload
                                        Photo</label>
                                        <span id="fileSizeMessage" style="color:black;">File size must be less than 256 KB.</span>
                                </div>
                            </div> -->

                            <div class="form-group text-right">
                            <td>
                                <?php
                                // Assuming $row['photo'] contains the image URL or file path
                                $imagePath = $row['photo'];

                                // Check if $imagePath is not empty (assuming it's a valid image path)
                                if (!empty($imagePath)) {
                                    echo '<img src="' . $imagePath . '" alt="Image" width="200px"class="img-fluid float-right" style="float: right;" />';
                                } else {
                                    // Display a placeholder or error message if $imagePath is empty
                                    echo 'Image not found';
                                }
                                ?>
                            </td>
                            </div>
                                    <br>
                            <div class="form-group"  style="margin-top: 100px;">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="Traning Course">
                                            <h5>Training Course For:</h5>
                                        </label>

                                            <select class="form-control" id="trainingCourse" name="trainingCourse">
                            
                                                    <option <?php if ($row["training_course"] == "Digital Marketing")echo "selected"; ?>>Digital Marketing</option>
                                                    <option <?php if ($row["training_course"] == "Digital Marketing + Web Development")echo "selected"; ?>>Digital Marketing + Web Development
                                                    </option>
                                                    <option <?php if ($row["training_course"] == "Full Stack Development(java/python)")echo "selected"; ?>>Full Stack Development(java/python)
                                                    </option>
                                                    <option <?php if ($row["training_course"] == "Data Science (Basic to Advance)")echo "selected"; ?>>Data Science(Basic to Advance)</option>
                                                    <option <?php if ($row["training_course"] == "(Integrated) Data Science")echo "selected"; ?>>(Integrated) Data Science</option>
                                                    <option <?php if ($row["training_course"] == "Web Development")echo "selected"; ?>>Web Development</option>
                                                    <option <?php if ($row["training_course"] == "PMO")echo "selected"; ?>>PMO</option>
                                                    <option <?php if ($row["training_course"] == "SAP S4 hana")echo "selected"; ?>>SAP S4 hana</option>
                                                    <option <?php if ($row["training_course"] == "Salesforce(including certification)")echo "selected"; ?>>Salesforce(including certification)</option>
                                                    <option <?php if ($row["training_course"] == "AWS")echo "selected"; ?>>AWS</option>
                                                    <option <?php if ($row["training_course"] == "Power BI")echo "selected"; ?>>Power BI</option>
                                                     <option <?php if ($row["training_course"] == "Software Testing")echo "selected"; ?>>Software Testing</option>

                                            </select>
                                    </div>      
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="counsellors_name" class='mt-3'>Counsellor name :</label>
                                        <select class="form-control"  id="counsellors_name"
                                               name="counsellors_name" >
                                             <option <?php if ($row["counsellor_name"] == "Miss.Nivedita Mam")echo "selected"; ?>>Miss.Nivedita Mam</option>
                                             <option <?php if ($row["counsellor_name"] == "Miss.Archana Mam")echo "selected"; ?>>Miss.Archana Mam</option>
                                             <option <?php if ($row["counsellor_name"] == "Miss.Unnati Mam")echo "selected"; ?>>Miss.Unnati Mam</option>
                                             <option <?php if ($row["counsellor_name"] == "Miss.Farina Mam")echo "selected"; ?>>Miss.Farina Mam</option>
                                             <option <?php if ($row["counsellor_name"] == "Miss.Komal Mam")echo "selected"; ?>>Miss.Komal Mam</option>
                                             <option <?php if ($row["counsellor_name"] == "Mr.Nishant Sir")echo "selected"; ?>>Mr.Nishant Sir</option>
                                             <option <?php if ($row["counsellor_name"] == "Mr.Prashant Sir")echo "selected"; ?>>Mr.Prashant Sir</option>
                                             <option <?php if ($row["counsellor_name"] == "Mr.Aayush Sir")echo "selected"; ?>>Mr.Aayush Sir</option>

                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-3" for="fees">Training Fees :</label>
                                        <input type="number" class="form-control" id="trainingFees" name="trainingFees"  value='<?php echo $row["training_fees"]; ?>'
                                            placeholder="Rs/-" >
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <p class="h5">A) Personal Particulars :</p>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" value='<?php echo $row["first_name"]; ?>' >
                                </div>
                                <div class="col-md-4">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="form-control" id="middleName" name="middleName" value='<?php echo $row["middle_name"]; ?>'  >
                                </div>
                                <div class="col-md-4">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" value='<?php echo $row["last_name"]; ?>' >
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="date_of_birth">Date of Birth:</label>
                                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" value='<?php echo $row["date_of_birth"]; ?>'
                                            >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="age">Age:</label>
                                        <input type="number" class="form-control" id="age" name="age" value='<?php echo $row["age"]; ?>' >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="mothersName">Mother's Name:</label>
                                        <input type="text" class="form-control" id="mothersName" name="mothersName" value='<?php echo $row["mothers_name"]; ?>'
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="mobile">Mobile:</label>
                                        <input type="number" class="form-control" id="mobile" name="mobile" value='<?php echo $row["mobile"]; ?>' >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" value='<?php echo $row["email"]; ?>' >
                                    </div>
                                </div>
                            </div>


                            <div class="">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="permanentAddress">Enter Your Permanent Address:</label><br>
                                        <label for="permanentAddress">Permanent Address:</label>
                                        <textarea class="form-control" id="permanentAddress" name="permanentAddress"
                                            ><?php echo $row["permanent_address"]; ?></textarea>
                                    </div>
                                    <div class="col-md-6">

                                        <label for="correspondenceAddress">Correspondence Address:</label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="same_as_permanent" ; id="sameAsPermanent"
                                                onchange="copyAddress()"> Same as Permanent
                                            Address
                                        </label>
                                        <textarea class="form-control" id="correspondenceAddress"
                                            name="correspondenceAddress" ><?php echo $row["correspondence_address"]; ?></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group mt-3">
                                <p class="h5">B) Health Information:</p>
                            </div>
                            <hr>

                            <div class="container mb-3">
                                <div class="form-group row">
                                    <label for="physicallyChallenged">Physically Challenged:</label>
                                    <div class="col-sm-3 ">
                                        <select class="form-control" id="physicallyChallenged"
                                            name="physicallyChallenged" >
                                                <option <?php if ($row["physically_challenged"] == "Yes")echo "selected"; ?>>Yes</option>
                                                <option <?php if ($row["physically_challenged"] == "No")echo "selected"; ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!-- Educational Information -->
                            <hr>
                            <div class="form-group">
                                <p class="h5">C) Educational Information:</p>
                            </div>
                            <hr>
                            <div class="res-table form-group">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute Name</th>
                                            <th>Place</th>
                                            <th>University</th>
                                            <th>Percentage</th>
                                            <th>Year of Passing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="ssc_instituteName"
                                                    id="ssc_instituteName">
                                                    <option <?php if ($row["ssc_institute_name"] == "SSC")echo "selected"; ?>>SSC</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" id="place" name="ssc_place" value='<?php echo $row["ssc_place"]; ?>'
                                                    ></td>
                                            <td><input type="text" class="form-control" id="university"
                                                    name="ssc_university" value='<?php echo $row["ssc_university"]; ?>'  >
                                            </td>
                                            <td><input type="number" class="form-control" id="percentage" value='<?php echo $row["ssc_percentage"]; ?>'
                                                    name="ssc_percentage" step="0.01" min="0" max="100" ></td>
                                            <td><input type="number" class="form-control" id="yearOfPassing"
                                                    name="ssc_yearOfPassing" value='<?php echo $row["ssc_year_of_passing"]; ?>'  ></td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="hsc_instituteName"
                                                    id="hsc_instituteName">
                                                    <option <?php if ($row["hsc_institute_name"] == "HSC")echo "selected"; ?>>HSC</option>
                                                    <option <?php if ($row["hsc_institute_name"] == "Diploma")echo "selected"; ?>>Diploma</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" id="place" name="hsc_place" value='<?php echo $row["hsc_place"]; ?>'
                                                    ></td>
                                            <td><input type="text" class="form-control" id="university" value='<?php echo $row["hsc_university"]; ?>'
                                                    name="hsc_university" >
                                            </td>
                                            <td><input type="number" class="form-control" id="percentage" value='<?php echo $row["hsc_percentage"]; ?>'
                                                    name="hsc_percentage" step="0.01" min="0" max="100" ></td>
                                            <td><input type="number" class="form-control" id="yearOfPassing" value='<?php echo $row["hsc_year_of_passing"]; ?>'
                                                    name="hsc_yearOfPassing" ></td>

                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="text" class="form-control" id="graduation_instituteName" name="graduation_instituteName"
                                                 placeholder="Enter Graduation Ex.B.Tech"  value='<?php echo $row["graduation_institute_name"]; ?>'  required></td>
                                                
                                            </td>
                                            <td><input type="text" class="form-control" id="place" value='<?php echo $row["graduation_place"]; ?>'
                                                    name="graduation_place" >
                                            </td>
                                            <td><input type="text" class="form-control" id="university" value='<?php echo $row["graduation_university"]; ?>'
                                                    name="graduation_university" ></td>
                                            <td><input type="number" class="form-control" id="percentage" value='<?php echo $row["graduation_percentage"]; ?>'
                                                    name="graduation_percentage" step="0.01" min="0" max="100" >
                                            </td>
                                            <td><input type="number" class="form-control" id="yearOfPassing" value='<?php echo $row["graduation_year_of_passing"]; ?>'
                                                    name="graduation_yearOfPassing" ></td>

                                        </tr>
                                        <tr>
                                            <td>

                                               <input type="text" class="form-control" id="postgraduation_instituteName" name="postgraduation_instituteName"
                                                 placeholder="Enter Postgraduation Ex.MBA"  value='<?php echo $row["postgraduation_institute_name"]; ?>'></td>
                                                
                                    
                                            </td>
                                            <td><input type="text" class="form-control" id="place" value='<?php echo $row["postgraduation_place"]; ?>'
                                                    name="postgraduation_place">
                                            </td>
                                            <td><input type="text" class="form-control" id="university" value='<?php echo $row["postgraduation_university"]; ?>'
                                                    name="postgraduation_university"></td>
                                            <td><input type="number" class="form-control" id="percentage" value='<?php echo $row["postgraduation_percentage"]; ?>'
                                                    name="postgraduation_percentage" step="0.01" min="0" max="100"></td>
                                            <td><input type="number" class="form-control" id="yearOfPassing" value='<?php echo $row["postgraduation_year_of_passing"]; ?>'
                                                    name="postgraduation_yearOfPassing"></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5 class="mb-3">D) Achievements and Extra Curricular Activity Details</h5>
                            <div class="res-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Achievements/Scholarship/Prizes</th>
                                            <th>Extra-Curricular Activities</th>
                                            <th>Hobbies and Intersts</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" name="achievement_text" value='<?php echo $row["achievement_text"]; ?>'
                                                    ></td>
                                            <td><input type="text" class="form-control" name="activity_text" value='<?php echo $row["activity_text"]; ?>' >
                                            </td>
                                            <td><input type="text" class="form-control" name="hobbies_interests_text" value='<?php echo $row["hobbies_interests_text"]; ?>'
                                                    ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>


                            <h5 class="mb-3">E) Lingual Skills</h5>
                            <div class="res-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Languages</th>
                                        <th>Read</th>
                                        <th>Write</th>
                                        <th>Speak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>English</td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_read"
                                                    name="english_read" value="English" <?php if ($row["english_read"] == "English") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_write"
                                                    name="english_write" value="English" <?php if ($row["english_write"] == "English") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_speak"
                                                    name="english_speak" value="English" <?php if ($row["english_speak"] == "English") echo "checked"; ?>>

                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Hindi</td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_read"
                                                    name="hindi_read" value="Hindi"<?php if ($row["hindi_read"] == "Hindi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_write"
                                                    name="hindi_write" value="Hindi"<?php if ($row["hindi_write"] == "Hindi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_speak"
                                                    name="hindi_speak" value="Hindi"<?php if ($row["hindi_speak"] == "Hindi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marathi</td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_read"
                                                    name="marathi_read" value="Marathi" <?php if ($row["marathi_read"] == "Marathi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="can_write"
                                                    name="marathi_write" value="Marathi" <?php if ($row["marathi_write"] == "Marathi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input " id="can_speak"
                                                    name="marathi_speak" value="Marathi" <?php if ($row["marathi_speak"] == "Marathi") echo "checked"; ?>>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                            <br>


                            <!-- References section -->
                            <h5 class="mb-3">F) References</h5>
                            <p>
                                <li>Name and Address of two references whom you know well and who know you well</li>
                            </p>
                            <!-- first reference -->
                            <p>
                                <li>First reference should be your family member only</li>
                            </p>


                            <div class="">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="familyName">Name:</label>
                                        <input type="text" class="form-control" id="familyName" name="first_ref_name" value='<?php echo $row["first_ref_name"]; ?>'
                                            >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="familyRelation">Relation:</label>
                                        <input type="text" class="form-control" id="familyRelation"
                                            name="first_ref_relation" value='<?php echo $row["first_ref_relation"]; ?>' >
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="familyPhone">Mobile No:</label>
                                            <input type="tel" class="form-control" id="familyPhone" value='<?php echo $row["first_ref_mobile"]; ?>'
                                                name="first_ref_mobile" minlength="10" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="familyEmail">Email:</label>
                                        <input type="email" class="form-control" id="familyEmail" name="first_ref_email" value='<?php echo $row["first_ref_email"]; ?>'
                                            >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="familyAddress">Address:</label>
                                        <textarea class="form-control" id="familyAddress" name="first_ref_address"
                                            ><?php echo $row["first_ref_address"]; ?></textarea>
                                    </div>

                                </div>
                            </div>



                            <!-- second references -->
                            <p>
                                <li>Second Reference Should be your Friends</li>
                            </p>








                            <div class="">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="familyName">Name:</label>
                                        <input type="text" class="form-control" id="familyName" name="second_ref_name" value='<?php echo $row["second_ref_name"]; ?>'
                                            >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="familyRelation">Relation:</label>
                                        <input type="text" class="form-control" id="familyRelation" value='<?php echo $row["second_ref_relation"]; ?>'
                                            name="second_ref_relation" >
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="familyPhone">Mobile No:</label>
                                            <input type="tel" class="form-control" id="familyPhone" value='<?php echo $row["second_ref_mobile"]; ?>'
                                                name="second_ref_mobile" minlength="10" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="familyEmail">Email:</label>
                                        <input type="email" class="form-control" id="familyEmail" value='<?php echo $row["second_ref_email"]; ?>'
                                            name="second_ref_email" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="familyAddress">Address:</label>
                                        <textarea class="form-control" id="familyAddress" name="second_ref_address"
                                            ><?php echo $row["first_ref_address"]; ?></textarea>
                                    </div>

                                </div>
                            </div>



                            <h5 class="mb-3">G) Experience</h5>
                            <div class="container">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="experience" id="yes" value="yes"
                                      onchange="toggleTable()"<?php if ($row["experience"] == "yes") echo "checked"; ?> >
                                    <label class="form-check-label" for="radio-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="experience" id="no" value="no"
                                         onchange="toggleTable()"<?php if ($row["experience"] == "no") echo "checked"; ?> >
                                    <label class="form-check-label" for="radio-no">No</label>
                                </div>
                            </div>



                            <div id="experienceTable"  >
                                <h5 class="mt-3">Experience Details:<h6 Latest Experience> </h6>

                                </h5>
                                <div class="res-table">
                                <table class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr No</th>
                                            <th scope="col">Organization</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">From</th>
                                            <th scope="col">To</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1 </td>
                                            <td><input type="text" class="form-control" name="organization" value='<?php echo $row["organization"]; ?>'></td>
                                            <td><input type="text" class="form-control" name="designation" value='<?php echo $row["designation"]; ?>'></td>
                                            <td><input type="date" class="form-control" name="from_date" value='<?php echo $row["from_date"]; ?>'></td>
                                            <td><input type="date" class="form-control" name="to_date" value='<?php echo $row["to_date"]; ?>'></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td><input type="text" class="form-control" name="organization1" value='<?php echo $row["organization1"]; ?>'></td>
                                            <td><input type="text" class="form-control" name="designation1" value='<?php echo $row["designation1"]; ?>'></td>
                                            <td><input type="date" class="form-control" name="from_date1" value='<?php echo $row["from_date1"]; ?>'></td>
                                            <td><input type="date" class="form-control" name="to_date1" value='<?php echo $row["to_date1"]; ?>'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <br>








                            <!-- Preferred Location section -->
                            <h5 class="mb-3">H) Preferred Location for Job</h5>
                            <div class="form-check form-check-inline ml-4">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                        name="pune" value="Pune" <?php if ($row["preferred_job_location_pune"] == "Pune") echo "checked"; ?>> Pune</label>
                            </div>
                            <div class="form-check  form-check-inline-sm ml-4">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                        name="mumbai" value="Mumbai" <?php if ($row["preferred_job_location_mumbai"] == "Mumbai") echo "checked"; ?>> Mumbai</label>
                            </div>
                            <div class="form-check form-check-inline ml-4 mb-3">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                        name="bangalore" value="Bangalore" <?php if ($row["preferred_job_location_bangalore"] == "Bangalore") echo "checked"; ?>> Bangalore</label>
                            </div>


                            <!-- Preferred payment section -->
                            <div class="form-group">
                                <h5 class="mb-3">I) Payment Details:</h5>
                            </div>
                            <hr>




                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="" for="courseName">Course name:</label>
                                    <input type="text" class="form-control" id="courseName" name="courseName"  value='<?php echo $row["course_name"]; ?>'required>
                                </div>
                                <div class="col-md-6">
                                    <label class="" for="courseFees">Course fees:</label>
                                    <input type="number" class="form-control" id="courseFees" name="courseFees" value='<?php echo $row["course_fees"]; ?>'
                                        placeholder="Rs/-" >
                                </div>
                            </div>

                            <hr>

                            <div class="res-table form-group">
                                <table class="table table-bordered  ">
                                    <thead>
                                        <tr>
                                            <th>Fee</th>
                                            <th>Amount</th>
                                            <th>Schedule</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="fee" name="fee" >
                                                    <option <?php if ($row["fee"] == "Enrollment Fee")echo "selected"; ?>>Enrollment Fee</option>
                                                   

                                                </select>
                                            </td>
                                            <td><input type="number" class="form-control" id="enrollmentFee" value='<?php echo $row["amount"]; ?>'
                                                    name="amount" placeholder="Rs/-" ></td>
                                            <td>
                                                <select class="form-control" id="Schedule" name="Schedule" >
                                                    <option <?php if ($row["schedule"] == "At the time of Enrollment")echo "selected"; ?>>At the time of Enrollment</option>
                                                    <option <?php if ($row["schedule"] == "During the Trainig only")echo "selected"; ?>>During the Trainig only</option>
                                                
                                                </select>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-4">
                                    <label class="" for="leftFees">Left fees :</label>
                                    <input type="number" class="form-control" id="leftFees" name="leftFees" value='<?php echo $row["left_fees"]; ?>'
                                        placeholder="Rs/-" >
                                </div>
                            </div>

                            <h4 class="mb-3">Enrollment Fees Payment Detail:</h4>

                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <div class="form-group form-inline">
                                        <label class="mr-2" for="paymentMode">Payment Mode:</label>
                                        <select class="form-control mr-2" id="paymentMode" name="paymentMode" >
                                             <option <?php if ($row["payment_mode"] == "Online")echo "selected"; ?>>Online</option>
                                             <option <?php if ($row["payment_mode"] == "Cash")echo "selected"; ?>>Cash</option>  
                                             <option <?php if ($row["payment_mode"] == "Cheque")echo "selected"; ?>>Cheque</option>  
                                             <option <?php if ($row["payment_mode"] == "Card")echo "selected"; ?>>Card</option>  
                                             
                                        </select>
                                        <label id="payNowLabel" style="display: none; margin-left: 60px;"
                                            class="inline-block">Pay Now</label>
                                        <img src="qr.jpg" id="qrImage" alt="QR Code" style="display: none;"
                                            class="inline-block">

                                    </div>
                                </div>

                            </div>


                            <div class="container mt-5">
                            

                                <h4 class="">Training / Course Fees Payment Mode:</h4>
                                <div class="checkbox form-check">
                                    <label><input type="radio" name="paymentType" value="One Time"  <?php if ($row["payment_type"] == "One Time") echo "checked"; ?> id="oneTimeCheckbox"
                                            onchange="togglePaymentTable(false)"> One Time (Fess
                                        to be
                                        paid within 8 days
                                        of registration)</label>
                                    <div class="form-check hidden" id="agreeContinueCheckbox">
                                        <input class="form-check-input" type="checkbox" id="agreeCheckbox" <?php if ($row["payment_type"] == "One Time") echo "checked";?>>
                                        <label class="form-check-label fs-6" for="agree-checkbox"> I confirm that I have
                                            read,
                                            understood,
                                            and
                                            agree to the above terms and conditions.</label>
                                    </div>


                                    <label><input type="radio" name="paymentType" value="EMI" <?php if ($row["payment_type"] == "EMI") echo "checked"; ?> id="emiCheckbox"
                                            onchange="togglePaymentTable(true)"> EMI(Fees to be paid in 3
                                        installment,within 60 days
                                        of registration
                                        amount):</label>
                                </div>


                                <div class="res-table " id="emi-table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>EMI</th>
                                                <th>Date</th>
                                                <th>Amount</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="EMI_NO_1" id="EMI_NO_1">
                                                        <option value='EMI NO 1' <?php if ($row["emi_no_1"] == "EMI NO 1")echo "selected"; ?>>EMI NO 1</option>
                                                    </select>
                                                </td>
                                                <td><input type="date" class="form-control" id="selectedDate"
                                                        name="EMI_NO_1_date" value="<?php echo ($row["emi_no_1_date"]) ? $row["emi_no_1_date"] : ''; ?>"></td>
                                                <td>
                                                    <input type='number' class="form-control" id="Amount"
                                                        name="EMI_NO_1_Amount" value='<?php echo $row["emi_no_1_amount"]; ?>' placeholder="Rs/-">
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="EMI_NO_2" id="EMI_NO_2">
                                                        <option value="EMI NO 2"<?php if ($row["emi_no_2"] == "EMI NO 2")echo "selected"; ?>>EMI NO 2</option>
                                                    </select>
                                                </td>
                                                <td><input type="date" class="form-control" id="dateSecondEmi"
                                                        name="EMI_NO_2_date" value="<?php echo ($row["emi_no_2_date"]) ? $row["emi_no_2_date"] : ''; ?>"></td>
                                                <td>
                                                    <input type="number" class="form-control" id="Amount"
                                                        name="EMI_NO_2_Amount" value='<?php echo $row["emi_no_2_amount"]; ?>' placeholder="Rs/-">
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="EMI_NO_3" id="EMI_NO_3">
                                                        <option value="EMI NO 3"<?php if ($row["emi_no_3"] == "EMI NO 3")echo "selected"; ?>>EMI NO 3</option>
                                                    </select>
                                                </td>
                                                <td><input type="date" class="form-control" id="dateThirdEmi"
                                                        name="EMI_NO_3_date" value="<?php echo ($row["emi_no_3_date"]) ? $row["emi_no_3_date"] : ''; ?>"></td>
                                                <td>
                                                    <input type="number" class="form-control" id="Amount"
                                                        name="EMI_NO_3_Amount" placeholder="Rs/-" value='<?php echo $row["emi_no_3_amount"]; ?>'>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="checkbox form-check">
                                        <div id="agreeContinueCheckbox1" class="form-check pb-3 hidden">
                                            <input class="form-check-input" type="checkbox" id="agreeCheckbox" <?php if ($row["payment_type"] == "EMI") echo "checked";?>>
                                            <label class="form-check-label fs-6" for="agree-checkbox"> I confirm that I have
                                                read,
                                                understood,
                                                and
                                                agree to the above terms and conditions.</label>
                                        </div>

                                        <label><input type="radio" name="paymentType" value="Loan" <?php if ($row["payment_type"] == "Loan") echo "checked"; ?> id="loanCheckbox"
                                                onchange="togglePaymentTable(false)"> Loan (Documents to be
                                            Submitted within 8
                                            days of
                                            registration)</label>
                                </div>



                                <hr>
                                
                                <h3 class="mb-3 text-center text-sm-start">Rules and Regulations</h3>
                                    <div class="form-group">
                                        <h5 class="mb-3">A. Payment Schedule</h5>
                                        <div class="ml-5 ">
                                            <ul class="list-unstyled " style=" padding-left: 0;">
                                                <li class="text-sm-center ">
                                                    <p style="text-align: justify;">
                                                        Enrollment fee needs to be deposited with Enrollment Form
                                                    </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Fee is<strong> Non Refundable</strong> under any circumstances.
                                                    </p>
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Radiant IT Services PVT LTD will only introduce the student to BANK for
                                                        the loan
                                                        procedure.
                                                    </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Initiating and completing the loan procedure within stipulated time is
                                                        the sole
                                                        responsibility of the student. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Submitting the required documents for the loan procedure and arranging
                                                        suitable
                                                        guarantor,
                                                        as
                                                        required by BANK is the sole responsibility of the student. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Students have to pay a full course within 60 days of the start of the
                                                        batch; to continue
                                                        in
                                                        the batch. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Applicants need to make the necessary payment as per the prescribed
                                                        dates. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Incase applicant fails to pay training fees, the admission would be
                                                        canceled without
                                                        refund
                                                        of any
                                                        kind. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        All Fees transactions to be carried out to Radiant Account provided by
                                                        the management,
                                                        any
                                                        transaction
                                                        to personal account shall not be considered. </p>
        
                                                </li>
                                                <li >
                                                    <p style="text-align: justify;">
                                                        Cheque / DD to be drawn in favor of <strong>"RADIANT IT SERVICES PVT
                                                            LTD"</strong></p>
        
                                                </li>
        
        
                                            </ul>
                                        </div>
                                    </div>

                               


                                <h5 class="">B. Fees Excursions</h5>
                                <div class="ml-5">
                                    <ul style=" padding-left: 0;">
                                        <li>
                                            <p style="text-align: justify;">
                                                The fee does not cover the prospectus cost, industrial visits,
                                                excursions, pocket money,
                                                extra subject /
                                                learning support, weekend outing/trips, transportation,
                                                workshops/seminars, extra
                                                tutorial
                                                and medical expenses of any sort.
                                            </p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The fee is applicable for the training program being conducted by
                                                RADIANT IT SERVICES
                                                PVT
                                                LTD.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                <strong>RADIANT IT SERVICES PVT LTD</strong> reserves the right to
                                                revise or amend the
                                                fee
                                                schedule, if
                                                required.
                                            </p>

                                        </li>

                                    </ul>
                                </div>



                                <h5 class="print-content">C. Students Decorums</h5>
                                <div class="ml-5">
                                    <ul  class="text-sm-left"   style=" padding-left: 0;">
                                        <li>
                                            <p style="text-align: justify;">
                                                The student is expected to maintain discipline and decorum at all times.
                                            </p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The RADIANT IT SERVICES PVT LTD reserves the right to cancel the
                                                admission without a
                                                refund
                                                in case the student fails to abide by the rules and regulations of
                                                RADIANT IT SERVICES
                                                PVT.
                                                LTD.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The fee payment should be made in due time period as notified to
                                                students. In case of a
                                                loan
                                                getting
                                                rejected by the bank it is the responsibility of the student to search
                                                for options for
                                                fee
                                                payment.</p>

                                        </li>

                                    </ul>
                                </div>

                                <h5 class="mb-3">D. Students Decorums [ Continued ]</h5>
                                <div class="ml-5">
                                    <ul class="text-sm-left"   style=" padding-left: 0;">
                                        <li>
                                            <p style="text-align: justify;">
                                                Students have to submit a soft copy of their Educational documents to
                                                <strong> RADIANT
                                                    IT
                                                    SERVICES
                                                    PVT. LTD.</strong> students will not be allowed to sit for the batch
                                                unless and
                                                until
                                                the documents are
                                                submitted for verification.
                                            </p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                It is mandatory for the student to appear for all the assessments during
                                                and after the
                                                training sessions.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                Students are required to appear on the interviews on the mentioned dates
                                                as informed by
                                                the
                                                placement department at any location.</p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The student is supposed to join the organization at any
                                                location for which he/she has been
                                                selected on the mentioned date as informed.</p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                Students understand that salary packages and job location may vary; It
                                                is not in control
                                                of
                                                the institute. It is the responsibility of the student to earn a higher
                                                package by
                                                virtue of
                                                performance.

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                Students are expected to follow and fulfill the attendance required
                                                during the entire
                                                duration of the program. Students cannot take more than two leaves in a
                                                month. If a
                                                student
                                                fails to inform <strong>RADIANT IT SERVICES PVT LTD,</strong>
                                                HR/management and take
                                                permission about his
                                                absence for more than 3 times, this will be taken as a serious
                                                behavioral issue and may
                                                lead
                                                to cancellation of agreement and without refund of fees, and student
                                                support amount will
                                                be
                                                stopped with immediate effect.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                <strong>RADIANT IT SERVICES PVT LTD</strong> reserves the right to take
                                                necessary action
                                                (civil or criminal)
                                                if a student is found indulged in immoral activities.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                Students should not participate in any political activities or form
                                                unions or groups and
                                                should not be part of any political gathering during their tenure with
                                                <strong>RADIANT
                                                    IT
                                                    SERVICES
                                                    PVT LTD.</strong>
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The admission stands canceled in case of data infringement, circulating
                                                <strong>RADIANT
                                                    IT
                                                    SERVICES
                                                    PVT LTD</strong> printed or non-printed material outside. In case of
                                                sharing
                                                training
                                                patterns and
                                                modules with third parties or starting their own competitive business
                                                similar to the
                                                business model of <strong>RADIANT IT SERVICES PVT LTD</strong> or its
                                                associates.
                                            </p>
                                        </li>
                                    </ul>
                                </div>





                                <h5 class="mb-3 ">E. Important Information and Instructions :</h5>
                                <div class="ml-5 mb-5 ">
                                    <ol class="text-sm-left"  style=" padding-left: 0; list-style-type: decimal;">
                                        <li>
                                            <p style="text-align: justify;">
                                                Do not send original documents/ mark sheets/ certificates by post or
                                                courier.
                                            </p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                The application form will be processed only on submission of copies of
                                                all documents and
                                                records mentioned.
                                            </p>
                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                Admission is subject to fulfillment of the criteria and availability of
                                                seats.</p>

                                        </li>
                                        <li>
                                            <p style="text-align: justify;">
                                                No terms and conditions mentioned above will be waived under any
                                                circumstances
                                                whatsoever.
                                            </p>

                                        </li>
                                        </ul>
                                </div>
                                </div>
                                <h5 class="page-break text-center mb-3">Undertaking</h5>
                                <p style="text-align: justify;">
                                    I hereby undertake I have applied for the Training Program with <strong>RADIANT IT
                                        SERVICES PVT.
                                        LTD.</strong> I understand
                                    that fees paid are the charges of training, Job/ placement call is a free service
                                    offered by
                                    <strong>
                                        RADIANT IT SERVICES
                                        PVT. LTD.</strong> strong to all the students and there is no cost involved for
                                    placements. I
                                    have
                                    read the rules & regulations of
                                    <strong> RADIANT IT SERVICES PVT. LTD.</strong> and shall abide by them in letter
                                    and spirit. I
                                    shall
                                    also abide by the rules modified
                                    or framed in future. I shall pay the fees and other changes before specified dates.
                                    I shall submit
                                    my
                                    original
                                    documents for verification when informed and can be shared with employer companies.
                                    I understand
                                    that a
                                    payment made is not refundable. I shall abide by the rules and regulations mentioned
                                    above and
                                    also mentioned in the agreement. This undertaking abides with me for my entire
                                    program duration.

                                </p>

                                <footer>

                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="checkbox" id="agree-checkbox"  checked>
                                        <label class="form-check-label fs-6" for="agree-checkbox">I have read and Agreed
                                            to Radiant's
                                            Terms, Conditions and Privacy Policy.</label>
                                    </div>

                                    <div class="container">
                                        <form id="upload-form">
                                            <div class="row justify-content-start">
                                                <!-- Change justify-content-end to justify-content-start -->
                                                <div class="col-md-4">

                                                    <td>
                                                        <?php
                                                        // Assuming $row['photo'] contains the image URL or file path
                                                        $imagePath = $row['signature'];

                                                        // Check if $imagePath is not empty (assuming it's a valid image path)
                                                        if (!empty($imagePath)) {
                                                            echo '<img src="' . $imagePath . '" alt="Image" width="100px" />';
                                                        } else {
                                                            // Display a placeholder or error message if $imagePath is empty
                                                            echo 'Image not found';
                                                        }
                                                        ?>
                                                    </td>

                                                </div>
                                                <div class="col-md-4 "></div>
                                                <div class="col-md-4 col-sm-12 " style="padding-left: 40px;">
                                                    <label class="mb-4" for="dateInput">Date:</label>
                                                    <input type="date" class="form-control" id="date_submission"
                                                        name="date_submission" value='<?php echo $row["date_submission"]; ?>' >
                                                </div>

                                            </div>
                                        </form>
                                    </div>



                                    <div class="print-content">
                                        <h5 class="text-center mt-3">Associated Companies / Partners :</h5>
                                    </div>
                                    <div class="horizontal-image">
                                        <img src="logos.png" alt="Horizontal Image" class=""
                                            style="width: 100%; height: auto;">
                                    </div>
                                    <p class=""><strong> Radiant IT Services Pvt. Ltd. </strong>takes great pride in its
                                        extensive
                                        network
                                        of associated
                                        company
                                        partners, which has been meticulously cultivated to provide our clients with
                                        unparalleled
                                        technological solutions.
                                        These partnerships represent a fusion of expertise, innovation, and shared
                                        values, enabling us
                                        to deliver
                                        top-notch services across various domains. Our commitment to excellence is
                                        mirrored in the
                                        selection of these
                                        esteemed partners, each of whom brings a unique set of skills and insights to
                                        the table.
                                        Collaborating closely
                                        with these companies empowers us to offer holistic and cutting-edge solutions
                                        that cater to the
                                        diverse needs
                                        of our clientele. Through our strong ties with these industry leaders,
                                        <strong>Radiant IT
                                            Services
                                            Pvt.
                                            Ltd.</strong> continues
                                        to establish itself as a frontrunner in delivering exceptional IT solutions and
                                        services.</p>

                                    <div class="mt-4 text-center ">
                                        <button type="submit" class="btn btn-primary form-group">Update Student</button>
                                        
                                    </div>


                            </div>
                            <!-- </div> -->

                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
                

                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
           
                
                </body>

            </html>

        </div>
    </div>

    <script>
        // Function to check the file size before form submission
        function checkFileSize() {
            var input = document.getElementById('photo');
            var photoLabel = document.getElementById('photoLabel');
            var fileSizeMessage = document.getElementById('fileSizeMessage');
            var fileSize = input.files[0].size; 
    
            fileSizeMessage.style.display = 'block';
    
            if (fileSize > 256 * 1024) {
                alert('File size must be less than 256 KB.');
                input.value = '';
                photoLabel.innerText = 'Upload Photo';
            } else {
                // Update the label text to display the selected file name
                photoLabel.innerText = input.files[0].name;
                // Hide the file size message when the file size is within the limit
                fileSizeMessage.style.display = 'none';
            }
        }
    </script>

<script>
        // Function to check the image size before form submission
        function checkImageSize() {
            var input = document.getElementById('image-input');
            var imageStatus = document.getElementById('image-status');
            var fileSize = input.files[0].size; 
            fileMessage.style.display = 'block';

            if (fileSize > 256 * 1024) {
                alert('Image size must be less than 256 KB.');
                
                input.value = '';
                
                imageStatus.innerText = 'Upload Signature';
            } else {
                // Update the label text to display the selected file name
                imageStatus.innerText = 'Image selected: ' + input.files[0].name;
                fileMessage.style.display = 'none';
            }
        }
    
        // Attach the checkImageSize function to the file input's change event
        document.getElementById('image-input').addEventListener('change', checkImageSize);
</script>


<script>

    
       

// // For oneTime checkbox
const oneTimeCheckbox = document.getElementById("oneTimeCheckbox");
const agreeContinueCheckbox = document.getElementById("agreeContinueCheckbox");

oneTimeCheckbox.addEventListener("change", function () {
    if (this.checked) {
        agreeContinueCheckbox.classList.remove("hidden");
    } else {
        agreeContinueCheckbox.classList.add("hidden");
    }
});

// for emi checkbox 

const emiCheckbox = document.getElementById("emiCheckbox");
const agreeContinueCheckbox1 = document.getElementById("agreeContinueCheckbox1");

emiCheckbox.addEventListener("change", function () {
    if (this.checked) {
        agreeContinueCheckbox1.classList.remove("hidden");
    } else {
        agreeContinueCheckbox1.classList.add("hidden");
    }
});


function togglePaymentTable(showTable) {
    var emiTable = document.getElementById("emi-table");
    emiTable.style.display = showTable ? "block" : "none";
}



// for course
document.addEventListener("DOMContentLoaded", function () {
    const trainingCourse = document.getElementById("trainingCourse");
    const courseName = document.getElementById("courseName");

    trainingCourse.addEventListener("change", function () {
        courseName.value = trainingCourse.options[trainingCourse.selectedIndex].text;
    });
});


// for EMI Fess

document.addEventListener("DOMContentLoaded", function () {
    const trainingFees = document.getElementById("trainingFees");
    const courseFees = document.getElementById("courseFees");

    trainingFees.addEventListener("input", function () {
        const fees = parseFloat(trainingFees.value) || 0;
        courseFees.value = fees.toFixed(2);
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var courseFees1 = document.getElementById("courseFees");
    var enrollementFees1 = document.getElementById("enrollmentFee");
    var lateFees = document.getElementById("leftFees");

    courseFees1.addEventListener("input", calculateLateFees);
    enrollementFees1.addEventListener("input", calculateLateFees);

    function calculateLateFees() {
        var courseFee = parseFloat(courseFees1.value) || 0;
        var enrollmentFee = parseFloat(enrollementFees1.value) || 0;

        var lateFee = courseFee - enrollmentFee;

        if (!isNaN(lateFee) && lateFee >= 0) {
            lateFees.value = lateFee.toFixed(2);
        } else {
            lateFees.value = "";
        }
    }
});





// Display uploaded photo and manage label visibility
const photoInput = document.getElementById('photo');
const displayPhotoSection = document.getElementById('displayPhotoSection');
const uploadedPhoto = document.getElementById('uploadedPhoto');
const photoLabel = document.getElementById('photoLabel');

photoInput.addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        uploadedPhoto.src = URL.createObjectURL(file);
        displayPhotoSection.classList.remove('d-none'); // Show the section
        photoLabel.style.display = 'none'; // Hide the upload photo label
        clickToChangeLabel.style.display = 'block'; // Show the "Click to change" label
        alert('Photo uploaded successfully!');
    } else {
        uploadedPhoto.src = '#';
        displayPhotoSection.classList.add('d-none'); // Hide the section
        photoLabel.style.display = 'block'; // Show the upload photo label
        clickToChangeLabel.style.display = 'none'; // Hide the "Click to change" label
    }
});

// Allow users to replace the photo by clicking on the image
uploadedPhoto.addEventListener('click', function () {
    photoInput.click(); // Trigger the file input click
});


//for signature 
document.getElementById('image-input').addEventListener('change', function (event) {
    const imageUploadBox = document.querySelector('.image-upload-box');
    const selectedImage = event.target.files[0];
    const uploadButton = document.querySelector('.custom-file-upload');

    if (selectedImage) {
        imageUploadBox.style.backgroundImage = `url("${URL.createObjectURL(selectedImage)}")`;
        uploadButton.style.visibility = 'hidden'; // Hide the button (make it invisible but still occupies space)
    } else {
        imageUploadBox.style.backgroundImage = '';
        uploadButton.style.visibility = 'visible'; 
    }
});


    // Function to check the image size before form submition for signature
    function checkImageSize() {
        var input = document.getElementById('image-input');
        var imageStatus = document.getElementById('image-status');
        var fileSize = input.files[0].size; 

        if (fileSize > 256 * 1024) {
            alert('Image size must be less than 256 KB.');
            
            input.value = '';
            
            imageStatus.innerText = 'Upload Signature';
        } else {
            // Update the label text to display the selected file name
            imageStatus.innerText = 'Image selected: ' + input.files[0].name;
        }
    }

    // Attach the checkImageSize function to the file input's change event
    document.getElementById('image-input').addEventListener('change', checkImageSize);




 // JavaScript to show/hide QR image and label based on selected option
 document.getElementById("paymentMode").addEventListener("change", function () {
    var qrImage = document.getElementById("qrImage");
    var payNowLabel = document.getElementById("payNowLabel");
    
    if (this.value === "Online") {
        qrImage.style.display = "inline-block";
        payNowLabel.style.display = "inline-block";
    } else {
        qrImage.style.display = "none";
        payNowLabel.style.display = "none";
    }
});



// for Address

    function copyAddress() {
        var checkbox = document.getElementById("sameAsPermanent");
        var correspondenceAddress = document.getElementById("correspondenceAddress");

        if (checkbox.checked) {
            // If the checkbox is checked, copy the value from the permanent address field and disable the correspondence address field
            correspondenceAddress.value = document.getElementById("permanentAddress").value;
            correspondenceAddress.disabled = true;
        } else {
            correspondenceAddress.disabled = false;
        }
    }

    copyAddress();

</script>

    <script>
        function toggleTable() {
            const experienceTable = document.getElementById("experienceTable");
            const yesRadioButton = document.getElementById("yes");

            // If "Yes" is selected, show the table. Otherwise, hide it.
            if (yesRadioButton.checked) {
                experienceTable.style.display = "block"; // Display as a table
            } else {
                experienceTable.style.display = "none"; // Hide the table
            }
        }

        // Initial toggle to set the default state
        toggleTable();
    </script>



<script>
    function copyAddress() {
        const sameAsPermanentCheckbox = document.getElementById("sameAsPermanent");
        const permanentAddressTextarea = document.getElementById("permanentAddress");
        const correspondenceAddressTextarea = document.getElementById("correspondenceAddress");

        if (sameAsPermanentCheckbox.checked) {
            correspondenceAddressTextarea.value = permanentAddressTextarea.value;
            correspondenceAddressTextarea.disabled = true;
        } else {
            correspondenceAddressTextarea.value = "";
            correspondenceAddressTextarea.disabled = false;
        }
    }

    // Initialize the form
    copyAddress();

    // For oneTime checkbox
const oneTimeCheckbox = document.getElementById("oneTimeCheckbox");
const agreeContinueCheckbox = document.getElementById("agreeContinueCheckbox");

oneTimeCheckbox.addEventListener("change", function () {
    if (this.checked) {
        agreeContinueCheckbox.classList.remove("hidden");
    } else {
        agreeContinueCheckbox.classList.add("hidden");
    }
});

</script>

<!-- <script>
    // JavaScript function to update the label text with the selected file's name
    document.getElementById('photo').addEventListener('change', function (e) {
        var fileName = e.target.files[0].name;
        document.getElementById('photoLabel').textContent = fileName;
    });
</script> -->
  

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    
</body>

</html>