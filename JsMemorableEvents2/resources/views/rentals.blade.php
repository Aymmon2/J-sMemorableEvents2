<!DOCTYPE html>
<html lang="en">
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
        <style>
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
            }

            .mySlides0 {
                display: none;
                width: 100%;
                height: 700px; /* Set the fixed height for the slideshow */
            }

            .slideshow-container img {
                width: 100%; /* Ensure image fills its container */
                height: 100%; /* Ensure image fills its container */
                object-fit: cover; /* Cover the entire container, maintaining aspect ratio */
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

            .text-black-50 {
                font-size: 16px;
            }
            .item {
                cursor: pointer;
                margin-bottom: 10px;
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

                                <li><i class="fa fa-envelope"></i><a href="mailto:jsmemorableevents@yahoo.com">jsmemorableevents@yahoo.com</a></li>
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
                                            <li><a href="{{ url('/') }}">Home</a></li>
											<li><a href="{{ route('photobooth') }}">Photo Booth</a></li>
											<li class="active"><a href="#">Rentals</a></li>
											<li><a href="{{ route('cakes') }}">Cakes</a></li>
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
     <!-- Projects Section -->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">

                <div class="col-xl-8 col-lg-7">
                    <div class="slideshow-container">
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals1.jpeg" alt="Slide 1" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals2.jpeg" alt="Slide 2" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals3.jpeg" alt="Slide 3" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals4.jpeg" alt="Slide 4" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals5.jpeg" alt="Slide 5" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals6.jpeg" alt="Slide 6" />
                        </div>
                        {{-- table --}}
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals7.jpeg" alt="Slide 7" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals8.jpeg" alt="Slide 8" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals9.jpeg" alt="Slide 9" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals10.jpeg" alt="Slide 10" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals11.jpeg" alt="Slide 11" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals12.jpeg" alt="Slide 12" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals13.jpeg" alt="Slide 13" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals14.jpeg" alt="Slide 14" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals15.jpeg" alt="Slide 15" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/rentals/rentals17.jpeg" alt="Slide 16" />
                        </div>
                    </div>
                    <br>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <div class="col-xl-4 col-lg-5 system">
                    <div class="featured-text text-center text-lg-left">
                        <h2 style="font-size: 40px; font-weight: bold;">Rentals</h2>
<p class="text-black-50 mb-0">
    <span class="item" data-price="300" data-image="img/rentals/rentals1.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Pink water slide bouncer</u></strong></span> <span style="color: green;">$300</span> <br>
    <span class="item" data-price="300" data-image="img/rentals/rentals2.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Blue water slide bouncer</u></strong></span> <span style="color: green;">$300</span> <br>
    <span class="item" data-price="400" data-image="img/rentals/rentals6.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Wedding castles</u></strong></span> <span style="color: green;">$400</span> <br>
    <span class="item" data-price="350" data-image="img/rentals/rentals5.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Mechanical bull</u></strong></span> <span style="color: green;">$350</span> <br>
    <span class="item" data-price="4" data-image="img/rentals/rentals11.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Resin chairs</u></strong></span> <span style="color: green;">$4</span> each <br>
    <span class="item" data-price="10" data-image="img/rentals/rentals11.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Round tables</u></strong></span> <span style="color: green;">$10</span> each <br>
    <span class="item" data-price="8" data-image="img/rentals/rentals11.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Rectangle tables</u></strong></span> <span style="color: green;">$8</span> each <br>
    <strong><u>Bar tables</u></strong> <span style="color: green;">$7</span> each <br>
    <strong><u>Linens</u></strong> <span style="color: green;">$7</span> each minimum of 10 <br>
    <strong><u>Cake stands</u></strong> <span style="color: green;">$75</span> set <br>
    <span class="item" data-price="75" data-image="img/rentals/rentals7.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Walls</u></strong></span> <span style="color: green;">$75</span> <br>
    <strong><u>Carriage</u></strong> <span style="color: green;">$150</span> <br>
    <strong><u>Flower wall</u></strong> <span style="color: green;">$200</span> <br>
    <span class="item" data-price="75" data-image="img/rentals/rentals8.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Cylinders</u></strong></span> <span style="color: green;">$75</span> <br>
    <span class="item" data-price="75" data-image="img/rentals/rentals9.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Kids table</u></strong></span> <span style="color: green;">$75</span> <br>
    <span class="item" data-price="75" data-image="img/rentals/rentals9.jpeg" data-toggle="modal" data-target="#myModal"><strong><u>Boho table</u></strong></span> <span style="color: green;">$75</span> <br>
    <strong><u>Flower arrangement</u></strong> <span style="color: green;">$75</span> <br>
    <strong><u>Sequence wall</u></strong> <span style="color: green;">$150</span> <br>
    <strong><u>Happy birthday light</u></strong> <span style="color: green;">$50</span> <br>
    <strong><u>Round stand</u></strong> <span style="color: green;">$75</span> <br>
    <strong><u>Balloon garland</u></strong> start at <span style="color: green;">$275</span> <br>
    <strong><u>Backdrop & stand</u></strong> <span style="color: green;">$75</span> <br>
    <strong><u>Curtain</u></strong> <span style="color: green;">$50</span> <br>
    <strong><u>Animated Props</u></strong> <span style="color: green;">$40</span> <br>

</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>WE PROVIDE YOU WITH THE BEST EVENTS AT A REASONABLE PRICE</h2>
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
                            <a class="btn" id="book-appointment1-btn" href="#">Book Now</a>
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
                            <a class="btn" id="book-appointment2-btn" href="#">Book Now</a>
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
                            <a class="btn" id="book-appointment3-btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

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
											<li><a href="{{ url('/') }}" id="about-footer"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
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
            <!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  | JS MEMORABLE EVENTS! - All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
	<!--/ End Footer Area -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Item Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Item Image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

<script>
     document.addEventListener('DOMContentLoaded', function() {
        function scrollToSection(buttonId, sectionSelector) {
            var button = document.getElementById(buttonId);
            var section = document.querySelector(sectionSelector);
            button.addEventListener('click', function(event) {
                event.preventDefault();
                section.scrollIntoView({ behavior: 'smooth' });
            });
        }
        scrollToSection('book-appointment-btn', '.appointment');
        scrollToSection('book-appointment1-btn', '.appointment');
        scrollToSection('book-appointment2-btn', '.appointment');
        scrollToSection('book-appointment3-btn', '.appointment');
    });
</script>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Get all elements with the 'item' class
            const items = document.querySelectorAll('.item');

            // Loop through each item and add click event listener
            items.forEach(item => {
                item.addEventListener('click', () => {
                    const price = item.dataset.price;
                    const itemName = item.textContent.trim();
                    const imageURL = item.dataset.image;

                    // Create and display the image
                    const img = document.createElement('img');
                    img.src = imageURL;
                    img.alt = itemName;
                    document.getElementById('output').innerHTML = '';
                    document.getElementById('output').appendChild(img);
                });
            });
        });
</script>
<script>
    // Get all elements with the 'item' class
    const items = document.querySelectorAll('.item');

    // Loop through each item and add click event listener
    items.forEach(item => {
        item.addEventListener('click', () => {
            const price = item.dataset.price;
            const itemName = item.textContent.trim();
            const imageURL = item.dataset.image;

            // Set image source and title in modal
            document.getElementById('modalImage').src = imageURL;
            document.getElementById('myModalLabel').textContent = itemName + ' - $' + price;
        });
    });
</script>
</body>
</html>
