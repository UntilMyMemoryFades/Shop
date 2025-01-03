<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Kababi - Restaurant HTML Template</title>
    
    <meta name="author" content="themesflat.com" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/icon.png">

</head>

<body class="header-fixed">
	<!-- Preloader -->
	<div id="loading-overlay">
		<div class="loader"></div>
	</div>
	<div id="wrapper">
        <div id="page" class="clearfix">
            <div id="top-bar">
                <div class="top-bar-content">
                    <p>Welcome to Kababi a Best Quality Restaurant</p>
                </div>
            </div>
            <header id="site-header" class="site-header-style3">
				<div id="site-header-inner" class="container-fluid"> 
					<div class="wrap-inner flex">
						<div id="site-logo" class="cleafix">
							<a href="index.php" class="logo">
											<img src="assets/img/logo/logo.png" alt="">
							</a>
						</div>
						<div class="mobile-button">
									<span></span>
						</div><!-- /.mobile-button -->
						<nav id="main-nav" class="main-nav">
									<ul id="menu-primary-menu" class="menu">
										<li class="menu-item menu-item-has-children menu-item-has-children-active current-menu-item">
											<a href="#">Home</a>
											<ul class="sub-menu">
												<li class="menu-item"><a href="index.php">Home 1</a></li>
												<li class="menu-item"><a href="home2.php">Home 2</a></li>
												<li class="menu-item current-item"><a href="home3.php">Home 3</a></li>
											</ul>
										</li>
										<li class="menu-item ">
											<a href="about.php">About</a>
										</li>
										<li class="menu-item menu-item-has-children ">
											<a href="about.php">Page</a>
											<ul class="sub-menu">
												<li class="menu-item"><a href="our-chefs.php">Our Chefs</a></li>
												<li class="menu-item"><a href="our-menu.php">Our Menu</a></li>
												<li class="menu-item"><a href="our-menu2.php">Our Menu2</a></li>
												<li class="menu-item"><a href="reservation.php">Reservation</a></li>												
											</ul>
										</li>
										<li class="menu-item menu-item-has-children">
											<a href="#">Shop</a>
											<ul class="sub-menu">
												<li class="menu-item"><a href="our-shop.php">Our Shop</a></li>
												<li class="menu-item"><a href="shop-details.php">Shop Details</a></li>
											</ul>
										</li>
										<li class="menu-item ">
											<a href="contact.php">Contact</a>
										</li>
									</ul>
						</nav><!-- /#main-nav -->     
						<div class="flat-button flat-button-style3">
									<a href="reservation.php" class="tf-button color-text color-style1">book a table</a>
						</div>
					</div> 
				</div>
            </header>
			<!-- page-title -->
			<section class="page-title page-title-style3">		
                <div class="slider slider-style3">
					<div class="swiper-container mainslider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-item">		
									<div class="image-slider3 item1">
										<div class="wrap-image">
											<div class="overlay-image"></div>
										</div> 
									</div> 											
									<div class="container-fluid">
										<div class="page-tittle-slider distance">
																					  
											<div class="content-slider">
													<div class="heading-tittle">
														<div class="sub-title">
														   <p> Welcome To Kababi</p>
														</div>
														<h1 class="title margin-4 margin-bt21 color-style4">Noodles With 
															Porkballs 
														</h1>											
														<div class="flat-button flat-button-style2">
															<a href="reservation.php" class="tf-button color-text color-style2">explore our menu</a>
														</div>																
													</div>																			
											</div>									   	
																			
										</div>                          
									</div>
								</div><!-- item-->
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item">		
									<div class="image-slider3 item2">
										<div class="wrap-image">
											<div class="overlay-image"></div>
										</div> 
									</div> 											
									<div class="container-fluid">
										<div class="page-tittle-slider distance">
																					  
											<div class="content-slider">
													<div class="heading-tittle">
														<div class="sub-title">
														   <p> Welcome To Kababi</p>
														</div>
														<h1 class="title margin-4 margin-bt21 color-style4">Noodles With 
															Porkballs 
														</h1>											
														<div class="flat-button flat-button-style2">
															<a href="reservation.php" class="tf-button color-text color-style2">explore our menu</a>
														</div>																
													</div>																			
											</div>									   	
																			
										</div>                          
									</div>
								</div><!-- item-->
                            </div>
                        </div>
                        <div class="swiper-button-next btn-slide-next"></div>
                        <div class="swiper-button-prev btn-slide-prev active"></div>
                    </div>
                </div>
			</section>	
			<!-- page-title -->

			<!-- booking -->
			<section class="tf-section wrap-booking wrap-booking-style03">
				<div class="container-fluid">
					<div class="row">
						<div class="wrap-form-style03">
							<form action="contact/contact-process3.php" method="post" id="commentform" class="comment-form comment-form-style03" novalidate="novalidate">
								<fieldset class="select ">
									<select name="persons" id="persons" required="">                       
										<option value="">Persons</option>
										<option value="Persons 01">01 Persons</option>
										<option value="Persons 01">02 Persons</option>
										<option value="Persons 01">05 Persons</option>
										<option value="Persons 01">10 Persons</option>
									</select>
								</fieldset>
								<fieldset class="select ">
									<select name="date-booking" id="date-booking" required="">                       
										<option value="">Choose Date</option>
										<option value="Persons 01">28//07/2021</option>
										<option value="Persons 01">02//8/2021</option>
									</select>
								</fieldset>
								<fieldset class="select ">
									<select name="time-booking" id="time-booking" required="">                       
										<option value="">Select Time</option>
										<option value="Persons 01">15h-17h</option>
										<option value="Persons 01">16h30-17h30</option>
									</select>
								</fieldset>
								<fieldset class="phone-wrap ">
									<input type="number" id="phone" placeholder="Phone Number" class="tb-my-input" name="phone" tabindex="2" value="" aria-required="true" required="">
								</fieldset>
								<fieldset class="email-wrap ">
									<input type="email" id="email" placeholder="Email Address" class="tb-my-input" name="email" tabindex="1" value="" aria-required="true" required="">
								</fieldset>
								<fieldset class="btn-submit text-center flat-button flat-button-style3">
									<button id="comment-reply" name="submit" class="tf-button color-text color-style1" type="submit">
										booking now
									</button>	
								</fieldset>

							</form>
						</div>	
					</div>
				</div>
			</section>

			<!-- category -->
			<section class="tf-section wrap-category-style03">						
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
									<div class="content-heading-wrap">
										<div class="tf-heading-bg cleafix">
											<h2 class="heading-bg-style02 style2 magin-left-12 ">category</h2>
										</div>
										<div class="tf-heading text-center">
											<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">CHOOSE YOUR BEST CATEGORY</h4>
											<p class="tf-sub-heading color-style4">Best foods for you & family</p>
										</div>
									</div>
						</div>
								
						<div class="col-md-3">
							<div class="category-box padding-top15">
								<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
									<div class="image">
										<img src="assets/img/gallery/img1categorybox.jpg" alt="">
									</div>
									<div class="content-title">
										<h4 class="heading">
											Pizza
										</h4>
									</div>
									<div class="imagebox-content">
										<h4 class="heading color-style4">
											<a href="our-shop.php">Pizza</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
											incididunt ut labore et dolore magna aliqua.</p>
										<div class="flat-button">
											<a href="our-shop.php" class="tf-button-style2">
												<i class="far fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>	
								<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
									<div class="image">
										<img src="assets/img/gallery/img2categorybox.jpg" alt="">
									</div>
									<div class="content-title">
										<h4 class="heading">
											Coffee
										</h4>
									</div>
									<div class="imagebox-content">
										<h4 class="heading color-style4">
											<a href="our-shop.php">Coffee</a>
										</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
											incididunt ut labore et dolore magna aliqua.</p>
										<div class="flat-button">
											<a href="our-shop.php" class="tf-button-style2">
												<i class="far fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>	
							</div>
						</div>

						<div class="col-md-3">
							<div class="category-box padding-top55">
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img3categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Sea Fish
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Sea Fish</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img4categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Pasta
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Pasta</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="category-box padding-top2">
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img5categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Cakes
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Cakes</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img6categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Shawarma
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Shawarma</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="category-box padding-top32">
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img7categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Burger
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Burger</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="category-inner wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
										<div class="image">
											<img src="assets/img/gallery/img8categorybox.jpg" alt="">
										</div>
										<div class="content-title">
											<h4 class="heading">
												Chicken  
											</h4>
										</div>
										<div class="imagebox-content">
											<h4 class="heading color-style4">
												<a href="our-shop.php">Chicken  </a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
												incididunt ut labore et dolore magna aliqua.</p>
											<div class="flat-button">
												<a href="our-shop.php" class="tf-button-style2">
													<i class="far fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
							</div>
						</div>					
					</div>
				</div>
			</section>
			<!-- category -->

			<!-- About us -->
			<section class="tf-section wrap-about-style03">					
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
									<div class="content-heading-wrap">
										<div class="tf-heading-bg cleafix">
											<h2 class="heading-bg-style02 style2">About us</h2>
										</div>
										<div class="tf-heading text-center">
											<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">why choose us</h4>
											<p class="tf-sub-heading color-style4">Best foods for you & family</p>
										</div>
									</div>
						</div>
						<div class="col-md-12">
							<div class="image-box-about3 flex">
								<div class="image-about wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1300ms">
									<img src="assets/img/about-us/imgabouthome3.jpg" alt="">
								</div>
								<div class="content-box">
									<div class="wrap-content-style3">
										<h5 class="heading color-style8">25 Years Of Experience We 
											Provide Food Services</h5>
										<div class="sub-heading color-white">
											Sed ut perspiciatis unde omnis iste natus 
											eruptatem accusantium doloremque laudantium totam rem riam, 
											eaque ipsa quae abillo inventore verittis quasi arctecto beatae vitae dicta sunt explicbo. Nemo enim luptatem quia 
											voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione 
										</div>
										<div class="image-signature flex wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1300ms">
											<div class="image">
												<img src="assets/img/about-us/img_signature.png" alt="images">
											</div>
											<div class="signature">
												<img src="assets/img/about-us/signaturehome3.png" alt="images">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- About us -->

			<!-- our menu -->
			<section class="tf-section wrap-our-menu-style03">					
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
									<div class="content-heading-wrap">
										<div class="tf-heading-bg cleafix">
											<h2 class="heading-bg-style02">our menu</h2>
										</div>
										<div class="tf-heading text-center">
											<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">Try Our Special Offers</h4>
											<p class="tf-sub-heading color-style4">Best foods for you & family</p>
										</div>
									</div>
						</div>
						<div class="col-md-6">
							<div class="col-left-ourmenu">
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 active  wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1200ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/03_Home_03.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Creste Pasta Chicken</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
	
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1300ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/img2ourmenu3.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Tasty Grilled Shawarma</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
	
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 wow fadeInUp animated" data-wow-delay="0.4ms" data-wow-duration="1400ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/img3ourmenu3.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Cake Christian Holiday</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-right-ourmenu">
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1200ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/img4ourmenu3.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Baked Fish Dorado Lemon</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
	
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1300ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/img5ourmenu3.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Raw Chicken Fillet Garlic</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
	
								<div class="our-menu-box">
									<div class="our-menu-item our-menu-item-style02 wow fadeInUp animated" data-wow-delay="0.4ms" data-wow-duration="1400ms">
										<div class="image">
											<img class="image-inner" src="assets/img/our-menu/img6ourmenu3.png" alt="images">
										</div>
										<div class="content-menu-item">
											<h4 class="heading">Pasta Tomato Chicken</h4>
											<div class="sub-heading">Candied Jerusalem artichokes, truffle</div>
											<div class="pricing">
												<span class="number-underline">$95</span>
												<span class="number">$89</span>
											</div>
										</div>								
									</div>
								</div>
							</div>
						</div>
						<div class="btn-button">
							<div class="flat-button flat-button-style3">
								<a href="our-menu.php" class="tf-button color-text color-style1">explore more Foods</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- our menu -->

			<!-- video -->
			<section class="tf-section wrap-video-popup parallax1">
				<div class="overlay-section"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="popup-video-inner">
							<div class="wrap-video wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
								<a href="https://www.youtube.com/watch?v=ySd-XWQWhbI" class="popup-youtube">
									<i class="fas fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- video -->

			<!-- our chefs -->
			<section class="tf-section wrap-our-chefs-style02">					
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
									<div class="content-heading-wrap">
										<div class="tf-heading-bg cleafix">
											<h2 class="heading-bg-style02 style2">OUR CHEFS</h2>
										</div>
										<div class="tf-heading text-center">
											<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">MEET PROFESSIONAL CHEFS</h4>
											<p class="tf-sub-heading color-style4">Best foods for you & family</p>
										</div>
									</div>
						</div>					
						<div class="col-box col-20">
							<div class="team-box-style2 active style2 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
								<div class="image">
									<img src="assets/img/team/img5team.jpg" alt="images">
								</div>
								<div class="content ">
									<h6 class="name">Marcellus H. Waddell</h6>
									<div class="position sub-heading">
										Senior Chef
									</div>
									<div class="social-style2 ">
										<a href="#" class="active">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" >
											<i class="fab fa-instagram"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-box col-20">
							<div class="team-box-style2 style2 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
								<div class="image">
									<img src="assets/img/team/img6team.jpg" alt="images">
								</div>
								<div class="content">
									<h6 class="name">Ronald W. Robison</h6>
									<div class="position sub-heading">
										Senior Chef
									</div>
									<div class="social-style2">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" >
											<i class="fab fa-instagram"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-box col-20">
							<div class="team-box-style2 style2 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
								<div class="image">
									<img src="assets/img/team/img7team.jpg" alt="images">
								</div>
								<div class="content">
									<h6 class="name">Kenneth B. Deshazo</h6>
									<div class="position sub-heading">
										Senior Chef
									</div>
									<div class="social-style2">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" >
											<i class="fab fa-instagram"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-box col-20">
							<div class="team-box-style2 style2 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
								<div class="image">
									<img src="assets/img/team/img8team.jpg" alt="images">
								</div>
								<div class="content">
									<h6 class="name">Robert H. Houston</h6>
									<div class="position sub-heading">
										Senior Chef
									</div>
									<div class="social-style2">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" >
											<i class="fab fa-instagram"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-box col-20">
							<div class="team-box-style2 style2 wow fadeInUp animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
								<div class="image">
									<img src="assets/img/team/img9team.jpg" alt="images">
								</div>
								<div class="content">
									<h6 class="name">Timothy V. Millman</h6>
									<div class="position sub-heading">
										Senior Chef
									</div>
									<div class="social-style2">
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="#" >
											<i class="fab fa-instagram"></i>
										</a>
										<a href="#">
											<i class="fab fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- our chefs -->

			<section class="tf-section wrap-brand wrap-brand-style03">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 cleafix">
							<div class="swiper-container carousel-4 margin-79">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slider-item slider-item-style3 img-brand active">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand13.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item active slider-item-style2 img-brand">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand14.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item slider-item-style2 img-brand">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand15.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item slider-item-style2 img-brand">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand16.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item slider-item-style2 img-brand">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand17.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item slider-item-style2 img-brand">										
											<a href="home2.php">
												<img src="assets/img/brand/imgbrand18.png" alt="images">
											</a>		
										</div><!-- item-->
									</div>
								</div>
							</div>
						</div>	

						<div class="col-md-12">
							<div class="swiper-container carousel-auto-with">
									<div class="swiper-wrapper">
										<div class="swiper-slide nh1">
											<div class="slider-item">										
												<div class="gallery-box gallery-box-style3 h-100">
													<div class="hover-effect active h-100">
														<div class="image h-100">
															<img src="assets/img/gallery/imggallery7.jpg" alt="images">
														</div>
														<div class="content-box">
															<div class="content">
																<h4 class="heading letter-spacing-1">
																	<a href="our-shop.php">Family Package Dish</a>
																</h4>
																<div class="sub-heading">
																	Popular Food Package
																</div>
															</div>
														</div>
													</div>
												</div> 			
											</div><!-- item-->
										</div>
										<div class="swiper-slide nh2">
											<div class="slider-item">										
												<div class="gallery-box gallery-box-style3 h-100">
													<div class="hover-effect h-100">
														<div class="image h-100">
															<img src="assets/img/gallery/imggallery8.jpg" alt="images">
														</div>
														<div class="content-box">
															<div class="content">
																<h4 class="heading letter-spacing-1">
																	<a href="our-shop.php">Family Package Dish</a>
																</h4>
																<div class="sub-heading">
																	Popular Food Package
																</div>
															</div>
														</div>
													</div>
												</div>		
											</div><!-- item-->
										</div>
										<div class="swiper-slide nh3">
											<div class="slider-item">										
												<div class="gallery-box gallery-box-style3 h-100">
													<div class="hover-effect h-100">
														<div class="image h-100">
															<img src="assets/img/gallery/imggallery9.jpg" alt="images">
														</div>
														<div class="content-box">
															<div class="content">
																<h4 class="heading letter-spacing-1">
																	<a href="our-shop.php">Family Package Dish</a>
																</h4>
																<div class="sub-heading">
																	Popular Food Package
																</div>
															</div>
														</div>
													</div>
												</div>		
											</div><!-- item-->	
										</div>
									</div>
								
							</div>
							<div class="swiper-button-next btn-slide-next"></div>
								<div class="swiper-button-prev btn-slide-prev active"></div>
						</div>
					</div>
				</div>
			</section>

			<!-- Testimonials -->
			<section class="tf-section wrap-testimonials-style03">					
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
							<div class="content-heading-wrap">
								<div class="tf-heading-bg cleafix">
									<h2 class="heading-bg-style02 magin-left-12 style2">reviews</h2>
								</div>
								<div class="tf-heading text-center">
									<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">OUR CUSTOMERS FEDBACK</h4>
									<p class="tf-sub-heading color-style4">Best foods for you & family</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 cleafix">
							<div class="swiper-container carousel-7 style2">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slider-item">										
											<div class="testimonials-inner-style3 style">
												<p class="sub-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
													ntium doloremque laudantium, totam rem aperiam eaque ipsa quaeab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explic
													abo. Nemo enim ipsam voluptatem quia voluptas</p>
												<div class="image-box flex">
													<div class="image">
														<img src="assets/img/Testimonial/img1testihome3.png" alt="">
													</div>
													<div class="content">
														<h6 class="name">Christopher K. Defoor</h6>
														<div class="position">Senior Manager</div>
													</div>
												</div>
												<span class="flaticon-quotation"></span>
											</div>		
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item">										
											<div class="testimonials-inner-style3 style">
												<p class="sub-heading">On the other hand we denounce with righteous indignation and dislike men who 
													are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, 
													that they cannot foresee the pain and trouble that are bound to ensue and equal blame</p>
												<div class="image-box flex">
													<div class="image">
														<img src="assets/img/Testimonial/img2testihome3.png" alt="">
													</div>
													<div class="content">
														<h6 class="name">Lawrence L. Jones</h6>
														<div class="position">Senior Manager</div>
													</div>
												</div>
												<span class="flaticon-quotation"></span>
											</div>		
										</div><!-- item-->
									</div>
								
								</div>									
								<div class="swiper-pagination"></div>
							</div>
						</div>	
						
					</div>
				</div>
			</section>
			<!-- Testimonials -->
			
			<!-- Blog -->
			<section class="tf-section blog-style03">					
				<div class="container-fluid cleafix">
					<div class="row">
						<div class="col-md-12 cleafix">
							<div class="content-heading-wrap">
								<div class="tf-heading-bg cleafix">
									<h2 class="heading-bg-style02 magin-left-12 style2">Our blog</h2>
								</div>
								<div class="tf-heading text-center">
									<h4 class="tf-title tf-title-style3 wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">latest news & blog</h4>
									<p class="tf-sub-heading color-style4">Best foods for you & family</p>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="swiper-container carousel-5">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slider-item ">
											<div class="post post2 post3 wow fadeIn" data-wow-delay="0.3ms" data-wow-duration="1500ms">
												<div class="featured-post">
													<img src="assets/img/blog/img8blohhome01.jpg" alt="images">
												</div>
												<div class="content-post">
													<ul class="date-style3">
														<li class="date">25</li> 
														<li class="month">AUG</li>
													</ul>
													<div class="meta-post">
														<div class="author-style2 flex">
															<img src="assets/img/blog/authorpost3.png" alt="images">
															<a href="shop-details.php" class="name">By Williamson</a>
														</div>													
													</div>
													<h6 class="title">
														<a href="shop-details.php">
															How Run UX Audit For Major EdTech Platform Study
														</a>
													</h6>
													<div class="comment">
														<a href="shop-details.php" >Comments (05)</a>
													</div>
												</div>
											</div>			
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item ">
											<div class="post post2 post3 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
												<div class="featured-post">
													<img src="assets/img/blog/img9blohhome01.jpg" alt="images">
												</div>
												<div class="content-post">
													<ul class="date-style3">
														<li class="date">25</li> 
														<li class="month">AUG</li>
													</ul>
													<div class="meta-post">
														<div class="author-style2 flex">
															<img src="assets/img/blog/authorpost3.png" alt="images">
															<a href="shop-details.php" class="name">By Williamson</a>
														</div>													
													</div>
													<h6 class="title active">
														<a href="shop-details.php">
															Designing With Code Modern Approach To Development
														</a>
													</h6>
													<div class="comment">
														<a href="shop-details.php" >Comments (05)</a>
													</div>
												</div>
											</div>			
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item ">
											<div class="post post2 post3 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
												<div class="featured-post">
													<img src="assets/img/blog/img10blohhome01.jpg" alt="images">
												</div>
												<div class="content-post">
													<ul class="date-style3">
														<li class="date">25</li> 
														<li class="month">AUG</li>
													</ul>
													<div class="meta-post">
														<div class="author-style2 flex">
															<img src="assets/img/blog/authorpost3.png" alt="">
															<a href="shop-details.php" class="name">By Williamson</a>
														</div>													
													</div>
													<h6 class="title">
														<a href="shop-details.php">
															How To Run A UX Audit For Major EdTech Platform
														</a>
													</h6>
													<div class="comment">
														<a href="shop-details.php" >Comments (05)</a>
													</div>
												</div>
											</div>			
										</div><!-- item-->
									</div>
									<div class="swiper-slide">
										<div class="slider-item ">
											<div class="post post2 post3 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
												<div class="featured-post">
													<img src="assets/img/blog/img11blohhome01.jpg" alt="images">
												</div>
												<div class="content-post">
													<ul class="date-style3">
														<li class="date">25</li> 
														<li class="month">AUG</li>
													</ul>
													<div class="meta-post">
														<div class="author-style2 flex">
															<img src="assets/img/blog/authorpost3.png" alt="">
															<a href="shop-details.php" class="name">By Williamson</a>
														</div>													
													</div>
													<h6 class="title">
														<a href="shop-details.php">
															How Run UX Audit For Major EdTech Platform Study
														</a>
													</h6>
													<div class="comment">
														<a href="shop-details.php" >Comments (05)</a>
													</div>
												</div>
											</div>			
										</div><!-- item-->
									</div>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</section>
			<!-- Blog -->

			<!-- footer -->
			<footer id="footer" class="footer-style03">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="newsletters-subscribe flex">
								<h4 class="title">
									Newsletters Subscribe
								</h4>
								<div class="wrap-form-subscibe">
									<form action="#" id="subscribe-form" class="form-subscribe-footer2">
										<div id="subscribe-content" class="footer_input-footer">
											<input type="Email" id="subscribe-email" class="tb-my-input" placeholder="Enter Email Address" required>
											<button type="submit" id="subscribe-button" class="tf-button color-text color-style1">
												subscribe now
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="widget widget-infor widget-footer">
								<div id="site-logo3" class="cleafix">
									<a href="index.php" class="logo">
													<img src="assets/img/logo/logo.png" alt="">
									</a>
								</div>
								<p class="sub-heading-style2">Posum dolor sit amet, consectetur adipiscing elit sed do where the 
									eiusmod tempor incididunt ut labore dolore magna liqua. Quis ipsum suspendisse ultrices gravida. 
									Risus commodo viverra maecenas accumsan lacus facilisis. </p>
								<ul class="widget_socials">
									<li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>								
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget widget-link widget-about widget-footer ">
								<h4 class="widget-title">About</h4>
								<ul class="widget-list">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">Our Story</a></li>
									<li><a href="#">The Setting</a></li>
									<li><a href="#">The Suites</a></li>
									<li><a href="our-menu.php">Food Lists</a></li>
								</ul>
							</div>														
						</div>
						<div class="col-md-2">
							<div class="widget widget-link widget-Facilities widget-footer">
								<h4 class="widget-title">Facilities</h4>
								<ul class="widget-list">
									<li><a href="#">The Fontus Spa</a></li>
									<li><a href="#">Experiences</a></li>
									<li><a href="#">Private Functions</a></li>
									<li><a href="#">Gallery, Events</a></li>
									<li><a href="#">Special Offers</a></li>
								</ul>
							</div>								
						</div>
						<div class="col-md-3">
							<div class="widget widget-link widget-contact widget-footer">
								<h4 class="widget-title">Contact</h4>
								<ul class="widget-list">
									<li class="adress margin-right-15">56 Main Street, D-Block, 
										2nd Floor, Australia</li>
									<li class="mail">support@gmail.com</li>
									<li class="phone">+012 (345) 67 899</li>
									<li class="clock">08 am - 06 pm</li>
								</ul>
							</div>
						</div>	
						<!-- scroll-top -->
						<div class="col-md-12">
							<div class="wrap-scroll wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
								<a id="scroll-top">
									<img src="assets/img/footer/iconup@2x.png" alt="images" >
								</a>
							</div>
						</div>
						<!-- scroll-top -->
						<div class="col-md-12">
							<div id="bottom" class="tf-bottom-inner bottomstyle3">
								<div class="Copyright">									
									<p>Copyright © 2021 The Kababi - Restaurant HTML Template. Designed by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a></p>
								</div>
								<div class="sub-heading-style2">
									<ul>
										<li><a href="about.php">Setting & Privecy</a><span>,</span></li>
										<li><a href="about.php">Faqs</a><span>,</span></li>
										<li><a href="our-menu.php">Food Menu</a><span></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer -->
        </div><!-- Page  -->
    </div><!-- Wrapper -->

<!-- Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/shortcodes.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery-validate.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/parallax.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/swiper.js"></script>
</body>
</html>

