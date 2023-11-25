@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - Edit Account')
@section('content')
<section class="content-main">
    <form action="{{route('add_account')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Edit Account</h2>
                    <div>
                        <a href="{{route('list_account')}}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Back to list account</a>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Full Name</label>
                            <input type="text" name="nama_lengkap" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Phone</label>
                            <input type="text" name="no_telp" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"  required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Status</h5>
                        <hr />
                        <div class="mb-4">
                            <label class="form-label">Role</label>
                            <select name="role_id" class="form-select" required>
                                <option value="1">User</option>
                                <option value="2">Vendor</option>
                                <option value="3">Admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Subscribe</label>
                            <select name="is_subscribe" class="form-select" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Verified</label>
                            <select name="is_verified" class="form-select" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
