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
        
        if(session('u_data')->role_id == "1") {
            $role = "Member";
        } elseif(session('u_data')->role_id == "2") {
            $role = "Vendor";
        } elseif(session('u_data')->role_id == "3") {
            $role = "Admin";
        }

        // $role = "admin";
        return view('user/profile', compact('role'));
    }
}
