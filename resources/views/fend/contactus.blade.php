@extends('layouts.fend')
@section('content')
<section class="position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row mb-5 align-items-center overflow-hidden">
                <div class="col-lg-6">
                    <h1 class="alt-font fw-700 text-dark-gray fancy-text-style-4 ls-minus-2px md-mb-20px">Say  
                        <span data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span><i class="bi bi-emoji-smile icon-extra-large ms-20px"></i>
                    </h1>
                </div>
                <div class="col-lg-6 last-paragraph-no-margin" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-50, 0], "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <p>We're here to help and answer any question you might have. we look forward to hearing from you. any need help you please contact us or meet to office with coffee.</p>
                </div>
            </div> 
            <div class="row">
                <div class="col-12 sm-mb-30px">
                    <div id="map" class="map h-650px md-h-550px sm-h-450px border-radius-6px" data-map-options='{ "lat": -37.817240, "lng": 144.955820, "style": "night", "marker": { "type": "image", "class": "marker01", "src": "images/marker04.png" }, "popup": { "defaultOpen": false, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto eLearning</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a class=\"text-white\" aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                </div> 
                <div class="col-lg-5 col-md-6 contact-form-style-03 position-absolute sm-position-relative right-0px bottom-0" data-anime='{ "opacity": [0, 1], "translateY": [-20, 0], "translateX": [-20, 0], "staggervalue": 100, "easing": "easeOutQuad" }'> 
                    <div class="bg-white p-13 md-p-10 position-relative overflow-hidden background-no-repeat background-position-right-bottom box-shadow-extra-large" style="background-image: url(images/demo-elearning-contact-bg-01.png)">
                        <div>
                            <h6 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-5px">Crafto - London</h6>
                            <p class="w-100 mb-10px">401 Broadway, 24th Floor,<br>Orchard View, London, UK</p>
                            <div class="w-100 d-block">
                                <span class="d-block"><span class="text-dark-gray fw-600">T:</span><a href="tel:1234567890"> 123 456 7890</a></span>
                                <span class="d-block"><span class="text-dark-gray fw-600">E:</span> <a href="mailto:info@yourdomain.com" class="text-dark-gray text-decoration-line-bottom fw-600">info@yourdomain.com</a></span>
                                <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449" target="_blank" class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text mt-35px">
                                    <span>
                                        <span class="btn-double-text" data-text="View on google map">View on google map</span>
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-130px z-index-minus-1 w-100 left-0px d-none d-lg-block">
                <div class="row position-relative mt-50px">
                    <div class="col-12">
                        <!-- start marquees -->
                        <div class="marquees-text fs-200 ls-minus-2px alt-font fw-600 text-nowrap opacity-3">We'd love to hear from your side</div>
                        <!-- end marquees -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden position-relative overlap-height pt-0">
        <div class="container overlap-gap-section" > 
            <div class="row justify-content-center mb-3">
                <div class="col-12 text-center" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">How we can help you?</h2>
                </div>
            </div> 
            <div class="row row-cols-md-1 justify-content-center mb-10 sm-mb-0">
                <div class="col-xl-9 col-lg-10">
                    <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                        <div class="row" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Your good name*</label>
                                <div class="position-relative form-group mb-30px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name?" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Your email address*</label>
                                <div class="position-relative form-group mb-30px">
                                    <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Your phone number*</label>
                                <div class="position-relative form-group mb-30px">
                                    <span class="form-icon"><i class="bi bi-telephone text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail3" type="tel" name="phone" placeholder="Enter your phone number" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Your subject</label>
                                <div class="position-relative form-group mb-30px">
                                    <span class="form-icon"><i class="bi bi-journals text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail4" type="text" name="subject" placeholder="How can we help you?" />
                                </div>
                            </div>
                            <div class="col-12 mb-35px">
                                <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Your message</label>
                                <div class="position-relative form-group form-textarea mb-0"> 
                                    <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment" placeholder="Describe about your message" rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                                </div>
                            </div>
                            <div class="col-md-8 sm-mb-30px text-center text-md-start">
                                <p class="mb-0 fs-15 lh-26 w-80 lg-w-100">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div class="col-md-4 text-center text-md-end">
                                <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                <button class="btn btn-large btn-dark-gray btn-rounded btn-box-shadow btn-switch-text left-icon submit" type="submit">
                                    <span>
                                        <span><i class="fa-regular fa-paper-plane"></i></span>
                                        <span class="btn-double-text" data-text="Send message">Send message</span>
                                    </span>
                                </button>
                            </div>
                            <div class="col-12 md-mb-20px">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
@endsection