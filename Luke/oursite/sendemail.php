<?php 
if(isset($_POST['submit'])){
	header( "refresh:10;url=http://www.evilnut.ca" );
    $to = "service@evilnut.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    //$last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name. " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $send = mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	
	
	if ($send)
	{
		
		/**
		echo "<script>
		alert(\"Mail Sent. Thank you " . $first_name . ", we will contact you shortly.\");
		</script>";
		echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		**/
		
		// You can also use header('Location: thank_you.php'); to redirect to another page.
		$title = "Thank you";
		$response = "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	}
	else
	{
		$title = "bad";
		$response = "We encountered an error sending your mail";
		
	}	
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Evilnut Creative Technology</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->

        <meta name="description" content="Kanzi HTML5 Template">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->

		<!--- favicon link -->
		<link rel=icon href="images/favicon.ico" >
		
		
        <link rel="stylesheet" href="css/revolution_settings.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/axfont.css">
        <link rel="stylesheet" href="css/tipsy.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="css/isotop_animation.css">
        <link rel="stylesheet" href="css/animate.css">



        <!-- remprod -->
        <link rel="stylesheet" href="css/_colorpicker.css">
        <!-- end remprod -->

        <link href='css/style.css' rel='stylesheet' type='text/css'> 
        <link href='css/responsive.css' rel='stylesheet' type='text/css'>

        <link href="css/skins/light-blue.css" rel='stylesheet' type='text/css' id="skin-file">

        <!-- remprod -->
        <style type="text/css" id="skin-chooser-css">

        </style>
        <!-- end remprod -->

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/respond.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/color-chooser.css">
    </head>
    <body>

        <!-- remprod -->
        <script type="text/x-handlebars-template" id="css-skin">


            /* Loading */
            .double-bounce1, .double-bounce2{
            background-color: {{skin_color_rgba}};

            }

            /* Navigation */
            .navigation > li:hover > a,.navigation > li > a:hover,
            .navigation > li > .activelink,.navigation > li:hover > a > i, .navigation > li > a:hover > span.label-nav-sub::before, .navigation > li > a:focus > span.label-nav-sub::before{
            color: {{skin_color}};
            }
            .mobile-menu-button, .mobile-nav, .slider-fixed-container{   
            background-color: {{skin_color}};    
            }

            .navigation > li > a:after, .navigation>li>.activelink:after{
            background-color: {{skin_color}};
            }
            .navigation>li:hover > a > span.label-nav-sub::before,.navigation>li:hover> a > span.label-nav-sub::before{
            color: {{skin_color}};
            }


            /* Page Content Colors */
            .body-wrapper a:hover , .tab a:hover, accordion .title:hover, .top-body a:hover, .bottom-body a:hover
            ,.accordion .active h4, .accordion .title:hover h4, .side-navigation .menu-item.current-menu-item a, .side-navigation .menu-item:hover a:after,
            .side-navigation .menu-item:hover a, a.tool-tip, .team-member .team-member-position, .team-member-progress .team-member-position, .item-img-overlay i
            ,ul.icon-content-list-container li.icon-content-single .icon-box i,.item-img-overlay .portfolio-zoom:hover, .navigation ul li:hover>a, .blog_post_quote:after,
            .item-img-overlay .portfolio-zoom, body .white-text .feature-details a:hover{
            color: {{skin_color}};
            }
            ::selection
            {
            background-color:{{skin_color}};
            }
            ::-moz-selection
            {
            background-color:{{skin_color}};
            }
            .item-img-overlay  .portfolio-zoom:hover, .tab a.active {
            color: {{skin_color}} !important;
            }
            .callout-box{
            border-left-color: {{skin_color}}
            }
            .feature .feature-content,.team-member .team-member-content{
            border-top-color: {{skin_color}};
            }

            .progress .progress-bar{
            background-color: {{skin_color}};
            }
            .blog-masonry .blog_post_quote{
            border-top: 2px solid {{skin_color}};
            }
            .tab a.active:after {
            background-color:{{skin_color}};
            border-color: {{skin_color}};
            }
            .blog-post .blog-post-type,.subscribe-button{
            background: {{skin_color}};
            }
            .blog-post-details-item.blog-post-details-item-right a:hover i,.blog_post_quote .quote-author,.pagination > li > a.prev, 
            .pagination > li > a.next, .pagination > li > a:hover, .pagination > li > a.current,.testimonial-by-name{
            color: {{skin_color}};
            }
            .skin-text{
            color: {{skin_color}} !important;
            }
            body .section-content.section-image{
            background-color: {{skin_color_rgba}};
            }

            .item-img-overlay .item_img_overlay_content{
            background: {{skin_color}};
            }
            .button, .body-wrapper input[type="submit"], .body-wrapper input[type="button"], .section-content.section-color-bg,.content-box.content-style4 h4 i
            ,button.button-main,.body-wrapper .tags a:hover,.callout-box.callout-box2, .blog-search .blog-search-button, .top-title-wrapper, .testimonial-big,
            .content-style3:hover .content-style3-icon, table.table thead tr, .price-table .price-label-badge, .price-table .price-table-header, .section-subscribe .subscribe-button.icon-envelope-alt{
            background-color: {{skin_color}};
            }
            .rev-slider-full .button.btn-flat, .rev-slider-fixed .button.btn-flat{
            background-color: {{skin_color}};
            }
            .btn, input[type="submit"], input[type="button"], button.btn,.btn-primary{
            background-color: {{skin_color}};
            }
            .btn:hover, input[type="submit"]:hover, input[type="button"]:hover, button.btn:hover,.btn-primary:hover{
            background-color: {{skin_color}};

            }
            .btn:focus, input[type="submit"]:focus, input[type="button"]:focus, button.btn:focus,.btn-primary:focus{
            background-color: {{skin_color}};
            }
            .blog-post-icon,.comments-list .children .comment:before,.portfolio-filter li a.portfolio-selected, 
            .portfolio-filter li a:hover, .dropcaps.dropcaps-color-style, .carousel-container .carousel-icon:hover,
            .team-member-image.img-overlay .item_img_overlay_content{
            background-color: {{skin_color}};
            }
            .comments-list .children .comment:after{
            border-color: transparent transparent transparent {{skin_color}};;
            }

            .highlighted-text{
            background-color: {{skin_color}};
            color: #ffffff;
            }
            .icons-list.colored-list li:before, .blog-post-date .day, .blog-post-date .month, strong.colored, span.colored 
            ,.content-style3 .content-style3-icon, .content-box h4 i{
            color: {{skin_color}};
            }
            .content-box.content-style2 h4 i,.content-box.style5 h4 i{
            border-color: {{skin_color}};
            color: {{skin_color}};
            }
            .content-box.content-style2:hover i,.content-box.style5:hover i{
            background-color: {{skin_color}};
            }
            .pagination .prev, .pagination .next, .pagination a:hover, .pagination a.current, .price-table .price-label{
            color: {{skin_color}};
            }


            /* Footer Area Colors */

            .footer .copyright{
            border-color: {{skin_color}};
            }

            .flickr_badge_wrapper .flickr_badge_image img:hover{
            border-color: {{skin_color}};
            }


        </script>


        <div id="wrapper"  >

            <div class="top_wrapper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="call-us top-bar-block">
                                    <i class="icon-phone"></i>
                                    <span>
                                        Call us at +1(604)336-6018
                                    </span>
                                </div>
                                <div class="mail-us top-bar-block">
                                    <i class="icon-email"></i>                            
                                    <span>
                                        E-mail: service@evilnut.ca
                                    </span>                            
                                </div>

                            </div>
                            <div class="col-sm-5">

                                <!-- Search Box 
                                <div class="searchbox">
                                    <form action="#" method="get">
                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>
                                </div>-->
                                <!-- //Search Box// -->
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/pages/Evilnut-Creative-Technology/718486438230974" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon dribble-icon" data-original-title="dribble">dribble</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <header id="header">
                    <div class="container">

                        <div class="row header">

                            <!-- Logo -->
                            <div class="col-xs-2 logo">
                                <a href="index.html">
                                    <img src="media/logo_long.png" alt="Evilnut-Creative-Technology"/ width="400px" height="50px">
                                </a>
                            </div>
                            <!-- //Logo// -->


                            <!-- Navigation File -->
                            <div class="col-md-10">

                                <!-- Mobile Button Menu -->
                                <div class="mobile-menu-button">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <!-- //Mobile Button Menu// -->




                                <nav>
                                    <ul class="navigation">
                                        <li>
                                            <a href="index.html">
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                                
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="web-design.html">
                                                <span class="label-nav">
                                                    Service
                                                </span>
                                                <span class="label-nav-sub" data-hover="Consulting">
                                                    Software
                                                </span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="web-design.html"> Web Design </a>
                                                </li>
                                                <li>
                                                    <a href="application-customization.html"> Custom Application </a>
                                                </li>
                                                <li>
                                                    <a href="graph-design.html"> Graph Design </a>
                                                </li>
                                                <li>
                                                    <a href="integrated-communication.html"> SEO </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="process.html">
                                                <span class="label-nav">
                                                    Process
                                                </span>
                                                <span class="label-nav-sub" data-hover="7 steps only">
                                                    Easy to create
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio.html">
                                                <span class="label-nav">
                                                    Portfolio
                                                </span>
                                                <span class="label-nav-sub" data-hover="Applications">
                                                    Our Work
                                                </span>
                                            </a>
                                          
                                        </li>
                                        <li>
                                            <a href="contact-us.html">
                                                <span class="label-nav">
                                                    Contact Us
                                                </span>
                                                <span class="label-nav-sub" data-hover="(604)336-6018">
                                                    Call Us
                                                </span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="our-team.html">Our Team</a>
                                                </li>                                                                    
                                            </ul>
                                        </li>
                                    </ul>

                                </nav>

                                <!-- Mobile Nav. Container -->
                                <ul class="mobile-nav">
                                    <li class="responsive-searchbox">
                                        <!-- Responsive Nave -->
                                        <form action="#" method="get">
                                            <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
                                            <button class="icon-search"></button>
                                        </form>
                                        <!-- //Responsive Nave// -->
                                    </li>
                                </ul>
                                <!-- //Mobile Nav. Container// -->
                            </div>
                            <!-- Nav -->

                        </div>



                    </div>






                </header>
                <!-- //Header// -->

                            <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title">Contact Us</h1>

                                    <h2 class="h2-page-desc">
                                    Our Locations
                                    </h2>

                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li class="active">Contact Us</li>
                                        </ol>
                                    </div>
                                    <!-- BreadCrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading"><div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title"><?php echo $title; ?></h2>
                                <div class="i-section-title">
                                    <i class="icon-feather">

                                    </i>
                                </div>
								<p class="text-center"><?php echo $response; ?></p>
								<p class="text-center">Redirecting to home page in <span id="countdown"></span> seconds...</p>
                            </div>
							
                        </div>
					</div>
				</div>
			</div>

                                  
						
						
<!--.content-wrapper end -->
            <footer>
                <div class="footer">

                    <div class="container">
                        <div class="footer-wrapper">
                            <div class="row">


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-content-logo">
                                            <img src="media/evilnut_logo.png" alt="" width="200px" height="100px"/>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-title">
                                        Address
										</div>
                                        <div class="footer-content-text">
											<p> 202-6125 Sussex Ave,<br> Burnaby, B.C.</p>
                                            <p>135-11300 No.5 Road,<br> Richmond, B.C.</p>
                                            
                                        </div>
                                    </div>
                                </div>
								
								<!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-title">
                                        <br>
										</div>
                                        <div class="footer-content-text">
											<p><strong>Tel: </strong>+1(604)336-6018</p>
											<p><strong>E-mail: </strong>Service@evilnut.ca</p>
                                            
                                        </div>
                                    </div>
                                </div>
							
                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Links
                                    </div>
                                    <div class="footer-content">
                                        <ul class="footer-category-list">
											<li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li>
                                                <a href="web-design.html">Service</a>
                                            </li>
                                            <li>
                                                <a href="process.html">Process</a>
                                            </li>
                                            <li>
                                                <a href="portfolio.html">Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->

                            </div>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 center-text">
                                    <div class="copyright-text">&copy; 2014. Developed By <a href="http://www.evilnut.ca/" target="_blank">Evilnut Creative Technology</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div><!-- wrapper end -->

        <script type="text/javascript" src="js/_jq.js"></script>

        <script type="text/javascript" src="js/_jquery.placeholder.js"></script>

        <!-- remprod -->
        <script type="text/javascript" src="js/_colorpicker.js"></script>
        <script type="text/javascript" src="js/_handlebars.js"></script>
        <script type="text/javascript" src="js/_skins.js"></script>
        <script type="text/javascript" src="js/_skinchooser.js"></script>
        <!-- end remprod -->


        <!-- online 
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-43664425-1', 'activeaxon.com');
            ga('send', 'pageview');

        </script>
        <!-- end online -->



                <!-- Navbar fixed on the top after scrolling from top -->
        <script>
        $(document).ready(function() {
            $(document).scroll(function () {
                var scroll = $(this).scrollTop();
                var topDist = $("#header").position();
                if (scroll > topDist.top) {
                    $('#header').css({"position":"fixed","top":"0", "z-index":"100", "background-color":"white", "height":"70px", "width":"100%", "opacity":"0.8"}).fadeIn(1000);
                    $('#header').css({"position":"fixed","top":"0", "z-index":"100", "background-color":"white", "height":"70px", "width":"100%", "opacity":"80%"}).fadeIn(1000);
                    $('.logo').css({"top":"-5px"});
                    //console.log('fuck');
                } else {
                    $('#header').css({"position":"static","top":"auto", "z-index":"0", "background-color":"", "height":"auto", "width":"100%", "opacity":""}).fadeIn(1000);
                }
            });
        });
        </script>
        <!-- navbar end -->
		
		<script>
		var counter = 10;
		var interval = setInterval(function() {
		counter--;
		// Display 'counter' wherever you want to display it.
		$('#countdown').text(counter);
		console.log(counter);
		/**
		if (counter == ) {
			// Display a login box
			clearInterval(interval);
		}
		**/
		}, 1000);
		</script>
		
        <script src="js/activeaxon_menu.js" type="text/javascript"></script> 
        <script src="js/animationEnigne.js" type="text/javascript"></script> 
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/ie-fixes.js" type="text/javascript"></script> 
        <script src="js/jq.appear.js" type="text/javascript"></script> 
        <script src="js/jquery.base64.js" type="text/javascript"></script> 
        <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script> 
        <script src="js/jquery.cycle.js" type="text/javascript"></script> 
        <script src="js/jquery.cycle2.carousel.js" type="text/javascript"></script> 
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
        <script src="js/jquery.easytabs.js" type="text/javascript"></script> 
        <script src="js/jquery.infinitescroll.js" type="text/javascript"></script> 
        <script src="js/jquery.isotope.js" type="text/javascript"></script> 
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <script src="js/jQuery.scrollPoint.js" type="text/javascript"></script> 
        <script src="js/jquery.themepunch.plugins.min.js" type="text/javascript"></script> 
        <script src="js/jquery.themepunch.revolution.js" type="text/javascript"></script> 
        <script src="js/jquery.tipsy.js" type="text/javascript"></script> 
        <script src="js/jquery.validate.js" type="text/javascript"></script> 
        <script src="js/jQuery.XDomainRequest.js" type="text/javascript"></script> 
        <script src="js/kanzi.js" type="text/javascript"></script> 
        <script src="js/retina.js" type="text/javascript"></script> 
    </body>


</html>
