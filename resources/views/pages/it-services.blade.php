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
    <li><a href="i{{url('/it-services')}}">Services</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
   
        <div class="row">
        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="200ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">01.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_ecommerce_development.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">eCommerce Web Dev.</a></h3>
        <div class="link-arrow"><a href="{{url('/contact')}}"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="400ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">02.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_graphic_design.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">Graphic Design</a></h3>
        <div class="link-arrow"><a href="#"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12  wow fadeInUp" data-wow-delay="800ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">03.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_mobile_application_development.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">Mobile App Dev.</a></h3>
        <div class="link-arrow"><a href="{{url('/contact')}}"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="200ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">04.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_digital_marketing.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">Digital Marketing</a></h3>
        <div class="link-arrow"><a href="{{url('/contact')}}"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="400ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">05.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_software_development.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">Software Dev.</a></h3>
        <div class="link-arrow"><a href="{{url('/contact')}}"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="800ms">
        <div class="service-image-box2 hv-background-before">
        <div class="order-number">06.</div>
        <div class="featured-post">
        <div class="entry-image">
        <img src="{{asset('assets/images/services/services_web_design_and_development-2.png')}}" alt="images">
        </div>
        </div>
        <div class="content-service">
        <h3 class="title"><a href="{{url('/contact')}}">Web Design & Dev.</a></h3>
        <div class="link-arrow"><a href="{{url('/contact')}}"><span class="icon-arrow-pointing-to-right"></span></a></div>
        </div>
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
    <div class="testimonial testimonial-style4">
    <div class="container">
    <div class="title-section text-center">
    <p class="sub-title">Testimonial</p>
    <h2 class="flat-title">What do people praise<br> about <span class="cl-title">SystemTech?</span></h2>
    </div>
    <div class="custom-nav-testimonial">
    <div class="banners-z">
    <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="30" data-column="2" data-column2="1" data-column3="1" data-column4="1" data-column5="1" data-dots="false" data-auto="true" data-nav="true" data-loop="true">
    <div class="owl-carousel">
    <div class="testimonial-box-type2">
    <div class="endorser d-sm-flex align-items-center">
    <div class="avatar"><img src="{{asset('assets/images/testimonial/001.jpg')}}" alt="images"></div>
    <div class="info">
    <h3 class="name">Kang Qiang</h3>
    <p class="role">Marketing Officer</p>
    <div class="star-rating">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    </div>
    </div>
    </div>
    <div class="flat-spacer" data-desktop="199" data-sdesktop="20" data-mobi="20" data-smobi="20"></div>
    <div class="content-testimonial">
    <div class="text-bold"> “Systemtech was a great asset towards the execution of several projects we needed to take care of quickly. We were pleased with the services of the team – from the initial stage of analysis to the product delivery. </div>
    <p>
        It is delightful to have such a professional, knowledgeable and proactive business partner, and we highly recommend their service to you.”
    </p>
    <div class="socials-list bg-linear-gradient text-center">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="testimonial-box-type2">
    <div class="endorser d-sm-flex align-items-center">
    <div class="avatar"><img src="{{asset('assets/images/testimonial/002.jpg')}}" alt="images"></div>
    <div class="info">
    <h3 class="name">Tan Ruogang</h3>
    <p class="role">Marketing Officer</p>
    <div class="star-rating">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    </div>
    </div>
    </div>
    <div class="flat-spacer" data-desktop="199" data-sdesktop="20" data-mobi="20" data-smobi="20"></div>
    <div class="content-testimonial">
    <div class="text-bold">SYSTEMTECH has provided valuable guidance and technical expertise in the collaboration so far. Their workflow has been extremely effective, and they've proven to be very customer-oriented. </div>
    <p>
        While they could focus on further developing their internal workshops, they've been a pleasure to work with.
    </p>
    <div class="socials-list bg-linear-gradient text-center">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="testimonial-box-type2">
    <div class="endorser d-sm-flex align-items-center">
    <div class="avatar"><img src="{{asset('assets/images/testimonial/001.jpg')}}" alt="images"></div>
    <div class="info">
    <h3 class="name">Kang Qiang</h3>
    <p class="role">Marketing Officer</p>
    <div class="star-rating">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    </div>
    </div>
    </div>
    <div class="flat-spacer" data-desktop="199" data-sdesktop="20" data-mobi="20" data-smobi="20"></div>
    <div class="content-testimonial">
    <div class="text-bold"> “Systemtech was a great asset towards the execution of several projects we needed to take care of quickly. We were pleased with the services of the team – from the initial stage of analysis to the product delivery. </div>
    <p>
        It is delightful to have such a professional, knowledgeable and proactive business partner, and we highly recommend their service to you.”
    </p>
    <div class="socials-list bg-linear-gradient text-center">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="partners partners-style2">
    <div class="container">
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
    @endsection