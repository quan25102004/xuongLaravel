@extends('client.layout.master')
@section('content')
        
        <!-- Start inner page Banner -->
        <div class="banner inner-banner">
            <div class="container">
               <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="index-2.html">
                           <i class="fas fa-home"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        Liên Hệ
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <!-- End inner page Banner -->

         <!-- start contact-section-layout-1 -->
         <div class="contact-section-layout-1 section-padding-2">
            <div class="container">
               <div class="row gutter-30 justify-content-between align-items-center">
                  <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms">
                     <div class="contact-wrap-area-1">

                        <div class="rt-section-heading-style-2">
                           <span class="sub-title">Chúng tôi có thể giúp gì cho bạn?</span>
                           <h2 class="heading-tilte">
                              Liên hệ với chúng tôi
                           </h2>
                           <p>
                              Chúng tôi sẽ giải đáp mọi vấn đề của bạn
                           </p>
                        </div>

                        <div class="contact-list-area-1 ">
                           <ul class="contact-list-style-1 clearfix">
                              <li class="list-item media">
                                 <div class="list-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </div>
                                 <div class="list-content">
                                    <span>Trinh Van Bo, Nam Tu Liem, Ha Noi</span>
                                 </div>
                              </li>
                              <li class="list-item media">
                                 <div class="list-icon">

                                    <i class="far fa-envelope"></i>
                                 </div>
                                 <div class="list-content">
                                    <span>
                                       <a href="mailto:infonouka@gmail.com">quan2510@gmail.com</a>
                                    </span>
                                 </div>
                              </li>
                              <li class="list-item media">
                                 <div class="list-icon">
                                    <i class="fas fa-phone-alt"></i>
                                 </div>
                                 <div class="list-content">
                                    <span><a href="tel:+1238895600">+84 339 153 099</a></span>
                                    <span><a href="tel:+1238895600">+84 367 353 862</a></span>
                                 </div>
                              </li>
                              <li class="list-item media">
                                 <div class="list-icon">
                                    <i class="fas fa-globe-americas"></i>
                                 </div>
                                 <div class="list-content">
                                    <span>
                                       <a href="https://www.radiustheme.com/" rel="nofollow">www.radiustheme.com</a>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->

                  <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                     <form action="#" class="contact-form-style-1 rt-contact-form">
                        <h4 class="form-title">Thông tin</h4>
                        <div class="form-group">
                           <input type="text" class="form-control rt-form-control" placeholder="Name *" name="name"
                              id="Name" data-error="Name field is required" required>
                           <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control rt-form-control" placeholder="E-mail *"
                              name="Email" id="email" data-error="Email field is required" required>
                           <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control rt-form-control" placeholder="Phone *" name="phone"
                              id="Số điện thoại" data-error="Phone number is required" required>
                           <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                           <textarea name="message" id="message" class="form-control rt-form-control rt-textarea"
                              placeholder="Nội dung" data-error="Message field is required" required></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" class="submit-btn">Gửi</button>
                        <div class="form-response"></div>
                     </form>
                  </div>
                  <!-- end col -->
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end contact-section-layout-1 -->

         <!-- start  Map Section -->
         <div class="map-section-style-1">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="map-wrapper map-style-1">
                        <iframe class="map"
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1623138767707!5m2!1sen!2sbd"
                           style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End  Map Section -->
@endsection