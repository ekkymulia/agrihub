@extends('public.templating.indexlayouts')
@section('title', 'Agrihub - Menghubungkan Supplier dan Buyer Pertanian')
@section('content')
<main class="main">
        <section class="home-slider style-2 position-relative mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="home-slide-cover">
                            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                                <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-9.png)">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">
                                            Find the Best <br> Product
                                            on <br>your Location
                                        </h1>
                                        <p class="mb-65"></p>
                                        <form class="form-subcriber d-flex">
                                        </form>
                                    </div>
                                </div>
                                <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-4.png)">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">
                                            Strawberry <br> Pass Farm Bogor
                                        </h1>
                                        <p class="mb-65">Sign up for the daily newsletter</p>
                                        <form class="form-subcriber d-flex">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-arrow hero-slider-1-arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-xl-block">
                        <div class="banner-img style-3 animated animated">
                            <div class="banner-text mt-50">
                                <h2 class="mb-50">
                                    Having trouble <br />
                                    finding <br>
                                    <span class="text-brand">a specific <br> product?<br />
                                        </span>
                                </h2>
                                <a href="{{ url('chatbot') }}" class="btn btn-xs">Chat Bot AI <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
