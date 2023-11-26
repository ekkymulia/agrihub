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
    <div class="page-content pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu pt-150">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true">
                                            <i class="fi-rs-settings-sliders mr-10"></i>Account Details
                                        </a>
                                    </li>
                                    @if(session('u_data')->role_id == 3)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('dashboard')}}">
                                            <i class="fi-rs-admin-alt mr-10"></i>Back to Dashboard
                                        </a>
                                    </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}">
                                        <i class="fi-rs-sign-out mr-10"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content account dashboard-content pl-4">
                            <!-- {{ $role }} -->
                            <div class="tab-pane active" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                
                            
                                <div class="card" id="card-details">
                                    <div class="card-header text-center">
                                        <h2>Account Details</h2>
                                    </div>

                                    <div class="card-body">
                                        <!-- <div class="text-center mt-4">
                                            <img src="assets/imgs/blog/author-3-01.png" width="140" alt="Gambar Card" class="img-fluid rounded-circle mb-3">
                                            <br>
                                            <button class="btn btn-success mb-3">Tambah Gambar</button>
                                            <p class="mb-4">Image size: max. 1 MB<br>Image formats: .JPEG, .PNG</p>
                                        </div> -->
                                        <div class="text-end mt-2">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" value="{{ session('u_data')->nama_lengkap }}" readonly>
                                                <small><a href="#" class="text-success">Edit</a></small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" value="{{ session('u_data')->alamat }}" readonly>
                                                <small><a href="#" class="text-success">Edit</a></small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" value="{{ session('u_data')->email }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="noHp" class="form-label">No.Handphone</label>
                                                <input type="number" class="form-control" id="noHp" value="{{ session('u_data')->no_telp }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="typeAccount" class="form-label">Type Account</label>
                                                <input type="text" class="form-control" id="typeAccount" value="{{$role}}" readonly>
                                                <small><a href="#" class="text-success">Edit</a></small>
                                            </div>
                                            <div class="text-center mt-4">
                                                <img src="assets/imgs/blog/author-3-01.png" width="100" alt="Gambar Card" class="img-fluid rounded-circle mb-3">
                                                <br>
                                                <button class="btn btn-success mb-3">Tambah Gambar</button>
                                                <p class="mb-4">Image size: max. 1 MB<br>Image formats: .JPEG, .PNG</p>
                                            </div>    
                                            <button class="btn btn-success mt-4">Save Data</button>
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