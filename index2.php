<!doctype html>
<?php
// swiftmailer
require_once 'vendor/autoload.php';

// require the Formr class
require_once 'formr/class.formr.php';

// now create an instance and give it a name, such as $form
$form = new Formr('bootstrap');

// set our upload directory
$form->upload_dir = 'uploads';

// rename our upload with a 32-character hash
$form->upload_rename = 'timestamp';

$form->upload_max_filesize = 31457280; // 31457280 bytes = 30MB

// only allow images to be uploaded
$form->upload_accepted_mimes = 'image/jpg,image/jpeg,image/gif,image/png';

// check if the form has been submitted
if($form->submit()) {

	// process the upload and put it into an array
	$file = $form->post('file');

  // process and validate the POST data
	$name = $form->post('name','Nome e Cognome','sanitize_string');
	$email = $form->post('email','Email','valid_email');

	// check if there were any errors
	if(!$form->errors()) {
		// no errors
		echo $form->success_message('Success!');
	}
}

// always print Formr's messages!
echo $form->messages();

 ?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Apnew - Multipurpose Landing Page Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,700,600,500,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- 3D Carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery.carousel-3d.default.css">

		<!-- Slick CSS
		============================================ -->
        <link rel="stylesheet" href="css/slick.css">

		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">

		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">

		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="css/material-design-iconic-font.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">

		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Header Area Start-->
        <header class="header-yellow">
            <!--Mainmenu Start-->
            <div id="main-menu" class="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-2 hidden-sm hidden-xs">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo-3.png" alt="APNEW" /></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-10 hidden-sm hidden-xs">
                            <div class="main-menu float-right">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#banner">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#features">Features</a></li>
                                        <li><a href="#pricing">Pricing</a></li>
                                        <li><a href="#reviews">Reviews</a></li>
                                        <li><a href="#screenshots">Screenshots</a></li>
                                        <li><a href="#support">Support</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <button type="button" class="menu-btn button-default button-yellow">Download</button>
                        </div>
                        <div class="col-sm-12 hidden-lg hidden-md">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#banner">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li class="hidden-xs"><a href="#features">Features</a></li>
                                        <li><a href="#pricing">Pricing</a></li>
                                        <li><a href="#reviews">Reviews</a></li>
                                        <li><a href="#screenshots">Screenshots</a></li>
                                        <li><a href="#support">Support</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Mainmenu-->
        </header>
        <!--End of Header Area-->
        <!--Banner Area Start-->
        <div class="banner-area banner-yellow" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-lg-7">
                        <div class="banner-text">
                            <div class="banner-table-cell">
                                <h1>AWESOME<br><span>apnew</span> MOBILE APP.</h1>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majorityhave suffered<br>
                                alteration in some form, by injected humour, or randomised words which don't look even<br>
                                There are many variations of passages of Lorem Ipsum available</p>
                                <div class="banner-buttons">
                                    <button type="button" class="button-default button-yellow">Download</button>
                                    <a href="#" class="button-default button-white">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-apps">
                            <div class="single-app wow zoomIn" data-wow-duration="3s" data-wow-delay="2s">
                                <div class="single-app-table-cell">
                                    <i class="zmdi zmdi-apple"></i>
                                    <h4>ios</h4>
                                    <h3>102K</h3>
                                </div>
                            </div>
                            <div class="single-app wow zoomIn" data-wow-duration="3s" data-wow-delay="1s">
                                <div class="single-app-table-cell">
                                    <i class="zmdi zmdi-cloud-download"></i>
                                    <h4>Download</h4>
                                    <h3>202K</h3>
                                </div>
                            </div>
                            <div class="single-app wow zoomIn" data-wow-duration="3s" data-wow-delay=".5s">
                                <div class="single-app-table-cell">
                                    <i class="zmdi zmdi-android"></i>
                                    <h4>Android</h4>
                                    <h3>100K</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-lg-5">
                        <div class="banner-product-image">
                            <div class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s">
                                <img src="img/banner-yellow/banner-mobile.png" alt="" class="floatright">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--About Area Start-->
        <div class="about-area about-yellow" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1>ABOUT <span>APNEW</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-sm-5">
                        <div class="about-image wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0s">
                            <img src="img/banner-yellow/mobile.png" alt="" class="floatright">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-6">
                        <div class="about-text">
                            <h2>BEST <span>MOBILE APP</span></h2>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master of human happiness. No one rejects, dislikes,</p>
                            <p>mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the </p>
                            <div class="about-buttons">
                                <button type="button" class="button-default button-yellow">Download</button>
                                <a href="#" class="button-default button-white yellow-border">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of About Area-->
        <!--Service Area Start-->
        <div class="service-area service-yellow hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-item text-center">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-settings"></i>
                            </div>
                            <h4>Easy To Customize</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-item text-center">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                            <h4>User Friendly</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <div class="single-item text-center">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-time"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Service Area-->
        <!--Features Area Start-->
        <div class="features-area features-yellow hidden-xs" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1>Awsome <span>Features</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-5 col-md-9 col-md-offset-3 col-sm-12 col-sm-offset-0 feature-wrapper">
                        <div class="single-item">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-collection-text"></i>
                            </div>
                            <div class="single-item-text">
                                <h4>Unlimited Features</h4>
                                <p>There are many variations of passages of Lorem Ipsum available,but the majorityhave suffered alteration in some form, by injected humour,available</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-sun"></i>
                            </div>
                            <div class="single-item-text">
                                <h4>High Resolution</h4>
                                <p>There are many variations of passages of Lorem Ipsum available,but the majorityhave suffered alteration in some form, by injected humour,available</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-brush"></i>
                            </div>
                            <div class="single-item-text">
                                <h4>Modern Design</h4>
                                <p>There are many variations of passages of Lorem Ipsum available,but the majorityhave suffered alteration in some form, by injected humour,available</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-desktop-mac"></i>
                            </div>
                            <div class="single-item-text">
                                <h4>Unique Design</h4>
                                <p>There are many variations of passages of Lorem Ipsumavailable,but the majorityhave suffered alteration in some form, by injected humour,available</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-icon">
                                <i class="zmdi zmdi-language-html5"></i>
                            </div>
                            <div class="single-item-text">
                                <h4>Clean Code</h4>
                                <p>There are many variations of passages of Lorem Ipsum available,but the majorityhave suffered alteration in some form, by injected humour,available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Features Area-->
        <!--Download Area Start-->
        <div class="download-area download-yellow">
            <div class="download-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1 class="text-white">Download Our <span>LatestApp</span></h1>
                            <img src="img/icon/title-icon-white.png" alt="">
                            <p class="text-white">There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="download-button-wrapper">
                            <button class="download-btn" type="button">
                                <i class="zmdi zmdi-apple"></i>
                                <span>Available on the <span class="large-text">App Store</span></span>
                            </button>
                            <button class="download-btn" type="button">
                                <i class="zmdi zmdi-google-play"></i>
                                <span>Available on the <span class="large-text">Play Store</span></span>
                            </button>
                            <button class="download-btn" type="button">
                                <i class="zmdi zmdi-windows"></i>
                                <span>Available on the <span class="large-text">Windows Store</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Download Area-->
        <!--Pricing Area Start-->
        <div class="pricing-area pricing-yellow" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1>Pricing <span>Plan</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-price-package">
                            <div class="price-title">
                                <h3>Standard</h3>
                                <div class="price">
                                    <h4><span class="text-top">$</span><span class="text-large">33</span></h4>
                                    <p><span class="text-bottom">/month</span></p>
                                </div>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>One Website</li>
                                    <li>One User</li>
                                    <li>50 GB Bandwidth</li>
                                    <li>1 GB Storage</li>
                                    <li>24x7 Not Support</li>
                                </ul>
                                <div class="price-btn">
                                    <button class="button" type="button">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-price-package list-large">
                            <div class="price-title">
                                <h3>Personal</h3>
                                <div class="price">
                                    <h4><span class="text-top">$</span><span class="text-large">55</span></h4>
                                    <p><span class="text-bottom">/month</span></p>
                                </div>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Five Website</li>
                                    <li>Five User</li>
                                    <li>100 GB Bandwidth</li>
                                    <li>2 GB Storage</li>
                                    <li>24x7 Support</li>
                                </ul>
                                <div class="price-btn">
                                    <button class="button" type="button">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-price-package">
                            <div class="price-title">
                                <h3>Business</h3>
                                <div class="price">
                                    <h4><span class="text-top">$</span><span class="text-large">99</span></h4>
                                    <p><span class="text-bottom">/month</span></p>
                                </div>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Ten Website</li>
                                    <li>Ten User</li>
                                    <li>500 GB Bandwidth</li>
                                    <li>5 GB Storage</li>
                                    <li>24x7 Support</li>
                                </ul>
                                <div class="price-btn">
                                    <button class="button" type="button">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Pricing Area-->
        <!--Testimonial Area Start-->
        <div class="testimonial-area testimonial-yellow" id="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1>App <span>Reviews</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-0 col-md-offset-1 col-sm-offset-1 col-sm-10 col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                                <div class="testimonial-image-slider text-center">
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/1.png" alt="testimonial 1" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/2.png" alt="testimonial 2" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/3.png" alt="testimonial 3" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/1.png" alt="testimonial 1" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/2.png" alt="testimonial 2" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/3.png" alt="testimonial 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text-slider text-center">
                            <div class="sin-testiText">
                                <h2>M S Nawaz </h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>Nam nec tellus a odio tincidunt This lorem is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum gravida.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum Photoshop.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>M S Nawaz </h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum auctor, nisi elit consequat ipsum</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <div class="client-rating">
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star color"></i>
                                    <i class="zmdi zmdi-star-half color"></i>
                                </div>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum auctor, nisi elit consequat ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Testimonial Area-->
        <!--Screenshots Area Start-->
        <div class="screenshots-area screenshots-yellow" id="screenshots">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1>App <span>Screenshots</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div id="screenshot-carousel" data-carousel-3d>
                            <img src="img/screenshot/3.png" alt="">
                            <img src="img/screenshot/3.png" alt="">
                            <img src="img/screenshot/3.png" alt="">
                            <img src="img/screenshot/3.png" alt="">
                            <img src="img/screenshot/3.png" alt="">
                            <img src="img/screenshot/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Screenshots Area-->
        <!--Footer Area Start-->
        <footer class="footer-area footer-yellow" id="support">
            <div class="footer-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center title-yellow">
                            <h1 class="text-white">Get in <span>Touch</span></h1>
                            <img src="img/icon/title-icon-yellow.png" alt="">
                            <p class="text-white">There are many variations of passages of Lorem Ipsum available,<br>
                            but the majorityhave suffered alteration in some form, by injected humour,available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <h3>Say Hello!</h3>
                        <?php
                        $name = array(
                            'name'      => 'name',
                            'id'        => 'name',
                            'placeholder'     => 'Nome e Cognome',
                            'maxlength' => '80',
                        );
                        $email = array(
                            'name'      => 'email',
                            'id'        => 'email',
                            'placeholder'     => 'Email',
                            'maxlength' => '80',
                        );
                        $message = array(
                            'name'      => 'message',
                            'id'        => 'message',
                            'placeholder'     => 'Messaggio',
                            'class' => 'yourmessage form-control',
                        );
                        // $submit = array(
                        //     'name'      => 'invia',
                        //     'id'        => 'invia',
                        //     'type'     => 'submit',
                        //     'class' => 'button',
                        //     'value' => '<span>INVIA</span>'
                        // );
                        $form->required = '(file)';
                        $form->required_indicator = '*';
                        // now build your form...
                        echo $form->form_open_multipart();
                        echo $form->input_text($name);
                        echo $form->input_email($email);
                        echo $form->input_textarea($message);
                        // multiple input elements using an array
                        echo $form->input_upload('file[]','Photo 1');
                        echo $form->input_upload('file[]','Photo 2');
                        echo $form->input_upload('file[]','Photo 3');
                        echo $form->input_upload('file[]','Photo 4');
                        echo $form->input_upload('file[]','Photo 5');
                        echo $form->input_upload('file[]','Photo 6');
                        echo $form->input_upload('file[]','Photo 7');
                        echo $form->input_upload('file[]','Photo 8');
                        echo $form->input_submit('submitForm', '&nbsp;', 'INVIA', 'buttonID', 'class="button"');

                        echo $form->form_close();
                         ?>

                        <!-- <form action="<?php echo basename(__FILE__); ?>" method="post" id="contact-form" "enctype="multipart/form-data">
                            <div class="form-top">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input name="name" type="text" class="form-control" placeholder="Nome e Cognome">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea name="message" class="yourmessage form-control"  placeholder="Messaggio"></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                      <label for='uploaded_file'>Select A File To Upload:</label>
                                      <input type="file" name="uploaded_file1">
                                      <input type="file" name="uploaded_file2">
                                      <input type="file" name="uploaded_file3">
                                      <input type="file" name="uploaded_file4">
                                      <input type="file" name="uploaded_file5">
                                      <input type="file" name="uploaded_file6">
                                      <input type="file" name="uploaded_file7">
                                    </div>

                                    <div class="submit-form form-group col-sm-12">
                                        <button class="button" type="submit"><span>INVIA</span></button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <h3>Contattaci</h3>
                        <div class="conatct-info">
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <span>075 5287323</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-globe-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <span>mailto:carrozzeria@andreanigroup.it<br>
                                    https://www.andreanigroup.it</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="contact-text">
                                    <span>Ci trovi in<br>
                                    Via A.Manna, 76 - 06132 S.Sisto (PG)
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="newsletter text-center">
                            <h3>SUBSCRIBE FOR OUR NEWSLETTER</h3>
                            <p class="text-white">There are many variations of passages of Lorem Ipsum available,<br>
but the majorityhave alteration in some form, by injected humour,available</p>
                            <form action="#" method="post" id="newsletter">
                                <div class="newsletter-content">
                                   <input type="text" name="email" placeholder="Enter your Email address">



                                    <button type="submit" class="button"><span>Subscribe</span></button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="footer-links text-center">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-youtube"></i></a>
                        </div>
                        <div class="footer-text text-center">
                            <span>Copyright &copy; 2016 <a href="#">Dev Items</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Footer Area-->

		<!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.3.min.js"></script>

		<!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>

		<!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>

		<!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>

		<!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>

		<!-- Slick JS
		============================================ -->
        <script src="js/slick.min.js"></script>

		<!-- Nav JS
		============================================ -->
        <script src="js/jquery.nav.js"></script>

        <!-- 3D Carousel JS
		============================================ -->
        <script src="js/jquery.resize.ex.js"></script>
        <script src="js/waitforimages.js"></script>
        <script src="js/jquery.carousel-3d.min.js"></script>

		<!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>

		<!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
    </body>
</html>
