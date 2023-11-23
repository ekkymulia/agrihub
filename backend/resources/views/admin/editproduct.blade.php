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
                        <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <input value="{{$data->_id}}" name="id" hidden>
                        <div class="mb-4">
                            <label for="product_title" class="form-label">Name</label>
                            <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="product_title" required />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <textarea name="deskripsi" placeholder="{{$data->deskripsi}}" class="form-control" rows="4" required>{{$data->deskripsi}}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="product_image" class="form-label">Image</label>
                            <img src="{{$data->url_gambar}}">
                            <input type="file" name="gambar" class="form-control" id="product_image" accept="image/*" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Price</label>
                            <input type="number" name="harga" value="{{$data->harga}}" class="form-control" required />
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
                                <option value="fruit">Fruit</option>
                                <option value="vegetables">Vegetables</option>
                                <option value="tubers">Tubers</option>
                                <option value="spices">Spices</option>
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
