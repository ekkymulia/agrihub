@extends('admin.templating.layouts')
@section('title', 'Agrihub Admin - List Account')
@section('content')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">List Account</h2>
        <div>
            <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control" />
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <select class="form-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <select class="form-select">
                        <option>Show 20</option>
                        <option>Show 30</option>
                        <option>Show 40</option>
                    </select>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Subscribe</th>
                            <th>Registered</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_list as $row)
                            <tr>
                                <td width="40%">
                                    <a href="#" class="itemside">
                                        <div class="left">
                                            <img src="{{asset('assets-dashboard/imgs/people/avatar-1.png')}}" class="img-sm img-avatar" alt="Userpic" />
                                        </div>
                                        <div class="info pl-3">
                                            <h6 class="mb-0 title">{{$row->username}}</h6>
                                            <small class="text-muted">{{$row->email}}</small>
                                        </div>
                                    </a>
                                </td>
                                <td>{{$row->email}}</td>
                                <td>
                                @if($row->is_subscribe == 1)
                                    <span class="badge rounded-pill alert-warning">Yes</span>
                                @else
                                    <span class="badge rounded-pill alert-danger">No</span>
                                @endif    
                                </td>
                                <td>08.07.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                </td>
                            </tr>
                        @endforeach

                        @if (empty($data))
                            <tr>
                                <td colspan="5" class="text-center"> Tidak ada data </td>
                            </tr>
                        @endif
                    </tbody>

                </table>
                <!-- table-responsive.// -->
            </div>
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-15 mb-50">
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