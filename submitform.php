<?php

    // REQUIRED FIELDS
    $to = 'contact@finevest.com';
    $subject = 'Regarding Free Quote from Fine Vest';
    $mail = $_POST['mail'];
    $message =  $_POST['message'];

    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .=  $mail;


    if(empty($mail) || empty($message))
        {

        }
        else
            {
                mail($to, $subject, $message, $headers);

            }


    $doc = "<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='utf-8'>
                <title>Insert Demo</title>
        </head>
    <body>
        $message
    </body>
    </html>";

    echo $doc;

 ?>
