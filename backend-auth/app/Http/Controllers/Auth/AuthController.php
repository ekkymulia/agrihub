<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        //dia somehow ke otomatis logout, gua juga bingung wkwkw tpi bagus sih

        //kode dibawah ini hanya pengaman saja
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        // redirect ke halaman untuk login

        return view('public/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'creduser' => ['required'],
            'password' => ['required'],
        ]);
        
        $loginType = filter_var($request->input('creduser'), FILTER_VALIDATE_EMAIL) ? 'email' : 'no_telp';
        
        if (Auth::attempt([$loginType => $request->input('creduser'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();

            $user = Auth::user();
            Auth::setUser($user);

            if ($user) {
                // user record found
                $request->session()->forget(['user_id', 'user_name']); 
                $request->session()->regenerate();
            
                $request->session()->put('u_data', $user);

                return redirect()->intended('dashboard');

            } else {
                // User record not found
                return back()->withErrors([
                    'email' => 'user tidak ditemukan.',
                ])->onlyInput('email');
            }
            
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('index'); 
    }
}
