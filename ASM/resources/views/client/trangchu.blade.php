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
              </ol>
          </nav>
      </div>
  </div>
  <!-- End inner page Banner -->
<section class="rt-main-post-section main-post-section-style-1 section-padding">
    <div class="container">
       <div class="row gutter-24">
         <div class="col-12">
            <h2 class="rt-section-heading">
               <span class="rt-section-text">Tin Mới </span>
               <span class="rt-section-dot"></span>
               <span class="rt-section-line"></span>
            </h2>
         </div>
         {{-- new sức khỏe --}}
         {{-- {{dd($suckhoe)}} --}}
          <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
             <div class="rt-post-overlay rt-post-overlay-xl layout-1">
                <div class="post-img">
                   <a href="{{ route('home.chitiet',['id' => $suckhoe->id]) }}" class="img-link">
                      <img src="{{asset('storage/'.$suckhoe->image)}}" alt="" width="900" height="600">
                   </a>
                </div>
                <div class="post-content">
                   <a href="/client/life-style.html" class="fashion">{{$suckhoe->name}}</a>
                   <h3 class="post-title bold-underline">
                      <a href="{{ route('home.chitiet',['id' => $suckhoe->id]) }}">
                        {{$suckhoe->title}}
                      </a>
                   </h3>
                   <div class="post-meta">
                      <ul>
                         <li>
                            <span class="rt-meta">
                               by <a href="/client/author.html" class="name">Willum Skeem</a>
                            </span>
                         </li>
                         <li>
                            <span class="rt-meta">
                               <i class="far fa-calendar-alt icon"></i>
                               {{$suckhoe->max_created_at}}
                            </span>
                         </li>
                         <li>
                            <span class="rt-meta">
                               <i class="far fa-comments icon"></i>
                               <a href="/client/#"> 3,250</a>
                            </span>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <!-- end col -->

          <div class="col-xl-5 col-lg-6">
             <div class="row gutter-24">

                <div class="col-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                  {{-- new trong nuoc --}}
                   <div class="rt-post post-md style-10">
                      <div class="post-img">
                         <a href="{{ route('home.chitiet',['id' => $trongnuoc->id]) }}">
                            <img src="{{asset('storage/'.$trongnuoc->image)}}" alt="post" width="696" height="491">
                         </a>
                      </div>
                      <div class="post-content">
                         <a href="/client/life-style.html" class="food">{{$trongnuoc->name}}</a>
                         <h3 class="post-title">
                            <a href="{{ route('home.chitiet',['id' => $trongnuoc->id]) }}">
                              {{$trongnuoc->title}}
                            </a>
                         </h3>
                         <span class="rt-meta">
                            <i class="far fa-calendar-alt icon"></i>
                            {{$trongnuoc->max_created_at}}
                         </span>
                      </div>
                   </div>
                </div>
                <!-- end col -->

                <div class="col-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                  {{-- new trong nuoc --}}
                   <div class="rt-post post-md style-10">
                      <div class="post-img">
                         <a href="{{ route('home.chitiet',['id' => $ngoainuoc->id]) }}">
                            <img src="{{asset('storage/'.$ngoainuoc->image)}}" alt="post" width="696" height="491">
                         </a>
                      </div>
                      <div class="post-content">
                         <a href="/client/life-style.html" class="food">{{$ngoainuoc->name}}</a>
                         <h3 class="post-title">
                            <a href="{{ route('home.chitiet',['id' => $ngoainuoc->id]) }}">
                              {{$ngoainuoc->title}}
                            </a>
                         </h3>
                         <span class="rt-meta">
                            <i class="far fa-calendar-alt icon"></i>
                            {{$ngoainuoc->max_created_at}}
                         </span>
                      </div>
                   </div>
                </div>
                <!-- end col -->

                <div class="col-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                  {{-- new trong nuoc --}}
                   <div class="rt-post post-md style-10">
                      <div class="post-img">
                         <a href="{{ route('home.chitiet',['id' => $thethao->id]) }}">
                            <img src="{{asset('storage/'.$thethao->image)}}" alt="post" width="696" height="491">
                         </a>
                      </div>
                      <div class="post-content">
                         <a href="/client/life-style.html" class="food">{{$thethao->name}}</a>
                         <h3 class="post-title">
                            <a href="{{ route('home.chitiet',['id' => $thethao->id]) }}">
                              {{$thethao->title}}
                            </a>
                         </h3>
                         <span class="rt-meta">
                            <i class="far fa-calendar-alt icon"></i>
                            {{$thethao->max_created_at}}
                         </span>
                      </div>
                   </div>
                </div>
                <!-- end col -->

             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <!-- end main post section style 1 -->

 <!-- Banner -->
 {{-- <div class="rt-ad-banner rt-ad-banner-style-1 section-padding pt-0">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="ad-banner-img">
                <a href="/client/#">
                   <img src="client/media/gallery/ad-banner_1.jpg" alt="ad-banner" width="1400" height="181">
                </a>
             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </div> --}}
 <!-- end Banner -->

 <!-- start top stories-->
 <section class="top-stories-style-1 section-padding motion-effects-wrap">
    <ul class="element-list d-none d-xl-block">
       <li class="motion-effects1"><img class="wow fadeInLeft" data-wow-delay="200ms"
             data-wow-duration="800ms" src="{{asset('client/media/elements/element_2.png')}}" alt="element_1" width="88"
             height="58"></li>
       <li><img class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="800ms"
             src="{{asset('client/media/elements/element_3.png')}}" alt="element_2" width="182" height="72"></li>
       <li><img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="800ms"
             src="{{asset('client/media/elements/element_4.png')}}" alt="element_3" width="199" height="128"></li>
    </ul>

    {{-- lượt xem cao --}}

    <div class="container">
       <div class="row">
          <div class="col-12">
             <h2 class="rt-section-heading">
                <span class="rt-section-text">Lượt Xem Cao</span>
                <span class="rt-section-dot"></span>
                <span class="rt-section-line"></span>
             </h2>
          </div>
       </div>
       <div class="row gutter-24">
         @foreach ($luotXemCao as $view)
         <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
            <div class="rt-post-grid grid-meta">
               <div class="post-img">
                  <a href="{{ route('home.chitiet',['id' => $view->id]) }}">
                     <img src="{{asset('storage/'.$view->image)}}" alt="post" width="551" height="431">
                  </a>
               </div>
               <div class="post-content">
                  <a href="/client/gaming.html" class="rt-post-cat-normal">{{$view->title}}</a>
                  <h3 class="post-title">
                     <a href="{{ route('home.chitiet',['id' => $view->id]) }}">
                        {{$view->content}}
                     </a>
                  </h3>
                  <div class="post-meta">
                     <ul>
                        <li>
                           <span class="rt-meta">
                              View: <a href="/client/author.html" class="name">{{$view->view}}</a>
                           </span>
                        </li>
                        <li>
                           <span class="rt-meta">
                              <i class="far fa-calendar-alt icon"></i>
                              {{$view->created_at}}
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

 <!-- start what's new section -->
 <section class="whats-new-style-1 section-padding">
    <div class="container">
       <div class="row gutter-30 sticky-coloum-wrap">

          <div class="col-xl-9 sticky-coloum-item">
             <div class="featured-area-style-1 overflow-hidden">

                <div class="wrap mb--60">
                   <div class="featured-tab-title">
                      <h2 class="rt-section-heading">
                         <span class="rt-section-text">Sức Khỏe</span>
                         <span class="rt-section-dot"></span>
                         <span class="rt-section-line"></span>
                      </h2>

                   </div>
                   <!-- end featured-tab-title -->

                   <div class="tab-content" id="myTabContent">
                      <div class="tab-pane tab-item animated fadeInUp show active" id="menu-1"
                         role="tabpanel" aria-labelledby="menu-1-tab">
                         <div class="row gutter-24">
                            <div class="col-lg-7">
                               <div class="rt-post-overlay rt-post-overlay-lg">
                                  <div class="post-img">
                                     <a href="{{ route('home.chitiet',['id' => $newSucKhoe[0]->id]) }}" class="img-link">
                                        <img src="{{asset('storage/'.$newSucKhoe[0]->image)}}" alt="post-xl-2" width="900"
                                           height="600">
                                     </a>
                                  </div>
                                  <div class="post-content">
                                     <a href="/client/life-style.html" class="world">{{$newSucKhoe[0]->name}}</a>
                                     <h3 class="post-title bold-underline">
                                        <a href="{{ route('home.chitiet',['id' => $newSucKhoe[0]->id]) }}">
                                          {{$newSucKhoe[0]->title}}
                                        </a>
                                     </h3>

                                     <div class="post-meta">
                                        <ul>
                                           <li>
                                              <span class="rt-meta">
                                                 view: <a href="/client/author.html" class="name">{{$newSucKhoe[0]->view}}</a>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-calendar-alt icon"></i>
                                                 {{$newSucKhoe[0]->created_at}}
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-comments icon"></i>
                                                 <a href="/client/#"> 3,250</a>
                                              </span>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-5">
                               <div class="row gutter-24">
                                 @foreach ($listSucKhoe as $sk)
                                 <div class="col-12">
                                    <div class="rt-post post-sm style-2">
                                       <div class="post-content">
                                          <a href="/client/gaming.html" class="rt-post-cat-normal">{{$sk->name}}</a>
                                          <h4 class="post-title">
                                             <a href="{{ route('home.chitiet',['id' => $sk->id]) }}">
                                                {{$sk->title}}
                                             </a>
                                          </h4>
                                          <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             {{$sk->created_at}}
                                          </span>
                                       </div>
                                       <div class="post-img">
                                          <a href="{{ route('home.chitiet',['id' => $sk->id]) }}">
                                             <img src="{{asset('storage/'.$sk->image)}}" alt="post" width="143"
                                                height="110">
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                               </div>
                            </div>
                         </div>
                      </div><!-- end ./tab item -->

                      <div class="tab-pane tab-item animated fadeInUp" id="menu-2" role="tabpanel"
                         aria-labelledby="menu-2-tab">
                         <div class="row gutter-24">
                            <div class="col-lg-7">
                               <div class="rt-post-overlay rt-post-overlay-lg">
                                  <div class="post-img">
                                     <a href="/client/single-post1.html" class="img-link">
                                        <img src="client/media/gallery/post-xl_2.jpg" alt="post-xl_2" width="900"
                                           height="600">
                                     </a>
                                  </div>
                                  <div class="post-content">
                                     <a href="/client/life-style.html" class="world">World</a>
                                     <h3 class="post-title">
                                        <a href="/client/single-post1.html">
                                           African Nations Are Strugling
                                           To Save Their Wildlife
                                        </a>
                                     </h3>

                                     <div class="post-meta">
                                        <ul>
                                           <li>
                                              <span class="rt-meta">
                                                 by <a href="/client/author.html" class="name">Willum Skeem</a>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-calendar-alt icon"></i>
                                                 DECEMBER 9, 2022
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-comments icon"></i>
                                                 <a href="/client/#"> 3,250</a>
                                              </span>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-5">
                               <div class="row gutter-24">
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/gaming.html" class="rt-post-cat-normal">Sports</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_5.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">World</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_6.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">Food</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_7.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/technology.html"
                                              class="rt-post-cat-normal">Technology</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_8.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div><!-- end ./tab item -->

                      <div class="tab-pane tab-item animated fadeInUp" id="menu-3" role="tabpanel"
                         aria-labelledby="menu-3-tab">
                         <div class="row gutter-24">
                            <div class="col-lg-7">
                               <div class="rt-post-overlay rt-post-overlay-lg">
                                  <div class="post-img">
                                     <a href="/client/single-post1.html" class="img-link">
                                        <img src="client/media/gallery/post-xl_2.jpg" alt="post-xl-2" width="900"
                                           height="600">
                                     </a>
                                  </div>
                                  <div class="post-content">
                                     <a href="/client/life-style.html" class="world">World</a>
                                     <h3 class="post-title">
                                        <a href="/client/single-post1.html">
                                           African Nations Are Strugling
                                           To Save Their Wildlife
                                        </a>
                                     </h3>

                                     <div class="post-meta">
                                        <ul>
                                           <li>
                                              <span class="rt-meta">
                                                 by <a href="/client/author.html" class="name">Willum Skeem</a>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-calendar-alt icon"></i>
                                                 DECEMBER 9, 2022
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-comments icon"></i>
                                                 <a href="/client/#"> 3,250</a>
                                              </span>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-5">
                               <div class="row gutter-24">
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/gaming.html" class="rt-post-cat-normal">Sports</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_5.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">World</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_6.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">Food</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_7.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/technology.html"
                                              class="rt-post-cat-normal">Technology</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_8.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div><!-- end ./tab item -->

                      <div class="tab-pane tab-item animated fadeInUp" id="menu-4" role="tabpanel"
                         aria-labelledby="menu-4-tab">
                         <div class="row gutter-24">
                            <div class="col-lg-7">
                               <div class="rt-post-overlay rt-post-overlay-lg">
                                  <div class="post-img">
                                     <a href="/client/single-post1.html" class="img-link">
                                        <img src="client/media/gallery/post-xl_2.jpg" alt="post-xl-2" width="900"
                                           height="600">
                                     </a>
                                  </div>
                                  <div class="post-content">
                                     <a href="/client/life-style.html" class="world">World</a>
                                     <h3 class="post-title">
                                        <a href="/client/single-post1.html">
                                           African Nations Are Strugling
                                           To Save Their Wildlife
                                        </a>
                                     </h3>

                                     <div class="post-meta">
                                        <ul>
                                           <li>
                                              <span class="rt-meta">
                                                 by <a href="/client/author.html" class="name">Willum Skeem</a>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-calendar-alt icon"></i>
                                                 DECEMBER 9, 2022
                                              </span>
                                           </li>
                                           <li>
                                              <span class="rt-meta">
                                                 <i class="far fa-comments icon"></i>
                                                 <a href="/client/#"> 3,250</a>
                                              </span>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-5">
                               <div class="row gutter-24">
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/gaming.html" class="rt-post-cat-normal">Sports</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_5.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">World</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_6.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/life-style.html" class="rt-post-cat-normal">Food</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_7.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <div class="rt-post post-sm style-2">
                                        <div class="post-content">
                                           <a href="/client/technology.html"
                                              class="rt-post-cat-normal">Technology</a>
                                           <h4 class="post-title">
                                              <a href="/client/single-post1.html">
                                                 Top Beste ampute are
                                                 Speak Market.
                                              </a>
                                           </h4>
                                           <span class="rt-meta">
                                              <i class="far fa-calendar-alt icon"></i>
                                              DECEMBER 9, 2022
                                           </span>
                                        </div>
                                        <div class="post-img">
                                           <a href="/client/single-post1.html">
                                              <img src="client/media/gallery/post-sm_8.jpg" alt="post" width="143"
                                                 height="110">
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div><!-- end ./tab item -->
                   </div> <!-- end /.tab-content -->
                </div>

                <div class="wrap">
                   <h2 class="rt-section-heading">
                      <span class="rt-section-text">Trong Nước</span>
                      <span class="rt-section-dot"></span>
                      <span class="rt-section-line"></span>
                   </h2>
                   <div class="row gutter-10">
                     @foreach ($listTrongNuoc as $tn)
                         
                     <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="rt-post-overlay rt-post-overlay-md">
                           <div class="post-img">
                              <a href="{{ route('home.chitiet',['id' => $tn->id]) }}" class="img-link">
                                 <img src="{{asset('storage/'.$tn->image)}}" alt="post-xl_4" width="900"
                                    height="600">
                              </a>
                           </div>
                           <div class="post-content">
                              <h3 class="post-title bold-underline">
                                 <a href="{{ route('home.chitiet',['id' => $tn->id]) }}">
                                    {{$tn->title}}
                                 </a>
                              </h3>

                              <div class="post-meta">
                                 <ul>
                                    <li>
                                       <span class="rt-meta">
                                          view: <a href="/client/author.html" class="name">{{$tn->view}}</a>
                                       </span>
                                    </li>
                                    <li>
                                       <span class="rt-meta">
                                          <i class="far fa-calendar-alt icon"></i>
                                          {{$tn->created_at}}
                                       </span>
                                    </li>
                                 </ul>
                              </div>

                           </div>
                        </div>
                     </div>
                     <!-- end col -->
                     @endforeach

                   </div>
                   <!-- end inner row -->
                </div>

             </div>
             <!-- end featured-area-style-1 -->
          </div>
          <!-- end col -->

          <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
             <div class="rt-sidebar sticky-wrap">

                <div class="sidebar-wrap mb--40">
                   <h2 class="rt-section-heading style-2 mb--30">
                      <span class="rt-section-text">Stay Connected </span>
                      <span class="rt-section-dot"></span>
                      <span class="rt-section-line"></span>
                   </h2>
                   <ul class="social-connection">
                      <li>
                         <a href="/client/https://www.facebook.com/">
                            <i class="fab fa-facebook-f facebook"></i>
                            <span class="text"><span>15,985</span> Fans</span>
                         </a>
                      </li>
                      <li>
                         <a href="/client/https://twitter.com/">
                            <i class="fab fa-twitter twitter"></i>
                            <span class="text"><span>20,751</span> Follower</span>
                         </a>
                      </li>
                      <li>
                         <a href="/client/https://www.youtube.com/">
                            <i class="fab fa-youtube youtube"></i>
                            <span class="text"><span>35,999</span> Subscriber</span>
                         </a>
                      </li>
                      <li>
                         <a href="/client/https://cloud.google.com/">
                            <i class="fas fa-cloud cloud"></i>
                            <span class="text"><span>35,999</span> Subscriber</span>
                         </a>
                      </li>
                      <li>
                         <a href="/client/https://dribbble.com/">
                            <i class="fab fa-dribbble dribbble"></i>
                            <span class="text"><span>35,999</span> Subscriber</span>
                         </a>
                      </li>
                   </ul>
                </div>
                <!-- end slidebar wrap  -->

                <div class="sidebar-wrap mb--40">
                   <h2 class="rt-section-heading style-2 mb--30">
                      <span class="rt-section-text">Thể Thao </span>
                      <span class="rt-section-dot"></span>
                      <span class="rt-section-line"></span>
                   </h2>
                   <div class="post-list">
                     @foreach ($listTheThao as $tt)
                     <div class="item">
                        <div class="rt-post post-sm style-1">
                           <div class="post-img">
                              <a href="{{ route('home.chitiet',['id' => $tt->id]) }}">
                                 <img src="{{ Storage::url($tt->image)}}" alt="post" width="100" height="100">
                              </a>
                           </div>
                           <div class="ms-4 post-content">
                              <a href="/client/gaming.html" class="rt-post-cat-normal">{{$tt->name}}</a>
                              <h4 class="post-title">
                                 <a href="{{ route('home.chitiet',['id' => $tt->id]) }}">
                                    {{$tt->title}}
                                 </a>
                              </h4>
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 {{$tt->created_at}}
                              </span>
                           </div>
                        </div>
                     </div>
                     @endforeach
                   </div>
                </div>
                <!-- end slidebar wrap  -->

                <div class="sidebar-wrap">
                   <div class="post-banner-style-1">
                      <a href="/client/#" class="image-link">&nbsp;</a>
                      <div class="post-content">
                         <div class="logo">
                            <a href="/client/index-2.html">
                               <img src="client/media/logo/logo-light.svg" alt="logo" width="162" height="52">
                            </a>
                         </div>
                         <h3 class="title">
                            <a href="/client/#">
                               The Most Powerful
                               <span>News & Magazine WP Theme</span>
                            </a>
                         </h3>
                         <div class="btn-wrap">
                            <a href="/client/#" class="btn-white-sm">
                               shop now
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end slidebar wrap  -->

             </div>
          </div>
          <!-- end col -->

       </div>
       <!-- end row -->
    </div>
    <!--  end container -->
 </section>
 <!-- end what's new section -->

 <!-- start subscribe section -->
 <div class="section subscribe-section-style-1">
    <div class="container">
       <div class="row  justify-content-evenly">

          <div class="col-lg-4 align-self-end wow fadeInLeft d-none d-lg-block" data-wow-delay="300ms"
             data-wow-duration="800ms">
             <div class="subscribe-img bouncing-bubble-animation">
                <img src="{{asset('client/media/gallery/subscrible-img_1.png')}}" alt="subscrible" width="401" height="327">
             </div>
          </div>
          <!-- end col -->

          <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-delay="600ms"
             data-wow-duration="800ms">
             <div class="rt-subscribe-box">
                <h3 class="title">
                   Get The Best Blog Stories
                   into Your inbox!
                </h3>
                <form action="#" class="rt-contact-form subscribe-form-style-2">
                   <div class="rt-subs-group">
                      <input type="email" name="email" id="email_2" class="subscribe-form"
                         placeholder="Your e-mail" data-error="Email field is required" required>
                      <button type="submit" class="subscribe-btn">Subscribe </button>
                      <div class="form-response"></div>
                   </div>
                </form>
             </div>
          </div>
          <!-- end col -->

       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </div>
 <!-- end subscribe section -->

@endsection