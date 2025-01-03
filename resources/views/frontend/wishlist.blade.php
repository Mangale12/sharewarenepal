@extends('frontend.layouts.app')
@section('title', 'Wshilist')
@section('css')
@endsection

@section('content')
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Wishlist</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area mb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table">
                            <!-- <thead>
                            <th class="cart-product-remove">X</th>
                            <th class="cart-product-image">Image</th>
                            <th class="cart-product-info">Title</th>
                            <th class="cart-product-price">Price</th>
                            <th class="cart-product-quantity">Quantity</th>
                            <th class="cart-product-subtotal">Subtotal</th>
                        </thead> -->
                            <tbody>
                                <tr>
                                    <td class="cart-product-remove">x</td>
                                    <td class="cart-product-image">
                                        <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="product-details.html">Brake Conversion Kit</a></h4>
                                    </td>
                                    <td class="cart-product-price">$85.00</td>
                                    <td class="cart-product-stock">In Stock</td>
                                    <td class="cart-product-add-cart">
                                        <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-remove">x</td>
                                    <td class="cart-product-image">
                                        <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="product-details.html">Shock Mount Insulator</a></h4>
                                    </td>
                                    <td class="cart-product-price">$89.00</td>
                                    <td class="cart-product-stock">In Stock</td>
                                    <td class="cart-product-add-cart">
                                        <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-remove">x</td>
                                    <td class="cart-product-image">
                                        <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="product-details.html">Tail Light Lens</a></h4>
                                    </td>
                                    <td class="cart-product-price">$149.00</td>
                                    <td class="cart-product-stock">In Stock</td>
                                    <td class="cart-product-add-cart">
                                        <a class="submit-button-1" href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">Add to Cart</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->
@endsection
@section('scripts')
@endsection