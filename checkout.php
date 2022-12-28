<?php
date_default_timezone_set("America/New_York");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description"
          content="Pre Licensing Course, the place where you will register the car in his name in order to drive it. You bought from the personal seller, the price of the car must be at a reasonable market price.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Checkout | Pre Licensing Course in NY</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/fav2.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Flat Icons css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Pricing Tab css ======-->
    <link rel="stylesheet" href="assets/css/pricing-tab.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,ur,bn,es,ne',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>

    <style>
        .goog-te-gadget-icon {
            display: none;
        }

        .goog-te-gadget-simple {
            background: none;
            border: none;
        }

        .goog-te-gadget-simple .goog-te-menu-value {
            color: white;
        }

        .btn-link:hover {
            text-decoration: none;
        }
    </style>

</head>

<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader preloader-tow">
    <div class="loader"></div>
</div>

<!--====== PRELOADER PART EMDS ======-->

<!--====== HEADER PART START ======-->

<header id="home" class="header-area header-area-tow">
    <div class="navigation navigation-tow fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="Home">
                            <img src="assets/images/logo-3.png" alt="Logo">
                        </a> <!-- Logo -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button> <!-- navbar-toggler -->

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="page-scroll" href="Home#home">Home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="Home#about">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="Home#service">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="Home#pricing">Pricing</a></li>
                                <li class="nav-item"><a class="page-scroll" href="Home#faq">FAQ</a></li>
                                <li class="nav-item"><a class="page-scroll" href="Home#appointment">Contact US</a></li>
                                <li class="nav-item">
                                    <div class="language-selector" style="display: block;">
                                        <div id="google_translate_element"></div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->

</header>

<!--====== HEADER PART ENDS ======-->

<!--====== APPOINTMENT PART START ======-->

