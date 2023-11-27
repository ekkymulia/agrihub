<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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
        $users = json_decode(Http::get(env('MONGO_API').'user_list'));
        return view('public/vendors', compact('users'));
    }

    public function chatbot(Request $request){
        $chat = $request->input('send_chat');
        $chatbot = Http::withHeaders([
            'X-API-KEY' => 'LZoViQWwlK3H7ljxaal2a7g7FRNw3vW65qMHHI8k'
        ])->get("https://eziuqoe7we.execute-api.ap-southeast-1.amazonaws.com/1/?recaiType=".urlencode($chat));
        // dd($chatbot);
        return view('public/chatbot');
    }

    public function subscribe(){
        return view('public/subscribe');
    }

    public function vendor_details($id){
        $users = json_decode(Http::get(env('MONGO_API').'user_list'));
        
        foreach ($users as $user){
            if ($user->_id == $id){
                $vendor = $user;
            }
        }

        $products = json_decode(Http::get("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct"));
        
        return view('public/vendor_details', compact('vendor', 'products'));
    }


}
