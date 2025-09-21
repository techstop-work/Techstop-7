@extends('layouts.main')

@section('title', 'TechStop | FAQs') 

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/subbanner.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Faq</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company</li>
			            <li><a href="#" wire:navigate> Faq</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Services -->

			<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="faq-box">
									<h4>Q. What services does TechStop offer?</h4>
									<p> Web design and development, Cloud Infrastructure, Maintenance and Upgradations of Websites, All are provided under one roof.</p>
								</div>
								<div class="faq-box">
									<h4>Q. How do I request a quote?</h4>
									<p>Visit the <a href="/contact" wire:navigate>Contact</a> page and fill out the form. A representative will respond with a tailored quote within 24 hours.</p>
								</div>
								<div class="faq-box">
									<h4>Q. What is your project turnaround time?</h4>
									<p>Most projects will be delivered within 2–4 weeks depending on complexity and requirements.</p>
								</div>
								<div class="faq-box">
									<h4>Q. Do you offer ongoing support?</h4>
									<p>Yes, ongoing as well as post deployment support is provided. This includes professional maintenance, essential updates, and dedicated support packages designed to keep a website running smoothly.</p>
								</div>
							</div><!-- End col-md-6 -->

							<div class="col-md-6 col-sm-6">
								<div class="faq-box">
									<h4>Q. Can you help with branding and content?</h4>
									<p>Comprehensive branding, logo design, and content creation are all offered.</p>
								</div>
								<div class="faq-box">
									<h4>Q. What technologies do you use?</h4>
									<p>The focus is on utilizing cutting-edge technologies and modern web frameworks to build robust, scalable solutions.</p>
								</div>
								<div class="faq-box">
									<h4>Q. Is my data secure with TechStop?</h4>
									<p>Security is a top priority. TechStop follows best practices to protect your data and ensure privacy.</p>
								</div>
								<div class="faq-box">
									<h4>Q. How do I get started?</h4>
									<p>Just <a href="/contact" wire:navigate>reach out</a> with your project details. A representative will guide you through every step.</p>
								</div>
							</div><!-- End col-md-6 -->
	

				</div><!-- End col-md-6 -->
			</div><!-- Content row  end -->

		</div><!--/ container end -->

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
