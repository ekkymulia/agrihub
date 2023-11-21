<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function is_admin(){
        if (!session('u_data')){
            return redirect()->route('index');
        }

        elseif(session('u_data')->tipe_akun_id != 3) {
            return redirect()->route('index');
        }
    }
    public function index(){
        if (!session('u_data')){
            return redirect()->route('index');
        }

        elseif(session('u_data')->tipe_akun_id != 3) {
            return redirect()->route('index');
        }

        $this->is_admin();
        return view('admin/index');
    }

    public function product_list(){
        return view('admin/productlist');
    }

    public function add_product(){
        return view('admin/addproduct');
    }
}