<section id="appointment" class="contact-area contact-tow pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-tow text-center pb-30">
                    <h5 class="sub-title">5 Hour Class Student Registration</h5>
                    <h2 class="title">Checkout</h2>
                </div> <!-- section -title -->
            </div>
        </div> <!-- row -->

        <div class="contact-form contact-form-tow">
            <form action="Appointment" method="post" data-toggle="validator">
                <h2>BILLING DETAILS</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="text" name="f_name" placeholder="First Name"
                                   data-error="First Name is required."
                                   required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="text" name="l_name" placeholder="Last Name" data-error="Last Name is required."
                                   required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="email" name="email" placeholder="Email Address"
                                   data-error="Valid email is required." required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="text" name="phone_number" placeholder="Phone Number"
                                   data-error="Phone number is required." maxlength="10"
                                   minlength="10" required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-contact-form form-group">
                            <input type="text" name="address" placeholder="Street Address"
                                   data-error="Address is required." required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="text" name="city" placeholder="City"
                                   data-error="City is required." required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <input type="text" name="zip_code" placeholder="Zip Code"
                                   data-error="Subject is required." required="required">
                            <div class="help-block with-errors"></div>
                        </div> <!-- single contact form -->
                        <input type="hidden" class="form-control" name="state" value="NY" required>
                        <input type="hidden" class="form-control" name="price" id="price" value="50" required>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-contact-form form-group">
                            <label>Attach File (Learner Permit) <i class="text-danger">*</i></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <p class="mt-4">
                            Demo attach files for references <a href="assets/images/attach-file/women.jpg"
                                                                target="_blank">click here</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <label>Schedule Date <i class="text-danger">*</i></label>
                            <input type="text" name="date"
                                   value="<?php echo date("m-d-Y", strtotime($_GET['date'])); ?>" required="required"
                                   readonly>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-contact-form form-group">
                            <label>Schedule Time <i class="text-danger">*</i></label>
                            <input type="text" name="time" value="<?php echo $_GET['time']; ?>" required="required"
                                   readonly>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single-contact-form form-group">
                            <label>Do you want to pick up your certificate or have it mailed? <i
                                        class="text-danger">*</i></label>
                            <select name="pickup" class="form-control card-class"
                                    onchange="pickupProcedure(this.value);" required>
                                <option>Please Select</option>
                                <option value="Buffalo">Pickup from Buffalo Branch</option>
                                <option value="Woodside">Pickup from Woodside Branch</option>
                                <option value="Mailed">Mailed</option>
                            </select>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-12" id="mail_location" style="display: none">
                        <div class="single-contact-form form-group">
                            <label>Mail Location <i class="text-danger">*</i></label>
                            <input type="text" name="location" id="location"/>
                        </div> <!-- single contact form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="sec-title mt-3">
                            <h2>YOUR ORDER</h2>
                            <table class="table mt-4">
                                <tr>
                                    <td><strong>PRODUCT</strong></td>
                                    <td class="text-right"><strong>SUBTOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td>5 Hour Class (MV-278) × 1</td>
                                    <td class="text-right">$ 50.00</td>
                                </tr>
                                <tr style="display: none;" id="mail">
                                    <td>Mailed Cost × 1</td>
                                    <td class="text-right">$ 3.75</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="text-right" id="subtotal">$ 50.00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-right" id="total">$ 50.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend mr-1">
                                        <div class="input-group-text">
                                            <input type="radio" name="checkout"
                                                   aria-label="Radio button for following text input" value="card"
                                                   checked onclick="checkoutFunction(this.value);">
                                        </div>
                                    </div>
                                    <img src="assets/images/checkout/card.png" height="30px"/>
                                    <label class="font-weight-bold">Card</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend mr-1">
                                        <div class="input-group-text">
                                            <input type="radio" name="checkout"
                                                   aria-label="Radio button for following text input" value="paypal"
                                                   onclick="checkoutFunction(this.value);">
                                        </div>
                                    </div>
                                    <img src="assets/images/checkout/paypal.png" height="30px"/>
                                    <label class="font-weight-bold">Paypal</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend mr-1">
                                        <div class="input-group-text">
                                            <input type="radio" name="checkout"
                                                   aria-label="Radio button for following text input" value="zelle"
                                                   onclick="checkoutFunction(this.value);">
                                        </div>
                                    </div>
                                    <img src="assets/images/checkout/zelle.png" height="30px"/>
                                    <label class="font-weight-bold ml-1">Zelle</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend mr-1">
                                        <div class="input-group-text">
                                            <input type="radio" name="checkout"
                                                   aria-label="Radio button for following text input" value="cash-app"
                                                   onclick="checkoutFunction(this.value);">
                                        </div>
                                    </div>
                                    <img src="assets/images/checkout/cash_app.png" height="30px"/>
                                    <label class="font-weight-bold ml-1">Cash-App</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend mr-1">
                                        <div class="input-group-text">
                                            <input type="radio" name="checkout"
                                                   aria-label="Radio button for following text input" value="venmo"
                                                   onclick="checkoutFunction(this.value);">
                                        </div>
                                    </div>
                                    <img src="assets/images/checkout/venmo.png" height="30px"/>
                                    <label class="font-weight-bold ml-1">Venmo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-form" id="card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group text-center">
                                        <h3>Credit Card (Authorize.net)</h3>
                                        <p>Pay with your credit card via Authorize.net</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Credit Card Number <i class="text-danger">*</i></label>
                                        <input class="form-control card-class" type="text" name="credit_card_num"
                                               placeholder="1234 1234 1234 1234" maxlength="16"
                                               minlength="16" required>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-contact-form form-group">
                                        <label>Expiration Month <i class="text-danger">*</i></label>
                                        <select name="exp_month" class="form-control card-class" required>
                                            <option>Please Select</option>
                                            <option value="01">01 Jan</option>
                                            <option value="02">02 Feb</option>
                                            <option value="03">03 Mar</option>
                                            <option value="04">04 Apr</option>
                                            <option value="05">05 May</option>
                                            <option value="06">06 Jun</option>
                                            <option value="07">07 Jul</option>
                                            <option value="08">08 Aug</option>
                                            <option value="09">09 Sep</option>
                                            <option value="10">10 Oct</option>
                                            <option value="11">11 Nov</option>
                                            <option value="12">12 Dec</option>
                                        </select>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-contact-form form-group">
                                        <label>Expiration Year <i class="text-danger">*</i></label>
                                        <select class="form-control card-class" name="exp_year" required>
                                            <option>Please Select</option>
                                            <?php
                                            echo $firstYear = (int)date('Y');
                                            $lastYear = $firstYear + 10;
                                            for ($i = $firstYear; $i <= $lastYear; $i++) {
                                                echo '<option value=' . $i . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>CVV <i class="text-danger">*</i></label>
                                        <input type="text" name="cvv" placeholder="123" maxlength="3" minlength="3"
                                               required>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input paypal-class" type="checkbox" value=""
                                               id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By Placing Order You accepting our <a href="Terms-and-Condition"
                                                                                  class="text-primary" target="_blank">terms
                                                & condition</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="card_submit">Place Order
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div>
                        </div>
                        <div class="contact-form" id="paypal" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12 text-center mt-3">
                                    <h3>Paypal</h3>
                                    <p>Please pay in this email <span class="text-primary" id="paypal_mail"
                                                                      onclick="viewInfo(1);">click here</span> for email
                                        from
                                        your
                                        wallet and share transaction screenshot for approve your order.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Transaction Number <i class="text-danger">*</i></label>
                                        <input class="paypal-class" type="text" name="transaction_num_paypal"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Payment Proof <i class="text-danger">*</i></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input paypal-class"
                                                       id="inputGroupFile04" name="payment_proof_paypal"
                                                       aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input paypal-class" type="checkbox" value=""
                                               id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By Placing Order You accepting our <a href="Terms-and-Condition"
                                                                                  class="text-primary" target="_blank">terms
                                                & condition</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="paypal_submit">Place Order
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div>
                        </div>
                        <div class="contact-form" id="zelle" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12 text-center mt-3">
                                    <h3>Zelle</h3>
                                    <p>Please pay in this phone number <span class="text-primary" id="zelle_number"
                                                                             onclick="viewInfo(2);">click here</span>
                                        for number
                                        from your
                                        wallet and share transaction screenshot for approve your order.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Transaction Number <i class="text-danger">*</i></label>
                                        <input class="zelle-class" type="text" name="transaction_num_zelle"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Payment Proof <i class="text-danger">*</i></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input zelle-class"
                                                       id="inputGroupFile04" name="payment_proof_zelle"
                                                       aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input paypal-class" type="checkbox" value=""
                                               id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By Placing Order You accepting our <a href="Terms-and-Condition"
                                                                                  class="text-primary" target="_blank">terms
                                                & condition</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="zelle_submit">Place Order
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div>
                        </div>
                        <div class="contact-form" id="cash-app" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12 text-center mt-3">
                                    <h3>Cash-App</h3>
                                    <p>Please pay in this email <span class="text-primary" id="cash_app_mail"
                                                                      onclick="viewInfo(3);">click here</span> for email
                                        from
                                        your
                                        wallet and share transaction screenshot for approve your order.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Transaction Number <i class="text-danger">*</i></label>
                                        <input class="cash-app-class" type="text"
                                               name="transaction_num_cash_app"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Payment Proof <i class="text-danger">*</i></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input cash-app-class"
                                                       id="inputGroupFile04" name="payment_proof_cash_app"
                                                       aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input paypal-class" type="checkbox" value=""
                                               id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By Placing Order You accepting our <a href="Terms-and-Condition"
                                                                                  class="text-primary" target="_blank">terms
                                                & condition</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="cash_app_submit">Place Order
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div>
                        </div>
                        <div class="contact-form" id="venmo" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12 text-center mt-3">
                                    <h3>Venmo</h3>
                                    <p>Please pay in this number <span class="text-primary" id="venmo_number"
                                                                       onclick="viewInfo(4);">click here</span>
                                        and share transaction screenshot for approve your order.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Transaction Number <i class="text-danger">*</i></label>
                                        <input class="venmo-class" type="text"
                                               name="transaction_num_cash_app"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <label>Payment Proof <i class="text-danger">*</i></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input venmo-class"
                                                       id="inputGroupFile04" name="payment_proof_venmo"
                                                       aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input paypal-class" type="checkbox" value=""
                                               id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By Placing Order You accepting our <a href="Terms-and-Condition"
                                                                                  class="text-primary" target="_blank">terms
                                                & condition</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="venmo_submit">Place Order
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </form>
        </div> <!-- contact form -->
    </div> <!-- container -->
</section>

<!--====== CONATCT PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area footer-tow">
    <div class="footer-widget widget-tow pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 order-md-0 order-lg-0">
                    <div class="widget-about pt-50">
                        <a href="Home">
                            <img src="assets/images/logo-4.png" alt="Logo">
                        </a>
                        <p class="mt-25">Pre Licensing Course, the place where you will register the car in his name in
                            order to drive it.
                            You bought from the personal seller, the price of the car must be at a reasonable market
                            price.
                        </p>
                    </div> <!-- widget about -->
                </div>
                <div class="col-lg-4 col-sm-6 order-md-1 order-lg-1">
                    <div class="widget-link pt-45">
                        <div class="widget-title pb-20">
                            <h4 class="title">Our Services</h4>
                        </div>
                        <ul>
                            <li><a href="Home#home"><i class="fa fa-angle-right"></i> Home</a></li>
                            <li><a href="Home#about"><i class="fa fa-angle-right"></i> About</a></li>
                            <li><a href="Home#service"><i class="fa fa-angle-right"></i> Services</a></li>
                            <li><a href="Home#pricing"><i class="fa fa-angle-right"></i> Pricing</a></li>
                            <li><a href="Home#faq"><i class="fa fa-angle-right"></i> FAQ</a></li>
                            <li><a href="Home#appointment"><i class="fa fa-angle-right"></i> Contact US</a></li>
                        </ul>
                    </div> <!-- widget link -->
                </div>
                <div class="col-lg-4 col-sm-12 order-md-2 order-lg-2">
                    <div class="widget-contact pt-45">
                        <div class="widget-title pb-20">
                            <h4 class="title">Contact Us</h4>
                        </div>
                        <div class="widget-info">
                            <p><span>Location:</span><br/>69-07 Roosevelt Ave 2nd floor, Woodside, New York 11377</p>
                            <p><span>Email:</span>appointment@plateregistration.com</p>
                            <p><span>Phone:</span>+646-400-0666</p>
                            <ul class="social mt-30">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- widget link -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->
    <div class="footer-copyright copyright-tow pb-15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright pt-15 text-center text-md-center">
                        <p>Pre Licensing Course © 2022 All Right Reserved</p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>



<!--====== PART START ======-->

<a href="#" class="back-to-top back-tow">
    <i class="fa fa-angle-up"></i>
</a>

<!--====== jquery js ======-->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Isotope js ======-->
<script src="assets/js/isotope.pkgd.min.js"></script>

<!--====== Images Loaded js ======-->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="assets/js/ajax-contact.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<!--====== Pricing Tab js ======-->
<script src="assets/js/pricing-tab.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>

<!--====== Aos js ======-->
<script src="assets/js/aos.js"></script>

<!--====== wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Validator js ======-->
<script src="assets/js/validator.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

<script>
    function checkoutFunction(value) {
        if (value == "card") {
            document.getElementById("card").style.display = "block";
            document.getElementById("paypal").style.display = "none";
            document.getElementById("zelle").style.display = "none";
            document.getElementById("cash-app").style.display = "none";
            document.getElementById("venmo").style.display = "none";
            $(".card-class").attr('required', '');
            $(".paypal-class").removeAttr('required');
            $(".zelle-class").removeAttr('required');
            $(".cash-app-class").removeAttr('required');
            $(".venmo-class").removeAttr('required');
        } else if (value == "paypal") {
            document.getElementById("card").style.display = "none";
            document.getElementById("paypal").style.display = "block";
            document.getElementById("zelle").style.display = "none";
            document.getElementById("cash-app").style.display = "none";
            document.getElementById("venmo").style.display = "none";
            $(".card-class").removeAttr('required');
            $(".paypal-class").attr('required', '');
            $(".zelle-class").removeAttr('required');
            $(".cash-app-class").removeAttr('required');
            $(".venmo-class").removeAttr('required');
        } else if (value == "zelle") {
            document.getElementById("card").style.display = "none";
            document.getElementById("paypal").style.display = "none";
            document.getElementById("zelle").style.display = "block";
            document.getElementById("cash-app").style.display = "none";
            document.getElementById("venmo").style.display = "none";
            $(".card-class").removeAttr('required');
            $(".paypal-class").removeAttr('required');
            $(".zelle-class").attr('required', '');
            $(".cash-app-class").removeAttr('required');
            $(".venmo-class").removeAttr('required');
        } else if (value == "cash-app") {
            document.getElementById("card").style.display = "none";
            document.getElementById("paypal").style.display = "none";
            document.getElementById("zelle").style.display = "none";
            document.getElementById("cash-app").style.display = "block";
            document.getElementById("venmo").style.display = "none";
            $(".card-class").removeAttr('required');
            $(".paypal-class").removeAttr('required');
            $(".zelle-class").removeAttr('required');
            $(".cash-app-class").attr('required', '');
            $(".venmo-class").removeAttr('required');

        } else if (value == "venmo") {
            document.getElementById("card").style.display = "none";
            document.getElementById("paypal").style.display = "none";
            document.getElementById("zelle").style.display = "none";
            document.getElementById("cash-app").style.display = "none";
            document.getElementById("venmo").style.display = "block";
            $(".card-class").removeAttr('required');
            $(".paypal-class").removeAttr('required');
            $(".zelle-class").removeAttr('required');
            $(".cash-app-class").removeAttr('required');
            $(".venmo-class").attr('required', '');

        }
    }

    function viewInfo(value) {
        if (value == 1) {
            document.getElementById("paypal_mail").innerHTML = "skdrivingschool.nyc@gmail.com";
        } else if (value == 2) {
            document.getElementById("zelle_number").innerHTML = "ZELLE, Name: SK Shaheb, Number: +1 (347) 925-2721";
        } else if (value == 3) {
            document.getElementById("cash_app_mail").innerHTML = "Cash app Email: skdrivingschoolny@gmail.com Name: Pre Licensing Course";
        } else if (value == 4) {
            document.getElementById("venmo_number").innerHTML = "Number: +1 (646) 406-9584";
        }
    }

    function pickupProcedure(value) {
        if (value == 'Mailed') {
            document.getElementById("mail").style.display = "contents";
            document.getElementById("mail_location").style.display = "block";
            document.getElementById("subtotal").innerHTML = "$ 53.75";
            document.getElementById("total").innerHTML = "$ 53.75";
            document.getElementById("price").value = 53.75;
            $("#location").attr('required', '');
        } else {
            document.getElementById("mail").style.display = "none";
            document.getElementById("mail_location").style.display = "none";
            document.getElementById("subtotal").innerHTML = "$ 50.00";
            document.getElementById("total").innerHTML = "$ 50.00";
            document.getElementById("price").value = 50;
            $("#location").removeAttr('required');
        }
    }
</script>
</body>
</html>
