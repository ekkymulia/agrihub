<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    
    public function index_register(Request $request)
    {
        //dia somehow ke otomatis logout, gua juga bingung wkwkw tpi bagus sih
    
        //kode dibawah ini hanya pengaman saja
        Auth::logout();
    
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
    
        // redirect ke halaman untuk login
    
        return view('public/register');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'creduser' => ['required'],
            'password' => ['required'],
        ]);
        
        $loginType = filter_var($request->input('creduser'), FILTER_VALIDATE_EMAIL) ? 'email' : 'no_hp';
        
        if (Auth::attempt([$loginType => $request->input('creduser'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();

            $user = Auth::user();
            Auth::setUser($user);

            if ($user) {
                // user record found
                $request->session()->forget('u_data'); 
                $request->session()->regenerate();
            
                $request->session()->put('u_data', $user);
                
                if(session('u_data')->role_id == 3){
                    return redirect()->intended('/admin');
                }
                
                return redirect()->intended('/');

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

    public function register(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nama' => 'required',
                'username' => 'required',
                'email' => 'required|email|unique:users,id',
                'no_hp' => 'required|numeric|unique:users,id',
                'alamat' => 'required',
                // 'role_id' => 'required',
                'password' => 'required|min:8',
            ]);
        }catch(\Exception $e){
            dd('iiiii');
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        try{
            $user = User::create([
                'nama' => $validatedData['nama'],
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'no_hp' => $validatedData['no_hp'],
                'alamat' => $validatedData['alamat'],
                'terverifikasi' => 0,
                'role_id' => 1,
                'password' => Hash::make($validatedData['password']),
            ]);

            $user->save();

        }catch(\Exception $e){
            dd('ihih');
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        
        $log = Auth::attempt([
            'email' => $user->email, 
            'password' => $user->password
        ]);

        $request->session()->forget('u_data'); 
        $request->session()->regenerate();
    
        $request->session()->put('u_data', $user);

        return redirect()->intended('/');

    }
}
