<?php
session_start();
require_once("../include/dbcontroller.php");
$db_handle = new DBController();
if(isset($_GET['contact_id'])){
    $approve = $db_handle->insertQuery("update contact set approve=0 where id='{$_GET['contact_id']}'");
    $log = $db_handle->insertQuery("INSERT INTO `activity_log`(`log_text`) VALUES ('{$_SESSION['name']} IP: {$_SERVER['REMOTE_ADDR']} decline this contact data id:{$_GET['contact_id']}')");
    echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='Contact-Data';
                </script>";
}

if(isset($_GET['sell_id'])){
    $approve = $db_handle->insertQuery("update billing_details set approve=0 where id='{$_GET['sell_id']}'");

    $package_sell_data = $db_handle->runQuery("SELECT * FROM billing_details where id='{$_GET["sell_id"]}'");

    $log = $db_handle->insertQuery("INSERT INTO `activity_log`(`log_text`) VALUES ('{$_SESSION['name']} IP: {$_SERVER['REMOTE_ADDR']} decline this package data id:{$_GET['sell_id']}')");

    $email_to = $package_sell_data[0]["email"];
    $subject = 'Email From Five Hours Class NY';
    $userName = $package_sell_data[0]["f_name"];
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: Five Hours Class NY <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo-3.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Your application not procesed right now</p>   
                        
                            <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:6464000666'>(646)-400-0666</a> or <a href='mailto:appointment@fivehoursclassny.com'>appointment@fivehoursclassny.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                Five Hours Class NY Team
                             </p> 
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='Package-Sell-Data';
                </script>";
    }
}