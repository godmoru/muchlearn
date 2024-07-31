@extends('layouts.fend')
@section('content')
<section class="bg-tranquil position-relative overlap-height">
    <div class="position-absolute left-minus-200px top-25" data-bottom-top="transform: translateY(-80px)"
        data-top-bottom="transform: translateY(80px)">
        <img src="{{asset('fend/images/demo-elearning-bg-04.png')}}" alt>
    </div>
    <div class="container overlap-gap-section">
        <div class="row align-items-center mb-4">
            <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">Popular courses</h2>
            </div>
            <div class="col-xl-7 tab-style-04 text-center text-xl-end">

                <ul
                    class="portfolio-filter fw-500 nav nav-tabs justify-content-center justify-content-xl-end border-0">
                    <li class="nav active"><a data-filter="*" href="#">All</a></li>
                    <li class="nav"><a data-filter=".development" href="#">Development</a></li>
                    <li class="nav"><a data-filter=".business" href="#">Business</a></li>
                    <li class="nav"><a data-filter=".design" href="#">Design</a></li>
                    <li class="nav"><a data-filter=".marketing" href="#">Marketing</a></li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-12 filter-content p-md-0">
                <ul
                    class="portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                    <li class="grid-item design transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="demo-elearning-courses-details.html">
                                    <img src="{{asset('fend/images/demo-elearning-courses-details-01.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $55</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="{{route('courses', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Design</a><span
                                            class="fs-16">Matthew taylor</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Business
                                            accounting and taxation fundamental</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(20
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">10 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">18 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item business marketing transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="{{route('course.show', \Crypt::encrypt(123))}}">
                                    <img src="{{asset('fend/images/demo-elearning-courses-02.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $65</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Finance</a><span
                                            class="fs-16">Leonel mooney</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Finance
                                            fundamentals of management and planning</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(39
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">22 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">30 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item development marketing transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="{{route('course.show', \Crypt::encrypt(123))}}">
                                    <img src="{{asset('fend/images/demo-elearning-courses-03.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $80</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Design</a><span
                                            class="fs-16">Herman miller</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Introduction to
                                            application design and development</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(55
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px pt-15px pb-20px xl-ps-25px xl-pe-25px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">15 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">55 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item business design transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="{{route('course.show', \Crypt::encrypt(123))}}">
                                    <img src="{{asset('fend/images/demo-elearning-courses-04.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $60</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Medicine</a><span
                                            class="fs-16">Shoko mugikura</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Genetic testing
                                            and sequencing technique</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(42
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px pt-15px pb-20px xl-ps-25px xl-pe-25px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">10 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">34 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item development design transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="{{route('course.show', \Crypt::encrypt(123))}}">
                                    <img src="{{asset('fend/images/demo-elearning-courses-05.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $70</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Design</a><span
                                            class="fs-16">Alexa harvard</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="{{route('course.show', \Crypt::encrypt(123))}}"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Introduction to
                                            web design and visualization</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(56
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px pt-15px pb-20px xl-ps-25px xl-pe-25px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">20 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">59 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item development business marketing transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="demo-elearning-courses-details.html">
                                    <img src="{{asset('fend/images/demo-elearning-courses-06.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px md-w-75px md-h-75px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $45</div>
                                <div
                                    class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Business</a><span
                                            class="fs-16">Leonel mooney</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="demo-elearning-courses-details.html"
                                            class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">Improve your
                                            english vocabulary and language</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="review-star-icon float-start">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                            <div class="fs-15 float-start ms-5px position-relative top-2px">(76
                                                Reviews)</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-center align-items-center ps-35px pe-35px pt-15px pb-20px xl-ps-25px xl-pe-25px">
                                    <div class="me-auto">
                                        <i
                                            class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">18 Lessons</span>
                                    </div>
                                    <div>
                                        <i
                                            class="feather icon-feather-users text-dark-gray d-inline-block me-5px"></i><span
                                            class="fs-16 text-dark-gray fw-500">80 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">

                <ul class="pagination pagination-style-01 fs-13 mb-0 fw-500">
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
@endsection