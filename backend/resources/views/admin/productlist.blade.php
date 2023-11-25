    @extends('admin.templating.layouts')
    @section('title', 'Agrihub Admin - Product List')
    @section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Products List</h2>
                <!-- <p>Lorem ipsum dolor sit amet.</p> -->
            </div>
            <div>
                <a href="{{route('add_product')}}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                    </div>
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected>All category</option>
                            <option>Electronics</option>
                            <option>Clothes</option>
                            <option>Automobile</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" value="02.05.2021" class="form-control" />
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option selected>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">

            <?php
            function formatRupiah($angka) {
                $rupiah = number_format($angka, 0, ',', '.');
                return 'Rp.'.$rupiah;
            }
            $i = 1;
            foreach ($data as $row) :
            ?>
    <article class="itemlist">
        <div class="row align-items-center">
            <div class="col col-check flex-grow-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" />
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                <a class="itemside" href="{{ route('editproduct', ['id' => $row->_id]) }}">
                    <div class="left">
                        <img src="{{$row->url_gambar}}" class="img-sm img-thumbnail" alt="Item" />
                    </div>
                    <div class="info">
                        <h6 class="mb-0"><?php echo (empty($row->nama) ? '' : $row->nama); ?></h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-sm-2 col-4 col-price"><span><?php echo (empty($row->harga) ? '' : formatRupiah($row->harga)); ?></span></div>
            <div class="col-lg-2 col-sm-2 col-4 col-status">
                <span class="badge rounded-pill alert-success">Active</span>
            </div>
            <div class="col-lg-1 col-sm-2 col-4 col-date">
                <span><a href="">{{ucfirst($row->kategori)}}</a></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                <a href="<?php echo route('editproduct', ['id' => $row->_id]) ?>" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit"></i> Edit </a>
                <a href="<?php echo route('delete_product', ['id' => $row->_id]) ?>" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
            </div>
        </div>
    </article>
<?php
    $i++;
endforeach;
if (empty($data)) {
    echo '<tr><td colspan="5" class="text-center"> Tidak ada data </td></tr>';
}
?>

            </div>
            <!-- card-body end// -->
        </div>
        <!-- card end// -->
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    @endsection