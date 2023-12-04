window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const enrollment = document.getElementById("enrollment");
            const targetPages = 3;
            console.log(enrollment);
            console.log(window);
           
            var opt = {
                margin: 0,
                filename: 'Enrollment.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale:5},
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };

            // Generate PDF using combined content
            html2pdf().from(enrollment).set(opt).save();
        });
}