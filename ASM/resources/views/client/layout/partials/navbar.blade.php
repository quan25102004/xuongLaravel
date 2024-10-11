<div class="d-flex align-items-center justify-content-between">

    <!-- start logo here -->
    <div class="site-branding">
       <a class="dark-logo" href="/client/index-2.html">
          <img width="162" height="52" src="{{asset('admin/assets/images/logo.webp')}}" alt="neeon">
       </a>
       
    </div>
    <!-- end logo here -->

    <!-- start main menu -->
    <div class="main-menu">
       <nav class="main-menu__nav">
          <ul>
             <li class=" active">
                <a class="animation" href="/trangchu">Trang Chủ</a>
             </li>
             <li class="main-menu__nav_sub">
                <p class="animation" href="">Tin Tức</p>
                      <ul class="main-menu__dropdown">
                          @foreach ($listCategories as $category)
                              <li>{{ $category->name }}</li>
                          @endforeach
                      </ul>

             </li>
             <li class="">
                <a class="animation" href="/gioithieu">Giới Thiệu </a>
              
             </li>
             <li class="">
                <a class="animation" href="/lienhe">Liên Hệ</a>   
             </li>
          </ul>
       </nav>
    </div>
    <!-- end main menu -->

    <!-- start header actions -->
    <ul class="header-action-items">
       <li class="item">
          <a href="/client/#template-search"><i class="fas fa-search"></i></a>
       </li>
       <li class="item cart-icon">
          <a href="/client/javascript:void(0)" class="cart-menu-btn menu-open-btn">
             <i class="fas fa-shopping-cart"></i>
             <span class="item-count">0</span>
          </a>
       </li>
       <li class="item humburger offcanvas-menu-btn menu-status-open">
          <span></span>
       </li>
    </ul>
    <!-- end header actions -->

 </div>