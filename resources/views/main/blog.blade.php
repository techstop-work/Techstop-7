@extends('layouts.main')

@section('title', 'TechStop | Blog')

@section('content')



<div id="banner-area">
		<img src="https://d1oktf4gbw23dy.cloudfront.net/techstop-img/web-banner/blogbanner.webp" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2> Blog</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#">Blog</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Blog details page start -->
	<section id="main-container">
		<div class="container">
			<div class="row">

				<!-- Blog start -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					@if(request('search'))
						<div class="search-results-header" style="margin-bottom: 30px; padding: 20px; background: #f8f9fa; border-radius: 5px;">
							<h4 style="margin: 0; color: #333;">
								<i class="fa fa-search" style="margin-right: 10px;"></i>
								Search Results for: "<strong>{{ request('search') }}</strong>"
							</h4>
							<p style="margin: 5px 0 0 0; color: #666;">
								Found {{ $blogs->total() }} article{{ $blogs->total() !== 1 ? 's' : '' }}
								@if(request('search'))
									<a href="{{ route('blog') }}" style="color: #007bff; text-decoration: none;">Clear search</a>
								@endif
							</p>
						</div>
					@endif
					
					@if($blogs->count() > 0)
						@foreach($blogs as $blog)
						<!-- Blog post start -->
						<div class="post">
							<!-- post image start -->
							<div class="post-image-wrapper">
								@if($blog->featured_image)
									<img src="{{ $blog->featured_image_url }}" class="img-responsive" alt="{{ $blog->title }}" loading="lazy" width="800" height="400" />
								@else
									<img src="{{ asset('images/blog/blog1.jpg') }}" class="img-responsive" alt="{{ $blog->title }}" loading="lazy" width="800" height="400" />
								@endif
								<span class="blog-date">
									<a href="#">{{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Not published' }}</a>
								</span>
							</div><!-- post image end -->
							<div class="post-header clearfix">
								<h2 class="post-title">
									<a href="{{ route('blog.show', $blog->slug) }}" wire:navigate>{{ $blog->title }}</a>
								</h2>
								<div class="post-meta">
									<span class="post-meta-author">
										Posted by <a href="#"><img src="{{ asset('apple-touch-icon.png') }}" alt="Admin" style="width: 20px; height: 20px; margin-right: 5px; vertical-align: middle;"> Admin</a>
									</span>
									@if($blog->category)
										<span class="post-meta-cats">
											in <a href="{{ route('blog', ['category' => $blog->category_id]) }}">{{ $blog->category->name }}</a>
										</span>
									@endif
								</div><!-- post meta end -->
							</div><!-- post heading end -->
							<div class="post-body">
								<p>{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 200) }}</p>
							</div>
							<div class="post-footer">
								<a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary" wire:navigate>
									Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i>
								</a>
							</div>
						</div><!-- Blog post end -->
						@endforeach
					@else
						<div class="post">
							<div class="post-body">
								<p>No blog posts found.</p>
							</div>
						</div>
					@endif

					

					@if($blogs->hasPages())
						<div class="paging">
							<ul class="pagination">
								{{-- Previous Button --}}
								@if ($blogs->onFirstPage())
									<li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
								@else
									<li><a href="{{ $blogs->previousPageUrl() }}" wire:navigate rel="prev"><i class="fa fa-angle-left"></i></a></li>
								@endif

								{{-- First Page --}}
								@if($blogs->currentPage() > 3)
									<li><a href="{{ $blogs->url(1) }}" wire:navigate>1</a></li>
									@if($blogs->currentPage() > 4)
										<li class="disabled"><span>...</span></li>
									@endif
								@endif

								{{-- Page Numbers --}}
								@for ($page = max(1, $blogs->currentPage() - 2); $page <= min($blogs->lastPage(), $blogs->currentPage() + 2); $page++)
									@if ($page == $blogs->currentPage())
										<li class="active"><span>{{ $page }}</span></li>
									@else
										<li><a href="{{ $blogs->url($page) }}" wire:navigate>{{ $page }}</a></li>
									@endif
								@endfor

								{{-- Last Page --}}
								@if($blogs->currentPage() < $blogs->lastPage() - 2)
									@if($blogs->currentPage() < $blogs->lastPage() - 3)
										<li class="disabled"><span>...</span></li>
									@endif
									<li><a href="{{ $blogs->url($blogs->lastPage()) }}" wire:navigate>{{ $blogs->lastPage() }}</a></li>
								@endif

								{{-- Next Button --}}
								@if ($blogs->hasMorePages())
									<li><a href="{{ $blogs->nextPageUrl() }}" wire:navigate rel="next"><i class="fa fa-angle-right"></i></a></li>
								@else
									<li class="disabled"><span><i class="fa fa-angle-right"></i></span></li>
								@endif
							</ul>
						</div>

						<style>
						.paging {
							margin: 30px 0;
							text-align: center;
						}

						.pagination {
							display: inline-block;
							margin: 0;
							padding: 0;
							list-style: none;
						}

						.pagination li {
							display: inline-block;
							margin: 0;
							border-right: 1px solid #ddd;
						}

						.pagination li:last-child {
							border-right: none;
						}

						.pagination li a,
						.pagination li span {
							display: block;
							padding: 10px 14px;
							color: #334F96;
							text-decoration: none;
							font-weight: 500;
							background-color: #fff;
						}

						.pagination li a:hover {
							background-color: #f5f5f5;
							color: #334F96;
						}

						.pagination li.active span {
							background-color: #334F96;
							color: white;
							font-weight: 600;
						}

						.pagination li.disabled span {
							color: #ccc;
							background-color: #f8f9fa;
						}

						@media (max-width: 480px) {
							.pagination li a,
							.pagination li span {
								padding: 8px 10px;
								font-size: 14px;
							}
						}
						</style>
					@endif



				</div><!--/ Content col end -->
				
				<!-- sidebar start -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					
					<div class="sidebar sidebar-right">

						<!-- Blog search start -->
						<div class="widget widget-search">
							<h3 class="widget-title">Search</h3>
							<div class="modern-search-container">
								<form action="{{ route('blog') }}" method="GET" class="search-form">
									<div class="search-input-wrapper">
										<i class="fa fa-search search-icon"></i>
										<input type="search" name="search" value="{{ request('search') }}"
											   placeholder="Search articles..." class="modern-search-input">
										<button type="submit" class="search-submit-btn">
											<i class="fa fa-arrow-right"></i>
										</button>
									</div>
								</form>
							</div>
						</div><!-- Blog search end -->

						<style>
						.modern-search-container {
							margin-top: 15px;
						}

						.search-form {
							position: relative;
						}

						.search-input-wrapper {
							position: relative;
							display: flex;
							align-items: center;
							background: #ffffff;
							border: 2px solid #e1e8ed;
							border-radius: 50px;
							padding: 0;
							transition: all 0.3s ease;
							box-shadow: 0 2px 10px rgba(0,0,0,0.08);
						}

						.search-input-wrapper:focus-within {
							border-color: #334F96;
							box-shadow: 0 0 0 3px rgba(51, 79, 150, 0.1);
						}

						.search-icon {
							color: #64748b;
							font-size: 16px;
							margin-left: 20px;
							margin-right: 12px;
							flex-shrink: 0;
						}

						.modern-search-input {
							flex: 1;
							border: none;
							outline: none;
							padding: 14px 0;
							font-size: 16px;
							background: transparent;
							color: #334155;
							font-weight: 400;
						}

						.modern-search-input::placeholder {
							color: #94a3b8;
							font-weight: 400;
						}

						.search-submit-btn {
							background: #334F96;
							color: white;
							border: none;
							border-radius: 50%;
							width: 44px;
							height: 44px;
							display: flex;
							align-items: center;
							justify-content: center;
							cursor: pointer;
							margin: 2px;
							transition: all 0.3s ease;
							flex-shrink: 0;
						}

						.search-submit-btn:hover {
							background: #2a3d7a;
							transform: scale(1.05);
						}

						.search-submit-btn i {
							font-size: 14px;
							margin-left: 2px;
						}

						@media (max-width: 480px) {
							.search-input-wrapper {
								padding: 0;
							}

							.search-icon {
								margin-left: 15px;
								margin-right: 8px;
							}

							.modern-search-input {
								padding: 12px 0;
								font-size: 15px;
							}

							.search-submit-btn {
								width: 40px;
								height: 40px;
							}
						}
						</style>

						<!-- Tab widget start-->
						<div class="widget widget-tab">
							<ul class="nav nav-tabs">
							           <li class="active"><a href="#popular-tab" data-toggle="tab">popular</a></li>
							           <li class=""><a href="#recent-tab" data-toggle="tab">recent</a></li>
							         </ul>
				            <div class="tab-content">
				            	<div class="tab-pane active" id="popular-tab">
				            	    <ul class="posts-list unstyled clearfix">
				            	      @php
				            	        $popularBlogs = $blogs->sortByDesc('views')->take(3);
				            	      @endphp
				            	      @foreach($popularBlogs as $popularBlog)
				            	      <li>
				            	        <div class="posts-thumb pull-left">
				            	        	<a href="{{ route('blog.show', $popularBlog->slug) }}" wire:navigate>
				            	        		@if($popularBlog->featured_image)
				            	        				<img alt="img" src="{{ $popularBlog->featured_image_url }}" loading="lazy" width="80" height="60">
				            	        			@else
				            	        				<img alt="img" src="{{ asset('images/blog/blog1.jpg') }}" loading="lazy" width="80" height="60">
				            	        			@endif
				            	        	</a>
				            	        </div>
				            	        <div class="post-content">
				            	            <h4 class="entry-title">
				            	            	<a href="{{ route('blog.show', $popularBlog->slug) }}" wire:navigate>{{ Str::limit($popularBlog->title, 50) }}</a>
				            	            </h4>
				            	            <p class="post-meta">
				        <span class="post-meta-author">Posted by <a href="#"><img src="{{ asset('apple-touch-icon.png') }}" alt="Admin" style="width: 16px; height: 16px; margin-right: 3px; vertical-align: middle;"> Admin</a></span>
				        <span class="post-meta-date">
				         <a href="#"> <i class="fa fa-clock-o"></i> {{ $popularBlog->published_at ? $popularBlog->published_at->format('M d') : 'N/A' }}</a>
				        </span>
				       </p>
				            	        </div>
				            	        <div class="clearfix"></div>
				            	      </li><!-- Post end-->
				            	      @endforeach
				            	    </ul>
				            	</div><!-- Popular tabpan end -->

					            <div class="tab-pane" id="recent-tab">
					                <ul class="posts-list unstyled clearfix">
					                  @foreach($recentBlogs->take(3) as $recentBlog)
					                  <li>
					                    <div class="posts-thumb pull-left">
					                    	<a href="{{ route('blog.show', $recentBlog->slug) }}" wire:navigate>
					                    		@if($recentBlog->featured_image)
					                    			<img alt="img" src="{{ $recentBlog->featured_image_url }}" loading="lazy" width="80" height="60">
					                    		@else
					                    			<img alt="img" src="{{ asset('images/blog/blog1.jpg') }}" loading="lazy" width="80" height="60">
					                    		@endif
					                    	</a>
					                    </div>
					                    <div class="post-content">
					                        <h4 class="entry-title">
					                        	<a href="{{ route('blog.show', $recentBlog->slug) }}" wire:navigate>{{ Str::limit($recentBlog->title, 50) }}</a>
					                        </h4>
					                        <p class="post-meta">
					       <span class="post-meta-author">Posted by <a href="#"><img src="{{ asset('apple-touch-icon.png') }}" alt="Admin" style="width: 16px; height: 16px; margin-right: 3px; vertical-align: middle;"> Admin</a></span>
					       <span class="post-meta-date">
					        <a href="#"> <i class="fa fa-clock-o"></i> {{ $recentBlog->published_at ? $recentBlog->published_at->format('M d') : 'N/A' }}</a>
					       </span>
					      </p>
					                    </div>
					                    <div class="clearfix"></div>
					                  </li><!-- Post end-->
					                  @endforeach
					                </ul>
					            </div><!-- Recent tabpan end -->

				            </div><!-- Tab content end -->
						</div><!-- Tab widget end-->

						<!-- Blog category start -->
						<div class="widget widget-categories">
							<h3 class="widget-title">Blog Categories</h3>
							<ul class="category-list clearfix">
								@foreach($categories as $category)
									<li>
										<a href="{{ route('blog', ['category' => $category->id]) }}" wire:navigate>
											{{ $category->name }}
										</a>
										<span class="posts-count"> ({{ $category->blogs_count }})</span>
									</li>
								@endforeach
							</ul>
						</div><!-- Blog category end -->

						<!-- Blog tags start -->
						<div class="widget widget-tags">
							<h3 class="widget-title">Popular Tags</h3>
							<ul class="unstyled clearfix">
								@foreach($popularTags as $tag)
									<li><a href="{{ route('blog', ['tag' => $tag->slug]) }}" wire:navigate>{{ $tag->name }}</a></li>
								@endforeach
							</ul>
						</div><!-- Blog tags end -->


					</div><!-- sidebar end -->
				</div>
    		</div><!--/ row end -->
		</div><!--/ container end -->
	</section><!-- Blog details page end -->
	

@endsection

