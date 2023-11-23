@extends('public.templating.layouts')
@section('title', 'Product - ' . $data->nama)
@section('content')

<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow">Home</a>
                    <span></span> <a href="{{route('shop')}}">Shop</a> <span></span> {{$data->nama}}
                </div>
            </div>
        </div>

        <?php
        function formatRupiah($angka) {
            $rupiah = number_format($angka, 0, ',', '.');
            return $rupiah;
        }
        ?>
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50 mt-30">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{ $data->url_gambar }}" alt="product image" />
                                        </figure>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h2 class="title-detail">{{$data->nama}}</h2>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">Rp.<?php echo (empty($data->harga) ? '' : formatRupiah($data->harga)); ?></span>
                                            <span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="short-desc mb-30">
                                        <p>{{$data->deskripsi}}</p>
                                        <br>
                                        <p>Packing : In Bulk (Kg)
                                            <br> Annual Production volume : 1500 Kg (1.5 Tonne)
                                            </p>
                                    </div>
                                    <div class="attr-detail attr-size mb-30">
                                        <strong class="mr-10">Size / Weight: </strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li class="active"><a href="#">50kg</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- THUMBNAILS -->
                                <!-- <div class="slider-nav-thumbnails" style="margin-top: 90px;">
                                    <div><img src="assets/imgs/shop/strawberry.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/umbi.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/mangga.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/kayu.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/jambu.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/durian.png" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/orange.png" alt="product image" /></div>
                                </div> -->
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Sertifikation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Estimation Panen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info">MOQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Information Supplier</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <div class="my-3">
                                                    </p>
                                                </div>
                        
                                                <span style="color: #066F3B;" class="text-bold">Sertifikation Produk :</span> <br>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr>
                                                    <th class="fw-normal">No</th>
                                                    <th class="fw-normal">Estimasi Panen</th>
                                                    <th class="fw-normal">Estimasi Jumlah</th>
                                                    <th class="fw-normal">Status</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Maret 2023</td>
                                                    <td>800 Kg</td>
                                                    <td>Sudah Panen</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Juli 2023</td>
                                                    <td>950 Kg</td>
                                                    <td>Sudah Panen</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>November 2023</td>
                                                    <td>650 Kg</td>
                                                    <td>Belum Panen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Vendor-info">
                                        <div class="vendor-logo d-flex mb-30">
                                            <table class="table table-bordered table-sm table-responsive table-striped">
                                                <tr>
                                                    <th class="fw-normal">No</th>
                                                    <th class="fw-normal">MOQ</th>
                                                    <th class="fw-normal">Harga</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td> < 200 Kg</td>
                                                    <td>Rp 5.000/Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>201 Kg - 500 Kg</td>
                                                    <td>Rp 4.500/Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td> > 501 Kg</td>
                                                    <td>Rp 3.500/Kg</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="my-3">
                        <span style="color: #066F3B;" class="text-bold">Disupply Oleh:</span> <br>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <a href="#" class="text-decoration-none" style="color: #066F3B;">Puncak Farm Bogor</a>
                                <span>Bergabung sejak: Mei 2020</span>
                            </div>
                            <img src="{{asset('assets/puncak-farm.png')}}" class="rounded" width="70" alt="">
                        </div>
                        <div class="d-flex mb-2 gap-2 justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <a href="detail-katalog" class="text-decoration-none" style="color: #066F3B;">Produk ini berada di Katalog:</a>
                                <span>Katalog Buah Manis</span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="detail-katalog.html" class="text-right" style="color: #066F3B; font-size: 0.75rem !important; text-align: right;">Lihat Katalog</a>
                            <a href="data-katalog.html" class="" style="color: #066F3B; font-size: 0.75rem !important;">Lihat Semua Katalog</a>
                            </div>
                        </div>
                        
                        <!-- <span style="color: #066F3B;" class="text-bold">informasi Katalog:</span>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span>Kota Bogor, Jawa Barat</span>
                        </div> -->
                        <span style="color: #066F3B;" class="text-bold">informasi Supplier:</span> <br>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span>Kota Bogor, Jawa Barat</span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Tipe Supplier:</span> <span>Supplier Besar</span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Email:</span> <span><a href="subscribe.html"> Subscribe to Get Contact </span></a>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Nomor Telepon:</span> <span><a href="subscribe.html">Subscribe to Get Contact</span></a>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span><a href="#">Buka pada Peta</a></span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center my-2 border">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.590667507179!2d106.97963541009817!3d-6.697511393270042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b77c044d6be9%3A0x705af1142447cc49!2sPuncak%20Pass%20Farm!5e0!3m2!1sen!2sid!4v1694509195995!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>               
                                        <!--comment form-->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
 
                                        
                        <div class="row mt-60">
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection