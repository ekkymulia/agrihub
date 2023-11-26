<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
// use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index(){
        return view('public/index');
    }
    
    public function deals(){
        return view('public/deals');
    }

    public function contact(){
        return view('public/contact');
    }

    public function vendors(){
        return view('public/vendors');
    }

    public function chatbot(){
        return view('public/chatbot');
    }

    public function subscribe(){
        return view('public/subscribe');
    }

    public function vendor_details($id){
        $users = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list'));
        
        foreach ($users as $user){
            if ($user->_id == $id){
                $vendor = $user;
            }
        }

        $products = json_decode(Http::get("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct"));
        
        // $all_product = json_decode(Http::get("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct"));

        // foreach ($all_product as $products) {
        //     if ()
        // }
        return view('public/vendor_details', compact('vendor', 'products'));
    }


}
