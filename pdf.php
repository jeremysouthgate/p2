<?php
################################################################################
#   A SCRIPT TO GENERATE A BUSINESS LETTER PDF
################################################################################

// Include the DOMPDF Class
require_once './library/dompdf/autoload.inc.php';
use Dompdf\Dompdf;


// If the generator posts a business letter...
if ($_POST)
{
    // Distribute the POST Info to variables for display_pdf:

    // Sender Address
    $sender_name = $_POST['sender_name'];
    $sender_address = $_POST['sender_address'];
    $sender_address2 = $_POST['sender_address2'];
    $sender_city = $_POST['sender_city'];
    $sender_state = $_POST['sender_state'];
    $sender_zip = $_POST['sender_zip'];

    // Receiver Address
    $receiver_name = $_POST['receiver_name'];
    $receiver_address = $_POST['receiver_address'];
    $receiver_address2 = $_POST['receiver_address2'];
    $receiver_city = $_POST['receiver_city'];
    $receiver_state = $_POST['receiver_state'];
    $receiver_zip = $_POST['receiver_zip'];

    // Subject
    $subject = $_POST['subject'];

    // Date
    $date = $_POST['date'];

    // Greeting
    $greeting = $_POST['greeting'];

    // Message
    $message = keep_textarea_linebreaks($_POST['message']);

    // Closer
    $closer = $_POST['closer'];

    // Signature
    $signature = $_POST['signature'];


    // Punctuation (If: city/state/zip or closer)

    // Include a Comma between City & State of Sender
    if($sender_city && $sender_state)
    {
        $sender_comma = ',';
    }

    // Include a Comma between City & State of Receiver
    if($receiver_city && $receiver_state)
    {
        $receiver_comma = ',';
    }

    // Include a Comma after a Greetng
    if ($greeting)
    {
        $colon = ':';
    }

    // Include a Comma after a Closer
    if ($closer)
    {
        $closer_comma = ',';
    }


    // Font

    // The Default Font
    $font = "Times";

    // Or, if available, the user-selected font:
    if ($font)
    {
        $font = $_POST['font'];
    }


    // Printable HTML w/ CSS
    $css = "<link rel='stylesheet' href='./styles/pdf.css'/>";
    $html = "
        <html>
        <head>

            <!-- HTML Required Tags -->
            <title>$subject</title>
            <meta charset='utf8'/>

            <!-- The Stylesheet for the PDF Document -->
            $css

            <!-- Dynamically set the Font for the PDF Document -->
            <style>
                body
                {
                    font-family: $font;
                }
            </style>
        </head>
        <body>
            <!-- Sender -->
            <span>$sender_name</span>
            <span>$sender_address</span>
            <span>$sender_address2</span>
            <span>$sender_city$sender_comma $sender_state $sender_zip</span>
            <br>
            <!-- Receiver -->
            <span>$receiver_name</span>
            <span>$receiver_address</span>
            <span>$receiver_address2</span>
            <span>$receiver_city$receiver_comma $receiver_state $receiver_zip</span>
            <br>
            <!-- Date -->
            <span>$date</span>
            <br>
            <!-- Subject -->
            <span id='subject'>$subject</span>
            <br>
            <!-- Greeting -->
            <span>$greeting$colon</span>
            <br>
            <!-- Message -->
            <span id='message'>$message</span>
            <br>
            <!-- Closer -->
            <span>$closer$closer_comma</span>
            <br>
            <!-- Signature -->
            <span>$signature</span>
        </body>
        </html>
    ";

    // Compose the PDF
    make_pdf($html, $subject);

}


// Change Message Newlines ("\n") to HTML breaks ("<br>")
function keep_textarea_linebreaks($message)
{
    // Split message string by newline ("\n"); get array
    $array = explode("\n", $message);

    // Create new blank message string
    $message = "";

    // Join each line of the array with an HTML linebreak ("<br>")
    foreach ($array as $i)
    {
        // Append the new line, starting with indent ("nbsp;") to the new message
        $message .= "&nbsp; &nbsp; &nbsp; &nbsp;".$i."<br>";
    }

    // Return the formatted message
    return $message;
}


// Construct the PDF with DOMPDF
function make_pdf($html, $subject)
{
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
    $dompdf->stream("$subject.pdf", array("Attachment" => false));
}
?>
