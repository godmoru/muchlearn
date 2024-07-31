@extends('layouts.fend')
@section('content')

<section class="bg-gradient-tranquil-white overflow-hidden overlap-height position-relative">
    <div class="container overlap-gap-section">
        <div class="row mb-4 md-mb-6">
            <div class="col-12">
                <ul class="blog-masonry blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="grid-sizer"></li>

                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-05.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Andy glamer</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">65</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-07.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">How
                                        to evaluate the effective of training programs.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-04.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Den viliamson</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">35</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-08.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Experience
                                        the breathtaking views and perspectives.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-03.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Jones robbert</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">58</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-09.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Build
                                        up healthy habits and strong peaceful life.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-05.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Andy glamer</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">58</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-01.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Some
                                        people just try to celebrate the joys of life.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-01.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Andy glamer</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">23</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-02.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">No
                                        matter what you're feeling or experiencing.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-02.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Rosald smith</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">45</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-03.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Teamwork
                                        is essential for small teams to challenges.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-04.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Den viliamson</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">35</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-04.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Many
                                        focus on embracing what they can control.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-04.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Den viliamson</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">65</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-05.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Sometimes
                                        we're tested not to show our weaknesses.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="card-top d-flex align-items-center">
                                <a href="demo-elearning-blog.html"><img src="{{asset('fend/images/avtar-04.jpg')}}" class="avtar"
                                        alt></a>
                                <span class="fs-16">By <a href="demo-elearning-blog.html"
                                        class="text-dark-gray fw-600">Jones robbert</a></span>
                                <div class="like-count ms-auto fs-14">
                                    <a href="#"><i class="fa-regular fa-heart text-red d-inline-block"></i><span
                                            class="text-dark-gray fw-600">58</span></a>
                                </div>
                            </div>
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"><img
                                        src="{{asset('fend/images/demo-elearning-blog-06.jpg')}}" alt /></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="post-content p-11 md-p-9">
                                    <a href="{{route('news.blog.show', \Crypt::encrypt(123))}}"
                                        class="card-title mb-10px fw-600 fs-19 lh-28 text-dark-gray d-inline-block">Good
                                        design is obvious great design transparent.</a>
                                    <p class="mb-0">Lorem ipsum has been industry standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <ul class="pagination pagination-style-01 fs-13 mb-0 fw-500"
                    data-anime="{ &quot;translate&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
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