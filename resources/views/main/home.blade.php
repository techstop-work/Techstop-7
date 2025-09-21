@extends('layouts.main')

@section('title', 'TechStop - Web Development Services')

@section('og_title', 'TechStop - Web Development Services')
@section('og_description', 'Empowering startups and businesses with reliable, modern website solutions. Expert web development, cloud services, and digital transformation.')
@section('og_image', url('/images/logo2.webp'))

@section('twitter_title', 'TechStop - Web Development Services')
@section('twitter_description', 'Empowering startups and businesses with reliable, modern website solutions. Expert web development, cloud services, and digital transformation.')
@section('twitter_image', url('/images/logo2.webp'))

@section('content')
<section id="home" class="no-padding">	

    	<div id="main-slide" class="cd-hero">
			<ul class="cd-hero-slider">
				<li>
					<div class="overlay2">
						<img class="" src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/hero1.webp" alt="slider" loading="lazy">
					</div>
					<div class="cd-full-width ">
						<h2>Want To Make A Difference!</h2>
						<p>Web Applications with intuitive design and seamless functionalities.</p>
						<a href="/contact" class="btn btn-primary white cd-btn" wire:navigate>Start Now</a>
						<a href="/about" class="btn btn-primary solid cd-btn" wire:navigate>Learn More</a>
						
					</div> <!-- .cd-full-width -->

				
				</li>
				<li class="selected">
					<div class="overlay2">
						<img class="" src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/hero2.webp" alt="slider" loading="lazy">
					</div>
					<div class="cd-full-width">
						<h2>How Big Can You Dream?</h2>
						<h3>Join in creating impactful digital solutions.</h3>
						
						<a href="/services" class="cd-btn btn secondary btn-primary solid" wire:navigate>Take a Tour</a>
					</div> <!-- .cd-full-width -->
				</li>

				
				<li>
					<div class="overlay2">
						<img class="" src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/hero3.webp" alt="slider" loading="lazy">
					</div>

					<div class="cd-full-width">
						<h2>Turning Ideas into Reality</h2>
						<p>Web development and brand strategy solutions that resonate with your target audience.</p>
						<a href="/contact" class="cd-btn btn btn-primary white" wire:navigate>Start</a>
						<a href="/about" class="cd-btn btn secondary btn-primary solid" wire:navigate>Learn More</a>
					</div> <!-- .cd-full-width -->
				</li>
			</ul> <!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul>
					<li class="selected"><a href="#0" ><i class="fa fa-bicycle"></i> Invent</a></li>
					<li><a href="#0" ><i class="fa fa-hotel"></i> Dream</a></li>
					<li><a href="#0" ><i class="fa fa-android"></i> Tech</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-slider-nav -->

		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->


    <!-- Service box start -->
	<section id="service" class="service angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-cogs pulse-cogs"></i></span>
					<h2 class="title">Web Services <span class="title-desc">Architecting Digital Transformation</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Web Design</h3>
							<p>Crafting immersive digital experiences. From responsive web designs to powerful apps, the solutions are built for engagement and performance.</p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".2s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-briefcase"></i></span>
							<h3>Business Websites</h3>
							<p>Helping businesses seeking to streamline their operations and optimize performance.</p>
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".3s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-cloud"></i></span>
							<h3>Cloud Services</h3>
							<p>Empowering businesses with scalable and secure cloud solutions tailored to their needs.</p>
						</div>
					</div><!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
							<h3>Design for Startups</h3>
							<p>Integrating solutions that transform workflows and unlock new opportunities for growth and innovation.</p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Service box end -->
   
	

	<!-- Counter Strat -->
	<section class="ts_counter no-padding">
		<div class="container-fluid">
			<div class="row facts-wrapper wow fadeInLeft text-center">
				<div class="facts one col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-check"></i></span>
					<div class="facts-num">
						<span class="counter">100</span>
					</div>
					<h3>Content delivery</h3> 
				</div>

				<div class="facts two col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-codepen"></i></span>
					<div class="facts-num">
						<span class="counter">99.99</span>
					</div>
					<h3>Uptime SLA</h3> 
				</div>

				<div class="facts three col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-cogs"></i></span>
					<div class="facts-num">
						<span class="counter">869</span>
					</div>
					<h3>Explored Features</h3> 
				</div>

				<div class="facts four col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
					<div class="facts-num">
						<span class="counter">76</span>
					</div>
					<h3>Business Strategies</h3> 
				</div>

			</div>
		</div><!--/ Container end -->
    </section><!--/ Counter end -->
	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
					<h2 class="title classic">Company Profile</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="landing-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-icon"><i class="fa fa-info"></i></span>
					  			<div class="tab-info">
						  			<h3>TechStop</h3>
					  			</div>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-briefcase"></i></span>
					  			<div class="tab-info">
						  			<h3>Innovation</h3>
					  			</div>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-android"></i></span>
					  			<div class="tab-info">
						  			<h3>Procedures</h3>
					  			</div>
						  	</a>
						</li>
						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-pagelines"></i></span>
					  			<div class="tab-info">
						  			<h3>Modern Design</h3>
					  			</div>
						  	</a>
						</li>
						<li>
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-support"></i></span>
					  			<div class="tab-info">
						  			<h3>Dedicated Support</h3>
					  			</div>
						  	</a>
						</li>
					</ul>
					<div class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<i class="fa fa-trophy big"></i>
				            <h3>Your Partner in Digital Innovation</h3> 
				            <p>TechStop is more than just a company—it's a partner in navigating the ever-evolving digital world. The focus is on providing cutting-edge digital solutions that empower businesses to thrive. From building a strong online presence to developing custom applications, the core mission is to help businesses achieve their goals and stand out in a competitive market.</p>
				        </div>
				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				        	<i class="fa fa-briefcase big"></i>
				            <h3>Specialization: A Unified Approach</h3> 
							<p>What sets us apart is our specialization in a unified, holistic approach. 
								Instead of offering individual services, TechStop integrates them to create a cohesive and powerful digital strategy. With expertise in full-stack development, UX/UI design, and data analytics, solutions are built that are both functional and deeply insightful. This dedicated partnership ensures a client's entire digital footprint works together seamlessly, providing a distinct competitive advantage and a strong, lasting presence.</p>							 
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_c">
				            <i class="fa fa-android big"></i>
				            <h3>Crafting  Digital Solutions</h3> 
				            <p>TechStop takes a tailored approach to digital solutions. The understanding is that every business is unique, and services are tailored to meet specific needs. From strategy development to implementation and ongoing support, the commitment is to be with a client every step of the way.</p>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_d">
				            <i class="fa fa-pagelines big"></i>
				            <h3>Clean and Modern Design</h3> 
				            <p>A focus is on the power of clean and modern design. The design philosophy centers on simplicity, usability, and aesthetics, creating visually stunning interfaces that are both beautiful and intuitive for the user.</p>
				        </div>
				        <div class="tab-pane animated fadeIn" id="tab_e">
				            <i class="fa fa-support big"></i>
				            <h3>24/7 Dedicated Support</h3> 
				            <p>The commitment to clients doesn't end with project delivery. The agency offers 24/7 dedicated support to ensure digital solutions are always running smoothly. Whether technical assistance or strategic advice is needed, the team is here to help clients</p>
				        </div>
					</div><!-- tab content -->
	    		</div><!-- Overview tab end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->
			 

		</div><!--/ 1st container end -->



		
	</section><!--/ Main container end -->
	
	<hr class="invis">
	<!-- Feature box start -->
	
	<section id="feature" class="feature">
		<div class="container">
			<div class="row">
				   <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".1s">
					<span class="feature-icon pull-left" ><i class="fa fa-heart-o"></i></span>
					<div class="feature-content">
						<h3>Clean &amp; Modern Design</h3>
						<p>Designing beautiful modern engaging websites that always use the latest responsive technologies.</p>
					</div>
				</div><!--/ End first featurebox -->

				   <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".2s">
					<span class="feature-icon pull-left" ><i class="fa fa-codepen"></i></span>
					<div class="feature-content">
						<h3>Useful Shortcodes</h3>
						<p>With a focus on both functionality and user experience, the shortcodes provide the power to create a dynamic, customizable web presence that stands out from the competition.</p>
					</div>
				</div><!--/ End 2nd featurebox -->

				   <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".3s">
					<span class="feature-icon pull-left" ><i class="fa fa-film"></i></span>
					<div class="feature-content">
						<h3>Parallax sections</h3>
						<p>Stunning parallax sections that add depth and dimension to your website.</p>
					</div>
				</div><!--/ End 3rd featurebox -->
			</div><!-- Content row end -->

			<div class="gap-40"></div>

			<div class="row">
				   <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".4s">
					<span class="feature-icon pull-left" ><i class="fa fa-newspaper-o"></i></span>
					<div class="feature-content">
						<h3>Multipurpose Concept</h3>
						<p>Scalable technology and multipurpose solutions are engineered for maximum efficiency and future growth.</p>
					</div>
				</div><!--/ End 1st featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-desktop"></i></span>
					<div class="feature-content">
						<h3>Responsive Layout</h3>
						<p>Built on a multipurpose concept, designed to deliver innovative solutions that serve a wide range of functions</p>
					</div>
				</div><!--/ End 2nd featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-pagelines"></i></span>
					<div class="feature-content">
						<h3>Lightweight Performance</h3>
						<p>Lightweight performance and optimal speed. This ensures your website loads quickly, which is crucial for both user satisfaction and SEO rankings.</p>
					</div>
				</div><!--/ End 3rd featurebox -->

			</div><!-- Content row end -->

			<div class="gap-40"></div>

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-recycle"></i></span>
					<div class="feature-content">
						<h3>Maintenance & Updates</h3>
						<p>Dynamic approach ensures you're always prepared for what comes next</p>
					</div>
				</div><!--/ End first featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>Endless Possibilites</h3>
						<p>Engineered for maximum efficiency and user experience, the multipurpose solutions provide a powerful tool for any web presence.</p>
					</div>
				</div><!--/ End first featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-whatsapp"></i></span>
					<div class="feature-content">
						<h3>24/7 Live Support</h3>
						<p>Ongoing maintenance and updates to ensure your website remains secure and up-to-date with the latest web technologies. </p>
					</div>
				</div><!--/ End first featurebox -->
			</div><!-- Content row end -->

		</div><!--/ Container end -->
	</section><!--/ Feature box end -->


	<section id="image-block" class="image-block no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding overlay2" style="height:650px;background:url(https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/apple.webp) 50% 50% / cover no-repeat;">
				</div>
				<div class="col-md-6 ts-padding img-block-right">
					<div class="img-block-head text-center">
						
						<h3>Why Choose TechStop</h3>
						<p>TechStop all-in-one model eliminates the need for you to coordinate
							 with multiple vendors for design, development, and maintenance. This saves you time, reduces stress, and ensures a cohesive final product.
					</div>

					<div class="gap-30"></div>

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-bicycle"></i></span>
						<div class="feature-content">
							<h3>Powerful Features</h3>
							<p>With a focus on user experience, the features are designed to streamline workflows.</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>Cloud Infrastructure</h3>
							<p>Robust and scalable cloud infrastructure to support your growing business needs.</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-street-view"></i></span>
						<div class="feature-content">
							<h3>Day Night Support</h3>
							<p> 24/7 availability to assist you with any inquiries or issues you may have.</p>
						</div>
					</div><!--/ End 1st block -->

				</div>
			</div>
		</div>
	</section><!--/ Image block end -->

	<div class="gap-60"></div>


    <!-- Parallax 1 start -->
	<section class="parallax parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>To give your business a powerful web presence.</h2>
					<h3>Just click the button below to start</h3>
					<p>
						<a wire:navigate href="/contact" class="btn btn-primary solid">Get In Touch</a>
					</p>
				</div>
			</div>
		</div><!-- Container end -->
    </section><!-- Parallax 1 end -->

    <livewire:pricing/>

   <section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3>Join TechStop and Give Your Business a Brand New Look</h3>
					<a href="/contact" class="pull-right btn btn-primary white">Start Now</a>
				</div>
			</div>
		</div>
	</section>





	
