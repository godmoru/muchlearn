@extends('layouts.fend')
@section('content')
<section class="overflow-hidden position-relative overlap-height">
        <div class="container overlap-gap-section">
            <div class="row align-items-end justify-content-center mb-8 sm-mb-50px">
                <div class="col-xl-5 col-lg-6 col-md-9 position-relative md-mb-50px sm-mb-35px text-center text-lg-start"
                    data-anime="{ &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="icon-with-text-style-08 mb-20px d-inline-block">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-yellow me-15px">
                                <i class="bi bi-people d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span
                                    class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Experienced
                                    instructors</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px w-90 mb-15px xl-w-100">We've amazing skills
                        for teaching.</h2>
                    <p class="m-0 w-80 xl-w-100">Lorem ipsum is simply dummy of the printing and typesetting industry
                        lorem ipsum.</p>
                </div>
                <div
                    class="col-xl-5 col-lg-6 col-md-10 offset-xl-2 position-relative text-center text-lg-start mt-minus-1">
                    <div class="row row-cols-1 row-cols-sm-2"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                        <div class="col xs-mb-40px">
                            <div class="chart-percent mb-15px">
                                <span
                                    class="pie-chart-style-01 d-flex align-items-center justify-content-center text-center"
                                    data-size="170" data-line-width="7" data-percent="90" data-track-color="#f3f8f8"
                                    data-start-color="#18473c" data-end-color="#d5d52b">
                                    <span
                                        class="percent d-flex align-items-center justify-content-center alt-font fs-40 ls-minus-05px text-dark-gray fw-700"></span>
                                </span>
                            </div>
                            <div class="chart-text text-center fs-18 ls-minus-05px text-dark-gray fw-600">Value for
                                results</div>
                        </div>


                        <div class="col">
                            <div class="chart-percent mb-15px">
                                <span
                                    class="pie-chart-style-01 d-flex align-items-center justify-content-center text-center"
                                    data-size="170" data-line-width="7" data-percent="95" data-track-color="#f3f8f8"
                                    data-start-color="#18473c" data-end-color="#d5d52b">
                                    <span
                                        class="percent d-flex align-items-center justify-content-center alt-font fs-40 ls-minus-05px text-dark-gray fw-700"></span>
                                </span>
                            </div>
                            <div class="chart-text text-center fs-18 ls-minus-05px text-dark-gray fw-600">Global
                                experience</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [0, 0], &quot;perspective&quot;: [800,800], &quot;scale&quot;: [1.1, 1], &quot;rotateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col text-center team-style-05 mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-08.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Jessica dover</div>
                    <span class="fs-16">Director</span>
                </div>


                <div class="col text-center team-style-05 mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-09.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Jeremy dupont</div>
                    <span class="fs-16">Researcher</span>
                </div>


                <div class="col text-center team-style-05 mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-10.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Johncy parker</div>
                    <span class="fs-16">English teacher</span>
                </div>


                <div class="col text-center team-style-05 md-mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-11.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Matthew taylor</div>
                    <span class="fs-16">Design teacher</span>
                </div>


                <div class="col text-center team-style-05 md-mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-26.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Michal ruheen</div>
                    <span class="fs-16">Assistant teacher</span>
                </div>


                <div class="col text-center team-style-05 md-mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-27.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Jeremy smith</div>
                    <span class="fs-16">Spanish teacher</span>
                </div>


                <div class="col text-center team-style-05 xs-mb-45px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-28.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Herman miller</div>
                    <span class="fs-16">Financial expert</span>
                </div>


                <div class="col text-center team-style-05">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <img src="{{asset('fend/images/team-29.jpg')}}" alt />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-35px lg-p-20px team-content bg-gradient-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px">Bryan jonhson</div>
                    <span class="fs-16">Personal consultant</span>
                </div>

            </div>
        </div>
    </section>
@endsection