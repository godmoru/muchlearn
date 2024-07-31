@extends('layouts.fend')
@section('content')
<section class="border-bottom border-color-extra-medium-gray pt-20px pb-20px">
    <div class="container">
        <div class="row text-center justify-content-center align-items-center"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [30, 0], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div
                class="col-lg-auto d-flex justify-content-center md-mb-10px icon-with-text-style-08 text-center text-sm-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                    <div class="feature-box-icon me-15px">
                        <img src="{{asset('fend/images/avtar-39.jpg')}}" class="rounded-circle w-60px" alt>
                    </div>
                    <div class="feature-box-content">
                        <span><span class="fw-600 text-dark-gray">Instructor:</span> Matthew taylor</span>
                    </div>
                </div>
            </div>

            <div class="col-auto lg-p-0 d-none d-lg-block">
                <span class="w-1px h-20px bg-extra-medium-gray d-block "></span>
            </div>

            <div class="col-sm-auto">
                <span><span class="fw-600 text-dark-gray">Categories:</span> Design</span>
            </div>

            <div class="col-auto lg-p-0 d-none d-sm-inline-block">
                <span class="w-1px h-20px bg-extra-medium-gray d-block "></span>
            </div>

            <div class="col-sm-auto">
                <span><span class="fw-600 text-dark-gray ">Enrolled:</span> 18 students</span>
            </div>

            <div class="col-auto lg-p-0 d-none d-md-inline-block">
                <span class="w-1px h-20px bg-extra-medium-gray d-block "></span>
            </div>

            <div class="col-sm-auto md-mt-0">
                <div class="review-star-icon d-inline-block">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="fs-15 lh-26 d-inline-block">(20 Reviews)</div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative">
    <div class="container">
        <div class="row justify-content-center"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-lg-8 md-mb-50px">

                <div class="col-12">
                    <img src="{{asset('fend/images/demo-elearning-courses-details-01.jpg')}}" alt
                        class="w-100 border-radius-6px mb-7">
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book.</p>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
                        id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                    <div class="col-12 p-0 tab-style-04 mt-45px">
                        <ul
                            class="nav nav-tabs justify-content-center fw-500 fs-18 ls-minus-05px mb-50px sm-mb-30px lh-70 sm-lh-40 text-center">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#tab_five1"
                                    class="nav-link active">Overview<span
                                        class="tab-border bg-dark-gray"></span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab_five2">Content<span class="tab-border bg-dark-gray"></span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab_five3">Instructor<span class="tab-border bg-dark-gray"></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five4"
                                    data-tab="review-tab">Review<span class="tab-border bg-dark-gray"></span></a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade in active show" id="tab_five1">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12 last-paragraph-no-margin">
                                        <span
                                            class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-5px">Course
                                            description</span>
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</p>
                                        <div class="mt-20px mb-30px md-mt-10px d-inline-block w-100">
                                            <span
                                                class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-10px">What
                                                you'll learn from this course</span>
                                            <ul class="p-0 m-0 list-style-02 text-dark-gray">
                                                <li class="pb-5px d-flex"><i
                                                        class="feather icon-feather-arrow-right-circle fs-20 me-10px"></i>Ready
                                                    to begin working on real-world data modeling projects.</li>
                                                <li class="pb-5px d-flex"><i
                                                        class="feather icon-feather-arrow-right-circle fs-20 me-10px"></i>Expanded
                                                    responsibilities as part of an existing role.</li>
                                                <li class="pb-5px d-flex"><i
                                                        class="feather icon-feather-arrow-right-circle fs-20 me-10px"></i>Manage
                                                    your time so you'll get more done in less time.</li>
                                                <li class="pb-5px d-flex"><i
                                                        class="feather icon-feather-arrow-right-circle fs-20 me-10px"></i>Hone
                                                    sharp leadership skills to manage your team.</li>
                                                <li class="pb-5px d-flex"><i
                                                        class="feather icon-feather-arrow-right-circle fs-20 me-10px"></i>Cut
                                                    expenses without sacrificing quality.</li>
                                            </ul>
                                        </div>
                                        <span
                                            class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-5px">Certification</span>
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade in" id="tab_five2">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="accordion accordion-style-04" id="accordion-style-04"
                                            data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">

                                            <div class="accordion-item active-accordion">
                                                <div
                                                    class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                                                    <a href data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-style-04-01" aria-expanded="true"
                                                        data-bs-parent="#accordion-style-04">
                                                        <div
                                                            class="accordion-title position-relative mb-0 pe-20px text-dark-gray fw-600 ls-minus-05px">
                                                            <span>The first steps accounting course</span>
                                                            <i class="fa-solid fa-angle-down icon-small"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="accordion-style-04-01"
                                                    class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordion-style-04">
                                                    <div class="accordion-body bg-white last-paragraph-no-margin">
                                                        <ul class="p-0 m-0 list-style-02">
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pb-15px">
                                                                <span>Welcome to the course</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                                                <span>What is the purpose of the course?</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li class="pt-15px">
                                                                <span>The structure of the P&L statement and terms
                                                                    used</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item">
                                                <div
                                                    class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                                                    <a href data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-style-04-02"
                                                        aria-expanded="false" data-bs-parent="#accordion-style-04">
                                                        <div
                                                            class="accordion-title position-relative mb-0 pe-20px text-dark-gray fw-600 ls-minus-05px">
                                                            <span>Basic concepts accounting course</span>
                                                            <i class="fa-solid fa-angle-right icon-small"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="accordion-style-04-02" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion-style-04">
                                                    <div class="accordion-body bg-white last-paragraph-no-margin">
                                                        <ul class="p-0 m-0 list-style-02">
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pb-15px">
                                                                <span>The structure of the balance sheet statement
                                                                    and terms used</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                                                <span>Building and analyzing a balance sheet
                                                                    statement</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li class="pt-15px">
                                                                <span>The structure of the cash flow statement and
                                                                    terms used</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="accordion-item">
                                                <div
                                                    class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                                                    <a href data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-style-04-03"
                                                        aria-expanded="false" data-bs-parent="#accordion-style-04">
                                                        <div
                                                            class="accordion-title position-relative mb-0 pe-20px text-dark-gray fw-600 ls-minus-05px">
                                                            <span>Accounting course quiz and answer</span>
                                                            <i class="fa-solid fa-angle-right icon-small"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="accordion-style-04-03" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion-style-04">
                                                    <div class="accordion-body bg-white last-paragraph-no-margin">
                                                        <ul class="p-0 m-0 list-style-02">
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pb-15px">
                                                                <span>Building and analyzing a balance sheet
                                                                    statement</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li
                                                                class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                                                <span>The structure of the cash flow statement and
                                                                    terms used</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                            <li class="pt-15px">
                                                                <span>The structure of the P&L statement and terms
                                                                    used</span>
                                                                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                                                    target="_blank"
                                                                    class="ms-auto text-dark-gray"><i
                                                                        class="fa-solid fa-circle-play fs-18"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade in" id="tab_five3">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div
                                            class="feature-box feature-box-left-icon-middle d-md-inline-flex align-middle d-block text-md-start text-center">
                                            <div class="feature-box-icon me-50px sm-me-0 sm-mb-30px">
                                                <img src="{{asset('fend/images/demo-elearning-courses-details-tab-01.jpg')}}"
                                                    class="border-radius-6px" alt>
                                            </div>
                                            <div class="feature-box-content">
                                                <span class="d-block fs-18 mb-5px"><span
                                                        class="fw-600 text-dark-gray">Matthew taylor</span><span
                                                        class="ps-10px pe-10px">/</span>Accounting teacher</span>
                                                <p>Lorem ipsum is simply dummy text of the printing typesetting
                                                    industry. Lorem ipsum has been the industry's standard.</p>
                                                <div class="col-12 elements-social social-icon-style-03">
                                                    <ul class="medium-icon">
                                                        <li class="sm-mb-0"><a class="facebook"
                                                                href="https://www.facebook.com/" target="_blank"><i
                                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li class="sm-mb-0"><a class="dribbble"
                                                                href="http://www.dribbble.com" target="_blank"><i
                                                                    class="fa-brands fa-dribbble"></i></a></li>
                                                        <li class="sm-mb-0"><a class="twitter"
                                                                href="https://www.twitter.com" target="_blank"><i
                                                                    class="fa-brands fa-twitter"></i></a></li>
                                                        <li class="sm-mb-0"><a class="instagram"
                                                                href="https://www.instagram.com" target="_blank"><i
                                                                    class="fa-brands fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade in" id="tab_five4">
                                <div class="row align-items-center mb-8 sm-mb-10">
                                    <div class="col-lg-3 pe-0 md-pe-15px text-center">
                                        <div
                                            class="border-radius-4px p-30px md-mb-25px xl-p-20px bg-very-light-gray">
                                            <h2 class="mb-5px text-dark-gray fw-700">4.9</h2>
                                            <span class="text-golden-yellow icon-small d-block ls-minus-2px">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                            <span
                                                class="ps-15px pe-15px pt-10px pb-10px lh-normal bg-dark-gray text-white fs-12 fw-600 text-uppercase border-radius-4px d-inline-block text-center">2,488
                                                Reviews</span>
                                        </div>
                                    </div>
                                    <div class="col-10 col-lg-6 col-md-9 col-sm-8 progress-bar-style-02">
                                        <div class="ps-20px md-ps-0">
                                            <div class="fs-18 text-dark-gray mb-15px fw-600">Average customer
                                                ratings</div>

                                            <div class="progress mb-20px border-radius-6px">
                                                <div class="progress-bar bg-green m-0" role="progressbar"
                                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="progress mb-20px border-radius-6px">
                                                <div class="progress-bar bg-green m-0" role="progressbar"
                                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="progress mb-20px border-radius-6px">
                                                <div class="progress-bar bg-green m-0" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="progress mb-20px border-radius-6px">
                                                <div class="progress-bar bg-green m-0" role="progressbar"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>


                                            <div class="progress sm-mb-0 border-radius-6px">
                                                <div class="progress-bar bg-green m-0" role="progressbar"
                                                    aria-valuenow="05" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-2 col-md-3 col-sm-4 mt-45px xs-ps-0">
                                        <div class="mb-15px lh-0 xs-lh-normal xs-mb-10px">
                                            <span
                                                class="text-golden-yellow fs-16 ls-minus-2px d-none d-sm-inline-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                            <span class="fs-13 text-dark-gray fw-600 ms-10px xs-ms-0">80%</span>
                                        </div>
                                        <div class="mb-15px lh-0 xs-lh-normal xs-mb-10px">
                                            <span
                                                class="text-golden-yellow fs-16 ls-minus-2px d-none d-sm-inline-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                            <span class="fs-13 text-dark-gray fw-600 ms-10px xs-ms-0">10%</span>
                                        </div>
                                        <div class="mb-15px lh-0 xs-lh-normal xs-mb-10px">
                                            <span
                                                class="text-golden-yellow fs-16 ls-minus-2px d-none d-sm-inline-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                            <span class="fs-13 text-dark-gray fw-600 ms-10px xs-ms-0">05%</span>
                                        </div>
                                        <div class="mb-15px lh-0 xs-lh-normal xs-mb-10px">
                                            <span
                                                class="text-golden-yellow fs-16 ls-minus-2px d-none d-sm-inline-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                            <span class="fs-13 text-dark-gray fw-600 ms-10px xs-ms-0">03%</span>
                                        </div>
                                        <div class="lh-0 xs-lh-normal">
                                            <span
                                                class="text-golden-yellow fs-16 ls-minus-2px d-none d-sm-inline-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                            <span class="fs-13 text-dark-gray fw-600 ms-10px xs-ms-0">02%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mb-40px md-mb-35px">
                                    <div
                                        class="col-12 border-bottom border-color-extra-medium-gray pb-40px mb-40px xs-pb-30px xs-mb-30px">
                                        <div class="d-block d-md-flex w-100">
                                            <div class="w-300px md-w-250px sm-w-100 sm-mb-10px text-center">
                                                <img src="{{asset('fend/images/avtar-27.jpg')}}"
                                                    class="rounded-circle w-100px mb-10px" alt>
                                                <span class="text-dark-gray fw-600 d-block">Herman miller</span>
                                                <div class="fs-14 lh-18">06 April 2023</div>
                                            </div>
                                            <div
                                                class="w-100 last-paragraph-no-margin position-relative text-center text-md-start">
                                                <span
                                                    class="text-golden-yellow ls-minus-2px mb-5px sm-me-10px sm-mb-0 d-inline-block d-md-block">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <a href="#"
                                                    class="w-65px bg-light-red border-radius-15px fs-13 text-dark-gray fw-600 text-center position-absolute sm-position-relative d-inline-block d-md-block right-0px top-0px"><i
                                                        class="fa-solid fa-heart text-red me-5px"></i><span>08</span></a>
                                                <p class="w-85 sm-w-100 sm-mt-15px">Lorem ipsum dolor sit sed do
                                                    eiusmod tempor incididunt labore enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 border-bottom border-color-extra-medium-gray pb-40px mb-40px xs-pb-30px xs-mb-30px">
                                        <div class="d-block d-md-flex w-100">
                                            <div class="w-300px md-w-250px sm-w-100 sm-mb-10px text-center">
                                                <img src="{{asset('fend/images/avtar-28.jpg')}}"
                                                    class="rounded-circle w-100px mb-10px" alt>
                                                <span class="text-dark-gray fw-600 d-block">Wilbur haddock</span>
                                                <div class="fs-14 lh-18">26 April 2023</div>
                                            </div>
                                            <div
                                                class="w-100 last-paragraph-no-margin position-relative text-center text-md-start">
                                                <span
                                                    class="text-golden-yellow ls-minus-2px mb-5px sm-me-10px sm-mb-0 d-inline-block d-md-block">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <a href="#"
                                                    class="w-65px bg-light-red border-radius-15px fs-13 text-dark-gray fw-600 text-center position-absolute sm-position-relative d-inline-block d-md-block right-0px top-0px"><i
                                                        class="fa-solid fa-heart text-red me-5px"></i><span>06</span></a>
                                                <p class="w-85 sm-w-100 sm-mt-15px">Lorem ipsum dolor sit sed do
                                                    eiusmod tempor incididunt labore enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 border-bottom border-color-extra-medium-gray pb-40px mb-40px xs-pb-30px md-mb-25px">
                                        <div class="d-block d-md-flex w-100">
                                            <div class="w-300px md-w-250px sm-w-100 sm-mb-10px text-center">
                                                <img src="{{asset('fend/images/avtar-29.jpg')}}"
                                                    class="rounded-circle w-100px mb-10px" alt>
                                                <span class="text-dark-gray fw-600 d-block">Colene landin</span>
                                                <div class="fs-14 lh-18">28 April 2023</div>
                                            </div>
                                            <div
                                                class="w-100 last-paragraph-no-margin position-relative text-center text-md-start">
                                                <span
                                                    class="text-golden-yellow ls-minus-2px mb-5px sm-me-10px sm-mb-0 d-inline-block d-md-block">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <a href="#"
                                                    class="w-65px bg-light-red border-radius-15px fs-13 text-dark-gray fw-600 text-center position-absolute sm-position-relative d-inline-block d-md-block right-0px top-0px"><i
                                                        class="fa-regular fa-heart text-red me-5px"></i><span>00</span></a>
                                                <p class="w-85 sm-w-100 sm-mt-15px">Lorem ipsum dolor sit sed do
                                                    eiusmod tempor incididunt labore enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in
                                                    voluptate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 last-paragraph-no-margin text-center">
                                        <a href="#"
                                            class="btn btn-link btn-hover-animation-switch btn-extra-large fw-600 text-dark-gray">
                                            <span>
                                                <span class="btn-text">Show more reviews</span>
                                                <span class="btn-icon"><i
                                                        class="fa-solid fa-chevron-down"></i></span>
                                                <span class="btn-icon"><i
                                                        class="fa-solid fa-chevron-down"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="p-7 lg-p-5 sm-p-7 bg-very-light-gray border-radius-6px">
                                            <div class="row justify-content-center mb-40px sm-mb-25px">
                                                <div class="col-md-9 text-center">
                                                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">Add
                                                        a review</h3>
                                                </div>
                                            </div>
                                            <form action="email-templates/contact-form.php" method="post"
                                                class="row contact-form-style-02">
                                                <div class="col-lg-6 col-md-6 mb-20px">
                                                    <label class="form-label mb-10px">Your name*</label>
                                                    <input
                                                        class="input-name border-radius-4px form-control required"
                                                        type="text" name="name" placeholder="Enter your name">
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-20px">
                                                    <label class="form-label mb-10px">Your email address*</label>
                                                    <input class="border-radius-4px form-control required"
                                                        type="email" name="email"
                                                        placeholder="Enter your email address">
                                                </div>
                                                <div class="col-lg-12 mb-20px">
                                                    <label class="form-label">Your rating*</label>
                                                    <div>
                                                        <span class="ls-minus-1px icon-small">
                                                            <i class="bi bi-star text-golden-yellow"></i>
                                                            <i class="bi bi-star text-golden-yellow"></i>
                                                            <i class="bi bi-star text-golden-yellow"></i>
                                                            <i class="bi bi-star text-golden-yellow"></i>
                                                            <i class="bi bi-star text-golden-yellow"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-30px">
                                                    <label class="form-label mb-10px">Your review</label>
                                                    <textarea class="border-radius-4px form-control" cols="40"
                                                        rows="4" name="comment"
                                                        placeholder="Your message"></textarea>
                                                </div>
                                                <div class="col-lg-7 md-mb-25px">
                                                    <div
                                                        class="position-relative terms-condition-box text-start is-invalid">
                                                        <label>
                                                            <input type="checkbox" name="terms_condition"
                                                                id="terms_condition" value="1"
                                                                class="terms-condition check-box align-middle required">
                                                            <span class="box fs-14 lh-22">I accept the crafto terms
                                                                and conditions and I have read the privacy
                                                                policy.</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 offset-lg-1 text-start text-lg-end">
                                                    <input type="hidden" name="redirect" value>
                                                    <button
                                                        class="btn btn-dark-gray btn-medium btn-box-shadow btn-rounded submit"
                                                        type="submit">Submit review</button>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-results mt-20px d-none"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <aside class="col-lg-4 ps-60px lg-ps-30px md-ps-15px">
                <div class="position-sticky top-150px lg-position-relative lg-top-0px">
                    <div class="border-radius-6px overflow-hidden bg-tranquil">
                        <div class="position-relative">
                            <img src="{{asset('fend/images/demo-elearning-courses-details-video.jpg')}}" class="md-w-100" alt />
                            <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                class="absolute-middle-center d-inline-block text-center bg-white box-shadow-extra-large rounded-circle video-icon-box video-icon-large popup-youtube">
                                <span>
                                    <span class="video-icon bg-white">
                                        <i class="fa-solid fa-play text-dark-gray"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr bg-white opacity-9"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="p-35px lg-p-25px">
                            <ul class="p-0 mb-20px list-style-02">
                                <li class="border-bottom border-color-extra-medium-gray pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-clock-history fs-20"></i></span>
                                        <span class="fw-600">Duration</span>
                                    </span>
                                    <span class="ms-auto">3 weeks</span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-people fs-20"></i></span>
                                        <span class="fw-600">Enrolled</span>
                                    </span>
                                    <span class="ms-auto">18 students</span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-globe fs-20"></i></span>
                                        <span class="fw-600">Language</span>
                                    </span>
                                    <span class="ms-auto">English</span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-clipboard-check fs-20"></i></span>
                                        <span class="fw-600">Lessons</span>
                                    </span>
                                    <span class="ms-auto">10</span>
                                </li>
                                <li class="pt-10px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-award fs-20"></i></span>
                                        <span class="fw-600">Certificate</span>
                                    </span>
                                    <span class="ms-auto">Yes</span>
                                </li>
                            </ul>
                            <div
                                class="text-white bg-dark-gray text-center border-radius-50px pt-10px pb-10px fs-18 fw-500 lh-34 w-100 mb-15px">
                                Price: $60</div>
                            <a href="demo-elearning-contact.html"
                                class="btn btn-extra-large btn-base-color btn-rounded btn-switch-text fw-600 left-icon w-100">
                                <span>
                                    <span><i class="feather icon-feather-thumbs-up"></i></span>
                                    <span class="btn-double-text" data-text="Enroll now">Enroll now</span>
                                </span>
                            </a>
                            <div class="elements-social social-icon-style-02 mt-20px">
                                <ul class="small-icon dark text-center">
                                    <li class="sm-mb-0"><a class="facebook" href="https://www.facebook.com/"
                                            target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="sm-mb-0"><a class="dribbble" href="http://www.dribbble.com"
                                            target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li class="sm-mb-0"><a class="twitter" href="https://www.twitter.com"
                                            target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="sm-mb-0"><a class="instagram" href="https://www.instagram.com"
                                            target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>


