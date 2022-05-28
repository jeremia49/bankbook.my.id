<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
<div class="app-brand demo">
    <a href="{{route('home')}}" class="app-brand-link">
    <span class="app-brand-logo demo">
        <img src="/img/logo.png" alt="">
    </span>
    
    <span class="app-brand-text demo menu-text fw-bolder ms-2">BankBook</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
    <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
</div>

<div class="menu-inner-shadow"></div>

<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item @if(Route::is('home'))
                                active
                            @endif">
    <a href="{{route('home')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
    </li>


    <li class="menu-item open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Books">Books</div>
        </a>
        <ul class="menu-sub">
            
            <li class="menu-item @if(Route::is('browse'))
            active
        @endif">
                <a href="{{route('browse')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-search-alt-2"></i>
                    <div data-i18n="Browse">Browse</div>
                </a>
                </li>
        
            <li class="menu-item @if(Route::is('mybook'))
            active
        @endif">
                <a href="{{route('mybook')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-book-alt"></i>
                    <div data-i18n="My Book">My Book</div>
                </a>
            </li>

            <li class="menu-item @if(Route::is('addbook'))
            active
        @endif">
                <a href="{{route('addbook')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-book-add"></i>
                    <div data-i18n="New Book">Add Book</div>
                </a>
            </li>
            
        </ul>
    </li>

    <li class="menu-item">
        <a href="{{route('profile')}} @if(Route::is('profile'))
        active
    @endif" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="My Profile">My Profile</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="{{route('logout')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-log-out"></i>
            <div data-i18n="Logout">Logout</div>
        </a>
    </li>
 
        
</ul>
</aside>