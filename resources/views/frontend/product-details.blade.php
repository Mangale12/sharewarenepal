@extends('frontend.layouts.app')
@section('content')
        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{asset('img/product/1.png')}}" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Premium Joyful</a></h6>
                            <span class="mini-cart-quantity">1 x $65.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{asset('img/product/2.png')}}" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">The White Rose</a></h6>
                            <span class="mini-cart-quantity">1 x $85.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="/img/product/3.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Red Rose Bouquet</a></h6>
                            <span class="mini-cart-quantity">1 x $92.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="img/product/4.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Pink Flower Tree</a></h6>
                            <span class="mini-cart-quantity">1 x $68.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer">
                    <div class="mini-cart-sub-total">
                        <h5>Subtotal: <span>$310.00</span></h5>
                    </div>
                    <div class="btn-wrapper">
                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                        <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                    </div>
                    <p>Free Shipping on All Orders Over $100!</p>
                </div>

            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style - 01</a></li>
                                <li><a href="index-2.html">Home Style - 02</a></li>
                                <li><a href="index-3.html">Home Style - 03</a></li>
                                <li><a href="index-4.html">Home Style - 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="icon-user"></i>
                            </span>
                            My Account
                        </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="icon-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="icon-handbag"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner text-center">
                            <h1 class="ltn__page-title">Products</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOP DETAILS AREA START -->
        <div class="ltn__shop-details-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ltn__shop-details-inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ltn__shop-details-img-gallery ltn__shop-details-img-gallery-2">
                                        <div class="ltn__shop-details-small-img slick-arrow-2">
                                            @foreach($data['product']->multi_images as $image)
                                                <div class="single-small-img">
                                                    <img src="{{ asset($image->image_name) }}" alt="{{ $data['product']->product_name_en }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="ltn__shop-details-large-img">
                                            @foreach($data['product']->multi_images as $image)
                                                <div class="single-large-img">
                                                    <a href="{{ asset($image->image_name) }}" data-rel="lightcase:myCollection">
                                                        <img src="{{ asset($image->image_name) }}" alt="{{ $data['product']->product_name_en }}">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <h3>{{$data['product']->product_name_en}}</h3>
                                        <div class="product-price-ratting mb-20">
                                            <ul>
                                                <li>
                                                    <div class="product-price">
                                                        <span>{{$data['product']->discount ? $data['product']->price - $data['product']->discount : $data['product']->price}}</span>
                                                        @if($data['product']->discount)
                                                        <del>${{$data['product']->price}}</del>
                                                        @endif
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                           <!-- Stock Quantity and Availability -->
                                        <div class="product-stock-info mb-20">
                                            <p>
                                                <strong>Stock Quantity:</strong> 
                                                {{ $data['product']->stock_quantity }} 
                                            </p>
                                            @if($data['product']->stock_quantity > 0)
                                                <p class="text-success"><strong>In Stock</strong></p>
                                            @else
                                                <p class="text-danger"><strong>Out of Stock</strong></p>
                                            @endif
                                        </div>
                                        <div class="modal-product-brief">
                                            <p>{!! $data['product']->short_description_en !!} </p>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                            <ul>
                                                <li>
                                                    <div class="ltn__color-widget clearfix">
                                                        <strong class="d-meta-title">Color</strong>
                                                        <ul>
                                                            <li class="theme"><a href="#"></a></li>
                                                            <li class="green-2"><a href="#"></a></li>
                                                            <li class="blue-2"><a href="#"></a></li>
                                                            <li class="white"><a href="#"></a></li>
                                                            <li class="red"><a href="#"></a></li>
                                                            <li class="yellow"><a href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ltn__size-widget clearfix mt-25">
                                                        <strong class="d-meta-title">Size</strong>
                                                        <ul>
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                            <ul class="row">
                                                <li class="col-8">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li class="col-5">
                                                    <a href="#" 
                                                    class="theme-btn-1 btn btn-effect-1 d-add-to-cart add-to-cart" 
                                                    title="Add to Cart" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#add_to_cart_modal" 
                                                    data-product-name="{{ $data['product']->product_name_en }}" 
                                                    data-product-id = "{{ $data['product']->id }}"
                                                    data-product-image="{{ asset($data['product']->image) }}" 
                                                    data-checkout-url="{{ route('frontend.product.checkout', ['slug'=>'slug']) }}">
                                                    <span>ADD TO CART</span>
                                                 </a>
                                                 <li class="col-5">
                                                    <a href="#" 
                                                    id="buy-product-btn"
                                                    class="theme-btn-1 btn btn-effect-1 buy-product-btn" 
                                                    data-product-name="{{ $data['product']->product_name_en }}" 
                                                    data-product-id="{{ $data['product']->id }}"
                                                    data-product-image="{{ asset($data['product']->image) }}" 
                                                    data-checkout-url="{{ route('frontend.product.checkout', ['slug'=>'slug']) }}">
                                                    <span>Buy Now</span>
                                                 </a>
                                                </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-effect-1 d-add-to-wishlist" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <i class="icon-heart"></i>
                                                </a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <div class="ltn__social-media mb-30">
                                            <ul>
                                                <li class="d-meta-title">Share:</li>
                                                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                            <ul>
                                                <li><strong>SKU:</strong> <span>12345</span></li>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                    <a href="#">Flower</a>
                                                </span>
                                                </li>
                                                <li>
                                                    <strong>Tags:</strong>
                                                    <span>
                                                    <a href="#">Love</a>
                                                    <a href="#">Flower</a>
                                                    <a href="#">Heart</a>
                                                </span>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="ltn__safe-checkout d-none">
                                            <h5>Guaranteed Safe Checkout</h5>
                                            <img src="{{asset('img/icons/payment-2.png')}}" alt="Payment Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS AREA END -->

        <!-- SHOP DETAILS TAB AREA START -->
        <div class="ltn__shop-details-tab-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__shop-details-tab-inner">
                            <div class="ltn__shop-details-tab-menu">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                                    <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                                    <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Comments</a> -->
                                    <a data-bs-toggle="tab" href="#liton_tab_details_1_4" class="">Shipping</a>
                                    <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                    <div class="ltn__shop-details-tab-content-inner text-center">
                                        <p>{!! $data['product']->description !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_2">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <div class="customer-reviews-head text-center">
                                            <h4 class="title-2">Customer Reviews</h4>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <!-- comment-area -->
                                                <div class="ltn__comment-area mb-30">
                                                    <div class="ltn__comment-inner">
                                                        <ul>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="{{asset('img/testimonial/1.jpg')}}" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 3, 2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="{{asset('img/testimonial/3.jpg')}}" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="{{asset('img/testimonial/2.jpg')}}" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <div class="product-ratting">
                                                                            <ul>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                        <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <!-- comment-reply -->
                                                <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                                    <form action="#">
                                                        <h4 class="title-2">Add a Review</h4>
                                                        <div class="mb-30">
                                                            <div class="add-a-review">
                                                                <h6>Your Ratings:</h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                                            <textarea placeholder="Type your comments...."></textarea>
                                                        </div>
                                                        <div class="input-item input-item-name ltn__custom-icon">
                                                            <input type="text" placeholder="Type your name....">
                                                        </div>
                                                        <div class="input-item input-item-email ltn__custom-icon">
                                                            <input type="email" placeholder="Type your email....">
                                                        </div>
                                                        <div class="input-item input-item-website ltn__custom-icon">
                                                            <input type="text" name="website" placeholder="Type your website....">
                                                        </div>
                                                        <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                                        <div class="btn-wrapper">
                                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_3">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <!-- comment-area -->
                                        <div class="ltn__comment-area mb-30">
                                            <h4 class="title-2">Comments (5)</h4>
                                            <div class="ltn__comment-inner">
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('img/testimonial/1.jpg')}}" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/3.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="img/testimonial/4.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <span class="comment-date">20th May 2020</span>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                        <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="ltn__comment-item clearfix">
                                                                    <div class="ltn__commenter-img">
                                                                        <img src="{{asset('img/testimonial/1.jpg')}}" alt="Image">
                                                                    </div>
                                                                    <div class="ltn__commenter-comment">
                                                                        <h6><a href="#">Adam Smit</a></h6>
                                                                        <span class="comment-date">20th May 2020</span>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                        <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('img/testimonial/2.jpg')}}" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- comment-reply -->
                                        <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                            <form action="#">
                                                <h4 class="title-2">Leave a Reply</h4>
                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea placeholder="Type your comments...."></textarea>
                                                </div>
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" placeholder="Type your name....">
                                                </div>
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" placeholder="Type your email....">
                                                </div>
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="website" placeholder="Type your website....">
                                                </div>
                                                <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                                <div class="btn-wrapper">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i class="far fa-comments"></i> Post Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_4">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <h4 class="title-2">Shipping policy for our store</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptates rerum neque ea libero numquam officiis ipsum, consectetur ducimus dicta in earum repellat sunt ab odit laboriosam cupiditate ipsam, doloremque.</p>
                                        <ul>
                                            <li>1-2 business days (Typically by end of day)</li>
                                            <li><a href="#">30 days money back guaranty</a></li>
                                            <li>24/7 live support</li>
                                            <li>odio dignissim qui blandit praesent</li>
                                            <li>luptatum zzril delenit augue duis dolore</li>
                                            <li>te feugait nulla facilisi.</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, quia vel eligendi ipsam. Ea, quasi quam ducimus recusandae unde ipsa nam rem a minus tenetur quae sint voluptatem voluptate inventore.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_details_1_5">
                                    <div class="ltn__shop-details-tab-content-inner">

                                        <div class="table-1 mb-20">
                                            <table class="">
                                                <tbody>
                                                    <tr>
                                                        <th>SIZE</th>
                                                        <th>XS</th>
                                                        <th>S</th>
                                                        <th>S/M</th>
                                                        <th>M</th>
                                                        <th>M/L</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                    </tr>
                                                    <tr data-bs-region="uk">
                                                        <th>UK</th>
                                                        <td>4</td>
                                                        <td>6 - 8</td>
                                                        <td>6 - 10</td>
                                                        <td>10 - 12</td>
                                                        <td>12 - 16</td>
                                                        <td>14 - 16</td>
                                                        <td>18</td>
                                                    </tr>
                                                    <tr data-bs-region="eur">
                                                        <th>
                                                            <span class="mobile-show">EUR</span><span class="mobile-none">EUROPE</span>
                                                        </th>
                                                        <td>32</td>
                                                        <td>34 - 36</td>
                                                        <td>34 - 38</td>
                                                        <td>38 - 40</td>
                                                        <td>40 - 44</td>
                                                        <td>42 - 44</td>
                                                        <td>46</td>
                                                    </tr>
                                                    <tr data-bs-region="usa">
                                                        <th>
                                                            <span>USA/</span><span class="mobile-none">CANADA</span><span class="mobile-show"> CA</span>
                                                        </th>
                                                        <td>0</td>
                                                        <td>2 - 4</td>
                                                        <td>2 - 6</td>
                                                        <td>6 - 8</td>
                                                        <td>8 - 12</td>
                                                        <td>10 - 12</td>
                                                        <td>14</td>
                                                    </tr>
                                                    <tr data-bs-region="aus">
                                                        <th>AUS / NZ</th>
                                                        <td>4</td>
                                                        <td>6 - 8</td>
                                                        <td>6 - 10</td>
                                                        <td>10 - 12</td>
                                                        <td>12 - 16</td>
                                                        <td>14 - 16</td>
                                                        <td>18</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS TAB AREA END -->

        <!-- PRODUCT SLIDER AREA START -->
        @include('frontend.includes.product-details.relatated-product')
        <!-- PRODUCT SLIDER AREA END -->
        <!-- login modal start -->
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center mb-3">
                            <span>or</span>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-outline-danger" id="googleLoginButton">
                                <i class="bi bi-google me-2"></i> Login with Google
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
<!-- login modal end -->

