@extends('layouts.fend')
@section('content')
<section class="position-relative z-index-1 background-position-left-top background-no-repeat overflow-hidden"  style="background-image: url('../fend/images/demo-elearning-02.png')">
    <div class="position-absolute right-0px bottom-minus-90px z-index-minus-1 d-none d-md-inline-block" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
        <img src="{{asset('fend/images/demo-elearning-04.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row align-items-end justify-content-center mb-8 xs-mb-12">                    
            <div class="col-xl-5 col-lg-6 col-md-10 position-relative md-mb-20px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="icon-with-text-style-08 mb-20px d-inline-block">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-yellow me-15px">
                            <i class="bi bi-globe d-inline-block icon-extra-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Know about classes</span>
                        </div>
                    </div>
                </div>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">We providing the best online courses.</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 mb-5px text-dark-gray d-block fs-18">Online courses from the world's leading experts.</span>
                <p class="w-85 xl-w-95 lg-w-100">Lorem ipsum is simply dummy of the printing and typesetting industry lorem ipsum has the industry standard dummy.</p>
            </div>
        </div>
        <div class="row g-0 row-cols-1 row-cols-lg-4 row-cols-sm-2 g-0 align-items-center mb-3" data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light md-mb-50px xs-border-end-0">
                <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                    <div class="position-relative ms-auto me-auto mb-25px">
                        <img src="{{asset('fend/images/demo-elearning-about-icon-01.png')}}" class="h-75px position-relative z-index-1 mt-35px" alt="">
                        <div class="h-100px w-100px rounded-circle bg-very-light-gray position-absolute top-0 start-50 translate-middle-x"></div>
                    </div>
                    <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Skilled instructors</span>
                    <p class="lh-30">Best online platform for professional courses.</p>
                </div>
                <div class="d-flex flex-column overflow-hidden w-100 justify-content-center position-relative">
                    <div class="fs-14 fw-700 text-uppercase text-dark-gray border-top border-bottom border-color-transparent-dark-very-light pt-10px pb-10px "><span class="text-down d-block">Student enrolled</span></div>
                    <div class="btn-hover d-flex align-items-center justify-content-center bg-dark-gray">
                        <a href="{{route('instructors.all')}}" class="inner-link btn btn-link btn-hover-animation-switch btn-extra-large text-white">
                            <span>
                                <span class="btn-text">Great instructors</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light md-mb-50px md-border-end-0">
                <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                    <div class="position-relative ms-auto me-auto mb-25px">
                        <img src="{{asset('fend/images/demo-elearning-about-icon-02.png')}}" class="h-75px position-relative z-index-1 mt-35px" alt="">
                        <div class="h-100px w-100px rounded-circle bg-very-light-gray position-absolute top-0 start-50 translate-middle-x"></div>
                    </div>
                    <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Educator helps</span>
                    <p class="lh-30">Best online platform for professional courses.</p>
                </div>
                <div class="d-flex flex-column overflow-hidden w-100 justify-content-center position-relative">
                    <div class="fs-14 fw-700 text-uppercase text-dark-gray border-top border-bottom border-color-transparent-dark-very-light pt-10px pb-10px "><span class="text-down d-block">Satisfaction rate</span></div>
                    <div class="btn-hover d-flex align-items-center justify-content-center bg-dark-gray">
                        <a href="{{route('testimonials.all')}}" class="inner-link btn btn-link btn-hover-animation-switch btn-extra-large text-white">
                            <span>
                                <span class="btn-text">Students feedback</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light xs-mb-50px xs-border-end-0">
                <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                    <div class="position-relative ms-auto me-auto mb-25px">
                        <img src="{{asset('fend/images/demo-elearning-about-icon-03.png')}}" class="h-75px position-relative z-index-1 mt-35px" alt="">
                        <div class="h-100px w-100px rounded-circle bg-very-light-gray position-absolute top-0 start-50 translate-middle-x"></div>
                    </div>
                    <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Get certificate</span>
                    <p class="lh-30">Best online platform for professional courses.</p>
                </div>
                <div class="d-flex flex-column overflow-hidden w-100 justify-content-center position-relative">
                    <div class="fs-14 fw-700 text-uppercase text-dark-gray border-top border-bottom border-color-transparent-dark-very-light pt-10px pb-10px "><span class="text-down d-block">Student enrolled</span></div>
                    <div class="btn-hover d-flex align-items-center justify-content-center bg-dark-gray">
                        <a href="{{route('courses')}}" class="inner-link btn btn-link btn-hover-animation-switch btn-extra-large text-white">
                            <span>
                                <span class="btn-text">Explore courses</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col services-box-style-07 text-center last-paragraph-no-margin">
                <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                    <div class="position-relative ms-auto me-auto mb-25px">
                        <img src="{{asset('fend/images/demo-elearning-about-icon-04.png')}}" class="h-75px position-relative z-index-1 mt-35px" alt="">
                        <div class="h-100px w-100px rounded-circle bg-very-light-gray position-absolute top-0 start-50 translate-middle-x"></div>
                    </div>
                    <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Online classes</span>
                    <p class="lh-30">Best online platform for professional courses.</p>
                </div>
                <div class="d-flex flex-column overflow-hidden w-100 justify-content-center position-relative">
                    <div class="fs-14 fw-700 text-uppercase text-dark-gray border-top border-bottom border-color-transparent-dark-very-light pt-10px pb-10px "><span class="text-down d-block">Top instructors</span></div>
                    <div class="btn-hover d-flex align-items-center justify-content-center bg-dark-gray">
                        <a href="{{route('courses')}}" class="inner-link btn btn-link btn-hover-animation-switch btn-extra-large text-white">
                            <span>
                                <span class="btn-text">Popular courses</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row position-relative mt-40px xs-mt-20px">
            <div class="col swiper swiper-width-auto feather-shadow text-center" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":80, "centeredSlides": true, "speed": 30000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">providing amazing online</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">courses bringing you</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">outstanding online learning</div>
                    </div>
                    <!-- end slider item -->
                </div> 
            </div>  
            <div class="col-12 position-absolute top-0 h-100 d-flex justify-content-center align-items-center left-0px z-index-1 text-center">
                <h4 class="alt-font text-dark-gray fs-45 fw-600 ls-minus-2px xs-ls-minus-1px mb-0 mt-40px xs-mt-15px">Online learning wherever and whenever.</h4>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-tranquil-white pt-0 position-relative align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-7 col-lg-6 text-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="position-relative md-mb-50px xs-mb-30px pe-50px outside-box-left-10 md-outside-box-left-0 lg-pe-0 atropos" data-atropos>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner text-center w-100 overflow-visible">
                                <div data-atropos-offset="-1" class="position-absolute left-0px">
                                    <img src="{{asset('fend/images/demo-elearning-about-01.png')}}" alt="">
                                </div>
                                <img data-atropos-offset="1" class="position-relative z-index-9" src="{{asset('fend/images/demo-elearning-06.png')}}" alt="">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 position-relative z-index-1">
                <div class="icon-with-text-style-08 mb-20px" data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-yellow me-15px">
                            <i class="bi bi-award d-inline-block icon-extra-medium text-dark-gray"></i> 
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Why you choose us?</span>
                        </div>
                    </div>
                </div>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-40px sm-mb-30px" data-anime='{ "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>Teaching makes you productive.</h2>
                <div class="accordion accordion-style-05" id="accordion-style-05" data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start accordion item -->
                    <div class="accordion-item bg-white active-accordion">
                        <h3 class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">01</h3>
                        <div class="accordion-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-01" aria-expanded="true" data-bs-parent="#accordion-style-05">
                                <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">Learn with experts instructors</div>
                            </a>
                        </div>
                        <div id="accordion-style-05-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-05">
                            <div class="accordion-body last-paragraph-no-margin">
                                <p>Lorem ipsum is simply dummy of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item bg-white">
                        <h3 class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">02</h3>
                        <div class="accordion-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-02" aria-expanded="false" data-bs-parent="#accordion-style-05">
                                <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">Highly flexible learning time</div>
                            </a>
                        </div>
                        <div id="accordion-style-05-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-05">
                            <div class="accordion-body last-paragraph-no-margin">
                                <p>Lorem ipsum is simply dummy of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item bg-white">
                        <h3 class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">03</h3>
                        <div class="accordion-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-03" aria-expanded="false" data-bs-parent="#accordion-style-05">
                                <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">Amazing skills for teaching</div>
                            </a>
                        </div>
                        <div id="accordion-style-05-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-05">
                            <div class="accordion-body last-paragraph-no-margin">
                                <p>Lorem ipsum is simply dummy of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overlap-height">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center align-items-center mb-3 text-center">
            <div class="col-12" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">Great achievements</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center g-0 mb-5 xs-mb-40px" data-anime='{ "translateY": [30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-07">
                <div class="hover-box dark-hover will-change-inherit feature-box p-25 xl-p-17 md-p-19 overflow-hidden border-top border-start border-bottom xs-border-end xs-border-bottom-0 border-color-extra-medium-gray">
                    <div class="feature-box-icon">
                        <span class="alt-font fw-600 fs-17 text-uppercase text-dark-gray position-absolute right-25px top-20px lg-right-15px lg-top-10px">2017</span>
                        <i class="fa-brands fa-google icon-double-large text-dark-gray mb-20px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="fs-18 lh-24 text-dark-gray fw-500 d-block">Best teaching of the year</span>
                    </div>
                    <div class="feature-box-overlay bg-dark-gray"></div>
                </div>
            </div>
            <!-- end features box item --> 
            <!-- start features box item -->
            <div class="col icon-with-text-style-07">
                <div class="hover-box dark-hover will-change-inherit feature-box p-25 xl-p-17 md-p-19 overflow-hidden border-top md-border-end border-start border-bottom border-color-extra-medium-gray">
                    <div class="feature-box-icon">
                        <span class="alt-font fw-600 fs-17 text-uppercase text-dark-gray position-absolute right-25px top-20px lg-right-15px lg-top-10px">2019</span>
                        <i class="fa-brands fa-google-play icon-double-large text-dark-gray mb-20px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="fs-18 lh-24 text-dark-gray fw-500 d-block">Downloaded app on play store</span>
                    </div>
                    <div class="feature-box-overlay bg-dark-gray"></div>
                </div>
            </div>
            <!-- end features box item --> 
            <!-- start features box item -->
            <div class="col icon-with-text-style-07">
                <div class="hover-box dark-hover will-change-inherit feature-box p-25 xl-p-17 md-p-19 overflow-hidden border-top border-start border-bottom md-border-top-0 xs-border-end border-color-extra-medium-gray">
                    <div class="feature-box-icon">
                        <span class="alt-font fw-600 fs-17 text-uppercase text-dark-gray position-absolute right-25px top-20px lg-right-15px lg-top-10px">2020</span>
                        <i class="fa-brands fa-microblog icon-double-large text-dark-gray mb-20px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="fs-18 lh-24 text-dark-gray fw-500 d-block">Achievements of instructors</span>
                    </div>
                    <div class="feature-box-overlay bg-dark-gray"></div>
                </div>
            </div>
            <!-- end features box item --> 
            <!-- start features box item -->
            <div class="col icon-with-text-style-07">
                <div class="hover-box dark-hover will-change-inherit feature-box p-25 xl-p-17 md-p-19 overflow-hidden border border-color-extra-medium-gray md-border-top-0">
                    <div class="feature-box-icon">
                        <span class="alt-font fw-600 fs-17 text-uppercase text-dark-gray position-absolute right-25px top-20px lg-right-15px lg-top-10px">2021</span>
                        <i class="fa-brands fa-youtube icon-double-large text-dark-gray mb-20px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="fs-18 lh-24 text-dark-gray fw-500 d-block">1 million views on youtube</span>
                    </div>
                    <div class="feature-box-overlay bg-dark-gray"></div>
                </div>
            </div>
            <!-- end features box item --> 
        </div>
        <div class="row justify-content-center">
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08 md-mb-10px pe-25px md-pe-15px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="feather icon-feather-mail fs-20 text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="text-dark-gray fw-500 fs-20 xs-fs-18 ls-minus-05px">Looking for help? <a href="{{route('contact-us')}}" class="text-decoration-line-bottom-medium text-dark-gray fw-600">Contact us today</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08 ps-25px md-ps-15px md-pe-15px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="feather icon-feather-thumbs-up fs-20 text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="text-dark-gray fw-500 fs-20 xs-fs-18 ls-minus-05px">Keep in Touch. <a href="#" class="text-decoration-line-bottom-medium text-dark-gray fw-600">Like us on Facebook</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
@endsection