<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AccountController extends Controller
{   
    public function index(Request $request)
    {
        //dia somehow ke otomatis logout, gua juga bingung wkwkw tpi bagus sih

        //kode dibawah ini hanya pengaman saja
        // Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        // redirect ke halaman untuk login

        return view('public/login');
    }

    public function index_register(Request $request)
    {
        //dia somehow ke otomatis logout, gua juga bingung wkwkw tpi bagus sih
    
        //kode dibawah ini hanya pengaman saja
        // Auth::logout();
    
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
    
        // redirect ke halaman untuk login
    
        return view('public/register');
    }


    public function add_user(Request $request) {
        try {

            // Mendapatkan nilai dari request
            $username = $request->input('username');
            $nama_lengkap = $request->input('nama_lengkap');
            $email = $request->input('email');
            $no_telp = $request->input('no_telp');
            $alamat = $request->input('alamat');
            $role_id = $request->input('role_id');;
            // $role_id = 1;
            $is_subscribe = 0;
            $is_verified = 1;
            $password = $request->input('password');

            // Membuat URL-encoded string
            $encodedUsername = urlencode($username);
            $encodedNamaLengkap = urlencode($nama_lengkap);
            $encodedEmail = urlencode($email);
            $encodedNoTelp = urlencode($no_telp);
            $encodedAlamat = urlencode($alamat);
            $encodedRoleId = urlencode($role_id);
            $encodedIsSubscribe = urlencode($is_subscribe);
            $encodedIsVerified = urlencode($is_verified);
            $encodedPassword = urlencode($password);

            // Membuat request dengan nilai-nilai yang telah diencode
            $r = Http::post("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_add?username={$encodedUsername}&nama_lengkap={$encodedNamaLengkap}&email={$encodedEmail}&no_telp={$encodedNoTelp}&alamat={$encodedAlamat}&role_id={$encodedRoleId}&is_subscribe={$encodedIsSubscribe}&is_verified={$encodedIsVerified}&password={$encodedPassword}");

            if ($r->failed()) {
                $errorMessage = $r->body();

                // Handle kesalahan, misalnya dengan melempar ValidationException
                dd($errorMessage);
            } else {
                // Buat array untuk disimpan di sesi
                $userData = (object)[
                    'username' => $username,
                    'email' => $email,
                    'nama_lengkap' => $nama_lengkap,
                    'no_telp' => $no_telp,
                    'alamat' => $alamat,
                    'role_id' => $role_id,
                    'is_subscribe' => $is_subscribe,
                    'is_verified' => $is_verified,
                    'password' => $password,
                ];

                // Simpan data pengguna di sesi
                Session::put('u_data', $userData);

                if (session('u_data')->role_id == 3) {
                    return redirect()->intended('/admin');
                } else {
                    return redirect()->intended('/');
                }
            }
        } catch (\Exception $e) {
            // Handle kesalahan dengan mengembalikan respons dengan pesan kesalahan
            return redirect()->back()->withErrors(['message' => 'Terjadi kesalahan saat registrasi.']);
        }
    }

    public function authenticate(Request $request) {
        $r = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list');
        $users = json_decode($r->body(), true);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Cari pengguna dengan username yang sesuai
        $user = collect($users)->firstWhere('username', $username);
    
        // Jika pengguna ditemukan dan password sesuai, lakukan otentikasi
        if ($user && isset($user['password']) && $user['password'] === $password) {
            // Hilangkan field yang tidak diperlukan seperti '_id' dan 'password'
            unset($user['_id'], $user['password']);
    
            // Cast array to object
            $userObject = (object) $user;
    
            // Simpan informasi pengguna dalam session
            session(['u_data' => $userObject]);
    
            // Redirect ke halaman yang sesuai
            if (session('u_data')->role_id == 3) {
                return redirect()->intended('/admin');
            } elseif (session('u_data')->role_id == 2) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        } else {
            // Jika username atau password tidak sesuai, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['message' => 'Invalid username or password']);
        }
    }

    public function logout(Request $request)
    {
        // Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('index'); 
    }

    public function list_product(Request $request){
        $r = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list');
        $data = json_decode($r);

        // return view('public/shop', compact('data'));
    }
    
}
