<?php
################################################################################
#   A SCRIPT TO GENERATE A BUSINESS LETTER PDF
################################################################################

// include autoloader
require_once $_SERVER['DOCUMENT_ROOT']."/library/dompdf/autoload.inc.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
