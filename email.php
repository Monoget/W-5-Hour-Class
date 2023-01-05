<?php
require_once("include/dbcontroller.php");
$db_handle = new DBController();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $number = $_POST['number'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $subject_contact = $_POST['subject'];

    $insert = $db_handle->insertQuery("INSERT INTO `contact`(`name`, `email`, `phone_number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')");


    $email_to = $email;
    $subject = 'Email From Five Hours Class NY';
    $userName = $name ;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: Five Hours Class NY <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo-3.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us</p>   
                        
                            <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you about packages we need to take to get you into your packages.<br>
                                Ourteam will contact with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:16464000666'>646-400-0666</a> or <a href='mailto:appointment@fivehoursclassny.com'>appointment@fivehoursclassny.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                Five Hours Class NY Team
                             </p> 
                        </div>
                    </body>
                </html>
                ";

    if ( mail($email_to, $subject, $messege, $headers)) {

    } else {

    }

    $backend_message='';

    $i=0;
    foreach ($_POST as $key => $value) {
        if($i<count($_POST)-1){
            $backend_message.= htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
        }
        $i++;
    }

    $email_to = $db_handle->notify_email();
    $subject = $subject_contact;

    $headers = "From: Five Hours Class NY <" . $db_handle->from_email(). ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo-3.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>New Five Hours Class NY Info Data</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='Home';
                </script>";
    }
}