<?php
if (isset($_POST['form']) && $_POST['form'] == 'footer'){
    $to      = 'elenam@belkastudio.com';
    $subject = 'Website inquiry';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['name'].'</p>
                        <p>Phone: '.$_POST['phone'].'</p>        
                        <p>Email: '.$_POST['email'].'</p>
                        <p>Message: '.$_POST['message'].'</p>

                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Website inquiry <website@spaceek.com>\r\n";
    
    mail($to, $subject, $message, $headers);

    echo "good";
} else if (isset($_POST['form']) && $_POST['form'] == 'dealers'){
    $to      = 'elenam@belkastudio.com';
    $subject = 'Website inquiry';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>FirstName: '.$_POST['firstName'].'</p>
                        <p>LastName: '.$_POST['lastName'].'</p>
                        <p>Phone: '.$_POST['phone'].'</p>        
                        <p>Email: '.$_POST['mail'].'</p>
                        <p>Company: '.$_POST['company'].'</p>
                        <p>Location: '.$_POST['location'].'</p>
                        <p>Country: '.$_POST['country'].'</p>
                        <p>Message: '.$_POST['message'].'</p>

                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Website inquiry <website@spaceek.com>\r\n";
    

    mail($to, $subject, $message, $headers);

    echo "good";
}
