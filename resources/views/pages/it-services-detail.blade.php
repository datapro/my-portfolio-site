@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">We bring our client’s ideas to life and help businesses succeed.</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/it-services-detail')}}">Services</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="flat-it-services-banking flat-it-services-style5">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 col-12">
    <div class="image-about"><img src="{{asset('assets/images/services/test-center.jpg')}}" alt="images"></div>
    <div class="image-box d-lg-flex">
    <div class="image-left"><img src="{{asset('assets/images/services/Online.png')}}" alt="images"></div>
    <div class="image-right"><img src="{{asset('assets/images/services/corporate.png')}}" alt="images"></div>
    </div>
    </div>
    <div class="col-lg-5 col-12">
    <div class="flat-spacer" data-desktop="0" data-sdesktop="0" data-mobi="50" data-smobi="50"></div>
    <div class="text-content">
    <div class="it-services-banking">
    <h3 class="title title-big">Expert IT services for  <span class="cl-title">Software, Web, Graphic & Mobile Development and Corporate Branding</span></h3>
    <p>
        Make a smooth transition to the cloud. Integrate your existing technologies in a secure browser-based workspace. Save costs on infrastructure and licensing.
    </p>
    </div>
    <div class="it-services-banking">
    <h3 class="title">Front-line & remote workers</h3>
    <p>
        We conquer complexity allowing you to focus on the work that is important. From a highly personalised and adaptive workspace that automatically adjusts to your situation. 
    </p>
    </div>
    <div class="it-services-banking">
    <h3 class="title">Communication- & HR managers</h3>
    <p>
        Reach everyone in your organisation with personalised announcements. Bring your communications and collaboration to one workspace that people access throughout the day. Provide a digital smooth onboarding.
    </p>
    </div>
    </div>
    </div>
    </div>
    <br/>
    <div class="it-services-banking">
        <h1 class="title" style="text-align: center">Software Development Company</h1>
        <p style="text-align: center">
            SYSTEMTECH uses modern development platforms and tools as well as modern technologies and project management techniques to provide clients with necessary top-notch services to help clients rebrand and regain position in the competitive areas
             of business by updating and improving the business with information technology-based business solutions.
        </p>
        </div>
    <section class="features flat-row">
        <div class="container d-lg-flex">
        <div class="iconbox-features hv-background-before">
        <div class="iconbox-icon"><span class="icon-shield"></span></div>
        <div class="iconbox-content">
        <h3 class="title">Software Development</h3>
        <p>
            We design and develop software as a service (SaaS), mobile applications and custom enterpise software applications to suite and meet the needs 
            of your business day-to-day activities.
        </p>
        <div class="discover-more">
        <a href="{{url('/it-services')}}">Discover More</a>
        </div>
        </div>
        </div>
        <div class="iconbox-features hv-background-before active">
        <div class="iconbox-icon"><span class="icon-optimization"></span></div>
        <div class="iconbox-content">
        <h3 class="title">Web Design and Development</h3>
        <p>
            We build amazing mobile-friendly, clean and dynamic websites, 
            e-commerce website and custom web applications with 100% free support.
        </p>
        <div class="discover-more">
        <a href="{{url('/it-services')}}">Discover More</a>
        </div>
        </div>
        </div>
        <div class="iconbox-features hv-background-before">
        <div class="iconbox-icon"><span class="icon-alarm"></span></div>
        <div class="iconbox-content">
        <h3 class="title">Digital Enablement</h3>
        <p>
            We know that it all starts with a good first impression, we make the best exceptional designs and visual representation for your brand and identity.
             At a reduced cost, we create logos, flyers, among others.
        </p>
        <div class="discover-more">
        <a href="{{url('/it-services')}}">Discover More</a>
        </div>
        </div>
        </div>
        </div>
        </section>
        <div class="it-services-banking">
            <h1 class="title" style="text-align: center">Our Development Process</h1>
            <p style="text-align: center">
        SYSTEMTECH follows a proprietary process specifically designed to reduce common risks associated with any custom software development project. Retenvo’s dedicated team members pull from the best practices of both agile and waterfall to ensure 
        our clients’ projects remain as flexible as possible and costs stay within their dedicated budgets.
            </p>
            </div>
    <div class="row">
    <div class="col-md-6 col-12">
    <div class="iconbox-banking">
    <div class="iconbox-icon"><span class="icon-shield"></span></div>
    <div class="iconbox-content">
    <h4 class="title"><a href="#">Research</a></h4>
    <p>
        Before starting a project, we carry out research to understand the client needs and project requirement.
    </p>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-12">
    <div class="iconbox-banking">
    <div class="iconbox-icon"><span class="icon-network"></span></div>
    <div class="iconbox-content">
    <h4 class="title"><a href="#">Concept</a></h4>
    <p>
        Define project workflow for going live in minimum time.
    </p>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-12">
    <div class="iconbox-banking">
    <div class="iconbox-icon"><span class="icon-analysis"></span></div>
    <div class="iconbox-content">
    <h4 class="title"><a href="#">Develop</a></h4>
    <p>
        We develop the best solution which fulfils the client requirement.
    </p>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-12">
    <div class="iconbox-banking">
    <div class="iconbox-icon"><span class="icon-analytics"></span></div>
    <div class="iconbox-content">
    <h4 class="title"><a href="#">Test</a></h4>
    <p>
        Testing is an important phase of software development life cycle.
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <section class="fact-type2">
        <div class="container d-flex justify-content-lg-between justify-content-center flex-lg-nowrap flex-wrap">
        <div class="counter counter-type2">
        <div class="content-counter hv-background-before">
        <div class="icon-count"><span class="icon-team"></span></div>
        <div class="numb-count-wrap">
        <span class="numb-count" data-from="0" data-to="20" data-speed="2000" data-inviewport="yes">20</span>
        <span class="numb-plus">+</span>
        </div>
        <div class="name-count">Happy Clients</div>
        </div>
        </div>
        <div class="counter counter-type2">
        <div class="content-counter hv-background-before">
        <div class="icon-count"><span class="icon-portfolio"></span></div>
        <div class="numb-count-wrap">
        <span class="numb-count" data-from="0" data-to="10" data-speed="2000" data-inviewport="yes">10</span>
        </div>
        <div class="name-count">Finished Project</div>
        </div>
        </div>
        <div class="counter counter-type2">
        <div class="content-counter hv-background-before">
        <div class="icon-count"><span class="icon-observation"></span></div>
        <div class="numb-count-wrap">
        <span class="numb-count" data-from="0" data-to="100" data-speed="2000" data-inviewport="yes">100%</span>
        </div>
        <div class="name-count">Skilled Experts</div>
        </div>
        </div>
        <div class="counter counter-type2">
        <div class="content-counter hv-background-before">
        <div class="icon-count"><span class="icon-spam"></span></div>
        <div class="numb-count-wrap">
        <span class="numb-count" data-from="0" data-to="100" data-speed="2000" data-inviewport="yes">100</span>
        </div>
        <div class="name-count">Media Posts</div>
        </div>
        </div>
        </div>
    <div class="partners partners-style3">
    <div class="container">
    <div class="title-section text-center">
    <h2 class="flat-title">Many others partners<br> our global clients here</h2>
    </div>
    <div class="banners-z">
    <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="6" data-column2="5" data-column3="4" data-column4="2" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
    <div class="owl-carousel">
    <img src="{{asset('assets/images/partners/01.png')}}" alt="images">
    <img src="{{asset('assets/images/partners/02.png')}}" alt="images">
    <img src="{{asset('assets/images/partners/03.png')}}" alt="images">
    <img src="{{asset('assets/images/partners/04.png')}}" alt="images">
    <img src="{{asset('assets/images/partners/05.png')}}" alt="images">
    <img src="{{asset('assets/images/partners/06.png')}}" alt="images">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="cta">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-8 col-12">
    <div class="cta-content position-relative">
    <div class="caption">Are you ready for a better,</div>
    <div class="flat-spacer" data-desktop="10" data-sdesktop="10" data-mobi="10" data-smobi="10"></div>
    <h2 class="title">Stop wasting time & money on technology.</h2>
    </div>
    </div>
    <div class="col-lg-4 col-12">
    <div class="flat-contact-now">
    <a href="{{url('/contact')}}" class="border-corner">Contact Now<span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection