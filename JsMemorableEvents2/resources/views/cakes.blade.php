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
    </head>
<body>
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
											<li><a href="{{ route('rentals') }}">Rentals</a></li>
											<li class="active"><a href="#">Cakes</a></li>
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
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="img/dslr.jpg"
                        alt="..." /></div>
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
                <div class="col-lg-6"><img class="img-fluid" src="img/photobooth1.jpg" alt="..." />
                </div>
                <div class="col-lg-6" style="background-color: #e8cf6b;">
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
                <div class="col-lg-6"><img class="img-fluid" src="img/project2.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first" style="background-color: #e8cf6b;">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
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



        <!-- Contact Section -->
    <section class="contact-section " id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center ">
                <!-- Added justify-content-center to center the columns -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope" style="color: #fab9c8; margin-bottom: 2px;"></i>
                            <h4 class="text-uppercase m-0 colmnHead">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black">sample@email.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt" style="color: #fab9c8; margin-bottom: 2px;"></i>
                            <h4 class="text-uppercase m-0 colmnHead">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black">(+1)-1234-1234</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="https://www.instagram.com/js_memorable_events/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>



    <!-- Footer-->
    <footer class="footer small text-center text-black-10">
        <div class="container px-4 px-lg-5">Sample address Sample address Sample address Sample address Sample address</div>
        <div class="container px-4 px-lg-5">&copy; J'S MEMORABLE EVENTS</div>
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
</body>
</html>