@endsection
@section('scripts')
<script>
    document.getElementById('googleLoginButton').addEventListener('click', function () {
        const popup = window.open(
            '{{ route("login.google") }}',
            'googleLogin',
            'width=800,height=600,top=200,left=400'
        );

        const checkPopup = setInterval(() => {
            if (popup.closed) {
                clearInterval(checkPopup);
                // Reload or close the login modal after successful Google login
                window.location.reload(); // Adjust based on your app's needs
            }
        }, 1000);
    });
</script>
<script>
   $(document).ready(function () {
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        var url = "{{ route('frontend.check-auth-status') }}"
        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                if (response.is_guest) {
                    // Show login modal for guests
                    $('#loginModal').modal('show');
                } else {
                    // Proceed to add to cart for authenticated users
                    addToCart(productId);
                }
            },
            error: function () {
                alert('An error occurred. Please try again.');
            }
        });
    });

    $('.buy-product-btn').on('click', function(e){
        e.preventDefault();
        var productId = $(this).data('product-id');
        var url = "{{ route('frontend.check-auth-status') }}"
        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                if (response.is_guest) {
                    // Show login modal for guests
                    $('#loginModal').modal('show');
                } else {
                    // Proceed to add to cart for authenticated users
                    placeSingleOrder(productId);
                }
            },
            error: function () {
                alert('An error occurred. Please try again.');
            }
        });
    })

    function addToCart(productId) {
        
        $.ajax({
            url: '{{ route("user.cart.store", ["product_id" => "__PRODUCT_ID__"]) }}'.replace('__PRODUCT_ID__', productId),
            type: 'POST',
            data: {
                quantity: 1,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                alert(response.message || 'Product added to cart!');
            },
            error: function () {
                alert('An error occurred while adding the product to the cart.');
            }
        });
    }

    function placeSingleOrder(productId) {
        var placeOrderUrl = "{{ route('user.order.single') }}"; // New route for single orders

        $.ajax({
            url: placeOrderUrl,
            type: 'POST',
            data: {
                product_id: productId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.message) {
                    alert(response.message);
                    window.location.href = "{{ route('user.orders.index') }}";
                } else {
                    alert("Order placed successfully!");
                    window.location.href = "{{ route('user.orders.index') }}";
                }
            },
            error: function(xhr, status, error) {
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert(xhr.responseJSON.message);
                } else {
                    alert('An error occurred placing the order: ' + error);
                }
            }
        });
    }
});

</script>
@endsection

