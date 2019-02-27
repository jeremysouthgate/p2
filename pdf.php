<?php
################################################################################
#   A SCRIPT TO GENERATE A BUSINESS LETTER PDF
################################################################################

// Include the DOMPDF Class
require_once './library/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

    // Initiate DOMPDF
    $dompdf = new Dompdf();

    // Set Font
    $dompdf->set_option('defaultFont', 'Times');

    // Set HTML
    $dompdf->loadHtml("hello world");

    // Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Print Out PDF
    $dompdf->stream("xxx.pdf", array("Attachment" => false));
