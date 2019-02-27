<?php
################################################################################
#   A SCRIPT TO GENERATE A BUSINESS LETTER PDF
################################################################################

// Include the DOMPDF Class
require_once './library/dompdf/lib/html5lib/Parser.php';
require_once './library/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once './library/dompdf/lib/php-svg-lib/src/autoload.php';
require_once './library/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Library\Dompdf\Dompdf;

// Initiate DOMPDF
$dompdf = new Dompdf();

// Set Font
$dompdf->set_option('defaultFont', 'Times');

// Set HTML
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Print Out PDF
$dompdf->stream("test.pdf", array("Attachment" => false));