<style>
	.cd-hero-slider { position: relative; }
	.cd-hero-slider > li {
		opacity: 0;
		visibility: hidden;
		transform: scale(1.03);
		transition: opacity 1.2s cubic-bezier(.77,0,.175,1),
								transform 1.2s cubic-bezier(.77,0,.175,1),
								visibility 1.2s;
		position: absolute;
		width: 100%;
		left: 0; top: 0;
		z-index: 1;
		pointer-events: none;
	}
	.cd-hero-slider > li.selected {
		opacity: 1;
		visibility: visible;
		transform: scale(1);
		z-index: 2;
		pointer-events: auto;
	}
	.cd-hero-slider h2, .cd-hero-slider h3, .cd-hero-slider p {
		opacity: 0;
		transform: translateY(30px);
		transition: opacity 1.2s cubic-bezier(.77,0,.175,1), transform 1.2s cubic-bezier(.77,0,.175,1);
	}
	.cd-hero-slider > li.selected h2,
	.cd-hero-slider > li.selected h3,
	.cd-hero-slider > li.selected p {
		opacity: 1;
		transform: translateY(0);
		transition-delay: 0.2s;
	}
</style>
<script>
var heroSliderInterval;
function initHeroSlider() {
	const slides = document.querySelectorAll('.cd-hero-slider > li');
	const navItems = document.querySelectorAll('.cd-slider-nav ul li');
	let current = 0;
	slides.forEach((slide, i) => {
		slide.style.position = 'absolute';
		slide.style.top = 0;
		slide.style.left = 0;
		if (i === 0) slide.classList.add('selected');
		else slide.classList.remove('selected');
	});
	navItems.forEach((item, i) => {
		if (i === 0) item.classList.add('selected');
		else item.classList.remove('selected');
	});
	if (heroSliderInterval) clearInterval(heroSliderInterval);
	heroSliderInterval = setInterval(() => {
		slides[current].classList.remove('selected');
		navItems[current].classList.remove('selected');
		current = (current + 1) % slides.length;
		slides[current].classList.add('selected');
		navItems[current].classList.add('selected');
	}, 3200);
}
document.addEventListener('DOMContentLoaded', initHeroSlider);
document.addEventListener('livewire:navigated', function() {
	// Only run if the hero slider exists on this page
	if (document.querySelector('.cd-hero-slider')) {
		initHeroSlider();
	}
});
</script>
@endsection
