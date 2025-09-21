<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GDZEEB73L2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-GDZEEB73L2');
    </script>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>@yield('title', 'TechStop - Web Development Services')</title>
	<meta name="description" content="TechStop is a web development company that helps businesses design, develop and maintain high-speed, stable and secure websites. ">
	<meta name="keywords" content="website development, web design, business websites, custom website solutions, cloud services, seo services, content writing, devops, api integrations, tech, digital solutions ">
	<meta name="author" content="TechStop">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="@yield('og_title', 'TechStop - Web Development Services')">
	<meta property="og:description" content="@yield('og_description', 'TechStop is a web development company that helps businesses design, develop and maintain high-speed, stable and secure websites.')">
	<meta property="og:image" content="@yield('og_image', url('https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/bluelogo.webp'))">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:alt" content="TechStop - Web Development Company Logo">
	<meta property="og:site_name" content="TechStop">
	<meta property="og:locale" content="en_US">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@techstop">
	<meta name="twitter:title" content="@yield('twitter_title', 'TechStop - Professional Web Services')">
	<meta name="twitter:description" content="@yield('twitter_description', 'TechStop is a web development company that helps businesses design, develop and maintain high-speed, stable and secure websites.')">
	<meta name="twitter:image" content="@yield('twitter_image', url('https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/bluelogo.webp'))">
	<meta name="twitter:image:alt" content="TechStop - Web Development Company Logo">

	<!-- Structured Data -->
	<script type="application/ld+json">
	@php
	echo json_encode([
	  "@context" => "https://schema.org",
	  "@type" => "Organization",
	  "name" => "TechStop",
	  "url" => "https://www.techstop.pro",
	  "logo" => "https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/bluelogo.webp",
	  "description" => "TechStop is a web development company that helps businesses design, develop and maintain high-speed, stable and secure websites.",
	  "contactPoint" => [
	    "@type" => "ContactPoint",
	    "contactType" => "customer service",
	    "email" => "contact@techstop.pro"
	  ]
	]);
	@endphp
	</script>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<!-- Favicons
	================================================== -->
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/favicon.ico" sizes="any">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/favicon-16x16.png" type="image/png" sizes="16x16">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/favicon-32x32.png" type="image/png" sizes="32x32">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/favicon-96x96.png" type="image/png" sizes="96x96">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/android-chrome-192x192.png" type="image/png" sizes="192x192">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/android-chrome-512x512.png" type="image/png" sizes="512x512">
	<link rel="icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/apple-touch-icon.png">
	<link rel="manifest" href="https://d1oktf4gbw23dy.cloudfront.net/favicon/site.webmanifest">


	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/prettyPhoto.css">
	
	<!-- Flexslider -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="https://d1oktf4gbw23dy.cloudfront.net/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="" media="screen" rel="stylesheet" type="text/css">
	




	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>


	
