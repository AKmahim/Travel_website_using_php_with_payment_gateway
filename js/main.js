// ============= show menu ===========

const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
	  navClose = document.getElementById('nav-close')



// ======= Menu Show =====
// Validate if constant exists

if(navToggle){
	navToggle.addEventListener('click', () =>{
		navMenu.classList.add('show-menu')
	})
} 


// ======= Menu Hidden ==========

if (navClose) {
	navClose.addEventListener('click',()=>{
		navMenu.classList.remove('show-menu')
	})
}

// ============ remove menu mobile =========

const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
	// body...
	const navMenu = document.getElementById('nav-menu')
	navMenu.classList.remove('show-menu')
}

navLink.forEach(n => n.addEventListener('click',linkAction))


/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


// =========== swiper slide =========


// ================ video =================o-d

const videoFile = document.getElementById('video-file'),
	  videoButton = document.getElementById('video-button'),
	  videoIcon = document.getElementById('video-icon')


function playPause(){
	if (videoFile.paused) {
		//play video
		videoFile.play()

		//we change the icon
		videoIcon.classList.add('ri-pause-line')
		videoIcon.classList.remove('ri-play-line')

	}
	else{
		//pause video
		videoFile.pause()

		//we change the icon
		videoIcon.classList.remove('ri-pause-line')
		videoIcon.classList.add('ri-play-line')

	}
}

videoButton.addEventListener('click',playPause)


function finalVideo(){
	//video ends , icon change
	videoIcon.classList.remove('ri-pause-line')
	videoIcon.classList.add('ri-play-line')

}
videoFile.addEventListener('ended',finalVideo)


// =========== scroll up ==========

function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)



/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})



// ============ scroll reveal animation =============

// const sr = ScrollReveal({
//     distance: '60px',
//     duration: 2800,
//     // reset: true,
// })


// sr.reveal(`.home__data, .home__social-link, .home__info,
//            .discover__container,
//            .experience__data, .experience__overlay,
//            .place__card,
//            .sponsor__content,
//            .footer__data, .footer__rights`,{
//     origin: 'top',
//     interval: 100,
// })

// sr.reveal(`.about__data, 
//            .video__description,
//            .subscribe__description`,{
//     origin: 'left',
// })

// sr.reveal(`.about__img-overlay, 
//            .video__content,
//            .subscribe__form`,{
//     origin: 'right',
//     interval: 100,
// })



// var stripe = Stripe("pk_test_rEssviHPC1qPIFuogZEAnT8A00I5yhQiIj");
// var checkoutButton = document.getElementById('checkout-button');

// checkoutButton.addEventListener("click", function(){
// 	fetch("http://localhost/payment/create-checkout-session.php",{
// 		method: "POST",
// 	})
// 		.then(function(respose){
// 			return respose.json();
// 		})
// 		.then(function(session){
// 			return stripe.redirectToCheckout({ sessionId: })
// 		})
// })

// <?php

// // require 'vendor/autoload.php';
// include './stripe-php/init.php';


// \Stripe\Stripe::setApiKey('sk_test_51JMcAtHfLyCb6kqbtFC8eDzSTiwRYICjwN4tZnitLYBqTcmVmTfhahNnTD4tpcHBJPpcsiA7uJTkm8cfl2pCaCCi00SteBLMvV');

// header('Content-Type: application/json');

// $YOUR_DOMAIN = 'http://localhost/payment/';

// $checkout_session = \Stripe\Checkout\Session::create([
//   'payment_method_types' => [
//     'card',
//   ],
//   'line_items' => [[
//     # TODO: replace this with the `price` of the product you want to sell
//     'price' => '{{PRICE_ID}}',
//     'quantity' => 1,
//   ]],
//   'mode' => 'payment',
//   'success_url' => $YOUR_DOMAIN . '/success.html',
//   'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
// ]);

// header("HTTP/1.1 303 See Other");
// header("Location: " . $checkout_session->url);