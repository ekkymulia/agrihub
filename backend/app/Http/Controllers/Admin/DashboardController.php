<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    // public function is_admin(){
    //     if (!session('u_data')){
    //         return redirect()->route('index');
    //     }

    //     elseif(session('u_data')->role_id != 3) {
    //         return redirect()->route('index');
    //     }
    // }
    public function index(){
        if (!session('u_data')){
            return redirect()->route('index');
        }

        elseif(session('u_data')->role_id != 3) {
            return redirect()->route('index');
        }

        // $this->is_admin();
        $list_product = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct'));
        $users = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list'));
        $is_subscribe = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_is_subsribe'));
        return view('admin/index', compact('list_product', 'users', 'is_subscribe'));
    }

    public function product_list(){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct');
        $data = json_decode($response);
        return view('admin/productlist', compact('data'));
    }

    public function add_product(){
        return view('admin/addproduct');
    }

    public function edit_product($id){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/getProduct?id='.urlencode($id));
        $data = json_decode($response)[0];
        return view('admin/editproduct', compact('data'));
    }

    public function list_account(Request $request){
        $user_list = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list'));
        return view('admin/list_account', compact('user_list'));
    }
}

