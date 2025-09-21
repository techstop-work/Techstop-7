@extends('layouts.main')

@section('title', 'Techstop | Services ')

@section('og_title', 'Web Development Services | TechStop')
@section('og_description', 'Professional web development services including custom websites, cloud solutions, SEO, DevOps, and API integrations. Transform your business with TechStop.')
@section('og_image', url('/images/logo2.webp'))

@section('twitter_title', 'Web Development Services | TechStop')
@section('twitter_description', 'Professional web development services including custom websites, cloud solutions, SEO, DevOps, and API integrations. Transform your business with TechStop.')
@section('twitter_image', url('/images/logo2.webp'))

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/subbanner.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Services</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company</li>
			            <li><a href="#" wire:navigate> Services</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Services -->

			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic"> Services at TechStop</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Web Design</h3>
							<p>Crafting immersive digital experiences, solutions built for engagement and performance. </p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".2s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-briefcase"></i></span>
							<h3>Business Websites</h3>
							<p>Creating bespoke business websites engineered to inspire profound trust.
							</p>
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
							<h3>Custom Website Solutions</h3>
							<p>Designing beautiful, modern websites that are engaging. </p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content 1st row end -->

			<div class="gap-40"></div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-search"></i></span>
							<h3>SEO Service</h3>
							<p>Optimizing your website to rank higher in search engine results and attract more organic traffic.</p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".4s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-pencil"></i></span>
							<h3>Content Writing</h3>
							<p>Engaging and SEO-friendly content tailored to your audience.</p>
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="0.1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-cogs"></i></span>
							<h3>DevOps</h3>
							<p>Cloud infrastructure management and automation for seamless deployment.</p>
						</div>
					</div><!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="0.4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-database"></i></span>
							<h3>Api Integrations</h3>
							<p>Seamless integration with third-party services to enhance functionality and user experience.</p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content 2nd row end -->

			<!-- Services end -->


		</div><!--/ 1st container end -->
		
			
	
        <hr>


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

		<div class="container"><!-- 2nd container start -->

			<livewire:pricing/>

		</div><!-- 2nd container end -->
	</section><!--/ Main container end -->
	
	<section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3>Join TechStop and Give Your Business a Brand New Look</h3>
					<a href="/contact" class="pull-right btn btn-primary white" wire:navigate>Start Now</a>
				</div>
			</div>
		</div>
	</section>


@endsection
