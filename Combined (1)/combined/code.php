<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","","radiant");
if (isset($_POST['save'])) {
//     # code...
   
   

   $id = $_POST['id'];
   $photo=$_FILES['photo']['name'];
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
    $signature=$_FILES['signature']['name'];
    $date_submission = $_POST["date_submission"];

// $allowed_extension=array('gif','png','jpg','jpeg');
// $filename=$_FILES['photo']['name'];
// $file_extension=pathinfo($filename,PATHINFO_EXTENSION);
// if(!in_array($file_extension,$allowed_extension)){
//     $_SESSION['status']="you are allowed with only jpeg,png,gif and jpg";
//     header('location:student-registered.php');
}
else{





        if(file_exists("uploads/".$_FILES['photo']['name'])){
        $filename=$_FILES['photo']['name'];
        $_SESSION['status']="Image Already Exists ".$filename;
        header('location:student-registered.php');
        }
        else{
            $query="INSERT INTO student(stud_name,stud_phone,
            stud_email,stud_age,photo) values('$name','$phone','$email','$age','$image')";
            $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
                move_uploaded_file($_FILES['stud_img']['tmp_name'],"uploads/".$_FILES['stud_img']['name']);
                $_SESSION['status']="Image stored Sucessfully";
                header('location:student-registered.php');
            }
            else{
                $_SESSION['status']="Image not inserted Sucessfully";
                header('location:student-registered.php');
            }
        }

        }
    


//edit and update

if(isset($_POST['update_stud_image'])){
   
    
    

    $id = $_POST['id'];
    $new_image=$_FILES['photo']['name'];
    $old_image=$_FILES['stud_img_old'];
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
    $signature = $_POST["signature"];
    $date_submission = $_POST["date_submission"];
}
    if($new_image!=""){
        $update_filename=$_FILES['photo']['name'];
    }
else{
    $update_filename=$old_image;
}

if(file_exists("uploads/".$_FILES['photo']['name'])){
    $filename=$_FILES['photo']['name'];
    $_SESSION['status']="Image Already Exists ".$filename;
    header('location:student-registered.php');
    }

    else{

        //updating 
        $query="UPDATE students_form SET   training_course='$training_course', training_fees='$training_fees', counsellor_name='$counsellor_name', first_name='$first_name', middle_name='$middle_name', last_name='$last_name', date_of_birth='$date_of_birth', age='$age', permanent_address='$permanent_address', mobile='$mobile', email='$email', mothers_name='$mothers_name', correspondence_address='$correspondence_address', physically_challenged='$physically_challenged', ssc_institute_name='$ssc_institute_name', ssc_place='$ssc_place', ssc_university='$ssc_university', ssc_percentage='$ssc_percentage', ssc_year_of_passing='$ssc_year_of_passing', hsc_institute_name='$hsc_institute_name', hsc_place='$hsc_place', hsc_university='$hsc_university', hsc_percentage='$hsc_percentage', hsc_year_of_passing='$hsc_year_of_passing', graduation_institute_name='$graduation_institute_name', graduation_place='$graduation_place', graduation_university='$graduation_university', graduation_percentage='$graduation_percentage', graduation_year_of_passing='$graduation_year_of_passing', postgraduation_institute_name='$postgraduation_institute_name', postgraduation_place='$postgraduation_place', postgraduation_university='$postgraduation_university', postgraduation_percentage='$postgraduation_percentage', postgraduation_year_of_passing='$postgraduation_year_of_passing', achievement_text='$achievement_text', activity_text='$activity_text', hobbies_interests_text='$hobbies_interests_text', english_read='$english_read', english_write='$english_write', english_speak='$english_speak', hindi_read='$hindi_read', hindi_write='$hindi_write', hindi_speak='$hindi_speak', marathi_read='$marathi_read', marathi_write='$marathi_write', marathi_speak='$marathi_speak', first_ref_name='$first_ref_name', first_ref_address='$first_ref_address', first_ref_relation='$first_ref_relation', first_ref_mobile='$first_ref_mobile', first_ref_email='$first_ref_email', second_ref_name='$second_ref_name', second_ref_address='$second_ref_address', second_ref_relation='$second_ref_relation', second_ref_mobile='$second_ref_mobile', second_ref_email='$second_ref_email', experience='$experience', organization='$organization', designation='$designation', from_date='$from_date', to_date='$to_date', organization1='$organization1', designation1='$designation1', from_date1='$from_date1', to_date1='$to_date1', preferred_job_location_pune='$preferred_job_location_pune', preferred_job_location_mumbai='$preferred_job_location_mumbai', preferred_job_location_bangalore='$preferred_job_location_bangalore', course_name='$course_name', course_fees='$course_fees', fee='$fee', amount='$amount', schedule='$schedule', payment_mode='$payment_mode', left_fees='$left_fees', payment_type='$payment_type', emi_no_1='$emi_no_1', emi_no_1_date='$emi_no_1_date', emi_no_1_amount='$emi_no_1_amount', emi_no_2='$emi_no_2', emi_no_2_date='$emi_no_2_date', emi_no_2_amount='$emi_no_2_amount', emi_no_3='$emi_no_3', emi_no_3_date='$emi_no_3_date', emi_no_3_amount='$emi_no_3_amount', date_submission='$date_submission'  ,  photo='$update_filename',signature='$signature' WHERE id='$id'";
$query_run=mysqli_query($conn,$query);

if($query_run){

    if($_FILES['photo']['name']!="")
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/".$_FILES['photo']['name']);
        unlink("uploads/".$old_image);
    }
$_SESSION['status']="updated Sucessfully";
header("location:student-registered.php");
}
else{
    $_SESSION['status']="NOT updated Sucessfully";
    header("location:student-registered.php");

}
    }

?>
