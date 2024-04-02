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
                height: 400px; /* Set the fixed height for the slideshow */
            }
            .mySlides {
                display: none;
                width: 100%;
                height: 400px; /* Set the fixed height for the slideshow */
            }
            .mySlides2 {
                display: none;
                width: 100%;
                height: 400px; /* Set the fixed height for the slideshow */
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
											<li class="active"><a href="#">Photo Booth</a></li>
											<li><a href="{{ route('rentals') }}">Rentals</a></li>
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
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth4.jpeg" alt="Slide 1" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth2.jpeg" alt="Slide 2" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth1.jpeg" alt="Slide 3" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth3.jpeg" alt="Slide 4" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth6.jpeg" alt="Slide 5" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/photobooth/photobooth7.jpeg" alt="Slide 6" />
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
                            <p class="text-black-50 mb-0">
                                <span style="color: green;">$350</span> 2 hrs minimum <br>
                                <span style="color: green;">$100</span> every additional hour <br>
                                Photo album keepsake <span style="color: green;">$100</span>
                            </p>
                            <h4>Photo booth Packages</h4>
                            <p class="text-black-50 mb-0">
                                Basic: 2 hrs <span style="color: green;">$350</span> <br>
                                Vinyl backdrop <br>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6 slideshow-container">
                        <div class="mySlides">
                            <img class="img-fluid" src="img/photobooth/intermediate1.jpeg" alt="Slide 1">
                        </div>
                        <div class="mySlides">
                            <img class="img-fluid" src="img/photobooth/intermediate2.jpeg" alt="Slide 2">
                        </div>
                        <div class="mySlides">
                            <img class="img-fluid" src="img/photobooth/intermediate3.jpeg" alt="Slide 3">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class=" text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 >Intermediate:</h4>
                                    <p style="font-size: 20px; color:#2d2e40;">
                                        4 hrs  <span style="color: green;">$750</span> <br>
                                        Memory book <span style="color: green;">($100 value)</span> <br>
                                        Shimmer or Flower wall
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6 slideshow-container">
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/photobooth/upscale5.jpeg" alt="Slide 1">
                        </div>
                        <!-- Add more slides here -->
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/photobooth/upscale1.jpeg" alt="Slide 2">
                        </div>

                        <div class="mySlides2">
                            <img class="img-fluid" src="img/photobooth/upscale2.jpeg" alt="Slide 3">
                        </div>
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/photobooth/upscale3.jpeg" alt="Slide 4">
                        </div>
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/photobooth/upscale4.jpeg" alt="Slide 5">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-black">Upscale:</h4>
                                    <p style="font-size: 20px; color:#2d2e40;">
                                        5 hrs  <span style="color: green;">$1200</span> <br>
                                        Memory book <span style="color: green;">($100 value)</span> <br>
                                        Shimmer or Flower wall <br>
                                        Balloon garland w/ customized props

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                            <img src="img/photobooth/cameranobg.png" alt="#">
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
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
</script>
<script>
    var slideIndex = 0;
    showSlides2();

    function showSlides2() {
        var i;
        var slides = document.getElementsByClassName("mySlides2");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides2, 3000);
    }
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
