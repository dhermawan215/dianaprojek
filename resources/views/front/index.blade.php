@extends('front.layouts.app')

@section('contents')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/6/24/54c5de22-a1b8-4d95-ac59-73fcdd34fca6.jpg.webp?ect=4g"
                                alt="baner1">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Violeta Shop</b> </h1>
                                <h3 class="h3">Boutique and online shopping</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('front/template/assets/img/banner_img_02.jpg') }}"
                                alt="baner2">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites.
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any
                                    kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('front/template/assets/img/banner_img_03.jpg') }}"
                                alt="baner3">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites.
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or
                                    tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a> --}}
    </div>
    <!-- End Banner Hero -->

    {{-- 
    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Kategori Bulan Ini</h1>
                <p>
                    Dapatkan produk terbaik bulan ini di toko kami.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('front/template/assets/img/category_img_01.jpg') }}"
                        class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Watches</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('front/template/assets/img/category_img_02.jpg') }}"
                        class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('front/template/assets/img/category_img_03.jpg') }}"
                        class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month --> --}}


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produk Unggulan</h1>
                    <p>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('produk') }}">
                            <img src="{{ asset('assets/aset1.jpeg') }}" class="card-img-top" alt="Produk Unggulan 1"
                                height="400px">
                        </a>
                        <div class="card-body mt-2">
                            <a href="#" class="h2 text-decoration-none text-dark">Kerudung</a>
                            <p class="card-text">
                                Kerudung wanita dengan model terbaru dan fashionable
                            </p>

                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center"><a href="{{ route('produk') }}" class="btn btn-success">Go Shop</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('produk') }}">
                            <img src="{{ asset('assets/aset2.jpeg') }}" class="card-img-top" alt="Produk Unggulan 2"
                                height="400px">
                        </a>
                        <div class="card-body">
                            <a href="#" class="h2 text-decoration-none text-dark">Baju Wanita</a>
                            <p class="card-text">
                                Berbagai model baju wanita model terbaru.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center"><a href="{{ route('produk') }}" class="btn btn-success">Go
                                    Shop</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('produk') }}">
                            <img src="{{ asset('assets/aset3.jpeg') }}" class="card-img-top" alt="Produk Unggulan 3"
                                height="400px">
                        </a>
                        <div class="card-body">
                            <a href="#" class="h2 text-decoration-none text-dark">Celana Wanita</a>
                            <p class="card-text">
                                Berbagai macam jenis celana untuk wanita.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center"><a href="{{ route('produk') }}" class="btn btn-success">Go
                                    Shop</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
