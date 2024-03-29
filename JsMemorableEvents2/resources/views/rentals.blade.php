<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>J'S Memorable Events</title>
        <!-- Core theme CSS -->
        <link href="/styles2.css" rel="stylesheet" />
        <link href="/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

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
                height: 500px; /* Set the fixed height for the slideshow */
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
											<li><a href="{{ route('photobooth') }}">Photo Booth</a></li>
											<li class="active"><a href="#">Rentals</a></li>
											<li><a href="{{ route('cakes') }}">Cakes</a></li>
											<li><a href="{{ url('/') }}">Home</a></li>
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
                            Pink water slide bouncer <span style="color: green;">$300</span> <br>
                            Blue water slide bouncer <span style="color: green;">$300</span> <br>
                            Wedding castles <span style="color: green;">$400</span> <br>
                            Mechanical bull <span style="color: green;">$350</span> <br>
                            Resin chairs <span style="color: green;">$4</span> each <br>
                            Round tables <span style="color: green;">$10</span> each <br>
                            Rectangle tables <span style="color: green;">$8</span> each <br>
                            Bar tables <span style="color: green;">$7</span> each <br>
                            Linens <span style="color: green;">$7</span> each minimum of 10 <br>
                            Cake stands <span style="color: green;">$75</span> set <br>
                            Walls <span style="color: green;">$75</span>  -
                            Carriage <span style="color: green;">$150</span> <br>
                            Flower wall <span style="color: green;">$200</span> -
                            Cylinders <span style="color: green;">$75</span> <br>
                            Kids table <span style="color: green;">$75</span> -
                            Boho table <span style="color: green;">$75</span> <br>
                            Flower arrangement <span style="color: green;">$75</span> -
                            Sequence wall <span style="color: green;">$150</span> <br>
                            Happy birthday light <span style="color: green;">$50</span> -
                            Round stand <span style="color: green;">$75</span> <br>
                            Balloon garland start at <span style="color: green;">$275</span> <br>
                            Backdrop & stand <span style="color: green;">$75</span> <br>
                            Curtain <span style="color: green;">$50</span> -
                            Animated Props <span style="color: green;">$40</span> <br>
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
</footer>


<!-- jquery Min JS -->
<script src="js/jquery.min.js"></script>

<!-- jquery Migrate JS -->
<script src="js/jquery-migrate-3.0.0.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

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
</body>
</html>
