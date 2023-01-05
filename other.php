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
          content="Five Hours Online Class, the place where you will register the car in his name in order to drive it. You bought from the personal seller, the price of the car must be at a reasonable market price.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Other | Five Hours Online Class in NY</title>

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

<!--====== PRICING PART START ======-->

<section id="pricing" class="pricing-area gray-bg pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-tow text-center">
                    <h5 class="sub-title">5 HOUR CLASS</h5>
                    <h2 class="title">Book Other Schedule</h2>
                </div> <!-- section -title -->
            </div>
        </div> <!-- row -->
        <div class="pricing-card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form contact-form-tow">
                        <form action="Checkout" method="get" data-toggle="validator">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pricing-content mt-25">
                                        <h4 class="mb-35 text-center">
                                            <span class="text-success">Online Course</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <input type="date" id="date" name="date" placeholder="Date"
                                               data-error="Date is required."
                                               required="required" onchange="detectWeekend(this.value)">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form form-group">
                                        <select name="time" id="time" class="form-control" required="required">
                                            <option>Choose..</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single contact form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-contact-form text-center">
                                        <button type="submit" class="main-btn main-btn-3" name="submit">SCHEDULE ONLINE
                                        </button>
                                    </div> <!-- single contact form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRICING PART ENDS ======-->

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
                        <p class="mt-25">Five Hours Online Class, the place where you will register the car in his name in
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
                        <p>Five Hours Online Class © 2022 All Right Reserved</p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

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
    let is_weekend = function (date1) {
        let dt = new Date(date1);
        if (dt.getDay() == 6) {
            return "sunday";
        }
        return "other";
    }


    function detectWeekend(val) {
        console.log(is_weekend(val));
        let time = document.getElementById('time');
        let weekend = is_weekend(val);

        removeOptions(time);

        time.add(new Option('Choose..'));
        time.selectedIndex = 1;

        if (weekend === 'other') {
            time.add(new Option('09:30 AM'));
            time.add(new Option('03:00 PM'));
        } else {
            time.add(new Option('11:00 AM'));
        }
    }

    function removeOptions(selectElement) {
        let i, L = selectElement.options.length - 1;
        for (i = L; i >= 0; i--) {
            selectElement.remove(i);
        }
    }

    let date = new Date();
    date.setDate(date.getDate() + 8);

    let month=0,day=0;
    if (date.getMonth() < 10)
        month = '0' + (date.getMonth()+1);
    else
        month =  date.getMonth()+1;

    if (date.getDate() < 10)
        day = '0' + date.getDate();
    else
        day =  date.getDate();


    let newDate = date.getFullYear() + "-" + month + "-" + day;
    document.getElementById("date").min = newDate;

    console.log(newDate);


    let x = getCookie('alert');

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    console.log(x);
    if (x == 1) {
        Swal.fire({
            title: 'Successful',
            text: 'Request Successful',
            imageUrl: 'https://plateregistration.com/assets/images/logo-3.png',
            imageWidth: 140,
            imageHeight: 81,
            imageAlt: 'Custom image',
        })
        eraseCookie('alert');
    }

    function eraseCookie(name) {
        document.cookie = name + '=;';
    }
</script>
</body>
</html>