<body>

	

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->



	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				   <button type="button" class="navbar-toggle">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand navbar-bg">
					    <a wire:navigate href="/">
					    	<img class="img-responsive" src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/whitelogo.webp" alt="logo" loading="lazy">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a wire:navigate href="{{ route('home') }}">Home</a></li>
						<li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a wire:navigate href="{{ route('services') }}">Services</a></li>
						<li class="dropdown {{ request()->routeIs('about') || request()->routeIs('career') || request()->routeIs('faqs') ? 'active' : '' }}">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Company <i class="fa fa-angle-down" style="margin-left:4px;"></i>
							</a>
							<div class="dropdown-menu">
								<ul>
									<li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a wire:navigate href="{{ route('about') }}">About </a></li>
									<li class="{{ request()->routeIs('career') ? 'active' : '' }}"><a wire:navigate href="{{ route('career') }}">Career</a></li>
									<li class="{{ request()->routeIs('faqs') ? 'active' : '' }}"><a wire:navigate href="{{ route('faqs') }}">Faq</a></li>
								</ul>
							</div>
						</li>
						<li class="{{ request()->routeIs('blog') || request()->routeIs('blog.show') ? 'active' : '' }}"><a wire:navigate href="{{ route('blog') }}">Blog</a></li>
						<li class="{{ request()->routeIs('pricing') ? 'active' : '' }}"><a wire:navigate href="{{ route('pricing') }}">Pricing</a></li>
						<li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a wire:navigate href="{{ route('contact') }}">Contact</a></li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->


	<div id="spa-content-fade" class="spa-fadein">
		@yield('content')
	</div>

	<!-- Footer start -->
	<footer id="footer" class="footer">
   <div class="container">
       <div class="row">
           <div class="col-md-3 col-sm-12 footer-widget">
               <img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-logo/wandblogo.webp" alt="TechStop Logo" style="max-width:160px; margin-bottom:10px;" loading="lazy">
               <h3 class="widget-title"></h3>
               <p>The mission is to empower businesses,
				 helping them build trust with people and gain a significant competitive advantage in their industry.</p>
           </div>
           <div class="col-md-3 col-sm-12 footer-widget">
               <h3 class="widget-title">Useful Links</h3>
               <ul>
                   <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
                   <li><a wire:navigate href="{{ route('services') }}">Services</a></li>
                   <li><a wire:navigate href="{{ route('about') }}">About</a></li>
                   <li><a wire:navigate href="{{ route('blog') }}">Blog</a></li>
                   <li><a wire:navigate href="{{ route('career') }}">Career</a></li>
                   <li><a wire:navigate href="{{ route('pricing') }}">Pricing</a></li>
                   <li><a wire:navigate href="{{ route('faqs') }}">FAQs</a></li>
                   <li><a wire:navigate href="{{ route('contact') }}">Contact</a></li>
                   
               </ul>
           </div>
           <div class="col-md-3 col-sm-12 footer-widget">
               <h3 class="widget-title">Our Services</h3>
               <ul>
				 <li><a wire:navigate href="/services">Web Development</a></li>
                   <li><a wire:navigate href="/services">Web Design</a></li>
				   <li><a wire:navigate href="/services">Business Websites</a></li>
				   <li><a wire:navigate href="/services">Cloud Services</a></li>
				   <li><a wire:navigate href="/services">SEO Services</a></li>
				   <li><a wire:navigate href="/services">Content Writing</a></li>
				   <li><a wire:navigate href="/services">DevOps</a></li>
				   <li><a wire:navigate href="/services">Api Integrations</a></li>
               </ul>
           </div>
           <div class="col-md-3 col-sm-12 footer-widget">
               <h3 class="widget-title">Get In Touch</h3>
               <ul>
                   <li><i class="fa fa-envelope"></i>  <a href="mailto:contact@techstop.pro">contact@techstop.pro</a></li>
				   <li><i class="fa fa-map-marker"></i> Remote First</li>
				   <li><i class="fa fa-globe"></i> www.techstop.pro</li>
               </ul>
           </div>
       </div><!-- Row end -->
   </div><!-- Container end -->
