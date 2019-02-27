<!doctype html>
<!--

    A BUSINESS LETTER GENERATOR Program
    By: Jeremy C. Southgate (jes4532@g.harvard.edu)
    Copyright © Jeremy C. Southgate. All rights reserved.

    In fulfillment of: HES CSCI E-15 Dynamic Web Applications, Project 2.
    And in partial fulfillment of: the degree of Bachelor of Liberal Arts
    in Extension Studies, Harvard University.

-->
<html lang='en-us'>
<head>

    <!-- HTML Required Tags -->
    <title>Business Letter Composer</title>
    <meta charset="utf-8"/>

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/sxk0fde.css">

    <!-- The Stylesheet for this Page -->
    <link rel="stylesheet" href='./styles/index.css'/>

</head>
<body>

    <!-- The Main Widget Content Container w/ Background-->
    <main>

        <!-- Page Title Header -->
        <h1 id='title'><a href=''>Business Letter Generator</a></h1>


        <!-- The User Interface -->
        <form action='./pdf.php' method='POST' target='_blank'>

            <!-- Sender Address Input Fields -->
            <div id='sender'>

                <!-- The Sender's Name -->
                <div class='address_input'>
                    <label for='sender_name'>Sender Name</label><br>
                    <input autofocus id='sender_name' type='text' name='sender_name' maxlength="50"/>
                </div>

                <!-- The Sender's Address -->
                <div class='address_input'>
                    <label for='sender_address'>Sender Address</label><br>
                    <input id='sender_address' type='text' name='sender_address' maxlength="50"/>
                </div>

                <!-- The Sender's Address, Second Line -->
                <div class='address_input'>
                    <label for='sender_address2'>Sender Address, Line 2</label><br>
                    <input id='sender_address2' type='text' name='sender_address2' maxlength="50"/>
                </div>

                <!-- The Sender's City -->
                <div class='address_input'>
                    <label for='sender_city'>Sender City</label><br>
                    <input id='sender_city' type='text' name='sender_city' maxlength="50"/>
                </div>

                <!-- The Sender's State -->
                <div class='address_input'>
                    <label for='sender_state'>Sender State</label><br>
                    <input id='sender_state' type='text' name='sender_state' maxlength="25"/>
                </div>

                <!-- The Sender's Zip Code -->
                <div class='address_input'>
                    <label for='sender_zip'>Sender Zip Code</label><br>
                    <input id='sender_zip' type='text' name='sender_zip' maxlength="10"/>
                </div>

            </div>


            <!-- Receiver Address Input Fields -->
            <div id='receiver'>

                <!-- The Receiver's Name -->
                <div class='address_input'>
                    <label for='receiver_name'>Receiver Name</label><br>
                    <input id='receiver_name' type='text' name='receiver_name' maxlength="50"/>
                </div>

                <!-- The Receiver's Address -->
                <div class='address_input'>
                    <label for='receiver_address'>Receiver Address</label><br>
                    <input id='receiver_address' type='text' name='receiver_address' maxlength="50"/>
                </div>

                <!-- The Receiver's Address, Second Line -->
                <div class='address_input'>
                    <label for='receiver_address2'>Receiver Address, Line 2</label><br>
                    <input id='receiver_address2' type='text' name='receiver_address2' maxlength="50"/>
                </div>

                <!-- The Receiver's City -->
                <div class='address_input'>
                    <label for='receiver_city'>Receiver City</label><br>
                    <input id='receiver_city' type='text' name='receiver_city' maxlength="50"/>
                </div>

                <!-- The Receiver's State -->
                <div class='address_input'>
                    <label for='receiver_state'>Receiver State</label><br>
                    <input id='receiver_state' type='text' name='receiver_state' maxlength="25"/>
                </div>

                <!-- The Receiver's Zip Code -->
                <div class='address_input'>
                    <label for='receiver_zip'>Receiver Zip Code</label><br>
                    <input id='receiver_zip' type='text' name='receiver_zip' maxlength="10"/>
                </div>

            </div>


            <!-- The Letter Body -->
            <div id='letter_body'>

                <!-- The Letter Date -->
                <label for='date'>Date</label><br>
                <input id='date' type='text' name='date' maxlength="50"/>

                <!-- The Letter Subject -->
                <label for='subject'>Subject</label><br>
                <input id='subject' type='text' name='subject' maxlength="50"/>

                <!-- The Letter Greeting -->
                <label for='greeting'>Greeting</label><br>
                <input id='greeting' type='text' name='greeting' maxlength="50" placeholder="Omit punctuation."/>

                <!-- The Letter Message -->
                <label for='message'>Message Body</label><br>
                <textarea id='message' name='message' maxlength="10000" placeholder="Maximum: 10,000 characters."></textarea>

                <!-- The Letter Closer -->
                <label for='closer'>Closer</label><br>
                <select id='closer' name='closer'>
                    <option value=''>&nbsp;</option>
                    <option value='Sincerely'>Sincerely</option>
                    <option value='All the best'>All the best</option>
                    <option value='Best'>Best</option>
                    <option value='Best regards'>Best regards</option>
                    <option value='With warmest regards'>With warmest regards</option>
                    <option value='Yours sincerely'>Yours sincerely</option>
                </select>

                <!-- The Letter Signature -->
                <label for='signature'>Signature</label><br>
                <input id='signature' type='text' name='signature' maxlength="50"/>

                <!-- Choose a Font -->
                <label for='font'><i>Font</i></label><br>
                <select id='font' name='font'>
                    <option value='Times'>Times</option>
                    <option value='Courier'>Courier</option>
                    <option value='Garamond'>Garamond</option>
                    <option value='Geneva'>Geneva</option>
                    <option value='Helvetica'>Helvetica</option>
                </select>

            </div>


            <!-- Submit Button / Make the PDF -->
            <input type='submit' name='submit' value='Make PDF'/>

        </form>

    </main>

</body>
</html>
