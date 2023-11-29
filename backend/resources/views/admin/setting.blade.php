@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - Settings')
@section('content')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Profile Settings</h2>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row gx-5">
                <!-- <aside class="col-lg-3 border-end">
                    <nav class="nav nav-pills flex-lg-column mb-4">
                        <a class="nav-link active" aria-current="page" href="#">General</a>
                        <a class="nav-link" href="#">Moderators</a>
                        <a class="nav-link" href="#">Admin account</a>
                        <a class="nav-link" href="#">SEO settings</a>
                        <a class="nav-link" href="#">Mail settings</a>
                        <a class="nav-link" href="#">Newsletter</a>
                    </nav>
                </aside> -->
                <div class="col-lg-9">
                    <section class="content-body p-xl-4">
                        <form>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="row gx-3">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input class="form-control" type="text" value="{{session('u_data')->nama_lengkap}}" placeholder="Type here" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" value="{{session('u_data')->username}}" placeholder="Type here" />
                                        </div>
                                        <!-- col .// -->
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" value="{{session('u_data')->email}}" placeholder="example@mail.com" />
                                        </div>
                                        <!-- col .// -->
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input class="form-control" type="tel" value="{{session('u_data')->no_telp}}" placeholder="+1234567890" />
                                        </div>
                                        <!-- col .// -->
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" value="{{session('u_data')->alamat}}" placeholder="Type here" />
                                        </div>
                                        <!-- col .// -->
                                        
                                        <!-- col .// -->
                                    </div>
                                    <!-- row.// -->
                                </div>
                                <!-- col.// -->
                                <aside class="col-lg-1">
                                    <figure class="text-lg-center">
                                        <figcaption>
                                            <a class="btn btn-light rounded font-md" href="#"> <i class="icons material-icons md-role font-md"></i>{{ session('u_data')->role_id == 1 ? 'User' : (session('u_data')->role_id == 2 ? 'Vendor' : (session('u_data')->role_id == 3 ? 'Admin' : 'Undefined role')) }} </a>
                                        </figcaption>
                                    </figure>
                                    <figure class="text-lg-center mt-4">
                                        <figcaption>
                                            <a class="btn btn-light rounded font-md" href="#"> <i class="icons material-icons md-role font-md"></i>{{ session('u_data')->is_subscribe == 1 ? 'Subs Plan' : 'Free Plan' }} </a>
                                        </figcaption>
                                    </figure>
                                </aside>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <br />
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                        <hr class="my-5" />
                        <div class="row" style="max-width: 920px">
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                    <h6>Password</h6>
                                    <small class="text-muted d-block" style="width: 70%">You can reset or change your password by clicking here</small>
                                </article>
                            </div>
                            <!-- col.// -->
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                    <h6>Remove account</h6>
                                    <small class="text-muted d-block" style="width: 70%">Once you delete your account, there is no going back.</small>
                                </article>
                            </div>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </section>
                    <!-- content-body .// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- card body end// -->
    </div>
    <!-- card end// -->
</section>
@endsection