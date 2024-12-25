<!-- HEADER AREA START (header-4) -->
<header class="ltn__header-area ltn__header-8 section-bg-6">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                            <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col logo-column">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col header-menu-column">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="menu-icon"><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li class="menu-icon"><a href="#">Shop</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col">
                    <div class="ltn__header-options">
                        <ul>
                            <li class="d-none">
                                <!-- ltn__currency-menu -->
                                <div class="ltn__drop-menu ltn__currency-menu">
                                    <ul>
                                        <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                            <ul>
                                                <li><a href="login.html">USD - US Dollar</a></li>
                                                <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                <li><a href="register.html">EUR - Euro</a></li>
                                                <li><a href="account.html">GBP - British Pound</a></li>
                                                <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- header-search-1 -->
                                <div class="header-search-wrap">
                                    <div class="header-search-1">
                                        <div class="search-icon">
                                            <i class="fas fa-search icon-magnifier  for-search-show"></i>
                                            <i class="fas fa-search-minus icon-magnifier-remove  for-search-close"></i>
                                        </div>
                                    </div>
                                    <div class="header-search-1-form">
                                        <form id="#234" method="get" action="#">
                                            <input type="text" name="search" value="" placeholder="Search here..." />
                                            <button type="submit">
                                            <span>
                                                <i class="icon-magnifier"></i>
                                            <i class="fas fa-search icon-magnifier  for-search-show"></i>
                                            </span>
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- user-menu -->
                                <div class="ltn__drop-menu user-menu">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-user"></i>
                                            </a>
                                            <ul>
                                                @guest
                                                    <!-- Show these options only if the user is not logged in -->
                                                    <li><a href="{{ route('frontend.login') }}">Sign in</a></li>
                                                    <li><a href="{{ route('frontend.register') }}">Register</a></li>
                                                @else
                                                    <!-- Show these options only if the user is logged in -->
                                                    <li><a href="{{ route('user.account') }}">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li>
                                                        <a href="{{ route('logout') }}" 
                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                           Logout
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                @endguest
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li>
                                <!-- header-wishlist -->
                                <div class="header-wishlist">
                                    <a href="{{ route('user.wishlist') }}">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <!-- mini-cart 2 -->
                                <div class="mini-cart-icon mini-cart-icon-2">
                                    <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <span class="mini-cart-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                        <sup>2</sup>
                                    </span>
                                    <h6><span>Your Cart</span> <span class="ltn__secondary-color">$89.25</span></h6>
                                </a>
                                </div>
                            </li>
                            <li>
                                <!-- Mobile Menu Button -->
                                <div class="mobile-menu-toggle d-xl-none">
                                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->