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

        <style>
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
            }

            .editphoto {
                display: none;
                width: 100%;
                height: 400px;
            }

            .mySlides0 {
                display: none;
                width: 100%;
                height: 400px;
            }

            .slideshow-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .prev, .next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #FFC0CB; /* Baby pink color */
                text-align: center;
                line-height: 40px;
                font-size: 20px;
                color: white;
                cursor: pointer;
            }

            .prev {
                left: 0;
            }

            .next {
                right: 0;
            }

            .news-head img {
                width: 150%;
                height: 400px;
                object-fit: cover;
            }



    /* Adjust padding for smaller screens */
    @media (max-width: 768px) {
        .why-choose {
            text-align: center;
            margin-bottom: 10px;
        }
    }

        </style>
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
                                <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">jsmemorableevents@yahoo.com</a></li>
                                <li><i class="icofont-instagram"></i><a href="https://www.instagram.com/js_memorable_events/">js_memorable_events</a></li>
                                <li><i class="icofont-facebook"></i><a href="https://www.facebook.com/profile.php?id=61556888671445">js_memorable_events</a></li>
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
											<li><a href="{{ route('photobooth') }}">Photobooth</a></li>
											<li><a href="{{ route('rentals') }}">Rentals</a></li>
											<li><a href="{{ route('cakes') }}">Cakes</a></li>
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
				<div class="single-slider" style="background-image:url('img/slider2.jpg')">
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
				<div class="single-slider" style="background-image:url('img/slider3.jpg')">
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

        {{-- 3 card --}}
        <div class="middle card">
            <div class="row px-2 cardholder">
                <div class="col pb-4">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/photobooth/upscale1.jpeg') }}"alt="..." />
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
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/rentals/rentals10.jpeg') }}"alt="..." />
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
                            <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('img/cakes/cake1.jpeg') }}"
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
        {{-- 3 card end --}}

        <!-- Sessional -->
		{{-- <section class="why-choose section">
            <div class="container">
                <div class="row justify-content-center"> <!-- Centering the row -->
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Easter memories captured forever!</h2>
                            <p>Book your mini photo session for only $75, including all digital images.
                                Hurry, limited slots available from March 14th to 28th.
                                DM to secure your spot - full payment required.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->
                        <div class="season-photo text-center"> <!-- Centering the content within the column -->
                            <div class="season-image">
                                <img src="img/easteregg.PNG" style="max-width: 100%; max-height: 500px;" class="mx-auto">
                            </div>
                        </div>
                        <!-- End Choose Rights -->
                    </div>
                </div>
            </div>
        </section> --}}
		<!--/ End Sessional -->

        {{-- photobooth  --}}
        <section class="projects-section" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>PHOTOBOOTH</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>50% non refundable deposit required to book your date. All payments must be paid 5 days before event.
                                Will accept all payment type. Zelle, Cashapp, Venmo, PayPal & cash.</p>
						</div>
					</div>
				</div>
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="slideshow-container">
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth4.jpeg" alt="Slide 1" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth2.jpeg" alt="Slide 2" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth3.jpeg" alt="Slide 3" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth1.jpeg" alt="Slide 4" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth5.jpeg" alt="Slide 5" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth6.jpeg" alt="Slide 6" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth7.jpeg" alt="Slide 7" />
                            </div>
                        </div>
                        <br>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div class="col-xl-4 col-lg-5 system">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Photo Booth</h4>
                            <p class="text-black-50 mb-2">
                                <span style="color: green;">$350</span> 2 hrs minimum <br>
                                <span style="color: green;">$100</span> every additional hour <br>
                                Photo album keepsake <span style="color: green;">$100</span>
                            </p>
                            <h4>Photo booth Packages</h4>
                            <p class="text-black-50 mb-5">
                                Basic: 2 hrs <span style="color: green;">$350</span> <br>
                                Vinyl backdrop <br>
                            </p>
                            <a href="{{ route('photobooth') }}" class="photobooth" style="color: #f7b2c9; font-size: 25px; margin-bottom: 20px;">
                                LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end photobooth  --}}

		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>RENTALS</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>50% non refundable deposit required to book your date. All payments must be paid 5 days before event.
                                Will accept all payment type. Zelle, Cashapp, Venmo, PayPal & cash.</p>
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
									<i class="icofont-dining-table"></i>
								</div>
								<h4 class="title">Tables/chairs & bouncers</h4>
								<div class="price">
                                    <p class="amount">$450</p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>4 tables 40  chairs <span style="color: #f7b2c9;">($196 value)</span></li>
								<li><i class="icofont icofont-ui-check"></i>Bouncer <span style="color: #f7b2c9;">($300)</span></li>
								<li><i class="icofont icofont-ui-check"></i>For a full day event</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('rentals') }}">LEARN MORE</a>
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
									<i class="icofont-industries-3"></i>
								</div>
								<h4 class="title">Intermediate</h4>
								<div class="price">
									<p class="amount">$700</p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>10 tables 100 chairs <span style="color: #f7b2c9;">($480 value)</span></li>
								<li><i class="icofont icofont-ui-check"></i>Bouncer <span style="color: #f7b2c9;">($300 value)</span></li>
								<li><i class="icofont icofont-ui-check"></i>For a full day event </li>

							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('rentals') }}">LEARN MORE</a>
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
									<i class="icofont-industries-4"></i>
								</div>
								<h4 class="title">Upscale</h4>
								<div class="price">
									<p class="amount">$1250</p>
								</div>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>20 tables 200 chairs <span style="color: #f7b2c9;">($960 value)</span></li>
								<li><i class="icofont icofont-ui-check"></i>Wedding bouncer <span style="color: #f7b2c9;">($400 value)</span></li>
								<li><i class="icofont icofont-ui-check"></i>For a full day event</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('rentals') }}">LEARN MORE</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>
			</div>
		</section>
		<!--/ End Pricing Table -->

		<!-- Start cake Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>CAKES</h2>
							<i class="fa fa-gift" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>50% non refundable deposit required to book your date. All payments must be paid 5 days before event.
                                Will accept all payment type. Zelle, Cashapp, Venmo, PayPal & cash.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/cakes/cake1.jpeg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
                                    <div>
                                        <a class="btn booknow2" href="{{ route('cakes') }}">LEARN MORE</a>
                                    </div>
								</div>

							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/cakes/cake8.jpeg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div>
                                        <a class="btn booknow2" href="{{ route('cakes') }}">LEARN MORE</a>
                                    </div>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/cakes/cake9.jpeg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="">
                                        <a class="btn booknow2" href="{{ route('cakes') }}">LEARN MORE</a>
                                    </div>

								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>

				</div>
			</div>
		</section>
		<!-- End cake Blog Area -->

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
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="{{ url('/') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="{{ route('photobooth') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Photobooth</a></li>
											<li><a href="{{ route('rentals') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Rentals</a></li>
											<li><a href="{{ route('cakes') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Cakes</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Social Media</h2>
								<ul class="time-sidual">
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:@jsmemorableevents@yahoo.com">jsmemorableevents@yahoo.com</a></li>
                                    <li><i class="icofont-instagram"></i> <a href="https://www.instagram.com/js_memorable_events/">js_memorable_events</a></li>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/profile.php?id=61556888671445">js_memorable_events</a></li>
                                    <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-tiktok" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                        <path fill="#FFFFFF" d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                    </svg>
                                      <a href="https://www.tiktok.com/@js_memorable_events">js_memorable_events</a></li>

                                </ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!--/ End Footer Area -->



		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<script src="js/slicknav.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
        {{-- <script>
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
        </script> --}}
        <script>
            var slideIndex = 1;
            photoSlides(slideIndex);

            function plusSlides(n) {
                photoSlides(slideIndex += n);
            }

            function currentSlide(n) {
                photoSlides(slideIndex = n);
            }

            function photoSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides0");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
        </script>

    </body>
</html>



