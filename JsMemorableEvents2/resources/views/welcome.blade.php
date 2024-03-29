<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>J'S MEMORABLE EVENTS</title>
        <link rel="icon" href="img/JSmemorableLogo.png">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </head>
    <body>
        <div class="preloader-container">
            <div class="preloader"></div>
        </div>

		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
                                <li><i class="fa fa-phone"></i>+123 1234 56789</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">sample@yourmail.com</a></li>
                                <li><i class="icofont-instagram"></i><a href="https://www.instagram.com/js_memorable_events/">js_memorable_events</a></li>
                                <li><i class="icofont-facebook"></i><a href="https://www.instagram.com/js_memorable_events/">js_memorable_events</a></li>
                                <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC0CB" class="bi bi-tiktok" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                        </svg>
                                  <a href="https://www.tiktok.com/@js_memorable_events">js_memorable_events</a></li>

							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href=""><img src="img/JSmemorableLogo.png" alt=""></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Home</a></li>
											<li><a href="#" id="about-btn">About Us </a></li>
											<li><a href="#" id="services-btn">Services </a></li>
											<li><a href="#" id="contact-btn">Contact Us</a></li>
                                            @if(!Auth::check())
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                            @endif
                                            @if(Auth::check())
                                            <li><a href="{{ route('customerData') }}">C-Panel</a></li>

                                            @endif
                                            @if(Auth::check())
                                            <li><form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">Logout</a>
                                            </form></li>
                                            @endif


										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
                                <div class="get-appoint">
                                    <a href="#" class="btn" id="book-appointment-btn">Book Appointment</a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/cakepink.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Event Planing</span> Services That You Can <span>Trust!</span></h1>
									<p>We are a One Stop Shop! We can accommodate to planning your event from beginning to end. We offer Balloon artistry,
                                        dessert table set up, Cakes & desserts, Photobooth rental, Bouncers,Tables/Chair rentals, Customized backdrops. Anything
                                        to make your event smoother & easier for you to enjoy!
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/cakepink.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Event Planing</span> Services That You Can <span>Trust!</span></h1>
									<p>We are a One Stop Shop! We can accommodate to planning your event from beginning to end. We offer Balloon artistry,
                                        dessert table set up, Cakes & desserts, Photobooth rental, Bouncers,Tables/Chair rentals, Customized backdrops. Anything
                                        to make your event smoother & easier for you to enjoy!
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/cakepink.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Event Planing</span> Services That You Can <span>Trust!</span></h1>
									<p>We are a One Stop Shop! We can accommodate to planning your event from beginning to end. We offer Balloon artistry,
                                        dessert table set up, Cakes & desserts, Photobooth rental, Bouncers,Tables/Chair rentals, Customized backdrops. Anything
                                        to make your event smoother & easier for you to enjoy!
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

        <div class="middle card">
            <div class="row px-2 cardholder">
                <div class="col pb-4">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/dslr.jpg') }}"alt="..." />
                        </div>
                        <div class="card_content" id="openModalBtn">
                            <span class="card_title">Photobooth</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                $350 2 hrs minimum <br>
                                $100 every additional hour <br>
                                Photo album keepsake $100 <br>
                                Photobooth Packages <br>
                                Basic: 2 hrs $350 <br>
                                Intermediate: 4 hrs $750<br>
                            </p>
                            <a href="{{ route('photobooth') }}" class="photobooth" style="color: white; font-size: 16px;">
                            LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col pb-4">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/project2.jpg') }}"alt="..." />
                        </div>
                        <div class="card_content">
                            <span class="card_title">Rentals</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                Pink water slide bouncer$300 <br>
                                Blue water slide bouncer$300 <br>
                                Wedding castles $400 <br>
                                Mechanical bull $350 <br>
                                Resin chairs $4 each <br>
                                Round tables $10 each <br>
                            </p>
                            <a href="{{ route('rentals') }}" class="rentals" style="color: white; font-size: 16px;">
                                LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/project1.jpg') }}"
                                alt="..." />
                        </div>
                        <div class="card_content">
                            <span class="card_title">Cakes</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                Cakepops <br>
                                Cakecycles <br>
                                Cupcakes <br>
                                Pretzels <br>
                                Rice Krispies <br>
                                Oreos <br>
                            <a href="{{ route('cakes') }}" class="rentals" style="color: white; font-size: 16px;">
                            LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </article>
                </div>

            </div>
            {{-- <div class="col-12 borbtm"></div> --}}
        </div>

		<!-- Start Schedule Area -->
		{{-- <section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-calendar"></i>
									</div>
									<div class="single-content">

										<h4>Easter Egg</h4>
										<p>Mini Photo sessions only $75 includes all digital images 20-30 min session March 14th - 28th full payment required</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">

                                        <h4>Services we provide</h4>
                                            <ul style="color: #fff">
                                                <li>-Cake, Desserts w/table setup</li>
                                                <li>-Photobooth rental</li>
                                                <li>-Customized backdrops</li>
                                                <li>-Table,chairs & heater rentals</li>
                                            </ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span></span>
										<h4>Event Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		{{-- <section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We are always ready to assist with your events.</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>We can accommodate to planning your event from beginning to end</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="fa fa-gift"></i>
							</div>
							<h3>Celebration Event</h3>
							<p>Let us make your celebration event unforgettable with our expert planning and attention to detail.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="fa fa-birthday-cake"></i>
							</div>
							<h3>Birthday Event</h3>
							<p>Make your birthday event truly special with our personalized planning and creative touches</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont-pigeon-2"></i>
							</div>
							<h3>Wedding Event</h3>
							<p>Elevate your wedding event to new heights with our meticulous planning and unwavering dedication to creating your dream celebration.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Feautes -->

		<!-- Start service -->
		{{-- <section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">General Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.html">Teeth Whitening</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Heart Surgery</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.html">Ear Treatment</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.html">Vision Problems</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.html">Blood Transfusion</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End service -->

		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>WE PROVIDE YOU WITH THE BEST EVENTS AT A REASONABLE PRICE</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>Discover the unbeatable value of our premium events, meticulously curated to exceed your expectations while keeping costs within reach.
                                Experience excellence without compromise - your dream event awaits!</p>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-cup-cake"></i>
								</div>
								<h4 class="title">Desserts </h4>
								<div class="price">
                                    <p class="amount">$317<span>/ Bundle Price</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Cupcakes: $24 per dozen</li>
								<li><i class="icofont icofont-ui-check"></i>Oreos: $24 per dozen</li>
								<li><i class="icofont icofont-ui-check"></i>Cakecycles: $32 per dozen</li>
								<li><i class="icofont icofont-ui-check"></i> Rice Krispies: $32 per dozen</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-toy-ball"></i>
								</div>
								<h4 class="title">Balloon</h4>
								<div class="price">
									<p class="amount">$275<span>/ Bundle Price</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Backdrop & stand $75</li>
								<li><i class="icofont icofont-ui-check"></i>Curtain $50</li>
								<li><i class="icofont icofont-ui-check"></i>Linens $7 ea minimum of 10</li>
								<li><i class="icofont icofont-ui-check"></i>Animated Props $40</li>

							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-dining-table"></i>
								</div>
								<h4 class="title">Rentals</h4>
								<div class="price">
									<p class="amount">$1100<span>/ Bundle Price</span></p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Pink water slide bouncer $300</li>
								<li><i class="icofont icofont-ui-check"></i>Blue water slide bouncer $300</li>
								<li><i class="icofont icofont-ui-check"></i>Wedding castles $400</li>
								<li><i class="icofont icofont-ui-check"></i>Mechanical bull $350</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>
			</div>
		</section>
		<!--/ End Pricing Table -->



		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/dslr.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
                                    <div>
                                        <a class="btn booknow2" href="#">Book Now</a>
                                    </div>
                                    <h2><a href="blog-single.html">Photobooth</a></h2>
                                    <ul class="table-list">
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                    </ul>

								</div>

							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/project1.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div>
                                        <a class="btn booknow2" href="#">Book Now</a>
                                    </div>

									<h2><a href="blog-single.html">Cake,desserts w/ table setup</a></h2>
									<ul class="table-list">
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                    </ul>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/project2.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="">
                                        <a class="btn booknow2" href="#">Book Now</a>
                                    </div>
									<h2><a href="blog-single.html">Custom balloon decor</a></h2>
									<ul class="table-list">
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                        <li></i>sample price $123 sample price $123</li>
                                    </ul>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		{{-- <!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients --> --}}

		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form id="booking-form" class="form" action="{{ route('submit-form') }}" method="POST">
                            @csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Name:</label>
									<div class="form-group">
										<input name="name" type="text" placeholder="Name" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Email:</label>
									<div class="form-group">
										<input name="email" type="text" placeholder="Email" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Contact Number:</label>
                                    <div class="form-group">
                                        <input name="contact_number" type="tel" placeholder="Contact Number (e.g., +1 (123) 123-1234)" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Date of Event:</label>
									<div class="form-group">
										<input name="date" type="date" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Occasion:</label>
									<div class="form-group">
										<input name="occasion" type="text" placeholder="Occasion" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Time of Event:</label>
                                    <div class="form-group">
                                        <input name="time" type="time" placeholder="Time" required>
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">Theme Colors:</label>
									<div class="form-group">
										<input name="themecolors" type="text" placeholder="Theme Colors" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #2d2e40;">People Count:</label>
									<div class="form-group">
										<input name="people" type="text" placeholder="How Many People" required>
									</div>
								</div>

								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Please Specify exactly what is needed" required></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
                                    @if(session('success_message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success_message') }}
                                    </div>
                                @endif
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/balloonss.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->

		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>We are a One Stop Shop! We can accommodate to planning your event from beginning to end.
                                    We offer Balloon artistry, dessert table set up, Cakes & desserts, Photobooth rental, Bouncers,Tables/Chair rentals,
                                    Customized backdrops. Anything to make your event smoother & easier for you to enjoy! </p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#" id="about-footer"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#" id="services-footer"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
										</ul>
									</div>
									{{-- <div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
										</ul>
									</div> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			{{-- <div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->



		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
        <script>
            document.getElementById("booking-form").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent default form submission

                // Show "Please wait" loading indicator
                Swal.fire({
                    title: 'Please wait...',
                    html: '<span style="color: #ff0000">Don\'t close until the success</span>',
                    showConfirmButton: false,
                    timer: 2500,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                })
                .then(() => {
                    // Get form data
                    var formData = new FormData(this);

                    // Send AJAX request to submit form data
                    return fetch(this.action, {
                        method: 'POST',
                        body: formData
                    });
                })
                .then(response => {
                    if (response.ok) {
                        // Show success SweetAlert 2 popup
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your inquiry has been submitted successfully.',
                            showConfirmButton: false,
                            timer: 5000,

                        });
                        // Optionally, reset the form after successful submission
                        this.reset();
                    } else {
                        // Show error SweetAlert 2 popup
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! Please try again.',
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        </script>



    </body>
</html>



