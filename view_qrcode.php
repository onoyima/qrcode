<?php
if (isset($_GET['link'])) {
    // Sanitize the link to prevent issues
    $link = htmlspecialchars($_GET['link']);
    
    // Generate the QR code path
    $qrCodePath = 'temp/qrcode_' . md5($link) . '.png';

    if (file_exists($qrCodePath)) {
        // Display the QR code image
        header('Content-Type: image/png');
        readfile($qrCodePath);
        exit;
    } else {
        echo "QR code not found.";
    }
} else {
    echo "No link provided.";
}
?>
