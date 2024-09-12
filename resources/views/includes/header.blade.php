<body class="counter-scroll">
<div id="loading-overlay">
<div class="loader"></div>
</div>
<div class="top-bar top-bar-type1">
<div class="container">
<div class="row">
<div class="col-md-8 col-12 d-lg-flex align-items-center">
<ul class="flat-information flat-information-type1">
<li class="phone"><a href="{{url('/contact')}}" title="Phone">+234 703 244 6095</a></li>
<li class="email"><a href="#" title="Email"><span class="__cf_email__" data-cfemail="c9baa6afbdaaa8baac89aea4a8a0a5e7aaa6a4">datapro2014@gmail.com</span></a></li>
<li class="email"><a href="#" title="Email"><span class="__cf_email__" data-cfemail="c9baa6afbdaaa8baac89aea4a8a0a5e7aaa6a4">sales@systech.com.ng</span></a></li>
</ul>
</div>
<div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
<div id="quik-search-btn" class="show-search">
<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
</div>
<div class="dlab-quik-search">
<form action="#">
<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
<span id="quik-search-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
</form>
</div>
<div class="language-name">
<a href="#">Login</a>
<ul class="list-chooser">
<li><a href="#" class="active">Login</a></li>
<li>    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif</li>

</ul>
</div>
</div>
</div>
</div>
</div>
<header id="header" class="header header-type1 bg-header-s1 bg-color">
<div class="container">
<div class="flex-header d-flex">
<div id="logo" class="logo d-flex align-items-center justify-content-start">
<a href="{{url('/')}}" title="Logo"><img src="{{asset('assets/images/logo/log.png')}}" data-width="168" data-height="38" alt="images" data-retina="{{asset('assets/images/logo/log.png')}}"></a>
</div>
<div class="content-menu d-flex align-items-center justify-content-end">
<div class="nav-wrap">
<div class="btn-menu"><span></span></div>
<nav id="mainnav" class="mainnav">
<ul class="menu">
<li>
<a href="{{url('/')}}" class="active">Home</a>
<!--<ul class="sub-menu">
<li><a href="index-2.html" class="active">Home 1</a></li>
<li><a href="home2.html">Home 2</a></li>
 <li><a href="home3.html">Home 3</a></li>
</ul>-->
</li>
<li>
    <a href="{{url('/about-us')}}">About</a>
</li>
<li>
<a href="#">IT Services</a>
<ul class="sub-menu">
<li><a href="{{url('/it-services')}}">IT Services</a></li>
<li><a href="{{url('/it-services-detail')}}">IT Services details</a></li>
</ul>
</li>
<li>
<a href="#">Case study</a>
<ul class="sub-menu">
<li><a href="{{url('/case-study')}}">Case study</a></li>
<li><a href="{{url('/case-study-detail')}}">Case details</a></li>
</ul>
</li>
<li>
<a href="#">Blog</a>
<ul class="sub-menu">
<li><a href="{{url('/blog')}}">Blog</a></li>
<!--<li><a href="{{url('/blog-detail')}}">Blog details</a></li>-->
</ul>
</li>
<!--
<li>
<a href="#">Pages</a>
<ul class="sub-menu">
<li><a href="about-us.html">About</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="team-members.html">Team members</a></li>
</ul>
</li>
-->
<li>
<a href="{{url('/contact')}}">Contact</a>
</li>
</ul>
</nav>
</div>
<div class="flat-appointment btn-linear hv-linear-gradient">
<a href="{{url('/request')}}" class="font-style linear-color border-corner">REQUEST A QUOTE</a>
</div>
</div>
</div>
</div>
</header>