// Add event listener for the form submission to generate the QR code
document.getElementById('qrForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    document.getElementById('message').innerText = ''; // Clear previous messages

    fetch('generate.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                document.getElementById('message').innerText = data.error; // Display error message
            } else if (data.banner) {
                document.getElementById('preview').innerHTML = `
                    <img src="${data.banner}" alt="Banner Preview" style="width: 200px;">
                    <a href="export.php?file=${data.banner}" download>Download as PDF</a>
                `;
                document.getElementById('message').innerText = 'Banner generated successfully!'; // Success message

                // Set logo, message, and QR code in modal
                document.getElementById('modalLogo').src = URL.createObjectURL(document.getElementById('logo').files[0]); // Display uploaded logo
                document.getElementById('modalMessage').innerText = document.getElementById('message').value; // Display message
                document.getElementById('qrCodePreview').src = data.qrCode; // Set QR code

                // Show the modal
                document.getElementById('qrModal').style.display = "flex";
            }
        });
});

// Add the script to capture the downloadable section as an image and download
document.getElementById('downloadModalAsImage').addEventListener('click', function () {
    const downloadableContent = document.querySelector('.downlaodable'); // Select the downloadable content

    html2canvas(downloadableContent).then(canvas => {
        const link = document.createElement('a');
        const message = document.getElementById('modalMessage').innerText.trim() || 'download'; // Use modal message or default name
        link.download = `${message}.png`; // Save with input message as filename
        link.href = canvas.toDataURL(); // Set the image source
        link.click(); // Trigger the download
    });
});

// Close the modal when the user clicks the close button
document.querySelector('.close').onclick = function () {
    document.getElementById('qrModal').style.display = "none";
};
