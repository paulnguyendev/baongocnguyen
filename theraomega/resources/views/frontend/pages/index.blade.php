@extends('frontend.main')
@section('content')

<div class="offcanvas-overlay"></div>
<!-- Hero/Intro Slider Start -->
<div class="section">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair</h2>
                                <p>
                                    Torem ipsum dolor sit amet, consectetur adipisicing
                                    elitsed do eiusmo tempor incididunt ut labore et dolore
                                    magna
                                </p>
                                <a href="{{ route('home/index') }}/" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="assets/images/slider-image/slider-1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair</h2>
                                <p>
                                    Torem ipsum dolor sit amet, consectetur adipisicing
                                    elitsed do eiusmo tempor incididunt ut labore et dolore
                                    magna
                                </p>
                                <a href="{{ route('home/index') }}/" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="assets/images/slider-image/slider-2.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Product Category Start -->
<div class="section pt-100px pb-100px">
    <div class="container">
        <div class="category-slider swiper-container" data-aos="fade-up">
            <div class="category-wrapper swiper-wrapper">
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="{{ route('home/index') }}/" class="category-inner">
                        <div class="category-single-item">
                            <img src="assets/images/icons/1.png" alt="" />
                            <span class="title">Office Chair</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="{{ route('home/index') }}/" class="category-inner">
                        <div class="category-single-item">
                            <img src="assets/images/icons/2.png" alt="" />
                            <span class="title">Book Shelf</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="{{ route('home/index') }}/" class="category-inner">
                        <div class="category-single-item">
                            <img src="assets/images/icons/3.png" alt="" />
                            <span class="title">Light & Sofa</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="{{ route('home/index') }}/" class="category-inner">
                        <div class="category-single-item">
                            <img src="assets/images/icons/4.png" alt="" />
                            <span class="title">Reading Table</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="{{ route('home/index') }}/" class="category-inner">
                        <div class="category-single-item">
                            <img src="assets/images/icons/5.png" alt="" />
                            <span class="title">Corner Table</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
            </div>
        </div>
    </div>
</div>

<!-- Product Category End -->

<!-- Product tab Area Start -->
<div class="section product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title mb-0">
                    <h2 class="title">Our Products</h2>
                    <p class="sub-title mb-30px">
                        Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                        eiusmo tempor incididunt ut labore
                    </p>
                </div>
            </div>

            {{-- <!-- Tab Start -->
                <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                    <ul class="product-tab-nav nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">New
                                Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Best Sellers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">Sale Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">On Sales</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab End --> --}}
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                        <div class="row">
                            @foreach ($products_real as $item)
                            @php
                            $id = $item['id'];
                            $title = $item['title'];
                            $slug = $item['slug'];
                            $thumbnail = $item['thumbnail'];
                            $regular_price = $item['regular_price'];
                            $sale_price = $item['sale_price'];
                            @endphp
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('products-real/detail', ['id' => $id]) }}" class="image">
                                            <img src="{{ asset('uploads/images') }}/{{ $thumbnail }}" alt="Product" />
                                            {{-- <img class="hover-image" src="assets/images/product-image/2.jpg"
                                            alt="Product" /> --}}
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">

                                            <!-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a> -->
                                        </div>
                                        <a title="Add To Cart" class="add-to-cart" href="{{ route('cart/add', ['id' => $id]) }}">
                                            Add To Cart
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('products-real/detail', ['id' => $id]) }}">{{ $title }}
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">{{ show_price($regular_price) }}</span>
                                        </span>
                                    </div>
                                </div>












                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="tab-product-best-sellers">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Product 1
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Table</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <!-- <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div> -->
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-sale-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Product 1
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}} --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Table</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <div class="tab-pane fade" id="tab-product-on-sales">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Product 1
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Table</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges"> </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">High quality vase bottle</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ route('home/index') }}/" class="image">
                                            <img src="assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        {{-- <button title="Add To Cart" class="add-to-cart">
                                                Add To Cart
                                            </button> --}}
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <a href="{{ route('home/index') }}/">Living & Bedroom Chair</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 4th tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product tab Area End -->

<!-- Banner Section Start -->
<div class="section pb-100px pt-100px">
    <div class="container">
        <!-- Banners Start -->
        <div class="row">
            <!-- Banner Start -->
            <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('home/index') }}/" class="banner">
                    <img src="assets/images/banner/1.jpg" alt="" />
                    <div class="info justify-content-end">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Sale Furniture <br />
                                For Summer
                            </h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('home/index') }}/" class="banner">
                    <img src="assets/images/banner/2.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Office Chair <br />
                                For Best Offer
                            </h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->
        </div>
        <!-- Banners End -->
    </div>
</div>
@endsection