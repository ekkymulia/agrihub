@extends('public.templating.layouts')
@section('title', 'Agrihub - Register')
@section('content')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Register
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="{{asset('assets/imgs/page/regist.jpg')}}" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Create an Account</h1>
                                            <p class="mb-30">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                                        </div>
                                        <form method="post" action="{{route('register')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required="" name="nama" placeholder="Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="username" placeholder="Username" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="alamat" placeholder="Alamat" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="no_hp" placeholder="No. Telepon" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="text" name="email" placeholder="Email" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password" />
                                            </div>
                                            <div class="payment_option mb-50">
                                                <div class="custome-radio">
                                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="" />
                                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">I am a customer</label>
                                                </div>
                                                <div class="custome-radio">
                                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="" />
                                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">I am a vendor</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Submit & Register</button>
                                            </div>
                                        </form>
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