<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AccountController extends Controller
{   
    public function add_user(Request $request) {
        try {

            // Mendapatkan nilai dari request
            $username = $request->input('username');
            $email = $request->input('email');
            $no_telp = $request->input('no_telp');
            $alamat = $request->input('alamat');
            $role_id = 1;
            $is_subscribe = 0;
            $is_verified = 1;
            $password = $request->input('password');

            // Membuat URL-encoded string
            $encodedUsername = urlencode($username);
            $encodedEmail = urlencode($email);
            $encodedNoTelp = urlencode($no_telp);
            $encodedAlamat = urlencode($alamat);
            $encodedRoleId = urlencode($role_id);
            $encodedIsSubscribe = urlencode($is_subscribe);
            $encodedIsVerified = urlencode($is_verified);
            $encodedPassword = urlencode($password);

            // Membuat request dengan nilai-nilai yang telah diencode
            $r = Http::post("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_add?username={$encodedUsername}&email={$encodedEmail}&no_telp={$encodedNoTelp}&alamat={$encodedAlamat}&role_id={$encodedRoleId}&is_subscribe={$encodedIsSubscribe}&is_verified={$encodedIsVerified}&password={$encodedPassword}");

            if ($r->failed()) {
                $errorMessage = $r->body();

                // Handle kesalahan, misalnya dengan melempar ValidationException
                dd($errorMessage);
            } else {
                // Buat array untuk disimpan di sesi
                $userData = (object)[
                    'username' => $username,
                    'email' => $email,
                    'no_telp' => $no_telp,
                    'alamat' => $alamat,
                    'role_id' => $role_id,
                    'is_subscribe' => $is_subscribe,
                    'is_verified' => $is_verified,
                    'password' => $password,
                ];

                // Simpan data pengguna di sesi
                Session::put('u_data', $userData);

                // Redirect ke halaman yang diinginkan
                return redirect()->intended('/');
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
        if ($user && $user['password'] === $password) {
            // Simpan informasi pengguna dalam session
            session(['u_data' => $user]);
    
            // Redirect ke halaman yang sesuai
            return redirect()->intended('/');
        } else {
            // Jika username atau password tidak sesuai, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['message' => 'Invalid username or password']);
        }
    }

    public function list_product(Request $request){
        $r = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_list');
        $data = json_decode($r);

        // return view('public/shop', compact('data'));
    }
    
}
