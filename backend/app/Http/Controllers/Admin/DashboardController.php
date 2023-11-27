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
    public function index(Request $request){
        // $this->is_admin();
        // if (!session('u_data')){
        //     return redirect()->route('index');
        // }

        // elseif(session('u_data')->role_id != 3) {
        //     return redirect()->route('index');
        // }
    
        $list_product = json_decode(Http::get(env('MONGO_API').'listProduct'));
        $users = json_decode(Http::get(env('MONGO_API').'user_list'));
        $is_subscribe = json_decode(Http::get(env('MONGO_API').'user_is_subsribe'));
        return view('admin/index', compact('list_product', 'users', 'is_subscribe', 'request'));
    }

    public function product_list(){
        $response = Http::get(env('MONGO_API').'listProduct');
        $data = json_decode($response);
        return view('admin/productlist', compact('data'));
    }

    public function add_product(){
        return view('admin/addproduct');
    }

    public function edit_product($id){
        $response = Http::get(env('MONGO_API').'getProduct?id='.urlencode($id));
        $data = json_decode($response)[0];
        return view('admin/editproduct', compact('data'));
    }

    public function list_account(Request $request){
        $user_list = json_decode(Http::get(env('MONGO_API').'user_list'));
        return view('admin/list_account', compact('user_list'));
    }

    public function api_list_account(Request $request){
        $user_list = Http::get(env('MONGO_API').'user_list')->json();
        return response()->json([$user_list]);
    }

    public function add_account(){ 
        return view('admin/add_account');
    }

    public function edit_account($id){
        $data = json_decode(Http::get(env('MONGO_API').'user_get?id='.urlencode($id)))[0];
        return view('admin/edit_account', compact('data'));
    }
}

