<?php
require('fpdf/fpdf.php');

if (isset($_GET['file'])) {
    $filePath = $_GET['file'];

    if (file_exists($filePath)) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Image($filePath, 10, 10, 180, 240);
        $pdf->Output('D', 'banner_export.pdf');
    } else {
        echo "File not found.";
    }
}
?>
