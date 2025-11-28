	@section('styles')
				<style>
 #pbmit-top-menu li a {
        cursor: pointer !important;
    }

	.pbmit-slider-area{
		box-sizing: content-box !important;
	}

	.bk{
		background-color: white !important;
	}
	
		</style>
	@endsection	
		


<header id="masthead" class="site-header pbmit-header-style-2 pbmit-sticky-logo-no bk">
		<div class="pbmit-sticky-header "></div>
		<div class="pbmit-header-overlay">
		<div class="pbmit-header-height-wrapper" style="min-height:100px;">
		<div class="pbmit-main-header-area pbmit-sticky-logo-no pbmit-responsive-logo-no pbmit-header-wrapper pbmit-bg-color-transparent">
			<div class="container">
				<div class="pbmit-header-content d-flex justify-content-between align-items-center">
					<div class="pbmit-menu-logoarea d-flex justify-content-between align-items-center">
						<!-- Top Navigation Menu -->
						<div class="navigation-top">
							<div class="wrap">
								<nav id="site-navigation" class="main-navigation pbmit-navbar  pbmit-main-active-color-secondarycolor pbmit-dropdown-active-color-secondarycolor" aria-label="Top Menu">
									<div class="menu-main-menu-container">
                                        <ul id="pbmit-top-menu" class="menu">
<li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-23">
<a href="{{route('users.home')}}">Home</a>
</li>
<li id="menu-item-4488" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4488">
    <a href="{{route('users.about-us')}}">About-us</a>
</li>
<li id="menu-item-4504" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4504">
    <a href="{{route('users.contact-us')}}">Contact-us</a>
</li>
{{-- <li id="menu-item-4489" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4489">
    <a href="#">Portfolio</a>
</li> --}}
	
{{-- <li id="menu-item-4487" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4487">
    <a href="#">Blog</a>
</li>
<li id="menu-item-4503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503">
    <a href="contact-us/index.html">Contact Us</a></li> --}}
</ul></div>								</nav><!-- #site-navigation -->
							</div><!-- .wrap -->
						</div><!-- .navigation-top -->
					</div>
					<div class="pbmit-logo-menuarea d-flex align-items-center">
						<div class="site-branding pbmit-logo-area">
							<div class="wrap">
								<h1 class="site-title"><a href="{{route('users.home')}}" rel="home"><span class="site-title-text">Tireni Eke Global - Solutions Ltd.</span><img class="pbmit-main-logo" src="images/logo/log.png" alt="Tireni eke" title="Tireni Eke Solutions" /></a></h1><!-- Logo area -->
							</div><!-- .wrap -->
						</div><!-- .site-branding -->
					</div>			
					<div class="pbmit-right-box d-flex align-items-center">
						<div class="pbmit-button-box">
												<div class="pbmit-header-button">
				<a href="tel:+1(212)-255-511">
			<span class="pbmit-header-button-text-1">Call us Now</span>			<span class="pbmit-header-button-text-2">{{$settings->site_phone}}</span>		</a>
					</div>
										</div>
						{{-- <div class="pbmit-search-cart-box">							
									<div class="pbmit-header-search-btn"><a href="#" title="Search"><i class="pbmit-base-icon-search-1"></i></a></div>
						</div> --}}
									<div class="pbmit-button-box-second">
							
				<a href="contact-us/index.html">
			<span class="pbmit-header-button2-text">{{$settings->site_email}}</span><span class="pbmit-button-icon-wrapper"><span class="pbmit-button-icon"></span></span>		</a>
					
					
						</div>
						<div class="pbmit-burger-menu-wrapper">
							<div class="pbmit-mobile-menu-bg"></div>
							<button id="menu-toggle" class="nav-menu-toggle">
								<i class="pbmit-base-icon-menu-1"></i>
							</button>
						</div>
					</div>
				</div><!-- pbmit-header-content-end -->
			</div><!-- pbmit-header-inner-end -->
		</div><!-- container-end -->
	</div><!-- pbmit-header-height-wrapper-end -->
</div><!-- pbmit-header-overlay-end -->

@include('includes.slider')	


</header> <!-- #masthead -->