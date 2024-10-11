@extends('client.layout.master')
@section('content')
    <!-- Start Main -->

    <!-- Start inner page Banner -->
    <div class="banner inner-banner">
        <div class="container">
            <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">
                            <i class="fas fa-home"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                     <span class="rt-text-truncate">
                         Tin Tức
                     </span>
                 </li>
                    <li class="breadcrumb-item">
                        <a href="index-2.html">
                            {{ $post->name }}
                            {{-- {{dd($post->name)}} --}}

                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="rt-text-truncate">
                            Chi Tiết
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
                    <div class="rt-left-sidebar-sapcer-5">

                        <div class="rt-main-post-single grid-meta">

                            <!-- start post header -->
                            <div class="post-header">
                                <span class="rt-cat-primary">{{ $post->name }}</span>
                                <h2 class="title">
                                    {{ $post->title }}
                                </h2>
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            <span class="rt-meta">
                                                view: <a href="author.html" class="name">{{ $post->view }}</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                {{ $post->created_at }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-comments icon"></i>
                                                250 Comments
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-clock icon"></i>
                                                2 minute read
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="share-box-area">
                                    <div class="left-area">
                                        <div class="social-share-box">
                                            <div class="share-text mb--10">
                                                <span class="rt-meta">
                                                    <i class="fas fa-share-alt icon"></i>
                                                    Share: 1,509
                                                </span>
                                            </div>
                                            <ul class="social-share-style-1 mb--10">
                                                <li>
                                                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank" href="https://twitter.com/">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank" href="https://dribbble.com/">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-area">
                                        <ul class="social-share-style-1 layout-2 mb--10">
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="social-icon fas fa-envelope"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://twitter.com/">
                                                    <i class="social-icon fas fa-print"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end post-header -->

                            <!-- strat post img -->
                            <figure class="post-img">
                                <img src="{{ Storage::url($post->image) }}" alt="post-img" width="960" height="520">
                            </figure>
                            <!-- end post-img -->

                            <!-- strat psot body -->
                            <div class="post-body">
                                <p class="rt-dropcap-style-1">
                                    {{ $post->content }}
                                </p>

                            </div>
                            <!-- end post body -->

                            <!-- start social-share-box-2 -->
                            <div class="social-share-box-2 mb--40">
                                <div class="row gutter-30">
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="conent-block">
                                            <h4 class="block-tile mb--20">Popular Tags:</h4>
                                            <div class="tag-list">
                                                <a href="#" class="tag-link">beautiful</a>
                                                <a href="#" class="tag-link">travel</a>
                                                <a href="#" class="tag-link">technology</a>
                                                <a href="#" class="tag-link">politics</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 d-flex justify-content-start justify-content-lg-end">
                                        <div class="conent-block">
                                            <h4 class="block-tile mb--20">Share This Post:</h4>
                                            <ul class="social-share-style-1 ">
                                                <li>
                                                    <a class="fb" target="_blank"
                                                        href="{{ asset('client/https://www.facebook.com/') }}">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank"
                                                        href="{{ asset('client/https://twitter.com/') }}">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank"
                                                        href="{{ asset('client/https://www.youtube.com/') }}">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank"
                                                        href="{{ asset('client/https://dribbble.com/') }}">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank"
                                                        href="{{ asset('client/https://cloud.google.com/') }}">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank"
                                                        href="{{ asset('client/https://www.whatsapp.com/') }}">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end social-share-box-2 -->

                            <!-- start author box -->
                            <div class="author-box-style-1 mb--50">
                                <div class="author-img">
                                    <img src="{{ asset('client/media/gallery/author-img_1.jpg') }}" alt="author-img_1"
                                        width="170" height="170">
                                </div>
                                <div class="author-content">
                                    <h3 class="author-name">Mark Graham</h3>
                                    <span class="author-role">Admin</span>
                                    <p class="user-desc">
                                        Tthe leap into electronic typesetting, remaining essentiallyuncha
                                        opularisedthe
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

                            <!-- start post-pagination-box -->
                            <div class="post-pagination-box mb--40">

                                <div class="row gutter-30">
                                    <div class="col-lg-6">
                                        <div class="next-prev-wrap">
                                            <div class="item-icon">
                                                <a href="#">
                                                    <i class="fas fa-chevron-left"></i>
                                                    Previous Article
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    <a href="#">
                                                        Top Best Compu follower career games are
                                                        Speak Market Reseach.
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="next-prev-wrap next-wrap">
                                            <div class="item-icon">
                                                <a href="#">
                                                    Next Article
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    <a href="#">
                                                        Best Technology Compu follower Career
                                                        Speak Market Reseach
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end pagination box -->

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

                            <!-- start related-post-box -->
                            <div class="related-post-box">
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
                                     @foreach ($lienquan as $lq)
                                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                                         <div class="rt-post-grid grid-meta">
                                             <div class="post-img">
                                                 <a href="{{ route('home.chitiet',['id' => $lq->id]) }}">
                                                     <div style="height: 130px"><img src="{{ Storage::url($lq->image)}}" alt="post"></div>
                                                     
                                                 </a>
                                             </div>
                                             <div class="post-content">
                                                 <a href="/client/gaming.html" class="rt-post-cat-normal">{{$lq->name}}</a>
                                                 <h3 class="post-title">
                                                     <a href="{{ route('home.chitiet',['id' => $lq->id]) }}">
                                                         {{$lq->title}}
                                                     </a>
                                                 </h3>
                                                 <div class="post-meta">
                                                     <ul>
                                                         <li>
                                                             <span class="rt-meta">
                                                                 view: <a href="/client/author.html" class="name">{{$lq->view}}</a>
                                                             </span>
                                                         </li>
                                                         <li>
                                                             <span class="rt-meta">
                                                                 <i class="far fa-calendar-alt icon"></i>
                                                                 {{$lq->created_at}}
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
                                <!-- end swiper container + editor-choice-slider-style-1  -->

                            </div>
                            <!-- end related-post-box -->

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
                            <div class="post-banner-style-1">
                                <a href="#" class="image-link">&nbsp;</a>
                                <div class="post-content">
                                    <div class="logo">
                                        <a href="index-2.html">
                                            <img src="media/logo/logo-light.svg" alt="logo" width="162"
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

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Stay Connected </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="social-connection">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <span class="text"><span>15,985</span> Fans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="fab fa-twitter twitter"></i>
                                        <span class="text"><span>20,751</span> Follower</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="fab fa-youtube youtube"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cloud.google.com/">
                                        <i class="fas fa-cloud cloud"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dribbble.com/">
                                        <i class="fab fa-dribbble dribbble"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Lượt Xem Cao </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="post-list">
                                @foreach ($luotXemCao as $lx)
                                    <div class="item">
                                        <div class="rt-post post-sm style-1">
                                            <div class="post-img">
                                                <a href="{{ route('home.chitiet', ['id' => $lx->id]) }}">
                                                    <img src="{{ storage::url($lx->image) }}" alt="post"
                                                        width="100" height="100">
                                                </a>
                                            </div>
                                            <div class="ms-4 post-content">
                                                <a href="gaming.html" class="rt-post-cat-normal">{{ $lx->name }}</a>
                                                <h4 class="post-title">
                                                    <a href="{{ route('home.chitiet', ['id' => $lx->id]) }}">
                                                        {{ $lx->title }}
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    {{ $lx->created_at }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Hot Categories </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="rt-categories">
                                <li>
                                    <a href="gaming.html" data-bg-image="media/gallery/cat_1.jpg">
                                        <span class="cat-name">Sports</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_2.jpg">
                                        <span class="cat-name">World</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="technology.html" data-bg-image="media/gallery/cat_3.jpg">
                                        <span class="cat-name">Technology</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_4.jpg">
                                        <span class="cat-name">Food</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_5.jpg">
                                        <span class="cat-name">Travel</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="subscribe-box-style-1" data-bg-image="media/elements/element_5.png">
                                <div class="subscribe-content">
                                    <h3 class="title">
                                        Subscribe To Our Newsletter
                                    </h3>
                                    <p>
                                        No spam, notifications only about
                                        new products, updates.
                                    </p>
                                    <form action="#" method="post" class="subscribe-form rt-form">
                                        <div class="rt-form-group">
                                            <input type="email" name="email" id="email_1"
                                                placeholder="enter e-mail" class=" rt-form-control">
                                        </div>

                                        <button type="submit" class="rt-submit-btn">Subscribe Now</button>

                                    </form>
                                    <div class="small-text">Don’t worry, we don’t spam</div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">
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
    <!-- end rt-sidebar-section-layout-2 -->

    <!-- End Main -->
@endsection
