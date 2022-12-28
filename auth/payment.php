<?php
session_start();
require_once("../include/dbcontroller.php");
$db_handle = new DBController();
require 'autoload.php';

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

// ***************************************************************************
// ***************************************************************************
// grab our payment data first

$amount = 0;
$name = '';
$street = '';
$city = '';
$state = '';
$zip = '';
$card = '';
$card_exp_month = '';
$ex_date = '';
$cvv = '';
$email = '';
$invoice_num = '';
$description = '';
$package_sell_data = $db_handle->runQuery("SELECT * FROM billing_details where id='{$_GET["id"]}' and approve=3");
if ($package_sell_data[0]["approve"] == 3) {
    $total_amount = $db_handle->runQuery("SELECT sum(product_total_price) as total_price FROM invoice_details where billing_id='{$package_sell_data[0]["id"]}'");
    $amount = $total_amount[0]["total_price"];
    $name = $package_sell_data[0]["f_name"] . ' ' . $package_sell_data[0]["l_name"];
    $street = $package_sell_data[0]["address"];
    $city = $package_sell_data[0]["city"];
    $state = $package_sell_data[0]["state"];
    $zip = $package_sell_data[0]["zip_code"];
    $card = $package_sell_data[0]["credit_card_num"];
    $card_exp_month = $package_sell_data[0]["exp_month"];
    $card_exp_year = $package_sell_data[0]["exp_year"];
    $ex_date = $card_exp_year . '-' . $card_exp_month;
    $cvv = $package_sell_data[0]["cvv"];
    $email = $package_sell_data[0]["email"];
    $invoice_num = 'INV-#' . $package_sell_data[0]["id"];
    $description = 'Purchase Package';
}

// ***************************************************************************
// ***************************************************************************

define("AUTHORIZENET_LOG_FILE", "phplog");

// Common setup for API credentials
$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
$merchantAuthentication->setName("8Z8hJ7nk7ERc");
$merchantAuthentication->setTransactionKey("2G95wyyeJQ5y7W8D");
$refId = 'ref' . time();

// ***************************************************************************
// ***************************************************************************
// Create the payment data for a credit card
$creditCard = new AnetAPI\CreditCardType();
$creditCard->setCardNumber($card);
$creditCard->setExpirationDate($ex_date);
$creditCard->setCardCode($cvv);  // add in
$paymentOne = new AnetAPI\PaymentType();
$paymentOne->setCreditCard($creditCard);

// Set the customer's identifying information
$customerData = new AnetAPI\CustomerDataType();
$customerData->setType("individual");
$customerData->setEmail($email);
// Order info
$order = new AnetAPI\OrderType();
$order->setInvoiceNumber($invoice_num);
$order->setDescription($description);

// Set the customer's Bill To address add this section in
$customerAddress = new AnetAPI\CustomerAddressType();
$customerAddress->setFirstName($name);
$customerAddress->setAddress($street);
$customerAddress->setCity($city);
$customerAddress->setState($state);
$customerAddress->setZip($zip);
$customerAddress->setCountry("USA");
// end of customer billing info code

// Create a transaction
$transactionRequestType = new AnetAPI\TransactionRequestType();
$transactionRequestType->setTransactionType("authCaptureTransaction");
$transactionRequestType->setAmount($amount);
$transactionRequestType->setOrder($order); // add in
$transactionRequestType->setCustomer($customerData); // add in
$transactionRequestType->setBillTo($customerAddress); // add in
$transactionRequestType->setPayment($paymentOne);
$request = new AnetAPI\CreateTransactionRequest();
$request->setMerchantAuthentication($merchantAuthentication);
$request->setRefId($refId);
$request->setTransactionRequest($transactionRequestType);
$controller = new AnetController\CreateTransactionController($request);
$response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);
// ***************************************************************************
// ***************************************************************************

if ($response != null) {
    $tresponse = $response->getTransactionResponse();
    if (($tresponse != null) && ($tresponse->getResponseCode() == "1")) {
        header("Location: ../admin/payment.php?m=1&id=" . $_GET["id"]);
        die();
    } else {
        header("Location: ../admin/payment.php?m=2&id=" . $_GET["id"]);
        die();
    }
} else {
    header("Location: ../admin/payment.php?m=2&id=" . $_GET["id"]);
    die();
}
?>
