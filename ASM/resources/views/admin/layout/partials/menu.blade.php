<div id="sidebar-menu">

    <div class="logo-box">
        <a class='logo logo-light' href='index.html'>
            <span class="logo-sm">
                <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="24">
            </span>
        </a>
        <a class='logo logo-dark' href='index.html'>
            <span class="logo-sm">
                <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('admin/assets/images/logo.webp')}}" alt="" height="24">
            </span>
        </a>
    </div>
    

    <ul id="side-menu">

        <li class="menu-title">Menu</li>

        <li>
            <a href="/admin/dashboard">
                <i class="fa-solid fa-chart-line"></i>
                <span> Dashboard </span>
            </a>
 
        </li>
        <li>
            <a href="{{route('categories.index')}}">
                <i class="fa-solid fa-book"></i>
                <span> Danh Mục </span>
            </a>
 
        </li>
        <li>
            <a href="{{route('posts.index')}}">
                <i class="fa-solid fa-pen"></i>
                <span> Bài Viết </span>
            </a>
 
        </li>

        

    </ul>

</div>