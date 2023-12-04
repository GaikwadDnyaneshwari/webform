// window.onload = function () {
//     document.getElementById("download")
//         .addEventListener("click", () => {
//             const enrollment = document.getElementById("enrollment");
//             const targetPages = 3;
//             console.log(enrollment);
//             console.log(window);
           
//             var opt = {
//                 margin: 0,
//                 filename: 'Enrollment.pdf',
//                 image: { type: 'jpeg', quality: 1 },
//                 html2canvas: { scale:5},
//                 jsPDF: { unit: 'in', format: 'A4', orientation: 'landscape' }
//             };

//             // Generate PDF using combined content
//             html2pdf().from(enrollment).set(opt).save();
//         });
// }


// 

// 

// 
// 
// 

// window.onload = function () {
//     document.getElementById("download")
//         .addEventListener("click", () => {
//             const enrollment = document.getElementById("enrollment");
//             const targetPages = 5;

//             var opt = {
//                 margin: [10, 10],
//                 filename: 'Enrollment.pdf',
//                 image: { type: 'jpeg', quality: 1 },
//                 html2canvas: { scale: 2 },
//                 jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
//             };

//             // Function to add page breaks with a margin at the top
//             function addPageBreakWithMargin(content) {
//                 return `<div style="page-break-after: always; margin-top: 20px;">${content}</div>`;
//                 // Adjust margin-top value as needed
//             }

//             // Function to check if content fits on the current page
//             function contentFits(currentHeight, inputFieldsHeight, contentHeight) {
//                 const maxHeight = 9.5 * 72; // Page height

//                 return currentHeight + inputFieldsHeight + contentHeight <= maxHeight;
//             }

//             // Generate PDF with page breaks and margin at the top as needed
//             const contentWithPageBreaks = [enrollment.innerHTML];
//             let totalHeight = enrollment.clientHeight + 18; // Initial height includes margin
//             let inputFieldsHeight = 0;

//             const inputFields = enrollment.querySelectorAll('input[type="text"], textarea');
//             inputFields.forEach((field) => {
//                 inputFieldsHeight += field.clientHeight;
//             });

//             for (let i = 1; i < targetPages; i++) {
//                 const contentToCheck = contentWithPageBreaks.join('') + enrollment.innerHTML;
//                 const tempElement = document.createElement('div');
//                 tempElement.innerHTML = contentToCheck;
//                 const contentHeight = tempElement.clientHeight;

//                 // Check if adding content or input fields would exceed page size (including margin)
//                 if (!contentFits(totalHeight, inputFieldsHeight, contentHeight)) {
//                     contentWithPageBreaks.push(addPageBreakWithMargin(enrollment.innerHTML));
//                     totalHeight = enrollment.clientHeight + 18; // Reset total height
//                 } else {
//                     contentWithPageBreaks.push(enrollment.innerHTML);
//                     totalHeight += contentHeight;
//                 }
//             }

//             const combinedContent = contentWithPageBreaks.join('');

//             html2pdf().from(combinedContent).set(opt).outputPdf().then(function (pdf) {
//                 pdf.save();
//             });
//         });
// }

// 
window.onload = function () {
    document.getElementById("download").addEventListener("click", () => {
        const enrollment = document.getElementById("enrollment");
        const targetPages = 5;
        console.log(enrollment);
            console.log(window);
        var opt = {
            margin: [10, 10],
            filename: 'Enrollment.pdf',
            image: { type: 'jpeg', quality: 1 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        // Function to add page breaks with a margin at the top
        function addPageBreakWithMargin(content) {
            return `<div style="page-break-after: always; margin-top: 20px;">${content}</div>`;
            // Adjust margin-top value as needed
        }

        // Function to check if content fits on the current page
        function contentFits(currentHeight, contentHeight) {
            const maxHeight = 9.5 * 72; // Page height

            return currentHeight + contentHeight <= maxHeight;
        }

        // Function to add input fields to the PDF with page breaks
        function addInputFields(inputFields) {
            let currentPageContent = '';
            for (let i = 0; i < inputFields.length; i++) {
                const inputField = inputFields[i];
                const inputHeight = inputField.clientHeight;

                // Check if adding this input field would exceed the page height
                if (!contentFits(currentPageContent.clientHeight, inputHeight)) {
                    // If it would exceed, add a page break and reset the current content
                    currentPageContent += addPageBreakWithMargin('');
                }

                // Add the input field to the current content
                currentPageContent += inputField.outerHTML;
            }

            return currentPageContent;
        }

        // Generate PDF with page breaks and margin at the top as needed
        const contentWithPageBreaks = [enrollment.innerHTML];
        let totalHeight = enrollment.clientHeight + 20; // Initial height includes margin

        const inputFields = enrollment.querySelectorAll('input[type="text"], input[type="number"], textarea');
        const inputContent = addInputFields(inputFields);

        for (let i = 1; i < targetPages; i++) {
            const contentToCheck = contentWithPageBreaks.join('') + enrollment.innerHTML + inputContent;
            const tempElement = document.createElement('div');
            tempElement.innerHTML = contentToCheck;
            const contentHeight = tempElement.clientHeight;

            // Check if adding content would exceed page size (including margin)
            if (!contentFits(totalHeight, contentHeight)) {
                contentWithPageBreaks.push(addPageBreakWithMargin(enrollment.innerHTML));
                totalHeight = enrollment.clientHeight + 20; // Reset total height
            } else {
                contentWithPageBreaks.push(enrollment.innerHTML);
                totalHeight += contentHeight;
            }
        }

        const combinedContent = contentWithPageBreaks.join('');

        html2pdf().from(combinedContent).set(opt).outputPdf().then(function (pdf) {
            pdf.save();
        });
    });
}
