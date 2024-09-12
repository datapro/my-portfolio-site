<footer id="footer" class="footer footer-bg-3">
<div class="overlay"></div>
<div id="footer-widget" class="footer-widget-type2">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="widget-text">
<div class="logo"><img src="{{asset('assets/images/logo/log1.png')}}" alt="images"></div>
<p>
    SYSTEMTECH is a next-generation global technology company providing innovative, cost-effective and scalable software development, web design and development, mobile application development, software as a service (SaaS), 
    graphic design and corporate branding services to small and large scale businesses.
</p>
<div class="socials-list">
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="col-lg-5 col-md-6">
<div class="mg-widget-mobi kcl-widget2">
<h3 class="widget widget-title">All IT Services</h3>
<div class="widget-services d-sm-flex">
<ul class="one-half first">
<li><a href="#">Managed IT</a></li>
<li><a href="#">IT Support</a></li>
<li><a href="#">IT Consultancy</a></li>
<li><a href="#">Cloud Computing</a></li>
<li><a href="#">Cyber Security</a></li>
<li><a href="#">Custom Software</a></li>
<li><a href="#">Software and Mobile App Dev.</a></li>
<li><a href="#">Graphic Design and Branding</a></li>
</ul>
<ul class="one-half second">
<li><a href="#">Banking</a></li>
 <li><a href="#">Capital Markets</a></li>
<li><a href="#">Enter Technology</a></li>
<li><a href="#">Manufacturing</a></li>
<li><a href="#">Healthcare</a></li>
<li><a href="#">Higher Education</a></li>
<li><a href="#">eCommerce Website Dev.</a></li>
<li><a href="#">Digital Marketing</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">

<div class="mg-widget-mobi kcl-widget">
<h3 class="widget widget-title">Lastest News</h3>
<div class="widget-latest-news">
<ul>     
<li>

<div class="thumb-image">
    @foreach ($articles as $article) 
<img src="{{ asset('storage/picture/'.$article->picture) }}" alt="images" height="50px" width="100px">

</div>
<div class="thumb-content">
<h4 class="thumb-title"><a href="#">{{$article->title}}</a></h4>
<p class="thumb-day">{{$article->created_at}}</p>
@endforeach

</div>

</li>
<!--<li>
<div class="thumb-image">
<img src="{{asset('assets/images/footer/02.jpg')}}" alt="images">
</div>
<div class="thumb-content">
<h4 class="thumb-title"><a href="#">Improving lives technology lighthouse project</a></h4>
<p class="thumb-day">May 25, 2020</p>
</div>
</li>
<li>
<div class="thumb-image">
<img src="{{asset('assets/images/footer/03.jpg')}}" alt="images">
</div>
<div class="thumb-content">
<h4 class="thumb-title"><a href="#">Improving lives technology lighthouse project</a></h4>
<p class="thumb-day">May 25, 2020</p>
</div>
</li>-->
</ul> 

</div>
</div>
</div>
</div>
</div>
</div>
<div id="bottom" class="bottom-type3 position-relative">
<div class="container">
<div class="bottom-wrap text-center">
<div id="copyright">
<a href="#">Copyright © 2022 SystemTech.</a><span class="license"> All Rights Reserved</span>
</div>
</div>
</div>
</div>
<a id="scroll-top" class="show"></a>
</footer>
<script data-cfasync="false" src="{{asset('assets/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
<script src="{{asset('assets/javascript/parallax.js')}}"></script>
<script src="{{asset('assets/javascript/plugins.js')}}"></script>
<script src="{{asset('assets/javascript/jquery-ui.js')}}"></script>
<script src="{{asset('assets/javascript/gmap3.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
<script src="{{asset('assets/javascript/jquery-isotope.js')}}"></script>
<script src="{{asset('assets/javascript/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/javascript/equalize.min.js')}}"></script>
<script src="{{asset('assets/javascript/jquery-fancybox.js')}}"></script>
<script src="{{asset('assets/javascript/jquery-countTo.js')}}"></script>
<script src="{{asset('assets/javascript/flex-slider.min.js')}}"></script>
 <script src="{{asset('assets/javascript/wow.min.js')}}"></script>
<script src="{{asset('assets/javascript/jquery-validate.js')}}"></script>
<script src="{{asset('assets/javascript/main.js')}}"></script>

<script src="{{asset('assets/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/javascript/rev-slider.js')}}"></script>

<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js')}}"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+2348026931519", // WhatsApp number
            call_to_action: "Enquiry or quote chat us or click Request Quote", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->