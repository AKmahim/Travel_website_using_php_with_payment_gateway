<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/images/favicon.png" type="image/png">

	<!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- ============== swipper css =========== -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" /> -->
<!-- `	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->


	<!-- =================== CSS============== -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	



	<title>Traveling guide</title>
</head>
<body>
	<header class="header" id="header">
		<nav class="nav container">
			<a href="#" class="nav__logo">Travel</a>


			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item">
						<a href="#home" class="nav__link">Home</a>
					</li>
					<li class="nav__item">
						<a href="#about" class="nav__link">About</a>
					</li>
					<li class="nav__item">
						<a href="#discover" class="nav__link">Discover</a>
					</li>
					<li class="nav__item">
						<a href="#place" class="nav__link">Places</a>
					</li>
					<li class="nav__item">
						<a href="sign_up.php" class="nav__link">Sign Up</a>
					</li>
					<li class="nav__item">
						<a href="admin-check.php" class="nav__link">Admin</a>
					</li>
				</ul>

				<div class="nav__dark">
					<!-- Theme change button -->

					<span class="change-theme-name">Dark mode</span>
					<i class="ri-moon-line change-theme" id="theme-button"></i>
				</div>

				<i class="ri-close-line nav__close" id="nav-close"></i>
			</div>
			<div class="nav__toggle" id="nav-toggle">
				<i class="ri-function-line"></i>
			</div>
		</nav>
	</header>

	<main class="main">
		<!-- ============== Home =========== -->
		<section class="home" id="home">
			<img src="./images/home1.jpg" class="home__img"></img>

			<div class="home__container container grid">
				<div class="home__data">
					<span class="home__data-subtitle">
						Discover your place
					</span>
					<h1 class="home__data-title">
						Explore The <br> Best <b>Beautiful <br> Beaches <br></b>
					</h1>
					<a class="button" href="#">Explore</a>
				</div>

				<div class="home__social">
					<a class="home__social-link" href="#" target="_blank">
						<i class="ri-facebook-box-fill"></i>
					</a>
					<a class="home__social-link" href="#" target="_blank">
						<i class="ri-instagram-fill"></i>
					</a>
					<a class="home__social-link" href="#" target="_blank">
						<i class="ri-twitter-fill"></i>
					</a>

				</div>
				<div class="home__info">
					<div>
						<span class="home__info-title">5 best places to visit</span>
						<a class="button button--flex button--link home__info-button" href="#">
							More <i class="ri-arrow-right-fill"></i>
						</a>
					</div>
					<div class="home__info-overlay">
						<img class="home__info-img" src="./images/home2.jpg"></img>
					</div>
				</div>
			</div>
		</section>

		<!-- ================= About ================ -->
		<section class="about section" id="about">
			<div class="about__container container grid">
				<div class="about__data">
					<h2 class="section__title about__title">
					More Information <br> About The Best Beaches
					</h2>
					<p class="about__description">
					   You can find the most beautiful and pleasant places at the best prices with special discounts, you choose the place we will guide you all the way to wait, get your place now.
				    </p>
					<a href="#" class="button">Reserve a place</a>
				</div>

				<div class="about__img">
					<div class="about__img-overlay">
						<img class="about__img-one" src="./images/about1.jpg" ></img>
					</div>
					<div class="about__img-overlay">
						<img class="about__img-two" src="./images/about2.jpg" ></img>
					</div>
				</div>
			</div>

		</section>

		<!-- ================= Discover ================ -->
		<section class="discover section" id="discover">
			<h2 class="section__title video__title">
				Discover the most <br> attractive places
			</h2>

			<div class="discover__container container swiper-container">
				<div class="swiper-wrapper">
					<!-- ==============discover 1========== -->
					<div class="discover__card swiper-slide">
						<img class="discover__img" src="./images/place3.jpg"></img>
						<div class="discover__data">
							<h2 class="discover__title">
								Cox-Bazar
							</h2>
							<span class="discover__description">24 tours available</span>
						</div>
					</div>

					<!-- ==============discover 2========== -->
					<div class="discover__card swiper-slide">
						<img class="discover__img" src="./images/place2.jpg"></img>
						<div class="discover__data">
							<h2 class="discover__title">
								Sajek Valley
							</h2>
							<span class="discover__description">15 tours available</span>
						</div>
					</div>

					<!-- ==============discover 3========== -->
					<div class="discover__card swiper-slide">
						<img class="discover__img" src="./images/place3.jpg"></img>
						<div class="discover__data">
							<h2 class="discover__title">
								Kuya Kata
							</h2>
							<span class="discover__description">18 tours available</span>
						</div>
					</div>

					<!-- ==============discover 4========== -->
					<div class="discover__card swiper-slide">
						<img class="discover__img" src="./images/place4.jpg"></img>
						<div class="discover__data">
							<h2 class="discover__title">
								Sundarban
							</h2>
							<span class="discover__description">32 tours available</span>
						</div>
					</div>
				</div>
			</div>

		</section>


		<!-- ================ Experince ======== -->

		<section class="experience section">
			<h2 class="section__title">
				With Our Experience <br> We Will Serve You
			</h2>

			<div class="experience__container container grid">
				<div class="experience__content grid">
					<div class="experience__data">
						<h2 class="experience__number">
						20
						</h2>
						<span class="experience__description">
						Year<br>
						Experience
						</span>
					</div>

					<div class="experience__data">
						<h2 class="experience__number">
						75
						</h2>
						<span class="experience__description">
						Complete<br>
						tours
						</span>
					</div>

					<div class="experience__data">
						<h2 class="experience__number">
						650+
						</h2>
						<span class="experience__description">
						Tourist<br>
						Destination
						</span>
					</div>
				</div>

				<div class="experience__img grid">
					<div class="experience__overlay">
						<img class="experience__img-one" src="./images/experience1.jpg"></img>
					</div>

					<div class="experience__overlay">
						<img class="experience__img-two" src="./images/experience2.jpg"></img>
					</div>
				</div>
			</div>
		</section>


		<!-- ================= video section ============== -->

		<section class="video section">
			<h2 class="section__title video__title">
				Video Tour
			</h2>

			<div class="video__container container">
				<p class="video__description">
					Find out more with our video of the most beautiful and pleasant places for you and your family.
				</p>
				<div class="video__content">
					<video id="video-file">
						<source src="./video/video.mp4" type="video/mp4"></source>
					</video>

					<button class="button button--flex video__button" id="video-button">
						<i class="ri-play-line video__button-icon" id="video-icon"></i>
					</button>
				</div>
			</div>
		</section>

		<!-- ================= Places ================ -->
		<section class="place section" id="place">
			<h2 class="section__title">
				Choose Your Place
			</h2>


			<div class="place__container container grid">
				
				<!-- =============== places card 1 ================ -->
				<div class="place__card">
					<img class="place__img" src="./images/place1.jpg"></img>

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">
								4,8
							</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Cox-Bazar</h3>
							<span class="place__subtitle">Chattagram</span>
							<span class="place__price"><?php $bill= 10000; echo $bill ;?> BDT</span>
						</div>
					</div>


					<a href="payment.php?price=<?php echo $bill ?>" class="button button--flex place__button">
						<!-- <i class="ri-arrow-right-line"></i> -->
						<span>Book Now</span>
					</a >
				</div>

				<!-- =============== places card 2 ================ -->
				<div class="place__card">
					<img class="place__img" src="./images/place2.jpg"></img>

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">
								5,0
							</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Sajek Valley</h3>
							<span class="place__subtitle">Khagrachari</span>
							<span class="place__price"><?php $bill= 6000; echo $bill ;?> BDT</span>

						</div>
					</div>


					<a href="payment.php?price=<?php echo $bill ?>" class="button button--flex place__button">
						<!-- <i class="ri-arrow-right-line"></i> -->
						<span>Book Now</span>

					</a>
				</div>

				<!-- =============== places card 3 ================ -->
				<div class="place__card">
					<img class="place__img" src="./images/place3.jpg"></img>

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">
								4,9
							</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Kuta Kata</h3>
							<span class="place__subtitle">Patuyakhali</span>
							<span class="place__price"><?php $bill= 10000; echo $bill ;?> BDT</span>
						</div>
					</div>


						<a href="payment.php?price=<?php echo $bill ?>" class="button button--flex place__button">
						<!-- <i class="ri-arrow-right-line"></i> -->
						<span>Book Now</span>

					</a>
				</div>

				<!-- =============== places card 4 ================ -->
				<div class="place__card">
					<img class="place__img" src="./images/place4.jpg"></img>

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">
								4,8
							</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Sundarban</h3>
							<span class="place__subtitle">Khulna</span>
							<span class="place__price"><?php $bill= 15000; echo $bill ;?> BDT</span>
						</div>
					</div>


					<a href="payment.php?price=<?php echo $bill ?>" class="button button--flex place__button">
						<!-- <i class="ri-arrow-right-line"></i> -->
						<span>Book Now</span>

					</a>
				</div>

				<!-- =============== places card 5 ================ -->
				<div class="place__card">
					<img class="place__img" src="./images/place5.jpg"></img>

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">
								4,8
							</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Shylet</h3>
							<span class="place__subtitle">Shylet</span>
							<span class="place__price"><?php $bill= 7000; echo $bill ;?> BDT</span>
						</div>
					</div>


					<a href="payment.php?price=<?php echo $bill ?>" class="button button--flex place__button">
						<!-- <i class="ri-arrow-right-line"></i> -->
						<span>Book Now</span>

					</a>
				</div>

			</div>
		</section>

		<!-- ============= subscibe ============ -->

		<section class="subscribe section">
			<div class="subscribe__bg">
				<div class="subscribe__container container">
					<h2 class="section__title subscribe__title">
						Subscribe Our <br> Newsletter
					</h2>
					<p class="subscribe__description">
						Subscribe to our newsletter and get a special 30% discount.
					</p>


					<form class="subscribe__form" action="">
						<input type="text" placeholder="Enter email" class="subscribe__input">

						<button class="button">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</section>



		<!-- ============= Footer ========== -->
		<section class="footer section">
			<div class="footer__container container grid">
				<div class="footer__content grid">

					<div class="footer__data">
						<h3 class="footer__title">Travel</h3>
						<p class="footer__description">
							Travel you choose the<br>
							destination, we offer you the<br>
							experience.
						</p>


						<div>
							<a class="footer__social" href="#" target="_blank">
								<i class="ri-facebook-box-fill"></i>
							</a>

							<a class="footer__social" href="#" target="_blank">
								<i class="ri-instagram-fill"></i>
								
							</a>

							<a class="footer__social" href="#" target="_blank">
								<i class="ri-twitter-fill"></i>
								
							</a>

							<a class="footer__social" href="#" target="_blank">
								<i class="ri-youtube-fill"></i>
								
							</a>
						</div>
					</div>


					<div class="footer__data">
						<h3 class="footer__subtitle">About</h3>

						<ul>
							<li class="footer__item">
								<a class="footer__link" href="#">About Us</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">Features</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">News & Blog</a>
							</li>
						</ul>

					</div>

					<div class="footer__data">
						<h3 class="footer__subtitle">Company</h3>

						<ul>
							<li class="footer__item">
								<a class="footer__link" href="#">Team</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">Plan Pricing</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">Become a member</a>
							</li>
						</ul>

					</div>

					<div class="footer__data">
						<h3 class="footer__subtitle">Support</h3>

						<ul>
							<li class="footer__item">
								<a class="footer__link" href="#">FAQs</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">Support Center</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="#">Contact Us</a>
							</li>
						</ul>

					</div>
				</div>

				<div class="footer__rights">
					<div class="footer__terms">
						<a class="footer__terms-link" href="#">Terms & Agreements</a>
						<a class="footer__terms-link" href="#">Privacy Policy</a>
					</div>
				</div>
			</div>
		</section>



 

	</main>















	<!-- ============ scroll up ======= -->

	<a class="scrollup" id="scroll-up" href="#">
		<i class="ri-arrow-up-line scrollup-icon"></i>
	</a>



		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
		<!-- <script type="text/javascript" src="js/scrollreveal.min.js"></script> -->
		<script src="https://unpkg.com/scrollreveal"></script>

		<!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script> -->
		<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

	<!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".discover__container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop:true,
        spaceBetween:32,
        coverflowEffect: {
        	rotate: 0,
        }
      });
    </script>
    <script>
    	const sr = ScrollReveal({
    distance: '60px',
    duration: 2800,
    // reset: true,
})


sr.reveal(`.home__data, .home__social-link, .home__info,
           .discover__container,
           .experience__data, .experience__overlay,
           .place__card,
           .sponsor__content,
           .footer__data, .footer__rights`,{
    origin: 'top',
    interval: 100,
})

sr.reveal(`.about__data, 
           .video__description,
           .subscribe__description`,{
    origin: 'left',
})

sr.reveal(`.about__img-overlay, 
           .video__content,
           .subscribe__form`,{
    origin: 'right',
    interval: 100,
})
    </script>

</body>
</html>