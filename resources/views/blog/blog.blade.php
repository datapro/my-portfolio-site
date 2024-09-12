@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Blog Post</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/blog')}}">Blog</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>

    <div class="blog-content no-column flat-row clearfix">
    <div class="container d-lg-flex">
    <div class="col-left">
    <div class="site-content">
    <article class="main-post mg-blog">
         @if(count($articles)>0)
        @foreach ($articles as $article)
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{ asset('storage/picture/'.$article->picture) }}" alt="images" height="" width="">
    </div>
    </div>
    <div class="content-blog">
    <ul class="post-meta d-sm-flex">
    <li class="author"><a href="{{asset('/blog-detail/'.$article->id)}}">{{ $article->usertype }}</a></li>
    <li class="date"><span>{{ $article->created_at}}</span></li>
    </ul>
    <h2 class="title"><a href="{{asset('/blog-detail/'.$article->id)}}">{{ $article->title }}</a></h2>
    <p>
        
        {{ \Illuminate\Support\Str::limit($article->body, 500, '...') }}
        @if (strlen(strip_tags($article->body)) > 500)
    </p>
        <div class="flat-read-more bg-linear-gradient">
        ... <a href="{{asset('/blog-detail/'.$article->id)}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      @endif  
    </div>
    </div>
     @endforeach
    @endif
    </article>

<!--<article class="main-post mg-blog">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/blog/01.jpg')}}" alt="images">
    </div>
    </div>
    <div class="content-blog">
    <ul class="post-meta d-sm-flex">
    <li class="author"><a href="#">By David Arham</a></li>
    <li class="date"><span>02 January, 2020</span></li>
    </ul>
    <h2 class="title"><a href="#">Commonly used in the graphic, print, & publishing industries for previewing layouts and visual mockups.</a></h2>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system findation learning syeitem already set up. Having learning management system meant that their staff already knew the benefits learning online next step was to find the right partner provide.
    </p>
    <div class="flat-read-more bg-linear-gradient">
    <a href="#">read more<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
</article>  -->
<!--<article class="main-post mg-blog">
    <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/blog/07.jpg')}}" alt="images">
    </div>
    </div>
    <div class="content-blog">
    <ul class="post-meta d-sm-flex">
    <li class="author"><a href="#">By David Arham</a></li>
    <li class="date"><span>02 January, 2020</span></li>
    </ul>
    <h2 class="title"><a href="#">Commonly used in the graphic, print, & publishing industries for previewing layouts and visual mockups.</a></h2>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system findation learning syeitem already set up. Having learning management system meant that their staff already knew the benefits learning online next step was to find the right partner provide.
    </p>
    <div class="flat-read-more bg-linear-gradient">
    <a href="#">read more<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
</article>  -->
<!--<article class="main-post mg-blog">
 <div class="featured-post">
    <div class="entry-image">
    <img src="{{asset('assets/images/blog/08.jpg')}}" alt="images">
    </div>
 </div>
    <div class="content-blog">
     <ul class="post-meta d-sm-flex">
    <li class="author"><a href="#">By David Arham</a></li>
    <li class="date"><span>02 January, 2020</span></li>
    </ul>
    <h2 class="title"><a href="#">Commonly used in the graphic, print, & publishing industries for previewing layouts and visual mockups.</a></h2>
    <p>
    Fortunately the Vodafone Marketing Academy had a learning management system findation learning syeitem already set up. Having learning management system meant that their staff already knew the benefits learning online next step was to find the right partner provide.
    </p>
    <div class="flat-read-more bg-linear-gradient">
    <a href="#">read more<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
</article>-->
</div>
    
    <div class="flat-pagination blog-pagination">{{ $articles->links() }}
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
        @foreach ($articles as $article)
<div class="block-inside border-corner hv-background-before"> 
    <a href="{{asset('/blog-detail/'.$article->id)}}">
        {{ \Illuminate\Support\Str::limit($article->title, 10, '...') }}
    </a>
    </div>
    @endforeach
    </li>
    </ul>
    </div>
    <div class="widget widget-recent-posts widget-bg">
    <h2 class="widget-title">recent posts</h2>
    @foreach($articles as $article)
    <ul class="recent-news">
    <li>
    <div class="thumb-image">
     <img src="{{ asset('storage/picture/'.$article->picture) }}" alt="images" height="50px" width="100px">
    </div>
    <div class="thumb-content clearfix">
    <h3 class="thumb-title"><a href="{{asset('/blog-detail/'.$article->id)}}">{{$article->title}}</a></h3>
    <p class="thumb-day">{{$article->created_at}}</p>
    </div>
    </li>
    </ul>
    @endforeach   
    </div>
    <div class="widget widget-tags widget-bg">
    <h2 class="widget-title">tags</h2>
    <div class="tags-list bg-linear-gradient">
    @foreach ($articles as $article)
    <a href="{{asset('/blog-detail/'.$article->id)}}">News</a>
    <a href="{{asset('/blog-detail/'.$article->id)}}">Tech Latest Invention</a>
    <a href="{{asset('/blog-detail/'.$article->id)}}">Gossip</a>
                
    @endforeach
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
@endsection