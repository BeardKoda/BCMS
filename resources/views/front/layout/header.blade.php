<header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one menu_four">
            <div class="container custom_container p0">
                <a class="navbar-brand" href="#"><img src="{{asset('front/img/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu pl_120 mr-auto ml-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('about.html') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('about')}}">
                                About
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('services.html') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('services')}}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('studio.html') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('studio')}}">
                                Studio
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('academy.html') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('academy')}}">
                                Academy
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('contact.html') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('contact')}}">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <a class="btn_get btn_hover menu_cus" href="{{route('contact')}}">Join Us</a>
                </div>
            </div>
        </nav>
    </header>