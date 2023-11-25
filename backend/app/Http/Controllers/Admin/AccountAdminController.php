<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountAdminController extends Controller
{
    public function add_account(Request $request) {


        // Mendapatkan nilai dari request
        $username = $request->input('username');
        $nama_lengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $no_telp = $request->input('no_telp');
        $alamat = $request->input('alamat');
        $role_id = $request->input('role_id');
        $is_subscribe = $request->input('is_subscribe');
        $is_verified = $request->input('is_verified');
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
        $response = Http::post("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_add?username={$encodedUsername}&nama_lengkap={$encodedNamaLengkap}&email={$encodedEmail}&no_telp={$encodedNoTelp}&alamat={$encodedAlamat}&role_id={$encodedRoleId}&is_subscribe={$encodedIsSubscribe}&is_verified={$encodedIsVerified}&password={$encodedPassword}");
        
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage;
        } else {
            // dd($url);
            return redirect()->route('list_account');
        }
    }
    public function edit_account(Request $request){
        $id = $request->input('id');
        $username = $request->input('username');
        $nama_lengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $no_telp = $request->input('no_telp');
        $alamat = $request->input('alamat');
        $role_id = $request->input('role_id');
        $is_subscribe = $request->input('is_subscribe');
        $is_verified = $request->input('is_verified');
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

        $response = Http::put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_edit?id={$id}&username={$encodedUsername}&nama_lengkap={$encodedNamaLengkap}&email={$encodedEmail}&no_telp={$encodedNoTelp}&alamat={$encodedAlamat}&role_id={$encodedRoleId}&is_subscribe={$encodedIsSubscribe}&is_verified={$encodedIsVerified}&password={$encodedPassword}");

        
        $data = json_decode($response);
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage;
        } else {
            // return redirect()->route('product_list');
            return redirect()->route('edit_account', ['id' => $id]);
        }
    }

    public function delete_account($id) {
        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/user_delete?id='.urlencode($id));
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage; 
        } else {
            return redirect()->route('list_account');
        }
    }
}
