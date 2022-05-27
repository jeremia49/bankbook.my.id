<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item @if(Route::is('index'))
                                active
                            @endif"
                            @if(Route::is('index'))
                                aria-current="page"
                            @endif
        >
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item @if(Route::is('about'))
                                active
                            @endif"
                            @if(Route::is('about'))
                                aria-current="page"
                            @endif
        >
            <a class="nav-link" href="{{route('about')}}">About</a>
        </li>

        @if( auth()->check() )
        <li class="nav-item @if(Route::is('home'))
                                active
                            @endif" 
                            @if(Route::is('home'))
                                aria-current="page"
                            @endif
        > 
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item" > 
            <a class="nav-link" href="/logout">Logout</a>
        </li>
        @else
        <li class="nav-item @if(Route::is('login'))
                                active
                            @endif" 
                            @if(Route::is('login'))
                                aria-current="page"
                            @endif
        > 
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endif     


        
    </ul>
</div>