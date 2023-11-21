<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        if (!session('u_data')) {
            return redirect()->route('index');
        }
        return view('user/profile');
    }
}
