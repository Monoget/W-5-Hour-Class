<?php
session_start();
require_once("include/dbcontroller.php");
$db_handle = new DBController();

function productCode($length)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_POST['card_submit'])) {

    $f_name = $db_handle->checkValue($_POST['f_name']);
    $l_name = $db_handle->checkValue($_POST['l_name']);
    $code = $db_handle->checkValue(productCode(15));
    $email = $db_handle->checkValue($_POST['email']);
    $phone_number = $db_handle->checkValue($_POST['phone_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $city = $db_handle->checkValue($_POST['city']);
    $zip_code = $db_handle->checkValue($_POST['zip_code']);
    $state = $db_handle->checkValue($_POST['state']);
    $pickup = $db_handle->checkValue($_POST['pickup']);
    $location = $db_handle->checkValue($_POST['location']);
    $credit_card_num = $db_handle->checkValue($_POST['credit_card_num']);
    $exp_month = $db_handle->checkValue($_POST['exp_month']);
    $exp_year = $db_handle->checkValue($_POST['exp_year']);
    $cvv = $db_handle->checkValue($_POST['cvv']);
    $payment_type = 'Card';
    $arr = array();
    /*for ($i = 0; $i < count($_POST['preferred_schedule']); $i++) {
        $arr[] .= $_POST['preferred_schedule'][$i];
    }*/

    $preferred_schedule = $db_handle->checkValue($_POST['date']) . ' ' . $db_handle->checkValue($_POST['time']);

    $attach_files = '';
    $arr = array();
    if (!empty($_FILES['attach_file_1']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['attach_file_1']['name'];
        $file_size = $_FILES['attach_file_1']['size'];
        $file_tmp = $_FILES['attach_file_1']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "images/attach-files/" . $file_name);
            $attach_files = "images/attach-files/" . $file_name;
        }

    } else {
        $attach_files = '';
    }


    $billing_insert = $db_handle->insertQuery("INSERT INTO `billing_details`(`f_name`, `l_name`, `code`, `email`, `phone_number`, `address`, `city`, `zip_code`,`state`, 
                              `preferred_schedule`,`pickup`,`location`, `attach_files`, `payment_type`,`credit_card_num`, `exp_month`, `exp_year`, `cvv`) VALUES ('$f_name','$l_name',
                              '$code','$email','$phone_number','$address','$city',
                              '$zip_code','$state','$preferred_schedule','$pickup','$location','$attach_files','$payment_type',
                              '$credit_card_num','$exp_month','$exp_year','$cvv')");

    $billing_id = $db_handle->runQuery("SELECT * FROM billing_details order by id desc limit 1");

    $id = $billing_id[0]["id"];


    $name = '5 Hour Class (MV-278)';
    $item_price =  $_POST["price"];
    $quantity = 1;
    $unit_price = $_POST["price"];

    $billing_id = $db_handle->insertQuery("INSERT INTO `invoice_details`(`billing_id`, `product_name`, `product_quantity`, `product_unit_price`, `product_total_price`) VALUES ('$id','$name','$quantity','$unit_price','$item_price')");


    $email_to = $email;
    $subject = 'Email From SK Driving School';
    $userName = $f_name;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: SK Driving School <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for purchasing our package</p>   
                        
                            <p style='color:black'>Your payment currently on pending.<br>
                                Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:16464000666'>+1-(646)-400-0666</a> or <a href='mailto:skdrivingschoolny@gmail.com'>skdrivingschoolny@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                SK Driving School Team
                             </p> 
                             <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/contact.png' width='100%' height='auto' alt=''>
                             <h3 style='color:black;text-align: center;'>Please follow us on</h3>
                             <p style='text-align: center;'>
                                <a href='https://www.facebook.com/skdrivingschoolny' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/facebook.png' height='auto' alt=''></a>
                                <a href='https://www.instagram.com/sk_driving_school_ny/' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/instagram.png' height='auto' alt=''></a>
                                <a href='https://twitter.com/SkDrivingSchoo2' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/twitter.png' height='auto' alt=''></a>
                                <a href='#' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/linkedin.png' height='auto' alt=''></a>
                             </p>
                        </div>
                    </body>
                </html>
                ";

    $notify_messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi SK Driving School</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>You have a new order from $u</p>   
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers) && mail($db_handle->notify_email(), $subject, $notify_messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='/';
                </script>";
    }
} else if (isset($_POST['paypal_submit'])) {

    $f_name = $db_handle->checkValue($_POST['f_name']);
    $l_name = $db_handle->checkValue($_POST['l_name']);
    $code = $db_handle->checkValue(productCode(15));
    $email = $db_handle->checkValue($_POST['email']);
    $phone_number = $db_handle->checkValue($_POST['phone_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $city = $db_handle->checkValue($_POST['city']);
    $zip_code = $db_handle->checkValue($_POST['zip_code']);
    $state = $db_handle->checkValue($_POST['state']);
    $pickup = $db_handle->checkValue($_POST['pickup']);
    $location = $db_handle->checkValue($_POST['location']);


    $payment_type = 'Paypal';
    $transaction_num_paypal = $db_handle->checkValue($_POST['transaction_num_paypal']);

    $payment_proof_paypal = '';
    if (!empty($_FILES['payment_proof_paypal']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['payment_proof_paypal']['name'];
        $file_size = $_FILES['payment_proof_paypal']['size'];
        $file_tmp = $_FILES['payment_proof_paypal']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $payment_proof_paypal = '';
        } else {
            move_uploaded_file($file_tmp, "images/proof/paypal/" . $file_name);
            $payment_proof_paypal = "images/proof/paypal/" . $file_name;
        }
    } else {
        $payment_proof_paypal = '';
    }


    $arr = array();
    /*for ($i = 0; $i < count($_POST['preferred_schedule']); $i++) {
        $arr[] .= $_POST['preferred_schedule'][$i];
    }*/

    $preferred_schedule = $db_handle->checkValue($_POST['date']) . ' ' . $db_handle->checkValue($_POST['time']);

    $attach_files = '';
    $arr = array();
    if (!empty($_FILES['attach_file_1']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['attach_file_1']['name'];
        $file_size = $_FILES['attach_file_1']['size'];
        $file_tmp = $_FILES['attach_file_1']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "images/attach-files/" . $file_name);
            $attach_files = "images/attach-files/" . $file_name;
        }

    } else {
        $attach_files = '';
    }



    $billing_insert = $db_handle->insertQuery("INSERT INTO `billing_details`(`f_name`, `l_name`, `code`, `email`, `phone_number`, `address`, `city`, `zip_code`,`state`, 
                              `pickup`,`location`, `preferred_schedule`, `attach_files`, `payment_type`, `transaction_number`, `transaction_image`) VALUES ('$f_name','$l_name',
                              '$code','$email','$phone_number','$address','$city',
                              '$zip_code','$state','$pickup','$location','$preferred_schedule','$attach_files',
                              '$payment_type','$transaction_num_paypal','$payment_proof_paypal')");

    $billing_id = $db_handle->runQuery("SELECT * FROM billing_details order by id desc limit 1");

    $id = $billing_id[0]["id"];


    $name = '5 Hour Class (MV-278)';
    $item_price =  $_POST["price"];
    $quantity = 1;
    $unit_price = $_POST["price"];

    $billing_id = $db_handle->insertQuery("INSERT INTO `invoice_details`(`billing_id`, `product_name`, `product_quantity`, `product_unit_price`, `product_total_price`) VALUES ('$id','$name','$quantity','$unit_price','$item_price')");


    $email_to = $email;
    $subject = 'Email From SK Driving School';
    $userName = $f_name;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: SK Driving School <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for purchasing our package</p>   
                        
                            <p style='color:black'>Your payment currently on pending.<br>
                                Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:16464000666'>+1-(646)-400-0666</a> or <a href='mailto:skdrivingschoolny@gmail.com'>skdrivingschoolny@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                SK Driving School Team
                             </p> 
                             <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/contact.png' width='100%' height='auto' alt=''>
                             <h3 style='color:black;text-align: center;'>Please follow us on</h3>
                             <p style='text-align: center;'>
                                <a href='https://www.facebook.com/skdrivingschoolny' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/facebook.png' height='auto' alt=''></a>
                                <a href='https://www.instagram.com/sk_driving_school_ny/' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/instagram.png' height='auto' alt=''></a>
                                <a href='https://twitter.com/SkDrivingSchoo2' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/twitter.png' height='auto' alt=''></a>
                                <a href='#' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/linkedin.png' height='auto' alt=''></a>
                             </p>
                        </div>
                    </body>
                </html>
                ";

    $notify_messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi SK Driving School</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>You have a new order from $u</p>   
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers) && mail($db_handle->notify_email(), $subject, $notify_messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='/';
                </script>";
    }
} else if (isset($_POST['zelle_submit'])) {

    $f_name = $db_handle->checkValue($_POST['f_name']);
    $l_name = $db_handle->checkValue($_POST['l_name']);
    $code = $db_handle->checkValue(productCode(15));
    $email = $db_handle->checkValue($_POST['email']);
    $phone_number = $db_handle->checkValue($_POST['phone_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $city = $db_handle->checkValue($_POST['city']);
    $zip_code = $db_handle->checkValue($_POST['zip_code']);
    $state = $db_handle->checkValue($_POST['state']);
    $pickup = $db_handle->checkValue($_POST['pickup']);
    $location = $db_handle->checkValue($_POST['location']);

    $payment_type = 'Zelle';
    $transaction_num_zelle = $db_handle->checkValue($_POST['transaction_num_zelle']);

    $payment_proof_zelle = '';
    if (!empty($_FILES['payment_proof_zelle']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['payment_proof_zelle']['name'];
        $file_size = $_FILES['payment_proof_zelle']['size'];
        $file_tmp = $_FILES['payment_proof_zelle']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $payment_proof_zelle = '';
        } else {
            move_uploaded_file($file_tmp, "images/proof/zelle/" . $file_name);
            $payment_proof_zelle = "images/proof/zelle/" . $file_name;
        }
    } else {
        $payment_proof_zelle = '';
    }

    $arr = array();
    /*for ($i = 0; $i < count($_POST['preferred_schedule']); $i++) {
        $arr[] .= $_POST['preferred_schedule'][$i];
    }*/

    $preferred_schedule = $db_handle->checkValue($_POST['date']) . ' ' . $db_handle->checkValue($_POST['time']);

    $attach_files = '';
    $arr = array();
    if (!empty($_FILES['attach_file_1']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['attach_file_1']['name'];
        $file_size = $_FILES['attach_file_1']['size'];
        $file_tmp = $_FILES['attach_file_1']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "images/attach-files/" . $file_name);
            $attach_files = "images/attach-files/" . $file_name;
        }

    } else {
        $attach_files = '';
    }


    $billing_insert = $db_handle->insertQuery("INSERT INTO `billing_details`(`f_name`, `l_name`, `code`, `email`, `phone_number`, `address`, `city`, `zip_code`,`state`, 
                              `pickup`,`location`, `preferred_schedule`, `attach_files`, `payment_type`, `transaction_number`, `transaction_image`) VALUES ('$f_name','$l_name',
                              '$code','$email','$phone_number','$address','$city',
                              '$zip_code','$state','$pickup','$location','$preferred_schedule','$attach_files',
                              '$payment_type','$transaction_num_zelle','$payment_proof_zelle')");

    $billing_id = $db_handle->runQuery("SELECT * FROM billing_details order by id desc limit 1");

    $id = $billing_id[0]["id"];

    $name = '5 Hour Class (MV-278)';
    $item_price =  $_POST["price"];
    $quantity = 1;
    $unit_price = $_POST["price"];

    $billing_id = $db_handle->insertQuery("INSERT INTO `invoice_details`(`billing_id`, `product_name`, `product_quantity`, `product_unit_price`, `product_total_price`) VALUES ('$id','$name','$quantity','$unit_price','$item_price')");



    $email_to = $email;
    $subject = 'Email From SK Driving School';
    $userName = $f_name;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: SK Driving School <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for purchasing our package</p>   
                        
                            <p style='color:black'>Your payment currently on pending.<br>
                                Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:16464000666'>+1-(646)-400-0666</a> or <a href='mailto:skdrivingschoolny@gmail.com'>skdrivingschoolny@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                SK Driving School Team
                             </p> 
                             <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/contact.png' width='100%' height='auto' alt=''>
                             <h3 style='color:black;text-align: center;'>Please follow us on</h3>
                             <p style='text-align: center;'>
                                <a href='https://www.facebook.com/skdrivingschoolny' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/facebook.png' height='auto' alt=''></a>
                                <a href='https://www.instagram.com/sk_driving_school_ny/' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/instagram.png' height='auto' alt=''></a>
                                <a href='https://twitter.com/SkDrivingSchoo2' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/twitter.png' height='auto' alt=''></a>
                                <a href='#' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/linkedin.png' height='auto' alt=''></a>
                             </p>
                        </div>
                    </body>
                </html>
                ";

    $notify_messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi SK Driving School</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>You have a new order from $u</p>   
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers) && mail($db_handle->notify_email(), $subject, $notify_messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='/';
                </script>";
    }
} else if (isset($_POST['cash_app_submit'])) {

    $f_name = $db_handle->checkValue($_POST['f_name']);
    $l_name = $db_handle->checkValue($_POST['l_name']);
    $code = $db_handle->checkValue(productCode(15));
    $email = $db_handle->checkValue($_POST['email']);
    $phone_number = $db_handle->checkValue($_POST['phone_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $city = $db_handle->checkValue($_POST['city']);
    $zip_code = $db_handle->checkValue($_POST['zip_code']);
    $state = $db_handle->checkValue($_POST['state']);
    $pickup = $db_handle->checkValue($_POST['pickup']);
    $location = $db_handle->checkValue($_POST['location']);

    $payment_type = 'Cash-App';
    $transaction_num_cash_app = $db_handle->checkValue($_POST['transaction_num_cash_app']);

    $payment_proof_cash_app = '';
    if (!empty($_FILES['payment_proof_cash_app']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['payment_proof_cash_app']['name'];
        $file_size = $_FILES['payment_proof_cash_app']['size'];
        $file_tmp = $_FILES['payment_proof_cash_app']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $payment_proof_cash_app = '';
        } else {
            move_uploaded_file($file_tmp, "images/proof/cash-app/" . $file_name);
            $payment_proof_cash_app = "images/proof/cash-app/" . $file_name;
        }
    } else {
        $payment_proof_cash_app = '';
    }


    /*for ($i = 0; $i < count($_POST['preferred_schedule']); $i++) {
        $arr[] .= $_POST['preferred_schedule'][$i];
    }*/

    $preferred_schedule = $db_handle->checkValue($_POST['date']) . ' ' . $db_handle->checkValue($_POST['time']);

    $attach_files = '';
    $arr = array();
    if (!empty($_FILES['attach_file_1']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['attach_file_1']['name'];
        $file_size = $_FILES['attach_file_1']['size'];
        $file_tmp = $_FILES['attach_file_1']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "images/attach-files/" . $file_name);
            $attach_files = "images/attach-files/" . $file_name;
        }

    } else {
        $attach_files = '';
    }


    $billing_insert = $db_handle->insertQuery("INSERT INTO `billing_details`(`f_name`, `l_name`, `code`, `email`, `phone_number`, `address`, `city`, `zip_code`,`state`, 
                              `pickup`,`location`, `preferred_schedule`, `attach_files`, `payment_type`, `transaction_number`, `transaction_image`) VALUES ('$f_name','$l_name',
                              '$code','$email','$phone_number','$address','$city',
                              '$zip_code','$state','$pickup','$location','$preferred_schedule','$attach_files',
                              '$payment_type','$transaction_num_cash_app','$payment_proof_cash_app')");

    $billing_id = $db_handle->runQuery("SELECT * FROM billing_details order by id desc limit 1");

    $id = $billing_id[0]["id"];

    $name = '5 Hour Class (MV-278)';
    $item_price =  $_POST["price"];
    $quantity = 1;
    $unit_price = $_POST["price"];

    $billing_id = $db_handle->insertQuery("INSERT INTO `invoice_details`(`billing_id`, `product_name`, `product_quantity`, `product_unit_price`, `product_total_price`) VALUES ('$id','$name','$quantity','$unit_price','$item_price')");



    $email_to = $email;
    $subject = 'Email From SK Driving School';
    $userName = $f_name;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: SK Driving School <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for purchasing our package</p>   
                        
                            <p style='color:black'>Your payment currently on pending.<br>
                                Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:6464000666'>(646)-400-0666</a> or <a href='mailto:skdrivingschoolny@gmail.com'>skdrivingschoolny@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                SK Driving School Team
                             </p> 
                             <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/contact.png' width='100%' height='auto' alt=''>
                             <h3 style='color:black;text-align: center;'>Please follow us on</h3>
                             <p style='text-align: center;'>
                                <a href='https://www.facebook.com/skdrivingschoolny' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/facebook.png' height='auto' alt=''></a>
                                <a href='https://www.instagram.com/sk_driving_school_ny/' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/instagram.png' height='auto' alt=''></a>
                                <a href='https://twitter.com/SkDrivingSchoo2' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/twitter.png' height='auto' alt=''></a>
                                <a href='#' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/linkedin.png' height='auto' alt=''></a>
                             </p>
                        </div>
                    </body>
                </html>
                ";

    $notify_messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi SK Driving School</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>You have a new order from $u</p>   
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers) && mail($db_handle->notify_email(), $subject, $notify_messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='/';
                </script>";
    }
}else if (isset($_POST['venmo_submit'])) {

    $f_name = $db_handle->checkValue($_POST['f_name']);
    $l_name = $db_handle->checkValue($_POST['l_name']);
    $code = $db_handle->checkValue(productCode(15));
    $email = $db_handle->checkValue($_POST['email']);
    $phone_number = $db_handle->checkValue($_POST['phone_number']);
    $address = $db_handle->checkValue($_POST['address']);
    $city = $db_handle->checkValue($_POST['city']);
    $zip_code = $db_handle->checkValue($_POST['zip_code']);
    $state = $db_handle->checkValue($_POST['state']);
    $pickup = $db_handle->checkValue($_POST['pickup']);
    $location = $db_handle->checkValue($_POST['location']);

    $payment_type = 'Venmo';
    $transaction_num_venmo = $db_handle->checkValue($_POST['transaction_num_venmo']);

    $payment_proof_venmo = '';
    if (!empty($_FILES['payment_proof_venmo']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['payment_proof_venmo']['name'];
        $file_size = $_FILES['payment_proof_venmo']['size'];
        $file_tmp = $_FILES['payment_proof_venmo']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $payment_proof_venmo = '';
        } else {
            move_uploaded_file($file_tmp, "images/proof/venmo/" . $file_name);
            $payment_proof_venmo = "images/proof/venmo/" . $file_name;
        }
    } else {
        $payment_proof_venmo = '';
    }


    $arr = array();
    /*for ($i = 0; $i < count($_POST['preferred_schedule']); $i++) {
        $arr[] .= $_POST['preferred_schedule'][$i];
    }*/

    $preferred_schedule = $db_handle->checkValue($_POST['date']) . ' ' . $db_handle->checkValue($_POST['time']);

    $attach_files = '';
    $arr = array();
    if (!empty($_FILES['attach_file_1']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['attach_file_1']['name'];
        $file_size = $_FILES['attach_file_1']['size'];
        $file_tmp = $_FILES['attach_file_1']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "images/attach-files/" . $file_name);
            $attach_files = "images/attach-files/" . $file_name;
        }

    } else {
        $attach_files = '';
    }


    $billing_insert = $db_handle->insertQuery("INSERT INTO `billing_details`(`f_name`, `l_name`, `code`, `email`, `phone_number`, `address`, `city`, `zip_code`,`state`, 
                              `pickup`,`location`, `preferred_schedule`, `attach_files`, `payment_type`, `transaction_number`, `transaction_image`) VALUES ('$f_name','$l_name',
                              '$code','$email','$phone_number','$address','$city',
                              '$zip_code','$state','$pickup','$location','$preferred_schedule','$attach_files',
                              '$payment_type','$transaction_num_venmo','$payment_proof_venmo')");

    $billing_id = $db_handle->runQuery("SELECT * FROM billing_details order by id desc limit 1");

    $id = $billing_id[0]["id"];

    $name = '5 Hour Class (MV-278)';
    $item_price =  $_POST["price"];
    $quantity = 1;
    $unit_price = $_POST["price"];

    $billing_id = $db_handle->insertQuery("INSERT INTO `invoice_details`(`billing_id`, `product_name`, `product_quantity`, `product_unit_price`, `product_total_price`) VALUES ('$id','$name','$quantity','$unit_price','$item_price')");



    $email_to = $email;
    $subject = 'Email From SK Driving School';
    $userName = $f_name;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: SK Driving School <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for purchasing our package</p>   
                        
                            <p style='color:black'>Your payment currently on pending.<br>
                                Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:6464000666'>(646)-400-0666</a> or <a href='mailto:skdrivingschoolny@gmail.com'>skdrivingschoolny@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                SK Driving School Team
                             </p> 
                             <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/contact.png' width='100%' height='auto' alt=''>
                             <h3 style='color:black;text-align: center;'>Please follow us on</h3>
                             <p style='text-align: center;'>
                                <a href='https://www.facebook.com/skdrivingschoolny' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/facebook.png' height='auto' alt=''></a>
                                <a href='https://www.instagram.com/sk_driving_school_ny/' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/instagram.png' height='auto' alt=''></a>
                                <a href='https://twitter.com/SkDrivingSchoo2' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/twitter.png' height='auto' alt=''></a>
                                <a href='#' style='margin-right: 5px;'><img src='" . $_SERVER['SERVER_NAME'] . "/images/social-media/linkedin.png' height='auto' alt=''></a>
                             </p>
                        </div>
                    </body>
                </html>
                ";

    $notify_messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/images/email/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi SK Driving School</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>You have a new order from $u</p>   
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers) && mail($db_handle->notify_email(), $subject, $notify_messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='/';
                </script>";
    }
}
?>
