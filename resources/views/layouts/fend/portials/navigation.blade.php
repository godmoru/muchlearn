<nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
    <div class="container-fluid">
        <div class="col-auto col-lg-2 me-lg-0 me-auto">
            <a class="navbar-brand" href="demo-elearning.html">
                <img src="{{ asset('fend/images/demo-elearning-logo-white.png')}}" data-at2x="images/demo-elearning-logo-white@2x.png" alt="" class="default-logo">
                <img src="{{ asset('fend/images/demo-elearning-logo-black.png')}}" data-at2x="images/demo-elearning-logo-black@2x.png" alt="" class="alt-logo">
                <img src="{{ asset('fend/images/demo-elearning-logo-black.png')}}" data-at2x="images/demo-elearning-logo-black@2x.png" alt="" class="mobile-logo">
            </a>
        </div>
        <div class="col-auto menu-order position-static">
            <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav alt-font">
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{route('about-us')}}" class="nav-link">About</a></li>
                    <li class="nav-item dropdown dropdown-with-icon">
                        <a href="{{route('courses')}}" class="nav-link">Courses</a>
                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a href="{{route('courses')}}"><i class="bi bi-laptop"></i>
                                    <div class="submenu-icon-content">
                                        <span>Development</span>
                                        <p>Develop professional skills</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('courses')}}"><i class="bi bi-briefcase"></i>
                                    <div class="submenu-icon-content">
                                        <span>Business</span>
                                        <p>Advance your business</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('courses')}}"><i class="bi bi-vector-pen"></i>
                                    <div class="submenu-icon-content">
                                        <span>Design</span>
                                        <p>Design skills & concepts</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('courses')}}"><i class="bi bi-megaphone"></i>
                                    <div class="submenu-icon-content">
                                        <span>Marketing</span>
                                        <p>New age marketing skills</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('instructors.all')}}" class="nav-link">Instructors</a></li>
                    <li class="nav-item"><a href="{{route('testimonials.all')}}" class="nav-link">Testimonial</a></li>
                    <li class="nav-item"><a href="{{route('news.blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
            <div class="header-icon">
                <div><div class="alt-font fw-500 lg-fs-15"><a href="tel:1800222000" class="widget-text text-white-hover"><i class="feather icon-feather-phone-call me-10px lg-me-5px"></i>1 800 222 000</a></div></div>
            </div>
        </div>
    </div>
</nav>