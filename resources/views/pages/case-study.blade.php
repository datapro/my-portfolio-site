@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Case Study</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/case-study')}}">Case study</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="flat-case-study flat-case-study-type4 flat-case-study-style4">
    <div class="container">
    <div class="case-study border-corner">
    <ul class="flat-filter-isotope d-flex justify-content-lg-between justify-content-center flex-lg-nowrap flex-wrap">
    <li class="active"><a href="#" data-filter="*">All Case</a></li>
    <li><a href="#" data-filter=".IT-Industry">IT Industry</a></li>
    <li><a href="#" data-filter=".Cyber-Security">Cyber Security</a></li>
    <li><a href="#" data-filter=".Cloud-Services">Cloud Services</a></li>
    </ul>
    </div><!--
    <div class="flat-cases clearfix isotope-case">
    <div class="case clearfix IT-Industry Cyber-Security">
    <div class="flat-case border-corner">
    <div class="case-content">
     <p>Cyber Security</p>
    <h3 class="title"><a href="#">Inernal Networking</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/01.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    <div class="case clearfix Cyber-Security Cloud-Services">
    <div class="flat-case border-corner">
    <div class="case-content">
    <p>Business Reform</p>
    <h3 class="title"><a href="#">Innovation partnership</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/02.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    <div class="case clearfix IT-Industry Cyber-Security Cloud-Services">
    <div class="flat-case border-corner">
    <div class="case-content">
    <p>Data & Analytics</p>
    <h3 class="title"><a href="#">Research and Energy</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/03.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    <div class="case clearfix Cyber-Security Cloud-Services">
    <div class="flat-case border-corner">
    <div class="case-content">
    <p>Cyber Security</p>
    <h3 class="title"><a href="#">IT helpdesk support</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/04.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    <div class="case clearfix Cyber-Security">
    <div class="flat-case border-corner">
    <div class="case-content">
    <p>Business Reform</p>
    <h3 class="title"><a href="#">Software development</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/05.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    <div class="case clearfix IT-Industry Cyber-Security Cloud-Services">
    <div class="flat-case border-corner">
    <div class="case-content">
     <p>Data & Analytics</p>
    <h3 class="title"><a href="#">Firewall Advancement</a></h3>
    </div>
    <div class="featured-post">
    <div class="entry-image bg-linear-gradient position-relative">
    <img src="{{asset('assets/images/case/06.jpg')}}" alt="images">
    <a href="#" class="arrow-link"><span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="get-in-touch-type2 get-in-touch-style4 parallax parallax2 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container position-relative">
    <div class="title-section text-center">
    <p class="sub-title">Contact US</p>
    <h2 class="flat-title text-white">Get in touch<br> We’ll help your <span class="cl-title">IT solution</span></h2>
    </div>
    <form id="contactform" action="http://themesflat.com/html/softo/contact/contact-process.php" method="post" class="form-git form-submit">
    <div class="row">
    <div class="col-lg-6">
    <div class="text-wrap">
    <input type="text" name="firstname" id="firstname" value="" class="firstname" placeholder="First Name">
    <input type="text" name="lastname" id="lastname" value="" class="lastname" placeholder="Last Name">
    <input type="text" name="email" id="email" value="" class="email" placeholder="Email Address">
    <input type="text" name="phone" id="phone" value="" class="phone" placeholder="Phone No.">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="wrap-message mg-b20">
    <textarea name="message" id="comment-message" rows="8" placeholder="Message here" required="required"></textarea>
    </div>
    <div class="flat-send-message btn-linear hv-linear-gradient">
    <button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">send message now</button>
    </div>
    </div>
    </div>
    </form>
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
    <a href="#" class="border-corner">Contact Now<span class="icon-arrow-pointing-to-right"></span></a>
    </div>
    --> 
    </div>
    </div>
    </div>
    </div> 
@endsection