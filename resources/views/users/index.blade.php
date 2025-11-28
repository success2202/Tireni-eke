
@extends('layouts.app')
@section('title')
<title>  Tireni NG </title>
@endsection
@section('styles')
<style>
/* Import a clean modern font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* Apply the font to the whole website */
body {
  font-family: 'Poppins', sans-serif !important;
}

	.bd{
		box-sizing: content-box !important;
	}

	.rs-fullwidth-wrap{
		box-sizing: border-box !important;
	}


 /* body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f6f6f6;
    } */
    /* HERO SECTION MAIN */
.hero {
  background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 5%;
    gap: 40px;
    flex-wrap: wrap;
}

/* TEXT AREA */
.hero-text {
    flex: 1 1 500px;
}

.hero-text h1 {
    font-size: 2.5rem;
    color: #1f4e1f;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 1.05rem;
    line-height: 1.7;
    margin-bottom: 10px;
    color: #444;
}

/* BUTTONS */
.buttons {
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.buttons a {
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 600;
    transition: 0.3s ease;
    text-align: center;
}

/* Main Button */
.btn-main {
    background: #026b1e;
    color: #fff;
}

.btn-main:hover {
    background: #1f4e1f;
}

/* Secondary Button */
.btn-secondary {
    background: transparent;
    border: 2px solid #1f4e1f;
    color: #1f4e1f;
}

.btn-secondary:hover {
    background: #1f4e1f;
    color: #fff;
}

/* IMAGE */
.hero-image {
    flex: 1 1 400px;
    display: flex;
    justify-content: center;
}

.hero-image img {
    width: 100%;
    max-width: 500px;
    border-radius: 16px;
    object-fit: cover;
}

/* ==========================================
   RESPONSIVENESS
   ========================================== */

/* TABLETS */
@media (max-width: 991px) {
    .hero {
        padding: 40px 5%;
        text-align: center;
    }
    
    .buttons {
        justify-content: center;
    }
}

/* MOBILE */
@media (max-width: 767px) {
    .hero {
        flex-direction: column-reverse;
        text-align: center;
    }

    .hero-text h1 {
        font-size: 2rem;
    }

    .buttons a {
        width: 100%;
        padding: 14px;
        font-size: 1rem;
    }
}


 .about-header-img img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 16px;
    }

    .about-card {
        background: #fff;
        border-radius: 14px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease-in-out;
        height: 100%;
    }

    .about-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.12);
    }

    .about-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #1f4e1f; /* Green */
    }

    .about-section {
        padding: 60px 0;
    }


.services-section {
  padding: 40px 20px;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 columns desktop */
  gap: 20px;
}

/* Service Card Style */
.service-card {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  transition: transform .3s ease, box-shadow .3s ease;
  text-align: center;
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}

.service-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.service-card h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

.service-card p {
  font-size: 15px;
  color: #333;
  line-height: 1.5;
}


/* TABLET (2 columns) */
@media (max-width: 992px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* MOBILE (1 column) */
@media (max-width: 576px) {
  .services-grid {
    grid-template-columns: 1fr;
  }
}

	
/* Color Palette 
   ------------------------
   Dark Green: #2e5e2a
   Light Green: #8bbf6c
   Earth Brown: #a47551
   Soft Beige: #f3efe6
   Deep Text: #2b2b2b
*/

/* Section Background */
.modern-section {
  padding: 4rem 1.5rem;
  background: #f3efe6; /* earthy soft beige */
}

/* Layout Grid */
.modern-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2.5rem;
  align-items: center;
}

/* Text Styling */
.modern-text h2 {
  font-size: 2.3rem;
  font-weight: 800;
  color: #2e5e2a; /* deep forest green */
  margin-bottom: 1rem;
}

.subtitle {
  color: #5a5a5a;
  margin-bottom: 1.7rem;
  line-height: 1.6;
}

.item {
  margin-bottom: 1.4rem;
}

.item h3 {
  font-size: 1.3rem;
  font-weight: 700;
  color: #a47551; /* warm earth brown */
  margin-bottom: .3rem;
}

.item p {
  color: #4b4b4b;
  line-height: 1.6;
  font-size: 1rem;
}



/* Mobile */
@media (max-width: 768px) {
  .modern-text h2 {
    font-size: 1.9rem;
  }
}


/* Adjusted Container Grid */
.modern-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 2fr 1fr; /* Text takes 2/3, image 1/3 */
  gap: 2rem;
  align-items: stretch; /* Image will stretch to match text height */
}

/* Image Styling - match text height, remove border */
.modern-image img {
  width: 100%;
  height: 100%;       /* stretch to match container/text height */
  object-fit: cover;  /* keep image proportions */
  border-radius: 14px; /* rounded corners */
  box-shadow: 0 4px 20px rgba(46, 94, 42, 0.2); /* subtle shadow */
  transition: transform .3s ease, box-shadow .3s ease;
}