</footer><!-- Footer end -->
	

	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; TechStop. All Rights Reserved
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Copyright end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/jquery.flexslider.js"></script>
	<!-- CD Hero slider -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/isotope.js"></script>
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/smoothscroll.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/waypoints.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="https://d1oktf4gbw23dy.cloudfront.net/js/custom.js"></script>
	</div><!-- Body inner end -->
	@livewireScripts
	<script>
	// Gentle fade for SPA content area
	document.addEventListener('livewire:navigate', function() {
		var el = document.getElementById('spa-content-fade');
		if (el) {
			el.classList.remove('spa-fadein');
			el.classList.add('spa-fadeout');
		}
	});
	document.addEventListener('livewire:navigated', function() {
		var el = document.getElementById('spa-content-fade');
		if (el) {
			el.classList.remove('spa-fadeout');
			el.classList.add('spa-fadein');
		}
		// Re-initialize Bootstrap dropdowns after SPA navigation
		if (window.jQuery && typeof jQuery.fn.dropdown === 'function') {
			jQuery('.dropdown-toggle').dropdown();
		}
		// Ensure hamburger toggle works after SPA navigation
		if (window.jQuery && typeof jQuery.fn.collapse === 'function') {
			jQuery('.navbar-toggle').off('click').on('click', function() {
				jQuery('.navbar-collapse').collapse('toggle');
			});
		}
		// Apply stored style after SPA navigation
		const storedStyle = localStorage.getItem('selectedStyle');
		if (storedStyle) {
			document.getElementById('style-switch').href = 'https://d1oktf4gbw23dy.cloudfront.net/presets/' + storedStyle + '.css';
		}
		// Re-initialize style switcher buttons
		initStyleSwitcher();
	});
	
	// Scroll to success message after contact form submission
	document.addEventListener('livewire:init', function() {
		Livewire.on('contactSubmitted', function() {
			setTimeout(function() {
				const successElement = document.getElementById('success-message');
				if (successElement) {
					successElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
				}
			}, 100);
		});
	});
	
	// Style switcher function
	function initStyleSwitcher() {
		const presetButtons = document.querySelectorAll('[id^="preset"]');
		presetButtons.forEach(button => {
			button.removeEventListener('click', handleStyleClick);
			button.addEventListener('click', handleStyleClick);
		});
	}
	
	function handleStyleClick() {
		const presetId = this.id;
		localStorage.setItem('selectedStyle', presetId);
		setTimeout(() => location.reload(), 100);
	}
	
	// Handle style switcher with reload
	document.addEventListener('DOMContentLoaded', function() {
		// Apply stored style on page load, or default to preset5 for new users
		const storedStyle = localStorage.getItem('selectedStyle');
		if (storedStyle) {
			document.getElementById('style-switch').href = 'https://d1oktf4gbw23dy.cloudfront.net/presets/' + storedStyle + '.css';
		} else {
			// Default to preset5 for new users
			document.getElementById('style-switch').href = 'https://d1oktf4gbw23dy.cloudfront.net/presets/preset5.css';
		}
		initStyleSwitcher();

		// Mobile hamburger menu auto-close functionality
		function closeMobileMenu() {
			if (window.innerWidth < 768 && jQuery('.navbar-collapse').hasClass('in')) {
				jQuery('.navbar-collapse').collapse('hide');
			}
		}

		// Close menu on scroll for mobile
		window.addEventListener('scroll', function() {
			closeMobileMenu();
		});

		// Close menu on click outside for mobile
		document.addEventListener('click', function(e) {
			if (window.innerWidth < 768) {
				if (!e.target.closest('.navbar-collapse') && !e.target.closest('.navbar-toggle')) {
					closeMobileMenu();
				}
			}
		});
	});
	</script>
<style>
@keyframes fadeInUp {
	from {
		opacity: 0;
		transform: translateY(30px);
	}
	to {
		opacity: 1;
		transform: translateY(0);
	}
}
.submit-btn:disabled {
	opacity: 0.7;
	cursor: not-allowed;
}
.contact-form {
	animation: fadeInUp 0.6s ease-out;
}
.btn.btn-primary.solid:hover {
	color: #fff !important;
	background-color: rgba(0,0,0,0.1) !important;
}
.btn.btn-primary.solid.submit-btn:hover {
	color: #fff !important;
}
@keyframes pulseCogs {
	0%, 100% {
		transform: scale(1);
	}
	50% {
		transform: scale(1.1);
	}
}
.pulse-cogs {
	animation: pulseCogs 2s ease-in-out infinite;
}

/* Mobile hamburger menu height */
@media (max-width: 767px) {
	.navbar-collapse.in {
		max-height: 400px;
		overflow-y: auto;
	}
}

</style>
</body>
</html>