@extends('client.layout.master')
@section('content')
    <!-- Start inner page Banner -->
    <div class="banner inner-banner">
        <div class="container">
            <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('home.index')}}">
                            <i class="fas fa-home"></i>
                            Trang Chủ
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index-2.html">
                            Tin Tức
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="rt-text-truncate">
                            {{$luotXemCao[0]->name}}
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->
    <!-- start rt-sidebar-section-layout-2 -->
    <section class="rt-sidebar-section-layout-2">
        <div class="container">
            <div class="row gutter-40 sticky-coloum-wrap">
                <div class="col-xl-9 sticky-coloum-item">
                    <div class="rt-left-sidebr-sapcer-5">
                        <div class="rt-main-post-single grid-meta">
                            <h2 class="title text-uppercase">{{$luotXemCao[0]->name}} mới</h2> <hr>
                            <!-- strat psot body -->
                            <div class="post-body">

                                <div class="single-content">
                                    @foreach ($post as $p)

                                    <h3 class="title">{{$p->title}}</h3>
                                    
                                    <span class="rt-meta">
                                        Tags:
                                        {{-- @foreach($p->tags as $tag) --}}
                                            <a href="" class="name">{{ $p->tags }}</a>
                                        {{-- @endforeach --}}
                                    </span>
                                    <div class="thumb-vidided mb--30">
                                        <div class="row gutter-24">
                                            <div class="col-lg-6">
                                                <img src="{{asset('storage/'.$p->image)}}" alt="post-img"
                                                width="696" height="540">
                                            </div>
                                            <div class="col-lg-6">
                                                <p style="display: -webkit-box;
                                                -webkit-line-clamp: 9;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden">
                                                  {{$p->content}}
                                                  {{-- {{dd($p)}} --}}

                                                </p>
                                        <a href="{{ route('home.chitiet',['id' => $p->id]) }}" style="font-size: 15px">Chi tiết</a>
                                                <br>
                                        <span class="rt-meta">
                                            <i class="far fa-calendar-alt icon"></i>
                                            {{$p->created_at}}
                                         </span>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                                </div>


                               
               



                            </div>
                     
                            <!-- start author box -->
                            <div class="author-box-style-1 mb--50">
                                <div class="author-img">
                                    <img src="/client/media/gallery/author-img_1.jpg" alt="author-img_1" width="170"
                                        height="170">
                                </div>
                                <div class="author-content">
                                    <h3 class="author-name">Mark Graham</h3>
                                    <span class="author-role">Admin</span>
                                    <p class="user-desc">
                                        Tthe leap into electronic typesetting, remaining essentiallyuncha opularisedthe
                                        with
                                        the release of Letrasetsheets containingthe leap electrtypesetting remaining
                                        essentially unchanged.
                                    </p>
                                    <ul class="social-style-5">

                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/">
                                                <i class="social-icon fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://twitter.com/">
                                                <i class="social-icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.pinterest.com/">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- end author box -->
                            <!-- start blog-post-comment -->
                            <div class="blog-post-comment mb--50">
                                <form action="#" class="rt-contact-form comments-form-style-1">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="name">Your Name *</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="email">E-mail *</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    data-error="Email field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="website">Website *</label>
                                                <input type="text" name="website" id="website" class="form-control"
                                                    data-error="Web Url field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="rt-form-group">
                                                <label for="comment">Comments *</label>
                                                <textarea name="comment" id="comment" class="form-control text-area" data-error="Comment field is required"
                                                    required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="rt-form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="comment-form-check1">
                                                    <label class="form-check-label" for="comment-form-check1">
                                                        Save my name, email, and website in this browser for the next time I
                                                        comment.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="submit-btn">
                                                Post Comment
                                            </button>
                                        </div>
                                        <div class="form-response"></div>
                                    </div>
                                </form>
                            </div>
                            <!-- end blog-post-comment -->
                        </div>
                        <!-- end rt-main-post-single -->
                    </div>
                    <!-- end rt-left-sidebar-sapcer-5 -->
                </div>
                <!-- end col-->

                <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                    <div class="rt-sidebar sticky-wrap">

                        <div class="sidebar-wrap mb--40">
                            <div class="search-box">
                                <form action="#" class="form search-form-box">
                                    <div class="form-group">
                                        <input type="text" name="sarch" id="search" placeholder="Search..."
                                            class="form-control rt-search-control">
                                        <button type="submit" class="search-submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">

                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Bản Tin Khác </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>

                            <div class="top-categories-grid-style-1">

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_30.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Fashion</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_33.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Life Style</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_32.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Style</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_34.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Trend</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_31.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Food</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="/client/media/gallery/post-lg_32.jpg" alt="cat-slider"
                                                width="696" height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="#">Modern</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow"> (29) </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->

                            </div>
                            <!-- end top-categories-grid-style-1 -->

                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">STAY CONNECTED </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="rt-social-style-2">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="social-icon fb fab fa-facebook-f"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="social-icon tw fab fa-twitter"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="social-icon yu fab fa-youtube"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cloud.google.com/">
                                        <i class="social-icon dw fas fa-cloud"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dribbble.com/">
                                        <i class="social-icon dr fab fa-dribbble"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://vimeo.com/">
                                        <i class="social-icon vm fab fa-vimeo-v"></i>
                                        <span>950k</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="post-banner-style-1">
                                <a href="#" class="image-link">&nbsp;</a>
                                <div class="post-content">
                                    <div class="logo">
                                        <a href="index-2.html">
                                            <img src="/client/media/logo/logo-light.svg" alt="logo" width="162"
                                                height="52">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="#">
                                            The Most Powerful
                                            <span>News & Magazine WP Theme</span>
                                        </a>
                                    </h3>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-white-sm">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--30">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Lượt Xem</span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="row rt-gutter-10">
                                @foreach ($luotXemCao as $l)
                                <div class="col-6">
                                    <div class="rt-post-grid post-grid-md grid-meta">
                                        <div class="post-img">
                                            <a href="{{ route('home.chitiet',['id' => $l->id]) }}">
                                                <img src="{{ Storage::url($l->image)}}" alt="post"
                                                    width="343" height="250">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="life-style.html" class="rt-post-cat-normal">{{$l->name}}</a>
                                            <h4 class="post-title">
                                                <a href="{{ route('home.chitiet',['id' => $l->id]) }}">
                                                    {{$l->title}}
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                {{$l->created_at}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- col-6 -->

                            </div>
                            <!-- end row -->

                        </div>
                        <div class="sidebar-wrap">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Tags </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="tag-list">
                                <a href="#" class="tag-link">beautiful</a>
                                <a href="#" class="tag-link">travel</a>
                                <a href="#" class="tag-link">technology</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">politics</a>
                                <a href="#" class="tag-link">business</a>
                                <a href="#" class="tag-link">makeup</a>
                                <a href="#" class="tag-link">social</a>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                    </div>
                    <!-- end rt-sidebar -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row  -->
        </div>
        <!-- end container -->
    </section>

    <!-- start top stories-->
    <section class="top-stories-style-1 section-padding motion-effects-wrap">
        <ul class="element-list d-none d-xl-block">
            <li class="motion-effects1"><img class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms"
                    src="/client/media/elements/element_2.png" alt="element_1" width="88" height="58"></li>
            <li><img class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="800ms"
                    src="/client/media/elements/element_3.png" alt="element_2" width="182" height="72"></li>
            <li><img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="800ms"
                    src="/client/media/elements/element_4.png" alt="element_3" width="199" height="128"></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rt-section-heading">
                        <span class="rt-section-text">Tin Liên Quan</span>
                        <span class="rt-section-dot"></span>
                        <span class="rt-section-line"></span>
                    </h2>
                </div>
            </div>
            <div class="row gutter-24">
                @foreach ($randomPosts as $random)
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="rt-post-grid grid-meta">
                        <div class="post-img">
                            <a href="{{ route('home.chitiet',['id' => $random->id]) }}">
                                <div style="height: 180px"><img src="{{ Storage::url($random->image)}}" alt="post"></div>
                                
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="/client/gaming.html" class="rt-post-cat-normal">{{$random->name}}</a>
                            <h3 class="post-title">
                                <a href="{{ route('home.chitiet',['id' => $random->id]) }}">
                                    {{$random->title}}
                                </a>
                            </h3>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <span class="rt-meta">
                                            view: <a href="/client/author.html" class="name">{{$random->view}}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rt-meta">
                                            <i class="far fa-calendar-alt icon"></i>
                                            {{$random->created_at}}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end top stories style 1 -->
@endsection
