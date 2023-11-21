@extends('public.templating.layouts')
@section('title', 'Agrihub - Profile')
@section('content')



<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span class="active"></span> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-settings-sliders mr-10"></i>Account Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-4">
                                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header" style="text-align: center;">
                                            <h4>Account Details</h4>
                                        </div>
                                        <div class="card-body" >
                                            <div style="text-align: end; margin-top: 30px;">
                                                <h6 style="margin-left: 150px; margin-top: 4px;">Username</h6>
                                                <h6 style="margin-left: 150px; margin-top: 9px;">Email</h6>
                                                <h6 style="margin-left: 150px; margin-top: 9px;">No.Handphone</h6>
                                                <h6 style="margin-left: 150px; margin-top: 9px;">Type Account</h6>
                                                <button style="background-color: #35B77E; color: white; margin-bottom: 10px; margin-left: 150px; margin-top: 25px;">Save Data</button>
                                            </div>
                                            <div style="margin-top: 30px;">
                                                <p style="margin-left: 20px;">{{ session('u_data')->nama}}<span style="color: #35B77E; text-decoration: underline; margin-left: 3px;">Edit</span></p>
                                                <p style="margin-left: 20px;">{{ session('u_data')->email}}</p>
                                                <p style="margin-left: 20px;">{{ session('u_data')->no_hp}}</p>
                                                <p style="margin-left: 20px;">Buyer<span style="color: #35B77E; text-decoration: underline; margin-left: 3px; ">Edit</span></p>
                                            </div>
                                            <div style="text-align: center; margin-left: 150px;">
                                                <img src="assets/imgs/blog/author-3-01.png" alt="Gambar Card" style="width: 100px; border-radius: 50%; display: inline-block; margin-bottom: 10px; "> <br>
                                                <button style="background-color: #35B77E; color: white; margin-bottom: 10px;">Tambah Gambar</button>
                                                <p style="margin-bottom: 20px;">Image size: max. 1 MB<br>Image formats: .JPEG, .PNG</p>
                                            </div>
                                        </div>
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