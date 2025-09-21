@extends('layouts.main')

@section('title', 'TechStop | Career')

@section('content')
<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/subbanner.webp" alt="banner" loading="lazy" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Jobs Openings</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company</li>
			            <li><a href="#" wire:navigate> Jobs</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<h3 class="title-border">No Current Job Openings</h3>
					<p>
						Thank you for your interest in joining TechStop! At this moment, no open positions are available. The company appreciates the enthusiasm and encourages checking back soon for new opportunities that may arise in the near future.
					</p>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Why Connect with TechStop?</h4>
						</div>
						<div class="panel-body">
							<ul class="unstyled arrow">
								<li>Passionate and talented professionals who want to make an impact are highly valued.</li>
								<li>TechStop is committed to fostering  <strong>innovation</strong> and <strong>growth</strong></li>
								<li>Even without current openings, CVs are welcomed for future consideration.</li>

							</ul>
						</div>
					</div>
					<div class="gap-20"></div>
					<p>
						For future career opportunities, candidates can send a CV and a brief introduction to contact@techstop.pro. The information will be kept on file and TechStop will reach out when a suitable position becomes available.
					</p>
					
				</div><!--/ Content col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<!-- category start -->
						<div class="widget widget-categories">
							<h3>How to Apply</h3>
							<p>Send your cv, relevant work experience and anything else that will make you stand out to career@techstop.pro</p>

						</div><!-- category end -->

						<!-- tags start -->
						<div class="widget widget-tags">
							<h3>Why TechStop</h3>
							<p>TechStop is more than just a company—it's a partner in navigating the ever-evolving digital world. The focus is on providing cutting-edge digital solutions that empower businesses to thrive. From building a strong online presence to developing custom applications, the core mission is to help businesses achieve their goals and stand out in a competitive market.</p>
						</div><!-- tags end -->


					</div><!--/ Sidebar end -->
				</div><!--/ Sidebar col end -->
			</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!--/ Main container end -->
	
	 
@endsection
