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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .news-head img {
                width: 150%;
                height: 400px; /* Adjust the height as needed */
                object-fit: cover;
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
                                            <li><a href="{{ url('/') }}">Home</a></li>
											<li><a href="{{ route('photobooth') }}">Photo Booth</a></li>
											<li><a href="{{ route('rentals') }}">Rentals</a></li>
											<li class="active"><a href="#">Cakes</a></li>
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

{{-- blog1 --}}
<section class="blog section" id="blog">
    <div class="container">
        <div class="section-title">
            <h2>CAKES & DESSERTS</h2>
            <i class="icofont-layered-cake" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
            <p>50% non refundable deposit required to book your date. All payments must be paid 5 days before event.
                Will accept all payment type. Zelle, Cashapp, Venmo, PayPal & cash.</p>
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
                                <a class="btn booknow2" href="#" id="book-now-btn">Book Now</a>
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
                        <img src="img/cakes/cake7.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div>
                                <a href="#" class="btn booknow2" id="book-now1-btn">Book Now</a>
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
                        <img src="img/cakes/cake5.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="">
                                <a class="btn booknow2" href="#" id="book-now2-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

        </div>
    </div>
</section>
{{-- blog2 --}}
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/cakes/cake2.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now3-btn">Book Now</a>
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
                        <img src="img/cakes/cake3.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now4-btn">Book Now</a>
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
                        <img src="img/cakes/cake4.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="">
                                <a class="btn booknow2" href="#" id="book-now5-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

        </div>
    </div>
</section>
{{-- blog3 --}}
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/cakes/cake6.jpeg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now6-btn">Book Now</a>
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
                                <a class="btn booknow2" href="#" id="book-now7-btn">Book Now</a>
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
                                <a class="btn booknow2" href="#" id="book-now8-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
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
							<h2>CAKES & DESSERTS</h2>
							<i class="icofont-layered-cake" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
							<p>50% non refundable deposit required to book your date. All payments must be paid 5 days before event.
                                Will accept all payment type. Zelle, Cashapp, Venmo, PayPal & cash.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<div class="table-head">
								<div class="icon">
									<i class="icofont-cup-cake"></i>
								</div>
								<h4 class="title">Desserts </h4>
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Cupcakes</li>
								<li><i class="icofont icofont-ui-check"></i>Pretzels</li>
								<li><i class="icofont icofont-ui-check"></i>Rice Krispies</li>
								<li><i class="icofont icofont-ui-check"></i>Oreos</li>
								<li><i class="icofont icofont-ui-check"></i>Cakepops</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#" id="book-now9-btn">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<div class="table-head">
								<div class="icon">
									<i class="icofont-cup-cake"></i>
								</div>
								<h4 class="title">Desserts</h4>
							</div>
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Cakecycles</li>
								<li><i class="icofont icofont-ui-check"></i>Strawberries</li>
								<li><i class="icofont icofont-ui-check"></i>Gourmet apples</li>
								<li><i class="icofont icofont-ui-check"></i>Strawberry tower</li>
								<li><i class="icofont icofont-ui-check"></i>Dessert tower</li>

							</ul>
							<div class="table-bottom">
								<a class="btn" href="#" id="book-now10-btn">Book Now</a>
							</div>
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
                            <i class="icofont-layered-cake" aria-hidden="true" style="color: pink; font-size: 35px;"></i>
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
                            <img src="img/cakes/cakenobg.png" alt="#">
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
                                    <li><i class="icofont-facebook"></i> <a href="https://www.instagram.com/js_memorable_events/">js_memorable_events</a></li>
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
           scrollToSection('book-now-btn', '.appointment');
           scrollToSection('book-now1-btn', '.appointment');
           scrollToSection('book-now2-btn', '.appointment');
           scrollToSection('book-now3-btn', '.appointment');
           scrollToSection('book-now4-btn', '.appointment');
           scrollToSection('book-now5-btn', '.appointment');
           scrollToSection('book-now6-btn', '.appointment');
           scrollToSection('book-now7-btn', '.appointment');
           scrollToSection('book-now8-btn', '.appointment');
           scrollToSection('book-now9-btn', '.appointment');
           scrollToSection('book-now10-btn', '.appointment');
       });
   </script>
</body>
</html>
