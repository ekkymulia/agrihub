@extends('public.templating.layouts')
@section('title', 'Agrihub - Vendors')
@section('content')

    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Vendor</h1>
                            <div class="breadcrumb">
                                <a href="index.html" rel="nofollow">Home</a>
                                <span></span> Vendor
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-4-5">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>We found <strong class="text-brand">29</strong> vendors for you!</p>
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
                    <div class="row product-grid">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-1.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-1.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2012</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Puncak Pass Farm</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Bogor</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-2.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2012</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Alam Maju Garut</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Garut</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end card 2 -->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-7.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2019</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Bumi Tani</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Jawa Tengah</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-8.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2018</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Sinar Panen</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Lampung</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-3.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2017</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Nusantara Sejahtera</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Jakarta</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-9.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2019</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Sinar Jaya</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Karawang</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-4.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2012</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Eko Makmur</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Makkasar</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-10.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2012</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Sumber Tani</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Yogyakarta</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-5.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2018</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Harvest Hub</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Depok</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-11.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2020</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">BioBloom</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Sumedang</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-6.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2019</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Tera Crops</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Semarang</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-8.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2018</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Sinar Panen</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Lampung</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-3.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2017</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Nusantara Sejahtera</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Jakarta</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="vendor-details-2.html">
                                            <img class="default-img" src="assets/imgs/vendor/vendor-9.png" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->
                                    
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Since 2019</a>
                                    </div>
                                    <h2><a href="shop-product-full.html">Sinar Jaya</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Karawang</span></li>
                                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="vendor-details-3.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <section class="section-padding pb-5">
                        <div class="section-title">
                            <h3 class="">Deals Of The Day</h3>
                            <a class="show-all" href="shop-grid-right.html">
                                All Deals
                                <i class="fi-rs-angle-right"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-full.html">
                                                <img src="assets/imgs/banner/banner-5.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-full.html">Seeds of Change Organic Quinoa, Brown</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">AgriHub</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$32.85</span>
                                                    <span class="old-price">$33.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-full.html">
                                                <img src="assets/imgs/banner/banner-6.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-full.html">Perdue Simply Smart Organics Gluten</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$24.85</span>
                                                    <span class="old-price">$26.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-full.html">
                                                <img src="assets/imgs/banner/banner-7.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-full.html">Signature Wood-Fired Mushroom</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Progresso</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$12.85</span>
                                                    <span class="old-price">$13.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-full.html">
                                                <img src="assets/imgs/banner/banner-8.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-full.html">Simply Lemonade with Raspberry Juice</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Yoplait</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$15.85</span>
                                                    <span class="old-price">$16.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!--End Deals-->
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Vendor Category</h5>
                        <ul>
                            <li>
                                <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Fruits</a>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Vegetables</a>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Tubers</a>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Spice</a>
                            </li>
                        </ul>
                    </div>

                    
                    
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Find by Location</h5>
                        <div class="search-location">
                            <form action="#">
                                <select class="select-active">
                                    <option>Your Location</option>
                                    <option>Aceh</option>
                                    <option>Bali</option>
                                    <option>Banten</option>
                                    <option>Bengkulu</option>
                                    <option>DI Yogyakarta</option>
                                    <option>DKI Jakarta</option>
                                    <option>Gorontalo</option>
                                    <option>Jambi</option>
                                    <option>Jawa Barat</option>
                                    <option>Jawa Tengah</option>
                                    <option>Jawa Timur</option>
                                    <option>Kalimantan Barat</option>
                                    <option>Kalimantan Selatan</option>
                                    <option>Kalimantan Tengah</option>
                                    <option>Kalimantan Timur</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Kepulauan Bangka Belitung</option>
                                    <option>Kepulauan Riau</option>
                                    <option>Lampung</option>
                                    <option>Maluku</option>
                                    <option>Maluku Utara</option>
                                    <option>Nusa Tenggara Barat</option>
                                    <option>Nusa Tenggara Timur</option>
                                    <option>Papua</option>
                                    <option>Papua Barat</option>
                                    <option>Riau</option>
                                    <option>Sulawesi Barat</option>
                                    <option>Sulawesi Selatan</option>
                                    <option>Sulawesi Tengah</option>
                                    <option>Sulawesi Tenggara</option>
                                    <option>Sulawesi Utara</option>
                                    <option>Sumatera Barat</option>
                                    <option>Sumatera Selatan</option>
                                    <option>Sumatera Utara</option>
                                </select>
                            </form>
                        </div>                       
                    </div>
                    <div class="sidebar-widget  range mb-30">
                        <h5 class="section-title style-1 mb-30">Rating</h5>
                        <div class="container">
                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="assets/imgs/rating/rating5.svg" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="assets/imgs/rating/rating4.svg" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="assets/imgs/rating/rating3.svg" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="assets/imgs/rating/rating2.svg" width="80%">
                                  </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Product Capacity</h5>
                        <ul>
                            <li>
                                <a href="shop-grid-right.html">50 Kg</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html">60 Kg</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html">80 Kg</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html">100 Kg</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html">150 Kg</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Product sidebar Widget -->
                    
                    <!-- <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="assets/imgs/banner/banner-11.png" alt="" />
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Oganic</span><br />
                                Juice
                            </h4>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>

@endsection