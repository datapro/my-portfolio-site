@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Contact Us</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="contact flat-row-half">
    <div class="container">
    <div class="row">
    <div class="col-lg-5">
    <div class="get-in-touch get-in-touch-type1">
    <div class="text-contact">Don’t hesitate to <a href="#">contact us for any information.</a></div>
    <div class="info-contact">
    <p>+234 7032 446 095</p>
        <p><a href="" class="__cf_email__" data-cfemail="65161015150a17115751250208040c094b060a08">sales@systech.com.ng</a></p>
    <p>Address: 2 Yusuf Olabamiji Street,Ayobo, Lagos, Nigeria. </p>
     </div>
    </div>
    </div>
    <div class="col-lg-7">
    <form id="" action="contact" method="post" class="form-leave-comment form-submit">
        
        @csrf
    <div class="text-wrap d-md-flex clearfix">
    <div class="w-left position-relative">
    <input type="text"  id="firstname" value="" class="firstname" placeholder="Name*" name="name">
    <span class="icon-user"></span>
    </div>
    <div class="w-right position-relative">
    <input type="text" id="email" value="" class="email" placeholder="Email" name="email">
    <span class="fa fa-envelope" aria-hidden="true"></span>
    </div>
    </div>
    <div class="message-wrap mg-b50">
    <textarea  id="comment-message" rows="8" placeholder="Message here" required="required" name="message"></textarea>
    </div>
    <div class="flat-send-message btn-linear hv-linear-gradient text-center">
        @include('inc.messages')
    <button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">send message now</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>


@endsection