<section class="bg-tranquil overflow-hidden position-relative overlap-height">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center mb-2">
            <div class="col-xl-5 col-lg-6 text-center">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">Related courses</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-0 sm-ps-15px sm-pe-15px">
                <ul class="portfolio-wrapper grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="grid-sizer"></li>

                    <li class="grid-item design transition-inner-all">
                        <div
                            class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                            <div class="image">
                                <a href="demo-elearning-courses-details.html">
                                    <img src="{{asset('fend/images/demo-elearning-courses-01.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $55</div>
                                <div
                                    class="ps-40px pe-40px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Design</a><span
                                            class="fs-16">Matthew taylor</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="demo-elearning-courses-details.html"
                                            class="text-dark-gray fw-600 fs-19 lh-28 w-90">Business accounting and
                                            taxation fundamental</a>
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
                                    class="d-flex justify-content-center align-items-center ps-40px pe-40px xl-ps-25px xl-pe-25px pt-15px pb-20px">
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
                                <a href="demo-elearning-courses-details.html">
                                    <img src="{{asset('fend/images/demo-elearning-courses-02.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $65</div>
                                <div
                                    class="ps-40px pe-40px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Finance</a><span
                                            class="fs-16">Leonel mooney</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="demo-elearning-courses-details.html"
                                            class="text-dark-gray fw-600 fs-19 lh-28 w-90">Finance fundamentals of
                                            management and planning</a>
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
                                    class="d-flex justify-content-center align-items-center xl-ps-25px xl-pe-25px ps-40px pe-40px pt-15px pb-20px">
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
                                <a href="demo-elearning-courses-details.html">
                                    <img src="{{asset('fend/images/demo-elearning-courses-03.jpg')}}" alt>
                                </a>
                            </div>
                            <div class="bg-white position-relative">
                                <div
                                    class="bg-dark-gray w-80px h-80px rounded-circle d-flex justify-content-center align-items-center fw-500 text-white fs-20 position-absolute right-30px top-minus-40px">
                                    $80</div>
                                <div
                                    class="ps-40px pe-40px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px"><a href="demo-elearning-courses.html"
                                            class="text-dark-gray text-uppercase fs-15 fw-600 services-text">Design</a><span
                                            class="fs-16">Herman miller</span></span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="demo-elearning-courses-details.html"
                                            class="text-dark-gray fw-600 fs-19 lh-28 w-90">Introduction to
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
                                    class="d-flex justify-content-center align-items-center ps-40px pe-40px xl-ps-25px xl-pe-25px pt-15px pb-20px">
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

                </ul>
            </div>
        </div>
    </div>
</section>
@endsection