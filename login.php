
<!DOCTYPE php>

<php lang="zxx">

<head>
    <title>Salon and spa | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>	     

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Salon and spa</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="index.php">Salon and spa</a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
						 <?php include 'includes/nav.php';?>
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            
                           
                           

                        </ul>
                        <!-- search-bar -->
                        <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div>
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_chr_cart" type="submit" name="submit" value="">
                                        <i class="" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                         Salon and spa
                    </h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
		<div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.php">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="login.php">sign in & sign  </a>
							
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- signin and signup form -->
        <div class="login-form section text-center">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1"><a href="#">sign in</a></span>
						<span class="abtext"><a href="#">sign up</a>
					</span>
					

                </h4>
                <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign In</div>
                            <div class="fpassword">
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>
                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="loginform" class="form-horizontal" action="login-process.php" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input id="login-username" type="text" class="form-control" name="login_email" value="" placeholder="Email" required="">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="login_password" placeholder="password" required="">
                                </div>
                                <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" name="login" value="Login" id="btn-login" class="btn btn-success"/>
                                        <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Don't have an account!
											
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                Sign Up Here
                                            </a>
											<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                Sign Up Here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
							
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                <a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" action="signup-process.php" method="post">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">First Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Last Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="signup-btn">
                                         <input id="btn-signup" name="signup" type="submit" value="Sign Up" class="btn btn-info"/>
                                    </div>
                                </div>
                                <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                                    <div class="f-btn">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary">
                                            <i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//signin and signup form ends here-->
     <!-- footer -->
     <div class="footer-bottom section">
        <div class="container">
            <!-- footer grids-->
            <div class="footer-cpy">
                <!-- footer-grid1 -->
                <div class="col-md-3 col-sm-6 footer-logo">
                    <h3>
                        <a href=>Salon and spa</a>
                    </h3>
                    <h4>about us</h4>
                    <p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
                </div>
                <!-- //footer-grid1 -->
                <!-- footer-grid2 -->
                <div class="col-md-3 col-sm-6 footer-nav text-center">
                    <h4>navigation</h4>
                    <ul>
                        <li>
                            <a href=>Home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="shop.php">shop</a>
                        </li>
                        <li>
                            <a href="contact.php">contact us</a>
                        </li>
                    </ul>
                </div>
                <!-- //footer-grid2 -->
                <!-- footer-grid3 -->
				<div class="col-md-3 col-sm-6 blog-footer">
                    <h4>latest from blog</h4>
                    <div class="blog1">
                        <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                            <a href="#">
                                <img src="images/b1.jpg" alt="" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                            <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                            <p>February 15, 2020</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog1">
                        <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                            <a href="#">
                                <img src="images/b2.jpg" alt="" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                            <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                            <p>February 20, 2020</p>
                        </div>
                
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //footer-grid3 -->
                <!-- footer-grid4 -->
                <div class="col-md-3 col-sm-6 contact-foot text-right">
                    <h4>contact us</h4>
                    <ul>
                        <li>
                            <span class="fa fa-home"></span>
                            
                            <br> Rajkot.
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            
                        </li>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <a href="mailto:info@example.com">mail@Box.com</a>
                        </li>
                    </ul>
                </div>
                <!-- //footer-grid4 -->
                <div class="clearfix"></div>
            </div>
            <!-- //footer-grids -->
            <!-- footer social -->
            <div class="footer-social text-center">
                <h4>stay connected</h4>
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook icon_facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter icon_twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-dribbble icon_dribbble"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-google-plus icon_g_plus"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //footer social -->
        </div>
        <!-- //footer container -->
    </div>
    <!-- //footer -->
    <div class="cpy-right">
        <p>© 2020 Salon and spa. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
<!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('php,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