/* Hover Effect */
.modern-image img:hover {
  transform: scale(1.03);
  box-shadow: 0 6px 30px rgba(46, 94, 42, 0.25);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .modern-container {
    grid-template-columns: 1fr; /* stack text and image */
  }
  .modern-image img {
    width: 100%;
    height: auto; /* auto height on mobile */
  }
}


/* Container */
.impact-section {
padding: 4rem 1.5rem;
background: #ffffff; /* changed to white */
}
.impact-container {
max-width: 1200px;
margin: auto;
display: grid;
grid-template-columns: 2fr 1fr; /* Text 2/3, Image 1/3 */
gap: 2.5rem;
align-items: stretch;
}


/* Section Background */
.impact-section {
  padding: 60px 20px;
  background: #f8f8f8;
}

/* Layout */
.impact-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  align-items: center;
}

/* Text Column */
.impact-text {
  flex: 1 1 500px;
}

.impact-text h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.impact-item {
  margin-bottom: 25px;
}

.impact-item h3 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #444;
}

.impact-item p {
  line-height: 1.6;
  margin-bottom: 10px;
}

/* Button */
.impact-btn {
  display: inline-block;
  background: #1f4e1f;
  color: #fff;
  padding: 12px 18px;
  border-radius: 5px;
  text-decoration: none;
  transition: 0.3s ease-in-out;
}

.impact-btn:hover {
  background: #1f4e1f;
}

/* Image Column */
.impact-image {
  flex: 1 1 400px;
}

.impact-image img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  object-fit: cover;
}

/* Responsive */
@media (max-width: 768px) {
  .impact-container {
    flex-direction: column-reverse;
    text-align: left;
  }

  .impact-text h2 {
    text-align: left;
  }
}


	</style>
@endsection
@section('content')


<section class="hero">
 <div class="hero-image">
      <img src="{{asset('images/home/s3.jpeg')}}" alt="Tireni Image" />
    </div>
    <div class="hero-text">
      <h4 class="text-center mb-4" style="font-weight: 400; color:#024e1b;">Empowering Women. Transforming Fonio. Feeding the World.</h4>
      <p>Across Nigeria’s golden fields, a quiet revolution is growing.</p>
      <p>At <strong>Tireni Eke Global Solutions Ltd</strong>, we cultivate more than fonio—we cultivate opportunity, integrity, and hope.</p>
      <p>We are a female-led agribusiness redefining Africa’s agricultural story through organic fonio cultivation, traceable value chains, and inclusive growth that uplifts women and rural communities.</p>
      <p>From seed to export, every grain tells a story of empowerment.</p>
      <p><strong>Join us in cultivating change—one farmer, one harvest, one community at a time.</strong></p>

      <div class="buttons">
        <a href="#" class="btn-main">Learn More</a>
        <a href="#" class="btn-secondary">Partner With Us</a>
      </div>
    </div>

   
</section>



<div class="container about-section">

    <!-- ===== TOP IMAGE ===== -->
    {{-- <div class="about-header-img mb-5">
        <img src="{{ asset('images/home/s4.jpeg') }}" alt="About Us">
    </div> --}}

    <h4 class="text-center mb-4" style="font-weight: 400; color:#024e1b;">About Us</h2>

    <!-- ===== 3 COLUMN CONTENT ===== -->
    <div class="row g-4">

        @foreach ($about as $item)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="about-card">
                    <h4 class="about-title">{{ $item->title }}</h4>
                    <p>{!! $item->contents !!}</p>
                </div>
            </div>
        @endforeach

    </div>

</div>


  <section class="services-section">
    <div class="services-title">
      <h4 class="text-center mb-4" style="font-weight: 400; color:#1f4e1f;">What WE Do</h4>
      <p class="text-center mb-4" style="font-size: 18px; color:##1f4e1f;">Cultivating Fonio, Cultivating Futures</p>
    </div>

    <div class="services-section">
    <div class="services-grid">
        @foreach ($services as $service)
        <div class="service-card">
            <img src="{{asset('images/'.$service->images)}}" alt="Service Image">

            <h3>{{ $service->title }}</h3>

            <p>
                {{ Str::limit(strip_tags($service->contents), 120, '...') }}
            </p>
        </div>
        @endforeach
    </div>
</div>



