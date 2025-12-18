<section class="hero-slider">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 1 -->
            <div class="swiper-slide" style="background-image:url('{{ asset('images/slider/s1.jpeg') }}')">
                <div class="slide-overlay">
                    <span class="slide-tag">Perfect for you</span>
                    <h1>Empowering Women.</h1>
                    <a href="{{ route('users.contact-us') }}" class="slide-btn">
                        Contact Us →
                    </a>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="swiper-slide" style="background-image:url('{{ asset('images/slider/s2.jpeg') }}')">
                <div class="slide-overlay">
                    <span class="slide-tag">Beneficial for health</span>
                    <h1>Transforming Fonio.</h1>
                    <a href="{{ route('users.contact-us') }}" class="slide-btn">
                        Contact Us →
                    </a>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="swiper-slide" style="background-image:url('{{ asset('images/slider/s5.jpeg') }}')">
                <div class="slide-overlay">
                    <span class="slide-tag">Feeling of Happiness</span>
                    <h1>Feeding the World.</h1>
                    <a href="{{ route('users.contact-us') }}" class="slide-btn">
                        Contact Us →
                    </a>
                </div>
            </div>

        </div>

        <!-- Pagination + Arrows -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
@section('scripts')

<script>
    new Swiper('.heroSwiper', {
        loop: true,
        speed: 1200,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
    });
</script>


@endsection