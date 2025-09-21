@extends('layouts.main')

@section('title', 'TechStop | Contact ')

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/subbanner.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Contact </h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#" wire:navigate> Contact</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
		

			<div class="gap-40"></div>
			@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<h3 class="section-title mb-3"><i class="fa fa-paper-plane mr-2" style="color: #334F96;"></i> Get In Touch</h3>
            <div class="gap-20"></div>
<div class="row">
    <div class="col-md-7">
        @livewire('contact-form')
    </div>
    <div class="col-md-5">
        <div class="contact-info">
            <h3>Contact Details</h3>
            <p>For all business inquiries or to discuss a new web project, please contact the agency using the information below.
                The representative will be in touch shortly.</p>
            <br>
			<p><i class="fa fa-envelope info"></i> <a href="mailto:contact@techstop.pro">contact@techstop.pro</a></p>
            <p><i class="fa fa-globe info"></i> www.techstop.pro</p>
        </div>
    </div>
</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
@endsection
