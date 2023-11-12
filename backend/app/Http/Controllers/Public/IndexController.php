<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
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

    public function shop(){
        return view('public/shop');
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

    public function register(){
        // assets gambar di sebelah kiri form blm ada.
        return view('public/register'); 
    }

    public function login(){
        return view('public/login');
    }


}
