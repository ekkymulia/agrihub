@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - Dashboard')
@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Dashboard</h2>
            <p>Whole data about your business here</p>
        </div>
        <!-- <div>
            <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-person"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Users</h6>
                        <span>{{$users}}</span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-subscriptions"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Subscriptions</h6>
                        <span>1</span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Products</h6>
                        <span>{{count($data)}}</span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Monthly Earning</h6>
                        <span>$6,982</span>
                        <span class="text-sm"> Based in your local time. </span>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card mb-4">
                <article class="card-body">
                    <h5 class="card-title">Sale statistics</h5>
                    <canvas id="myChart" height="120px"></canvas>
                </article>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card mb-4">
                <article class="card-body">
                    <h5 class="card-title">Revenue Base on Area</h5>
                    <canvas id="myChart2" height="217"></canvas>
                </article>
            </div>
        </div>
    </div> -->
    <div class="card mb-4">
        <header class="card-header">
            <h4 class="card-title">Latest subsribers</h4>
            <div class="row align-items-center">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>All Categories</option>
                            <option>Women's Clothing</option>
                            <option>Men's Clothing</option>
                            <option>Cellphones</option>
                            <option>Computer & Office</option>
                            <option>Consumer Electronics</option>
                            <option>Jewelry & Accessories</option>
                            <option>Home & Garden</option>
                            <option>Luggage & Bags</option>
                            <option>Shoes</option>
                            <option>Mother & Kids</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2021" class="form-control" />
                </div>
                <div class="col-md-2 col-6">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>Status</option>
                            <option>All</option>
                            <option>Paid</option>
                            <option>Chargeback</option>
                            <option>Refund</option>
                        </select>
                    </div>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-center">
                                    <div class="form-check align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01" />
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle" scope="col">Order ID</th>
                                <th class="align-middle" scope="col">Billing Name</th>
                                <th class="align-middle" scope="col">Date</th>
                                <th class="align-middle" scope="col">Total</th>
                                <th class="align-middle" scope="col">Payment Status</th>
                                <th class="align-middle" scope="col">Payment Method</th>
                                <th class="align-middle" scope="col">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02" />
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2540</a></td>
                                <td>Muhammad Naufal Ardhani</td>
                                <td>24 November 2024</td>
                                <td>Rp.150.000</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success">Paid</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-responsive end// -->
        </div>
    </div>
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@endsection