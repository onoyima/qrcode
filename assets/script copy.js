document.getElementById('qrForm').addEventListener('submit', function(e) {
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
            document.getElementById('qrCodePreview').src = data.qrCode; // Set QR code source
            document.getElementById('qrCodeDownload').href = data.qrCode; // Set QR code download link
            
            const modal = document.getElementById("qrModal");
            modal.style.display = "block"; // Display modal
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('message').innerText = 'An unexpected error occurred.';
    });
});

// Close modal when clicking on <span> (x)
document.querySelector(".close").onclick = function() {
    document.getElementById("qrModal").style.display = "none";
}

// Close modal when clicking anywhere outside of the modal
window.onclick = function(event) {
    const modal = document.getElementById("qrModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
