@extends('layouts.main')

@section('title', 'TechStop | About')

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/subbanner.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>About</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company</li>
			            <li><a href="/about" wire:navigate> About </a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">Company Profile
						<span class="title-desc">Working for Excellence</span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
					<h3>About TechStop</h3>
					<p>TechStop is more than just a company—it's a partner in navigating the ever-evolving digital world. The focus is on providing cutting-edge web solutions that empower businesses to thrive. From building a strong online presence to developing custom applications, the core mission is to help businesses achieve their goals and stand out in a competitive market.</p>
				</div><!--/ About message end -->
				<div class="col-md-6 ts-padding about-img animated-image-1 overlay2 " style="height:374px;background:url(https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/apple.webp) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-md-6 ts-padding about-img animated-image-2 overlay2 " style="height:374px;background:url(https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-images/work.webp) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<div class="col-md-6 ts-padding about-message">
					<h3>Focus on Success</h3>
					<p>In today's competitive market, a website is more than just an online brochure; it's the foundation of your digital presence. That's why every solution is custom-tailored to reflect a brand's unique identity and achieve its specific objectives. The process is transparent, and clients are involved in every step, from initial mock-ups to the final launch.</p>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->


		<div class="gap-60"></div>


		<!-- Counter Strat -->
		<div class="ts_counter_bg parallax parallax2">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row wow fadeInLeft text-center">
					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-check"></i></span>
						<div class="facts-num">
							<span class="counter">100</span>
						</div>
						<h3>Content Delivery</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-institution"></i></span>
						<div class="facts-num">
							<span class="counter">100</span>
						</div>
						<h3>Server Uptime</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-cogs"></i></span>
						<div class="facts-num">
							<span class="counter">869</span>
						</div>
						<h3>Features Explored</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
						<div class="facts-num">
							<span class="counter">76</span>
						</div>
						<h3>Business Strategies</h3> 
					</div>

					<div class="gap-40"></div>

					<div><a href="/services" class="btn btn-primary solid" wire:navigate>See Our Services</a></div>

				</div><!--/ row end -->
			</div><!--/ Container end -->
		</div><!--/ Counter end -->
	</section><!--/ Main container end -->
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
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab" wire:navigate>
					  			<span class="tab-icon"><i class="fa fa-info"></i></span>
					  			<div class="tab-info">
						  			<h3>TechStop</h3>
					  			</div>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab" wire:navigate>
						  		<span class="tab-icon"><i class="fa fa-briefcase"></i></span>
					  			<div class="tab-info">
						  			<h3>Innovation</h3>
					  			</div>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab" wire:navigate>
						  		<span class="tab-icon"><i class="fa fa-android"></i></span>
					  			<div class="tab-info">
						  			<h3>Procedures</h3>
					  			</div>
						  	</a>
						</li>
						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab" wire:navigate>
						  		<span class="tab-icon"><i class="fa fa-pagelines"></i></span>
					  			<div class="tab-info">
						  			<h3>Modern Design</h3>
					  			</div>
						  	</a>
						</li>
						<li>
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab" wire:navigate>
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
	

	



	
<style>
.animated-image-1, .animated-image-2 {
	transition: all 0.6s ease;
	border-radius: 8px;
	overflow: hidden;
	position: relative;
	box-shadow: 0 10px 30px rgba(0,0,0,0.1);
	animation: fadeInUp 1s ease-out;
}

.animated-image-1:hover, .animated-image-2:hover {
	transform: scale(1.05) translateY(-10px);
	box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.animated-image-1::before, .animated-image-2::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: linear-gradient(45deg, rgba(51,79,150,0.1), rgba(74,103,196,0.1));
	opacity: 0;
	transition: opacity 0.3s ease;
	z-index: 1;
}

.animated-image-1:hover::before, .animated-image-2:hover::before {
	opacity: 1;
}

.animated-image-2 {
	animation-delay: 0.3s;
}

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

@media (max-width: 768px) {
	.animated-image-1:hover, .animated-image-2:hover {
		transform: scale(1.02);
	}
}
</style>

@endsection
