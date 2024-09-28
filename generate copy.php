<?php  
require_once 'phpqrcode/qrlib.php';

function generateQRCode($link) {
    $tempDir = 'temp/';
    $fileName = 'qrcode_' . md5($link) . '.png';
    $filePath = $tempDir . $fileName;

    if (!file_exists($tempDir)) {
        mkdir($tempDir, 0755, true);
    }

    QRcode::png($link, $filePath, QR_ECLEVEL_H, 10);
    return $filePath;
}

function createBanner($link, $logoPath, $message) {
    $qrCodePath = generateQRCode($link);
    $banner = imagecreatetruecolor(400, 600);

    // Background Color
    $white = imagecolorallocate($banner, 255, 255, 255);
    imagefill($banner, 0, 0, $white);

    // Insert Logo
    $logo = imagecreatefrompng($logoPath);
    if (!$logo) {
        return json_encode(['error' => 'Failed to load logo.']);
    }
    list($logoWidth, $logoHeight) = getimagesize($logoPath);
    imagecopy($banner, $logo, 150, 20, 0, 0, $logoWidth, $logoHeight);

    // Insert QR Code
    $qrCode = imagecreatefrompng($qrCodePath);
    imagecopyresampled($banner, $qrCode, 100, 200, 0, 0, 200, 200, imagesx($qrCode), imagesy($qrCode)); // Resample to ensure quality

    // Insert Message
    $black = imagecolorallocate($banner, 0, 0, 0);
    $fontPath = 'assets/fonts/arial.ttf';
    if (!file_exists($fontPath)) {
        return json_encode(['error' => 'Font file not found.']);
    }
    imagettftext($banner, 14, 0, 50, 450, $black, $fontPath, $message);

    $outputPath = 'uploads/banner_' . uniqid() . '.png';
    if (!imagepng($banner, $outputPath)) {
        return json_encode(['error' => 'Failed to create banner image.']);
    }
    
    imagedestroy($banner);
    return ['banner' => $outputPath, 'qrCode' => $qrCodePath]; // Return both banner and QR code paths
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $link = $_POST['link'] ?? '';
    $logo = $_FILES['logo']['tmp_name'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($link) || empty($logo) || empty($message)) {
        echo json_encode(['error' => 'Link, logo, and message are required.']);
        exit;
    }

    $logoPath = 'uploads/' . basename($_FILES['logo']['name']);
    if (!move_uploaded_file($logo, $logoPath)) {
        echo json_encode(['error' => 'Failed to upload logo.']);
        exit;
    }

    $result = createBanner($link, $logoPath, $message);
    if (isset($result['error'])) {
        echo json_encode($result); // Output error from createBanner function
    } else {
        echo json_encode(['banner' => $result['banner'], 'qrCode' => $result['qrCode']]); // Include QR code path in response
    }
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
