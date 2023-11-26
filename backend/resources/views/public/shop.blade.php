@extends('public.templating.layouts')
@section('title', 'Agrihub - Shop')


@section('content')
    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Shop</h1>
                            <div class="breadcrumb">
                                <a href="index.html" rel="nofollow">Home</a>
                                <span></span> Shop
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-5-5">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>We found <strong class="text-brand">{{count($data)}}</strong> items for you!</p>
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
                    <?php
                    function formatRupiah($angka) {
                        $rupiah = number_format($angka, 0, ',', '.');
                        return $rupiah;
                    }
                    $i = 1;
                    foreach ($data as $row) :
                    ?>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?php echo route('show_product', ['id' => $row->_id]) ?>">
                                            <img class="default-img" src="{{ $row->url_gambar }}" height="200" alt="" />
                                            <!-- <img class="hover-img" src="{{asset('assets/imgs/shop/cat-2.png')}}" alt="" /> -->
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a> -->
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">{{$row->kategori}}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Fruit</a>
                                    </div>
                                    <h2><a href="<?php echo route('show_product', ['id' => $row->_id]) ?>"><?php echo (empty($row->nama) ? '' : $row->nama); ?></a></h2>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">{{$row->vendor_nama}}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.<?php echo (empty($row->harga) ? '' : formatRupiah($row->harga)); ?>,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    endforeach;
                    if (empty($data)) {
                        echo '<tr><td colspan="5" class="text-center"> Tidak ada data </td></tr>';
                    }
                    ?>

                    </div>
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <!-- <li class="page-item"><a class="page-link dot" href="#">...</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">6</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

@endsection