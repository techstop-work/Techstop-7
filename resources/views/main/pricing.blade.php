@extends('layouts.main')

@section('title', 'TechStop | Pricing ')

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/banner1.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Pricing</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Pages</li>
                        <li><a href="/pricing" wire:navigate> Pricing</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	 <livewire:pricing/>
     
    <section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3>Join TechStop and Give Your Website a Brand New Look</h3>
                    <a href="/contact" class="pull-right btn btn-primary white" wire:navigate>Contact Now</a>
				</div>
			</div>
		</div>
	</section>

@endsection
