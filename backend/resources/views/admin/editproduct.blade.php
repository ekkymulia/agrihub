@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - Edit Product')
@section('content')
<section class="content-main">
    <form action="{{route('edit_product')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Edit Product</h2>
                    <div>
                        <a href="{{route('product_list')}}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Back to list product</a>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <input value="{{$data->_id}}" name="id" hidden>
                        <input value="{{$data->vendor_id}}" name="vendor_id" hidden>
                        <input value="{{$data->vendor_nama}}" name="vendor_nama" hidden>
                        <input value="{{$data->vendor_alamat}}" name="vendor_alamat" hidden>
                        <input value="{{$data->vendor_no_telp}}" name="vendor_no_telp" hidden>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Name</label>
                            <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="product_title" required />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <textarea name="deskripsi" placeholder="{{$data->deskripsi}}" class="form-control" rows="4" required>{{$data->deskripsi}}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Price</label>
                            <input type="number" name="harga" value="{{$data->harga}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label for="product_image" class="form-label">Image</label>
                            <img src="{{$data->url_gambar}}">
                            <input type="file" name="gambar" class="form-control" id="product_image" accept="image/*" />
                        </div>
                        <div class="mb-4">
                            <label for="product_image" class="form-label">Certification Name</label>
                            <input type="text" name="nama_sertifikasi" placeholder="Type here" value="{{$data->nama_sertifikasi}}" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            @if(empty($data->url_sertifikasi))
                            <label for="certification_image" class="form-label">Product Certification (<a href="">Certs not found!</a>)</label>
                            @else
                            <label for="certification_image" class="form-label">Product Certification</label>
                            <img src="{{$data->url_sertifikasi}}">
                            @endif
                            <input type="file" name="sertifikasi" class="form-control" id="product_image" accept="image/*" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Categories</h5>
                        <hr />
                        <div class="mb-4">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="Published">Published</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Selected Tags <a href="">({{ucfirst($data->kategori)}})</a></label>
                            <select name="kategori" class="form-select" required>
                                <option value="fruit" {{$data->kategori == 'fruit' ? 'selected' : ''}}>Fruit</option>
                                <option value="vegetables" {{$data->kategori == 'vegetables' ? 'selected' : ''}}>Vegetables</option>
                                <option value="tubers" {{$data->kategori == 'tubers' ? 'selected' : ''}}>Tubers</option>
                                <option value="spices"> {{$data->kategori == 'spices' ? 'selected' : ''}}Spices</option>
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
