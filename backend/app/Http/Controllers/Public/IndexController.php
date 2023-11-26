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

    public function vendors(){
        return view('public/vendors');
    }

    public function chatbot(){
        return view('public/chatbot');
    }

    public function subscribe(){
        return view('public/subscribe');
    }


}
