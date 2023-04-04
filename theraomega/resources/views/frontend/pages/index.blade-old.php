@extends('frontend.main')
@section('content')
    <section class="hero">
        <div class="hero-slide" style="background-image: url('{{ asset('uploads/images') }}/banner.png')">
            <div class="container hero-slide-content">
                <div class="row">
                    {{-- <div class="col-lg-8 col-xs-12">
            <h1 class="typography-hero">The joy of best nail</h1>
            <p class="typography-subhero">
                Design to make you come back to us                            </p>
            <a href="/service-menu" class="btn btn-style1">OUR SERVICES</a>
        </div> --}}
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('{{ asset('uploads/images') }}/banner.png')">
            <div class="container hero-slide-content">
                <div class="row">
                    {{-- <div class="col-lg-8 col-xs-12">
            <h1 class="typography-hero">The joy of best nail</h1>
            <p class="typography-subhero">
                Design to make you come back to us                            </p>
            <a href="/service-menu" class="btn btn-style1">OUR SERVICES</a>
        </div> --}}
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('{{ asset('uploads/images') }}/banner.png')">
            <div class="container hero-slide-content">
                <div class="row">
                    {{-- <div class="col-lg-8 col-xs-12">
            <h1 class="typography-hero">The joy of best nail</h1>
            <p class="typography-subhero">
                Design to make you come back to us                            </p>
            <a href="/service-menu" class="btn btn-style1">OUR SERVICES</a>
        </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="section why-choose-us">
        <div class="container">
            <div class="why-choose-us__content">
                <p class="typography-body-l">
                <p><img alt="" src="{{ asset('uploads/images') }}/product-2.jpg" /></p>
                <h2 class="typography-title">
                    Original Ointment
                </h2>
                <p style="font-size:20px;color:red;">
                    Price: $100
                </p>
                <p><span style="font-size:16px"><strong>100% Disposable Jet</strong> is a Cont&eacute;go patented technology
                        which <strong>PREVENTS CROSS-CONTAMINATION</strong> </span></p>


                </p>
            </div>
            <div class="form-control"
                style="
            max-width: 20%;
            margin: auto;
            margin-bottom: 30px;
        ">
                <div class="input-gradient">
                    <input id="your_adress" type="text" class="form-control-input text-center" value="1"
                        placeholder="Enter your quatity">
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('cart/add', ['id' => 1]) }}" class="btn btn-style1">BUY NOW</a>
            </div>
        </div>
    </section>
@endsection
