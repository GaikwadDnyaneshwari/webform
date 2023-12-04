






// For oneTime checkbox
// const oneTimeCheckbox = document.getElementById("oneTimeCheckbox");
// const agreeContinueCheckbox = document.getElementById("agreeContinueCheckbox");

// oneTimeCheckbox.addEventListener("change", function () {
//     if (this.checked) {
//         agreeContinueCheckbox.classList.remove("hidden");
//     } else {
//         agreeContinueCheckbox.classList.add("hidden");
//     }
// });
// document.addEventListener("DOMContentLoaded", function () {
//     // Your code here
    
//     function validateForm() {
//         var agreeCheckbox = document.getElementById("agree-checkbox");
//         if (!agreeCheckbox.checked) {
//             alert("Please agree to continue by checking the 'Agree and Continue' box.");
//             return false;
//         }
//         return true;
//     }

//     // Enable the submit button when the checkbox is checked
//     document.getElementById("agree-checkbox").addEventListener("change", function () {
//         document.getElementById("submit-btn").disabled = !this.checked;
//     });
// });
// for emi checkbox 

// const emiCheckbox = document.getElementById("emiCheckbox");
// const agreeContinueCheckbox1 = document.getElementById("agreeContinueCheckbox1");

// emiCheckbox.addEventListener("change", function () {
//     if (this.checked) {
//         agreeContinueCheckbox1.classList.remove("hidden");
//     } else {
//         agreeContinueCheckbox1.classList.add("hidden");
//     }
// });


// function togglePaymentTable(showTable) {
//     var emiTable = document.getElementById("emi-table");
//     emiTable.style.display = showTable ? "block" : "none";
// }


// For Date section
//emi No 1
// var today = new Date();
// var maxDate = new Date();
// maxDate.setDate(today.getDate() + 60);

// var selectedDateInput = document.getElementById("selectedDate");
// selectedDateInput.min = today.toISOString().split("T")[0];
// selectedDateInput.max = maxDate.toISOString().split("T")[0];

//emi No 2
// var today = new Date();
// var maxDate = new Date();
// maxDate.setDate(today.getDate() + 60);

// var selectedDateInput = document.getElementById("dateSecondEmi");
// selectedDateInput.min = today.toISOString().split("T")[0];
// selectedDateInput.max = maxDate.toISOString().split("T")[0];

//emi No 3

// var today = new Date();
// var maxDate = new Date();
// maxDate.setDate(today.getDate() + 60);

// var selectedDateInput = document.getElementById("dateThirdEmi");
// selectedDateInput.min = today.toISOString().split("T")[0];
// selectedDateInput.max = maxDate.toISOString().split("T")[0];


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






// //for signature 
// document.getElementById('image-input').addEventListener('change', function (event) {
//     const imageUploadBox = document.querySelector('.image-upload-box');
//     const selectedImage = event.target.files[0];
//     const uploadButton = document.querySelector('.custom-file-upload');

//     if (selectedImage) {
//         imageUploadBox.style.backgroundImage = `url("${URL.createObjectURL(selectedImage)}")`;
//         uploadButton.style.visibility = 'hidden'; // Hide the button (make it invisible but still occupies space)
//     } else {
//         imageUploadBox.style.backgroundImage = '';
//         uploadButton.style.visibility = 'visible'; // Show the button
//     }
// });



//  // JavaScript to show/hide QR image and label based on selected option
//  document.getElementById("paymentMode").addEventListener("change", function () {
//     var qrImage = document.getElementById("qrImage");
//     var payNowLabel = document.getElementById("payNowLabel");
    
//     if (this.value === "Online") {
//         qrImage.style.display = "inline-block";
//         payNowLabel.style.display = "inline-block";
//     } else {
//         qrImage.style.display = "none";
//         payNowLabel.style.display = "none";
//     }
// });




pdf 
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const enrollment = this.document.getElementById("enrollment");
            console.log(enrollment);
            console.log(window);
           
            var opt = {
                margin: 0,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 1 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
               
            };
            
            html2pdf().from(enrollment).set(opt).save();
        })
}





