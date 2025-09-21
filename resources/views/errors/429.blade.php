@extends('layouts.main')

@section('title', 'Too Many Requests - TechStop')

@section('content')
<div id="banner-area">
    <img src="https://d1oktf4gbw23dy.cloudfront.net/banner/blogbanner.webp" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>Too Many Requests</h2>
            <p>Please wait a moment before trying again</p>
        </div>
    </div>
</div>

<section id="main-container" class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="error-message" style="padding: 50px 0;">
                    <h1 style="font-size: 120px; color: #334F96; margin-bottom: 30px;">429</h1>
                    <h2 style="margin-bottom: 20px;">Too Many Requests</h2>
                    <p style="font-size: 18px; margin-bottom: 30px;">
                        We're receiving too many requests from you right now. Please wait a moment and try again.
                    </p>
                    <p style="margin-bottom: 40px;">
                        This is a security measure to protect our services. If you continue to see this message,
                        please contact our support team.
                    </p>
                    <div class="error-actions">
                        <a href="{{ url()->previous() }}" class="btn btn-primary solid" style="margin-right: 15px;">
                            <i class="fa fa-arrow-left"></i> Go Back
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-secondary">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
