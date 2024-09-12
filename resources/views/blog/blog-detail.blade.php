@include('includes.head')

<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div id="abc">
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Blog Details</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/blog')}}">Blog</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="blog-content no-column flat-row clearfix">
    <div class="container d-lg-flex">
    <div class="col-left">
    <article class="main-post">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{ asset('storage/picture/'.$articles->picture) }}" alt="images">
    </div>
    </div>
    <div class="content-blog content-blog-single">
    <ul class="post-meta d-sm-flex">
    <li class="author"><a href="{{url('/blog')}}">{{$articles->usertype}}</a></li>
    <li class="date"><span>{{$articles->created_at}}</span></li>
    </ul>
    <h2 class="title"><a href="{{url('/blog')}}">{{$articles->title}}</a></h2>
    <p>
        {{$articles->body}}
    </p>

    <div class="tags-bar d-md-flex justify-content-between align-items-center">
    <div class="tags-list tags-list bg-linear-gradient">
    <a href="#">Managed</a>
    <a href="#">Corporate</a>
    <a href="#">Business</a>
    </div>
    <div class="socials-list">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
    </div>
    </div>
    </article>
<!--
    <div class="comments-area">
    <div class="comments">
    <h2 class="title">Comments</h2>
    <ul class="comments-list">
    <li>
    <div class="comment-wrap">
    <div class="avatar">
    <img src="{{asset('assets/images/blog/05.jpg')}}" alt="images">
    </div>
    <div class="comment-content">
    <div class="comment-meta d-sm-flex">
    <h3 class="name">Zhang Chen</h3>
    <div class="date">02 January, 2020</div>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <div class="comment-reply bg-linear-gradient">
    <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Reply</a>
    </div>
    </div>
    </div>
    <ul class="sub-comment">
    <li>
    <div class="comment-wrap">
    <div class="avatar">
    <img src="{{asset('assets/images/blog/05.jpg')}}" alt="images">
    </div>
    <div class="comment-content">
    <div class="comment-meta d-sm-flex">
    <h3 class="name">Tao Ruog</h3>
    <div class="date">02 January, 2020</div>
    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullam laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <div class="comment-reply bg-linear-gradient">
    <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Reply</a>
    </div>
    </div>
    </div>
    </li>
    <li>
    <div class="comment-wrap">
    <div class="avatar">
    <img src="{{asset('assets/images/blog/05.jpg')}}" alt="images">
    </div>
    <div class="comment-content">
    <div class="comment-meta d-sm-flex">
    <h3 class="name">Hou Yong</h3>
    <div class="date">02 January, 2020</div>
     </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullam laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <div class="comment-reply bg-linear-gradient">
    <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Reply</a>
    </div>
    </div>
    </div>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
    <div class="leave-comment">
    <div class="comment-respond">
    <h4 class="title">Leave a comment</h4>
    <form id="contactform" action="{{url('/blog-detail/{id}')}}" method="post" class="form-leave-comment form-submit">
    @csrf
    
    <div class="text-wrap d-md-flex clearfix">
    <div class="w-left position-relative">
    <input type="text" name="postname" id="firstname" value="" class="firstname" placeholder="Name*">
    <span class="icon-user"></span>
    </div>
    <div class="w-right position-relative">
    <input type="text" name="email" id="email" value="" class="email" placeholder="Email">
    <span class="fa fa-envelope" aria-hidden="true"></span>
    </div>
    </div>
    <div class="message-wrap mg-b40">
    <textarea name="comment" id="comment-message" rows="8" placeholder="Message here" required="required"></textarea>
    </div>
    <div class="flat-send-message btn-linear hv-linear-gradient">
    <button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">send message</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    <div class="col-right">
    <div class="sidebar">
    <div class="widget widget-search">
    <form action="#" class="form-search btn-linear hv-linear-gradient">
    <input type="text" class="search" placeholder="Search here">
    <button class="btn-search linear-color"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    </div>
<div class="widget widget-category widget-bg">
    <h2 class="widget-title">category</h2>
    <ul class="category-wrap">   
        <li>
          
      
    <div class="block-inside border-corner hv-background-before"> 
        <a href="#">
            {{ \Illuminate\Support\Str::limit($articles->title, 10, '...') }}
        </a>
        </div>
        </li>

    </ul>   
</div>

    <div class="widget widget-recent-posts widget-bg">
    <h2 class="widget-title">recent posts</h2>
    <ul class="recent-news">   
    <div class="thumb-image">
    <img src="{{ asset('storage/picture/'.$articles->picture) }}" alt="images">
    </div>
    <div class="thumb-content clearfix">
    <h3 class="thumb-title"><a href="#">{{$articles->title}}</a></h3>
    <p class="thumb-day">{{$articles->created_at}}</p>
    </div>
 </li>

    </ul>
    </div>
    
    <div class="widget widget-tags widget-bg">
    <h2 class="widget-title">tags</h2>
    <div class="tags-list bg-linear-gradient">
    <a href="#">business</a>
    <a href="#">agency</a>
    <a href="#">agency</a>
    <a href="#">business</a>
    <a href="#">business</a>
    <a href="#">agency</a>
    </div>
    -->
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
