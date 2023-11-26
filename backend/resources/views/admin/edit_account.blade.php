@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - Edit Account')
@section('content')
<section class="content-main">
    <form action="{{route('editaccount')}}" method="post">
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
                        <!-- <div class="mb-4"> -->
                        <input type="text" name="id" value="{{ $data->_id }}" class="form-control" hidden />
                        <!-- </div> -->
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Full Name</label>
                            <input type="text" name="nama_lengkap" value="{{ $data->nama_lengkap }}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Username</label>
                            <input type="text" name="username" value="{{$data->username}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Email</label>
                            <input type="text" name="email" value="{{$data->email}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Phone</label>
                            <input type="text" name="no_telp" value="{{$data->no_telp}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Password</label>
                            <input type="password" name="password" value="{{$data->password}}" class="form-control"  required />
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
                                <option value="1" {{$data->role_id == 1 ? 'selected' : ''}}>User</option>
                                <option value="2" {{$data->role_id == 2 ? 'selected' : ''}}>Vendor</option>
                                <option value="3" {{$data->role_id == 3 ? 'selected' : ''}}>Admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Subscribe</label>
                            <select name="is_subscribe" class="form-select" required>
                                <option value="1" {{$data->is_subscribe == 1 ? 'selected' : ''}}>Yes</option>
                                <option value="0" {{$data->is_subscribe == 0 ? 'selected' : ''}}>No</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Verified</label>
                            <select name="is_verified" class="form-select" required>
                                <option value="1" {{$data->is_verified == 1 ? 'selected' : ''}}>Yes</option>
                                <option value="0" {{$data->is_verified == 0 ? 'selected' : ''}}>No</option>
                            </select>
                        </div>
                        <!-- Add your checkbox input for categories here -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