<section class="modern-section">
  <div class="modern-container">
    
    <div class="modern-text">
      <h4 class="text-center mb-4" style="font-weight: 400; color:#024e1b;">Our Products</h4>
      <p class="subtitle">
        Each product represents a promise: pure, sustainable, and empowering from seed to shelf.
      </p>

      <div class="item">
        <h3>Premium Fonio Grain</h3>
        <p>
          Cleaned, sorted, and ready for local and export markets. Naturally gluten-free, nutrient-dense, and sustainably grown.
        </p>
      </div>

      <div class="item">
        <h3>Fonio Flour</h3>
        <p>
          Finely milled and ideal for baking and gluten-free foods. A healthier, ethical alternative for global consumers.
        </p>
      </div>

      <div class="item">
        <h3>Coming Soon</h3>
        <p>
          Cassava Flour and Cleaned Beans — expanding our reach while maintaining traceability and quality.
        </p>
      </div>
    </div>

    <div class="modern-image">
      <img src="{{asset('images/slider/s5.jpeg')}}" alt="Fonio Products">
    </div>

  </div>
</section>




<!-- Impact & Partnerships Section -->
<section class="impact-section">
  <div class="impact-container">

  <!-- Image -->
    <div class="impact-image">
      <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" alt="Women Farmers Impact">
    </div>
    
    <!-- Text Content -->
    <div class="impact-text">
      <h4 class="text-center mb-4" style="font-weight: 400; color:#024e1b;">Impact & Partnerships</h4>

      <div class="impact-item">
        <h3>Our Impact</h3>
        <p>Behind every field stands a woman whose story is changing.</p>
        <p>Through our programs, we’ve helped smallholder women farmers increase productivity, access fairer markets, and build resilient communities.</p>
        <p>Our work contributes directly to several UN Sustainable Development Goals (SDGs) — including Zero Hunger, Gender Equality, and Decent Work & Economic Growth.</p>
      </div>

      <div class="impact-item">
        <h3>Partnerships</h3>
        <p>We believe lasting impact comes through collaboration.</p>
        <p>We partner with development agencies, research institutions, agritech innovators, and global buyers who share our vision for a sustainable agricultural future.</p>
        <p>Together, we are not just growing crops—we’re growing capacity, confidence, and change.</p>
        <a href="#" class="impact-btn">Explore Partnership Opportunities</a>
      </div>
    </div>

  </div>
</section>



				<div class="elementor-section elementor-top-section elementor-element elementor-element-d0200d9 elementor-section-full_width elementor-section-stretched pbmit-col-stretched-none pbmit-bg-color-over-image elementor-section-height-default elementor-section-height-default" data-id="d0200d9" data-element_type="section" id="scroll-page" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c98db07 pbmit-bg-color-over-image" data-id="c98db07" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1a2ee00 elementor-widget elementor-widget-pbmit_marquee_effect_element" data-id="1a2ee00" data-element_type="widget" data-widget_type="pbmit_marquee_effect_element.default">
				<div class="elementor-widget-container">
									<div class="pbminfotech-element
			pbminfotech-element-marquee-effect			pbmit-element-marquee-effect-style-1			pbmit-element-viewtype-row-column			pbmit-element-column-three			pbmit-element-sticky-carousel-false			pbmit-element-caroursel-dot-false			pbmit-infinite-scroll-no			pbmit-infinite-scroll-button-no												"
			data-cpt="marquee-effect"
			data-totalpagination="1"
			data-style="1"
			data-show="3"
			data-columns="3"
			data-loop="false"
			data-autoplay="false"
			data-center="false"
			data-nav="false"
			data-dots="false"
			data-reverse="false"
			data-speed="1000"
			data-delay="4000"
			data-margin=""
			data-show-portion="false">
			<div class="pbmit-element-inner">
				<div class="pbmit-marquee-effect-section">		
			<div class="pbmit-marquee-container pbmit-tag-top pbmit-element-posts-wrapper swiper-container">
				<article class="pbmit-ele pbmit-ele-marquee-effect pbmit-marquee-effect-style-1    "><div class="pbmit-tag-wrapper">
	<h2 class="pbmit-element-title" data-text="Agriculture">
							Empowering Women.
						</h2></div></article><article class="pbmit-ele pbmit-ele-marquee-effect pbmit-marquee-effect-style-1    "><div class="pbmit-tag-wrapper">
	<h2 class="pbmit-element-title" data-text="Farming">
							Transforming Fonio.
						</h2></div></article><article class="pbmit-ele pbmit-ele-marquee-effect pbmit-marquee-effect-style-1    "><div class="pbmit-tag-wrapper">
	<h2 class="pbmit-element-title" data-text="Organic">
							Feeding the World.
						</h2></div></article>
						
									</div>
		</div>
					</div><!-- .pbmit-element-inner -->
		</div><!-- .pbminfotech-element -->
								</div>
				</div>
					</div>
		</div>
					</div>
		</div>
				
		@endsection			

