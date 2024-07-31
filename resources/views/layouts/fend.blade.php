
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <title>MuchLearn - The Ultimate LMS</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="MuchLearn Inc.">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Online learning management system.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('fend/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('fend/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('fend/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('fend/images/apple-touch-icon-114x114.png')}}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="{{asset('fend/css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('fend/css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('fend/css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('fend/css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('fend/demos/elearning/elearning.css')}}" />
    </head>
    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#313e3b">  
        <!-- start header -->
        <header> 
            @include('layouts.fend.portials.navigation')
        </header>
        @if($tagline == "News Title")
        @else
        @include('layouts.fend.portials.pagetitle')
        @endif
        @yield('content')
        @include('layouts.fend.portials.footer')
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <script type="text/javascript" src="{{asset('fend/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('fend/js/vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('fend/js/main.js')}}"></script>
        @yield('scripts')
    </body>
</html>