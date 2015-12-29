<!DOCTYPE HTML>
<html>
<!-- Mirrored from remtsoy.com/tf_templates/traveler/demo_v1_7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Feb 2015 12:32:33 GMT -->
<head>
<title><?php echo $pageTitle?></title>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta name="keywords" content="Template, html, premium, themeforest" />
<meta name="description" content="Traveler - Premium template for travel companies">
<meta name="author" content="Tsoy">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<BASE href="http://localhost/bimpra/">
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONTS -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/mystyles.css">

<script src="js/modernizr.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/switcher.css" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/salem.css" title="salem" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/mandy.css" title="mandy" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/green-smoke.css" title="green-smoke" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/horizon.css" title="horizon" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/cerise.css" title="cerise" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/brick-red.css" title="brick-red" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/shamrock.css" title="shamrock" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/studio.css" title="studio" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/leather.css" title="leather" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/denim.css" title="denim" media="all" />
<link rel="alternate stylesheet" type="text/css" href="css/schemes/scarlet.css" title="scarlet" media="all" />
</head>
<body>
<!-- FACEBOOK WIDGET -->
<div id="fb-root"></div>
<script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../connect.facebook.net/en_US/sdk.html#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- /FACEBOOK WIDGET -->
<div class="global-wrap">
	<!-- start comment
  <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fa fa-sliders"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>Color Scheme</p>
                <div class="predefined_styles" id="styleswitch_area">
                    <a class="styleswitch" href="indexc392.html?default=true" style="background:#ED8323;"></a>
                    <a class="styleswitch" href="#" data-src="bright-turquoise" style="background:#0EBCF2;"></a>
                    <a class="styleswitch" href="#" data-src="turkish-rose" style="background:#B66672;"></a>
                    <a class="styleswitch" href="#" data-src="salem" style="background:#12A641;"></a>
                    <a class="styleswitch" href="#" data-src="hippie-blue" style="background:#4F96B6;"></a>
                    <a class="styleswitch" href="#" data-src="mandy" style="background:#E45E66;"></a>
                    <a class="styleswitch" href="#" data-src="green-smoke" style="background:#96AA66;"></a>
                    <a class="styleswitch" href="#" data-src="horizon" style="background:#5B84AA;"></a>
                    <a class="styleswitch" href="#" data-src="cerise" style="background:#CA2AC6;"></a>
                    <a class="styleswitch" href="#" data-src="brick-red" style="background:#cf315a;"></a>
                    <a class="styleswitch" href="#" data-src="de-york" style="background:#74C683;"></a>
                    <a class="styleswitch" href="#" data-src="shamrock" style="background:#30BBB1;"></a>
                    <a class="styleswitch" href="#" data-src="studio" style="background:#7646B8;"></a>
                    <a class="styleswitch" href="#" data-src="leather" style="background:#966650;"></a>
                    <a class="styleswitch" href="#" data-src="denim" style="background:#1A5AE4;"></a>
                    <a class="styleswitch" href="#" data-src="scarlet" style="background:#FF1D13;"></a>
                </div>
                <div class="line"></div>
                <p>Layout</p>
                <div class="predefined_styles"><a class="btn btn-sm" href="#" id="btn-wide">Wide</a><a class="btn btn-sm" href="#" id="btn-boxed">Boxed</a>
                </div>
                <div class="line"></div>
                <p>Background Patterns</p>
                <div class="predefined_styles" id="patternswitch_area">
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/binding_light.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/binding_dark.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/dark_fish_skin.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/dimension.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/escheresque_ste.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/food.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/giftly.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/grey_wash_wall.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/ps_neutral.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/pw_maze_black.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/pw_pattern.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/simple_dashed.png);"></a>
                </div>
                <div class="line"></div>
                <p>Background Images</p>
                <div class="predefined_styles" id="bgimageswitch_area">
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/bike.jpg);" data-src="img/backgrounds/bike.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/flowers.jpg);" data-src="img/backgrounds/flowers.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/wood.jpg);" data-src="img/backgrounds/wood.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/taxi.jpg);" data-src="img/backgrounds/taxi.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/phone.jpg);" data-src="img/backgrounds/phone.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/road.jpg);" data-src="img/backgrounds/road.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/keyboard.jpg);" data-src="img/backgrounds/keyboard.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/beach.jpg);" data-src="img/backgrounds/beach.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/street.jpg);" data-src="img/backgrounds/street.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/nature.jpg);" data-src="img/backgrounds/nature.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/bridge.jpg);" data-src="img/backgrounds/bridge.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/cameras.jpg);" data-src="img/backgrounds/cameras.jpg"></a>
                </div>
                <div class="line"></div>
            </div>
        </div>
		 end comment -->
  <header >
    <div class="container">
      <div class="col-md-3"> <a class="logo" href="index.php"> <img src="img/bimpra-logo.png" alt="Image Alternative text" title="Image Title" /> </a> </div>
      <div class="col-lg-4 pull-right">
        <div class="contact"> Telephone +91 (704) 27-27-947<br>
          <span class="email-txt">email:</span> info@bimpra.com<br>
          <a href="#";><i class="fa fa-facebook"></i></a>&nbsp;/bimpra </div>
      </div>
      <div class="col-lg-9 col-sm-12 col-xs-12">
        <div class="nav" >
          <ul class="slimmenu" id="slimmenu">
            <li class="active"><a href="">Home</a></li>
            <li><a href="#">Pages</a>
              <ul>
                <li><a href="#">Help</a>
                  <ul>
                    <li><a href="contact-us">Contact Us</a> </li>
                    <li><a href="customer-support">Customer Support</a> </li>
                    <li><a href="enquiry">Enquiry</a> </li>
                    <li><a href="feedback">Feedback</a> </li>
                    <li><a href="privacy-policy">Privacy Policy</a> </li>
                    <li><a href="terms-and-conditions">Terms &amp; Conditions</a> </li>
                  </ul>
                </li>
                <li><a href="#">Bimpra</a>
                  <ul>
                    <li><a href="about">About</a> </li>
                    <li><a href="awards-gallery">Awards Gallery</a> </li>
                    <li><a href="become-agent">Become an Agent</a> </li>
                    <li><a href="register-hotel">Register your Hotel</a> </li>
                    <li><a href="careers">Careers - We are hiring</a> </li>
                    <li><a href="corporate-travel">Corporate Travel</a> </li>
                  </ul>
                </li>
                <li><a href="#">Misc</a>
                  <ul>
                    <li><a href="visa-forms">Visa Forms</a> </li>
                    <li><a href="visa-documents">Visa Documents Required</a> </li>
                    <li><a href="forex">Forex</a> </li>
                    <li><a href="emi-calculator">EMI Calculator</a> </li>
                    <li><a href="press-release">Press Release</a> </li>
                    <li><a href="picture-credits">Picture Credits</a> </li>
                  </ul>
                </li>
              </ul>
              
            </li>
            <li><a href="#">Tours</a>
							<ul>
								<li><a href="#">Domestic Tours</a>
									<ul>
                    <?php
											foreach($bimpra->GetDomesticStates() as $states){
												?>
													<li><a href="domestic/<?php echo $states['url_name']; ?>"><?php echo $states['display_name']; ?></a>
														<ul>
												<?php
														foreach($bimpra->GetDomesticMenu($states['state_id']) as $menuitem){
															echo '<li><a href="domestic/'.$menuitem['titleurl'].'">'.$menuitem['title'].'</a></li>';
														}
												?>
													</ul>
												</li>	
								<?php	}	?>
									</ul>
								</li>
								<li><a href="#">International Tours</a>
									<ul>
                    <?php
											foreach($bimpra->GetInternationalStates() as $states){
												?>
													<li><a href="international/<?php echo $states['url_name']; ?>"><?php echo $states['display_name']; ?></a>
														<ul>
												<?php
														foreach($bimpra->GetInternationalMenu($states['state_id']) as $menuitem){
															echo '<li><a href="international/'.$menuitem['titleurl'].'">'.$menuitem['title'].'</a></li>';
														}
												?>
													</ul>
												</li>	
								<?php	}	?>
									</ul>
								</li>
							</ul>	
						</li>
            <li><a href="hotelsearch">Hotels</a></li>
            <li><a href="Flights">Flights</a></li>
            <li><a href="Rentals">Rentals</a></li>
            <li><a href="Cars">Cars</a></li>
            <li><a href="Activities">Activities</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>