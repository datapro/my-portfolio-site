@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Case Details</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/case-study-detail')}}">Case study</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <!--
    <div class="flat-case-details">
    <div class="container">
    <div class="bg-case-details border-corner">
    <div class="case-details border-corner">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/case/07.jpg')}}" alt="images">
    </div>
    </div>
    <h3 class="title">Cloud migration saves money for health insurer.</h3>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system, or e-learning system, already set up. Having learning management system meant that their staff already knew the benefits of learning online. The next step was to find the right partner provide the content the company needed. To get Vodafone started, The Digital Marketing Institute began by carefully picking topics and courses that were most relevant to Vodafone and their staff. They then agreed a global user license that gave Vodafone’s staff access to 15 of the DMI modules. Their staff could choose from modules.
    </p>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system, or e-learning system, already set up. Having learning management system meant that their staff already knew the benefits of learning online. The next step was to find the right partner provide the content the company needed. To get Vodafone started.
    </p>
    </div>
    <div class="info-case-details border-corner info-case-details border-corner justify-content-lg-between justify-content-center d-flex flex-lg-nowrap flex-wrap">
    <div class="f-item">
    <div class="name">Clients:</div>
    <h5 class="text">Guo Lingxin</h5>
    </div>
    <div class="f-item">
    <div class="name">Industry:</div>
    <h5 class="text">Retail Industry</h5>
    </div>
    <div class="f-item">
    <div class="name">Servicea:</div>
    <h5 class="text">IT Consulting</h5>
    </div>
    <div class="f-item">
    <div class="name">Website:</div>
    <h5 class="text">www.softo.com</h5>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
    <div class="case-details-desc">
    <h4 class="text-title">Challenge</h4>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system, or e-learning system, already are learning management system meant that their staff already knew thes benefits of learning online. The next step was to find the right partner provide the content.
    </p>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <div class="case-details-desc">
    <h4 class="text-title">Solution</h4>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system, or e-learning system, already are learning management system meant that their staff already knew thes benefits of learning online. The next step was to find the right partner provide the content.
    </p>
    </div>
    </div>
    </div>
    <div class="case-details-desc">
    <h4 class="text-title">Results</h4>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system, or e-learning system, already set up. Having learning management system meant that their staff already knew the benefits of learning online. The next step was to find the right partner provide the content the company needed. To get Vodafone started, The Digital Marketing Institute began by carefully picking topics and courses that were most relevant to Vodafone and their staff. They then agreed a global user license that gave Vodafone’s staff access to 15 of the DMI modules. Their staff could choose from modules.
    </p>
    </div>
    <div class="navigation mg-t43">
    <ul class="nav-links d-md-flex">
    <li class="previous d-flex align-items-center">
    <div class="name-nav">Managed IT</div>
    </li>
    <li class="next d-flex align-items-center justify-content-end">
     <div class="name-nav">Cyber security</div>
    </li>
    </ul>
    </div>
    </div>
    <div class="related-project related-project-transform">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
    <div class="service-image-box border-corner">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/services/01.jpg')}}" alt="images">
    <div class="icon-service"><span class="icon-shield"></span></div>
    <div class="spinning-circle"></div>
    </div>
    </div>
    <div class="content-service">
    <h3 class="title"><a href="#">Cyber Security</a></h3>
    <p>Protect your business from malware, hackers, viruses security.</p>
    <div class="link-arrow"><a href="#"><span class="icon-arrow-pointing-to-right"></span></a></div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="service-image-box border-corner">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/services/02.jpg')}}" alt="images">
    <div class="icon-service"><span class="icon-process"></span></div>
    <div class="spinning-circle"></div>
    </div>
    </div>
    <div class="content-service">
    <h3 class="title"><a href="#">Managed IT</a></h3>
    <p>Protect your business from malware, hackers, viruses security.</p>
    <div class="link-arrow"><a href="#"><span class="icon-arrow-pointing-to-right"></span></a></div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="service-image-box border-corner">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/services/03.jpg')}}" alt="images">
    <div class="icon-service"><span class="icon-network"></span></div>
    <div class="spinning-circle"></div>
    </div>
    </div>
    <div class="content-service">
    <h3 class="title"><a href="#">IT Consultancy</a></h3>
    <p>Protect your business from malware, hackers, viruses security.</p>
    <div class="link-arrow"><a href="#"><span class="icon-arrow-pointing-to-right"></span></a></div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="service-image-box border-corner">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/services/04.jpg')}}" alt="images">
    <div class="icon-service"><span class="icon-function-setting"></span></div>
    <div class="spinning-circle"></div>
    </div>
    </div>
    <div class="content-service">
    <h3 class="title"><a href="#">Hosting & Cloud</a></h3>
    <p>Protect your business from malware, hackers, viruses security.</p>
    <div class="link-arrow"><a href="#"><span class="icon-arrow-pointing-to-right"></span></a></div>
    </div>
-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
@endsection