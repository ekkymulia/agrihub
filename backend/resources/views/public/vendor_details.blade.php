@extends('public.templating.layouts')
@section('title', 'Agrihub - Vendors Details')
@section('content')

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Vendors <span></span> {{$vendor->nama_lengkap}}
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="archive-header-3 mt-30 mb-80" style="background-image: url({{asset('assets/imgs/vendor/vendor-header-bg.png')}})">
            <div class="archive-header-3-inner">
                <div class="vendor-logo mr-50">
                    <img src="{{asset('assets/imgs/vendor/vendor-1.png')}}" alt="" />
                </div>
                <div class="vendor-content">
                    <div class="product-category">
                        <span class="text-muted">Since 2012</span>
                    </div>
                    <h3 class="mb-5 text-white"><a href="vendor-details-2.html" class="text-white">{{$vendor->nama_lengkap}}</a></h3>
                    <div class="product-rate-cover mb-15">
                        <div class="product-rate d-inline-block">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="vendor-des mb-15">
                                <p class="font-sm text-white">Ini adalah toko spesialis yang menawarkan berbagai produk strawberry dan pangan berkualitas tinggi.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="vendor-info text-white mb-15">
                                <ul class="font-sm">
                                    <li><img class="mr-5" src="{{asset('assets/imgs/theme/icons/icon-location.svg')}}" alt="" /><strong>Address: </strong> <span>{{$vendor->alamat}}</span></li>
                                    @if(empty(session('u_data')))
                                        <li><img class="mr-5" src="{{asset('assets/imgs/theme/icons/icon-contact.svg')}}" alt="" /><strong>Call Us:</strong><span> <a href="{{route('subscribe')}}">Login and Subscribe to Unlock</a></span></li>
                                    @else
                                        @if(session('u_data')->is_subscribe == 1)
                                            <li><img class="mr-5" src="{{asset('assets/imgs/theme/icons/icon-contact.svg')}}" alt="" /><strong>Call Us:</strong><span> <a href="http://wa.me/{{ $vendor->no_telp }}">{{ $vendor->no_telp }}</a></span></li>
                                        @elseif(session('u_data')->is_subscribe == 0)
                                            <li><img class="mr-5" src="{{asset('assets/imgs/theme/icons/icon-contact.svg')}}" alt="" /><strong>Call Us:</strong><span> <a href="{{route('subscribe')}}">Subscribe to Unlock</a></span></li>
                                        @endif
                                    @endif


                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-lg-4-5">
                <div class="shop-product-fillter">
                    <div class="totall-product">
            
                            <p>We found <strong class="text-brand">
                                
                            @foreach ($products as $key => $product)
                                @if ($vendor->_id == $product->vendor_id)
                                    @php
                                    $key + 1
                                    @endphp
                                @endif
                            @endforeach
                            
                            </strong>{{$key}} items for you!</p>
                         
                    </div>
                    <div class="sort-by-product-area">
                        <div class="sort-by-cover mr-10">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps"></i>Show:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">50</a></li>
                                    <li><a href="#">100</a></li>
                                    <li><a href="#">150</a></li>
                                    <li><a href="#">200</a></li>
                                    <li><a href="#">All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sort-by-cover">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Featured</a></li>
                                    <li><a href="#">Price: Low to High</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                    <li><a href="#">Release Date</a></li>
                                    <li><a href="#">Avg. Rating</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list mb-50">
                    <!-- start vendor product -->
                    @foreach ($products as $product)
                    @if ($vendor->_id == $product->vendor_id)
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <div class="product-img-inner">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="{{$product->url_gambar}}" alt="" />
                                        <img class="hover-img" src="{{$product->url_gambar}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="">{{$vendor->nama_lengkap}}</a>
                            </div>
                            <h2><a href="shop-product-right.html">{{$product->nama}}</a></h2>
                            
                            <p class="mt-15 mb-15">{{$product->deskripsi}}</p>
                            <div class="product-price">
                                <span>Rp.{{$product->harga}},-</span>
                            </div>
                            <div class="mt-30 d-flex align-items-center">
                                <a aria-label="Buy now" class="btn" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!--end vendor product-->
                </div>
                <!--product grid-->
                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <section class="section-padding pb-5">
                    
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-cart-wrap style-2">
                                
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Deals-->
            </div>
            <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                <!-- <div class="banner-img mb-30">
                    <img src="assets/imgs/banner/banner-10.jpg" alt="" />
                </div> -->
                <div class="sidebar-widget widget-category-2 mb-30">
                    <h5 class="section-title style-1 mb-30">Category</h5>
                    <ul>
                        <li>
                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Fruits</a><span class="count">30</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Vegetables </a><span class="count">42</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Tubers</a><span class="count">68</span>
                        </li>
                        <li>
                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Spices</a><span class="count">87</span>
                        </li>
                    </ul>
                </div>
               
                
            </div>
        </div>
    </div>
</main>
@endsection