@extends('frontend.main')
@section('content')
    <style>
        table th {
            padding: 15px 10px;
            border: none;
            border-bottom: 2px solid #EFEFEF;
            color: #2d2a2a;
            vertical-align: middle;
            text-align: left;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px;
            line-height: 1.2;
        }
    </style>
    <section class="side-search" id="side-search">
        <form method="POST" class="form-grid">
            <span class="material-icons start-icon">search</span>
            <input type="text" name="keyword" placeholder="Search service" />
            <button type="submit" name="btn-submit-search" class="btn btn-submit">
                <span class="material-icons">east</span>
            </button>
        </form>
        <button id="search-close">
            <span class="material-icons-outlined">close</span>
        </button>
    </section>
    <section class="fixed-social">
        <a href="https://www.facebook.com/Noire-Spa-118930913710437" target="_blank">
            <img src="public/assets/images/icons/facebook.png" alt="Facebook" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="https://www.google.com/search?q=noirespa&rlz=1C1SQJL_viVN923VN923&oq=noirespa&aqs=chrome..69i57j69i60l5.4128j1j7&sourceid=chrome&ie=UTF-8"
            target="_blank">
            <img src="public/assets/images/icons/google.png" alt="Google" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="#Yelp" target="_blank">
            <img src="public/assets/images/icons/yelp.png" alt="Yelp" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="#Instagram" target="_blank">
            <img src="public/assets/images/icons/instagram.png" alt="Instagram" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="#Twitter" target="_blank">
            <img src="public/assets/images/icons/twitter-white3.png" alt="Twitter" class="fixed-social__icon" />
        </a>
    </section>
    <main id="main-content" role="main">

        <!-- Page Egift-->
        <section class="section section-content-page">
            <div class="container">
                <div class="egift-content">
                    <h2 class="typography-title" style="padding-bottom: 50px;">Check out </h2>

                    <div class="egift-description">
                        <p class="typography-body-l text-center">
                        </p>
                    </div>

                    <div class="row payment-row">

                    </div>
                    <div class="row egift-row">
                        @if (count($products) > 0)
                            <div class="col-md-6 col-xs-12">
                                <form action="#">
                                    <input type="hidden" name="egift_id" id="egift_id" value="11">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-control">
                                                {{-- <p class="font3 text-uppercase text-center typography-body-l">
                            Your Information
                        </p> --}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-control">
                                                <label for="first_name" class="form-control-label">
                                                    First Name
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="first_name" type="text" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-control">
                                                <label for="middle_name" class="form-control-label">
                                                    Middle Name
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="middle_name" type="text" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-control">
                                                <label for="last_name" class="form-control-label">
                                                    Last Name
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="last_name" type="text" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-control">
                                                <label for="your_email" class="form-control-label">
                                                    Your Email
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="your_email" type="email" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-control">
                                                <label for="your_phone" class="form-control-label">
                                                    Your Phone
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="your_phone" type="tel" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-control">
                                                <label for="your_adress" class="form-control-label">
                                                    Your Adress
                                                </label>
                                                <div class="input-gradient">
                                                    <input id="your_adress" type="text" class="form-control-input" />
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                    <div class="form-control">
                        <label>
                            Payment with 
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/visa.png" alt="visa">
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/mastercard.png" alt="mastercard">
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/amex.png" alt="amex">
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/discover.png" alt="discover">
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/diners.png" alt="diners">
                            <img src="https://passion-karaoke.com/wp-content/plugins/yith-woocommerce-authorizenet-payment-gateway-premium//assets/images/icons/credit-cards/jcb.png" alt="jcb"> 
                        </label>
                    </div>

                </div> --}}
                                        {{-- <div class="col-md-12">

                    <div class="form-payment">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-control">
                                    <label for="name_card" class="form-control-label">Card Holder Name *</label>
                                    <div class="input-gradient">
                                        <input id="name_card" type="text" class="form-control-input">
                                    </div>
                                    <div id="name_card_alert" style="color:red"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-control">
                                    <label for="card_number" class="form-control-label">Card Number *</label>
                                    <div class="input-gradient">
                                        <input id="card_number" type="text" class="form-control-input" placeholder="1234 1234 1234 1234">
                                    </div>
                                    <div id="card_number_alert" style="color:red"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="card_number" class="form-control-label">Expired Date *</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-control">
                                            <div class="input-gradient">
                                                <input id="expired_month" type="text" class="form-control-input" placeholder="MM" maxlength="2">
                                            </div>
                                            <div id="expired_month_alert" style="color:red"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control">
                                            <div class="input-gradient">
                                                <input id="expired_year" type="text" class="form-control-input" placeholder="YYYY" maxlength="4">
                                            </div>
                                            <div id="expired_year_alert" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <label for="cvc_code" class="form-control-label">CVC Code *</label>
                                    <div class="input-gradient">
                                        <input id="cvc_code" type="text" class="form-control-input" placeholder="CVC" maxlength="4">
                                    </div>
                                    <div id="cvc_code_alert" style="color:red"></div>
                                </div>
                            </div> --}}
                                        <div class="col-md-12">
                                            <div class="form-control text-center">
                                                <button type="button" class="btn btn-style1 btn-payment-egift">
                                                    Pay now
                                                </button>
                                            </div>
                                            <div id="last-result" class="text-center"></div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-control">
                                    <p class="typography-body-m" id="egift_id_alert">
                                        {{-- Please choose a design and add input e-gift information --}}
                                    </p>
                                    <table>

                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Sub Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product['name'] ?? '' }} x {{ $product['quantity'] ?? 0 }} </td>
                                                    <td>{{ show_price($product['subTotal'] ?? 0) }}</td>
                                                    <td>
                                                        <div class="text-center">
                                                            <a href="{{ env('APP_URL') }}cart/remove"
                                                                class="btn btn-style4">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td><strong>TOTAL</strong></td>
                                                <td>{{ show_price($cart['info']['totalPrice'] ?? 0) }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                {{-- <td><strong>TOTAL</strong></td>
                                            <td>{{ show_price($cart['info']['totalPrice'] ?? 0) }}</td> --}}
                                            </tr>

                                        </tfoot>

                                    </table>
                                </div>

                            </div>
                        @else
                            <div class="col-md-12 col-xs-12">
                                <p class="text-center">You have nothing in your cart</p>
                                <div class="text-center" style="padding-top: 50px;">
                                    <a href="{{ env('APP_URL') }}" class="btn btn-style1">BACK TO HOME</a>
                                </div>

                            </div>
                        @endif

                    </div>
                </div>
                <div class="dots-loading egift-loading">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <!-- <div class="form-control text-center">
                                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-style1" onclick="getFormEgift()">
                                                                                                                                                                                                                                                                                                Create Egift
                                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                                        </div> -->
                <div id="alert_success"
                    style="display:none; text-align: center;font-size:16px;color:green;border:1px dashed;margin-top:15px;padding:15px;">
                </div>
                <div id="alert_fail"></div>
                </form>
            </div>
            </div>
            </div>
            </div>
        </section>
    </main>
@endsection
