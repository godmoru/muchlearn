<section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography" style="background-image: url(https://via.placeholder.com/1920x540)">
@if($pagename =="About Us")    
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@elseif($pagename == "Courses")
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-courses-title-bg.jpg')"></div>
@elseif($pagename == "Contact Us")
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@elseif($pagename == "Instructors")
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-instructors-title-bg.jpg')"></div>
@elseif($pagename == "Testimonials")
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@elseif($pagename == "News Update")
<div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@elseif($pagename == "Course_Title")
<div class="background-position-center-top h-90 w-100 position-absolute left-0px top-0" style="background-image: url('../../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@else
<div class="background-position-center-top h-90 w-100 position-absolute left-0px top-0" style="background-image: url('../fend/images/demo-elearning-about-title-bg.jpg')"></div>
@endif
    <div id="particles-style-01" class="h-90 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
    <div class="container">
        <div class="row align-items-center extra-small-screen">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px alt-font text-yellow">{{$tagline}}</h1>
                <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">{{$pagetext}}</h2>
            </div>
        </div>
    </div>
</section>