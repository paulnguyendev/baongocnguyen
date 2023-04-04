@extends('frontend.main')
@section('content')
@php
$id = $item_products['id'];
$title = $item_products['title'];
$regular_price = $item_products['regular_price'];
$sale_price = $item_products['sale_price'];
$slug = $item_products['slug'];
$thumbnail = $item_products['thumbnail'];
@endphp
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Product</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop-left-sidebar.html">Product</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{ asset('uploads/images') }}/{{ $thumbnail }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content">
                    <h2>{{$title}}</h2>
                    <!-- <p class="reference">Reference:<span> demo_17</span></p> -->
                    <!-- <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                    </div> -->
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">{{show_price($regular_price)}}</li>
                        </ul>
                    </div>
                    <!-- <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p> -->
                    <div class="pro-details-quality">
                        <!-- <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                        </div> -->
                        <div class="pro-details-cart">
                            <a class="" href="{{ route('cart/add', ['id' => $id]) }}"> Add To
                                Cart</a>
                        </div>
                    </div>
                    <!-- <div class="pro-details-wish-com">
                        <div class="pro-details-wishlist">
                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                wishlist</a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                        </div>
                    </div> -->
                    <!-- <div class="pro-details-social-info">
                        <span>Share</span>
                        <div class="social-info">
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="pro-details-policy">
                        <ul>
                            <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With
                                    Customer Reassurance Module)</span></li>
                            <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit
                                    With Customer Reassurance Module)</span></li>
                            <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With
                                    Customer Reassurance Module)</span></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection