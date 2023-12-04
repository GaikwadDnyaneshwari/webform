<?php
ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "radiant";

$host = '127.0.0.1';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);


// Retrieve the form data
$photo = $_FILES['photo'];
$signature = $_FILES['signature'];
$trainingCourse = $_POST['trainingCourse'];
$trainingFees = $_POST['trainingFees'];
$counsellors_name = $_POST['counsellors_name'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$dateOfBirth = $_POST['dateOfBirth'];
$age = $_POST['age'];
$permanentAddress = $_POST['permanentAddress'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$mothersName = $_POST['mothersName'];
$same_as_permanent = isset($_POST['same_as_permanent']) ? 1 : 0;
$correspondenceAddress = $same_as_permanent ? $permanentAddress : $_POST['correspondenceAddress'];
$physicallyChallenged = $_POST['physicallyChallenged'];
$ssc_instituteName = $_POST['ssc_instituteName'];
$ssc_place = $_POST['ssc_place'];
$ssc_university = $_POST['ssc_university'];
$ssc_percentage = $_POST['ssc_percentage'];
$ssc_yearOfPassing = $_POST['ssc_yearOfPassing'];
$hsc_instituteName = $_POST['hsc_instituteName'];
$hsc_place = $_POST['hsc_place'];
$hsc_university = $_POST['hsc_university'];
$hsc_percentage = $_POST['hsc_percentage'];
$hsc_yearOfPassing = $_POST['hsc_yearOfPassing'];
$graduation_instituteName = $_POST['graduation_instituteName'];
$graduation_place = $_POST['graduation_place'];
$graduation_university = $_POST['graduation_university'];
$graduation_percentage = $_POST['graduation_percentage'];
$graduation_yearOfPassing = $_POST['graduation_yearOfPassing'];
$postgraduation_instituteName = $_POST['postgraduation_instituteName'];
$postgraduation_place = $_POST['postgraduation_place'];
$postgraduation_university = $_POST['postgraduation_university'];
$postgraduation_percentage = $_POST['postgraduation_percentage'];
$postgraduation_yearOfPassing = $_POST['postgraduation_yearOfPassing'];
$achievement_text = $_POST['achievement_text'];
$activity_text = $_POST['activity_text'];
$hobbies_interests_text = $_POST['hobbies_interests_text'];
$english_read = $_POST['english_read'] ?? '';
$english_write = $_POST['english_write'] ?? '';
$english_speak = $_POST['english_speak'] ?? '';
$hindi_speak = $_POST['hindi_speak'] ?? '';
$hindi_read = $_POST['hindi_read'] ?? '';
$hindi_write = $_POST['hindi_write'] ?? '';
$marathi_speak = $_POST['marathi_speak'] ?? '';
$marathi_read = $_POST['marathi_read'] ?? '';
$marathi_write = $_POST['marathi_write'] ?? '';
$first_ref_name = $_POST['first_ref_name'];
$first_ref_address = $_POST['first_ref_address'];
$first_ref_relation = $_POST['first_ref_relation'];
$first_ref_mobile = $_POST['first_ref_mobile'];
$first_ref_email = $_POST['first_ref_email'];
$second_ref_name = $_POST['second_ref_name'];
$second_ref_address = $_POST['second_ref_address'];
$second_ref_relation = $_POST['second_ref_relation'];
$second_ref_mobile = $_POST['second_ref_mobile'];
$second_ref_email = $_POST['second_ref_email'];
$experience = $_POST['experience'];
$organization = $_POST['organization'];
$designation = $_POST['designation'];
$from_date = $_POST['from_date'];
// Convert empty date input to NULL
$from_date = !empty($from_date) ? date('Y-m-d', strtotime($from_date)) : null;

$to_date = $_POST['to_date'];

// Convert empty date input to NULL
$to_date = !empty($to_date) ? date('Y-m-d', strtotime($to_date)) : null;

$organization1 = $_POST['organization1'];
$designation1 = $_POST['designation1'];

$from_date1 = $_POST['from_date1'];
// Convert empty date input to NULL
$from_date1 = !empty($from_date1) ? date('Y-m-d', strtotime($from_date1)) : null;

$to_date1 = $_POST['to_date1'];

// Convert empty date input to NULL
$to_date1 = !empty($to_date1) ? date('Y-m-d', strtotime($to_date1)) : null;
$pune = $_POST['pune'] ?? '';
$mumbai = $_POST['mumbai'] ?? '';
$bangalore = $_POST['bangalore'] ?? '';
$courseName = $_POST['courseName'];
$courseFees = $_POST['courseFees'];
$fee = $_POST['fee'];
$amount = $_POST['amount'];
$Schedule = $_POST['Schedule'];
$paymentMode = $_POST['paymentMode'];
$leftFees = $_POST['leftFees'];
$paymentType = $_POST['paymentType'];
$EMI_NO_1 = $_POST['EMI_NO_1'];
$EMI_NO_1_date = $_POST['EMI_NO_1_date'];
$EMI_NO_1_Amount = $_POST['EMI_NO_1_Amount'];
// Convert empty date input to NULL
$EMI_NO_1_date = !empty($EMI_NO_1_date) ? date('Y-m-d', strtotime($EMI_NO_1_date)) : null;
$EMI_NO_2 = $_POST['EMI_NO_2'];
$EMI_NO_2_date = $_POST['EMI_NO_2_date'];
$EMI_NO_2_Amount = $_POST['EMI_NO_2_Amount'];
// Convert empty date input to NULL
$EMI_NO_2_date = !empty($EMI_NO_2_date) ? date('Y-m-d', strtotime($EMI_NO_2_date)) : null;
$EMI_NO_3 = $_POST['EMI_NO_3'];
$EMI_NO_3_date = $_POST['EMI_NO_3_date'];
$EMI_NO_3_Amount = $_POST['EMI_NO_3_Amount'];
// Convert empty date input to NULL
$EMI_NO_3_date = !empty($EMI_NO_3_date) ? date('Y-m-d', strtotime($EMI_NO_3_date)) : null;

$date_submission = $_POST['date_submission'];
// Add similar assignments for other variables...

// Check for photo upload error
if ($photo === null || $photo['error'] !== UPLOAD_ERR_OK) {
    $photo_path = null;
} else {
    $uploadDirectory = 'uploads/';
    $photo_path = $uploadDirectory . $photo['name'];

    if (move_uploaded_file($photo['tmp_name'], $photo_path)) {
        echo 'Photo uploaded successfully.';
    } else {
        echo 'Error moving the uploaded photo.';
        // You can choose to handle the error as needed, e.g., redirect back to the form with an error message.
    }
}

// Check for signature upload error
if ($signature === null || $signature['error'] !== UPLOAD_ERR_OK) {
    $signature_path = null;
} else {
    $uploadDirectory = 'uploads/';
    $signature_path = $uploadDirectory . $signature['name'];

    if (move_uploaded_file($signature['tmp_name'], $signature_path)) {
        echo 'Signature uploaded successfully.';
    } else {
        echo 'Error moving the uploaded signature.';
        // You can choose to handle the error as needed, e.g., redirect back to the form with an error message.
    }
}

// Prepare and bind the INSERT statement
$stmt = $conn->prepare('INSERT INTO students_form (photo, signature, training_course, training_fees, counsellor_name, first_name, middle_name, last_name, date_of_birth, age, permanent_address, mobile, email, mothers_name, correspondence_address, physically_challenged, ssc_institute_name, ssc_place, ssc_university, ssc_percentage, ssc_year_of_passing, hsc_institute_name, hsc_place, hsc_university, hsc_percentage, hsc_year_of_passing, graduation_institute_name, graduation_place, graduation_university, graduation_percentage, graduation_year_of_passing, postgraduation_institute_name, postgraduation_place, postgraduation_university, postgraduation_percentage, postgraduation_year_of_passing, achievement_text, activity_text, hobbies_interests_text, english_read, english_write, english_speak, hindi_read, hindi_write, hindi_speak, marathi_read, marathi_write, marathi_speak, first_ref_name, first_ref_address, first_ref_relation, first_ref_mobile, first_ref_email, second_ref_name, second_ref_address, second_ref_relation, second_ref_mobile, second_ref_email, experience, organization, designation, from_date, to_date, organization1, designation1, from_date1, to_date1, preferred_job_location_pune, preferred_job_location_mumbai, preferred_job_location_bangalore, course_name, course_fees, fee, amount, schedule, payment_mode, left_fees, payment_type, emi_no_1, emi_no_1_date, emi_no_1_amount, emi_no_2, emi_no_2_date, emi_no_2_amount, emi_no_3, emi_no_3_date, emi_no_3_amount, date_submission) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

// Bind the parameters to the statement
$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',
    $photo_path, $signature_path, $trainingCourse, $trainingFees, $counsellors_name, $firstName, $middleName, $lastName, $dateOfBirth, $age, $permanentAddress, $mobile, $email, $mothersName, $correspondenceAddress, $physicallyChallenged, $ssc_instituteName, $ssc_place, $ssc_university, $ssc_percentage, $ssc_yearOfPassing, $hsc_instituteName, $hsc_place, $hsc_university, $hsc_percentage, $hsc_yearOfPassing, $graduation_instituteName, $graduation_place, $graduation_university, $graduation_percentage, $graduation_yearOfPassing,
    $postgraduation_instituteName, $postgraduation_place, $postgraduation_university, $postgraduation_percentage, $postgraduation_yearOfPassing, $achievement_text, $activity_text, $hobbies_interests_text, $english_read, $english_write, $english_speak, $hindi_read, $hindi_write, $hindi_speak, $marathi_read, $marathi_write, $marathi_speak, $first_ref_name, $first_ref_address, $first_ref_relation, $first_ref_mobile, $first_ref_email, $second_ref_name, $second_ref_address, $second_ref_relation, $second_ref_mobile, $second_ref_email,
    $experience, $organization, $designation, $from_date, $to_date, $organization1, $designation1, $from_date1, $to_date1, $pune, $mumbai, $bangalore, $courseName, $courseFees, $fee, $amount, $Schedule, $paymentMode, $leftFees, $paymentType, $EMI_NO_1, $EMI_NO_1_date, $EMI_NO_1_Amount, $EMI_NO_2, $EMI_NO_2_date, $EMI_NO_2_Amount, $EMI_NO_3, $EMI_NO_3_date, $EMI_NO_3_Amount, $date_submission);

try {
    if ($stmt->execute()) {
        echo '<script>alert("Student registration successfully!")</script>';
    } else {
        echo 'Error: ' . $stmt->error;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>