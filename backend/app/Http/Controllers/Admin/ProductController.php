<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(Request $request) {
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $deskripsi = $request->input('deskripsi');
        $gambar = $request->file('gambar');
        // buat upload gambar internal di laravel
        $path = $gambar->store('public/uploads');
        $url_gambar = asset('storage/uploads/' . basename($path));
        // // // // // //
        $kategori = $request->input('kategori');

        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/addProduct?nama='.urlencode($nama).'&deskripsi='.urlencode($deskripsi).'&harga='.urlencode($harga).'&url_gambar='.urlencode($url_gambar).'&kategori='.urlencode($kategori);
        $response = Http::post($url);
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage;
        } else {
            // dd($url);
            return redirect()->route('product_list');
        }
    }
    
    public function edit_product(Request $request){
        $id = $request->input('id');
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $deskripsi = $request->input('deskripsi');
        $gambar = $request->file('gambar');
        $kategori = $request->input('kategori');
        if ($gambar != null){ 
            $path = $gambar->store('public/uploads');
            $url_gambar = asset('storage/uploads/' . basename($path));
            $response = Http::put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/editProduct?id=".urlencode($id)."&nama=".urlencode($nama).'&deskripsi='.urlencode($deskripsi).'&harga='.urlencode($harga).'&url_gambar='.urlencode($url_gambar).'&kategori='.urlencode($kategori));
        } else {
            // jika tidak ada selected gambar maka akan mengambil url_gambar sebelumnya agar tidak berubah
            $url_gambar = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/getProduct?id='.urlencode($id)))[0]->url_gambar;
            // dd($url_gambar);
            $response = Http::put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/editProduct?id=".urlencode($id)."&nama=".urlencode($nama).'&deskripsi='.urlencode($deskripsi).'&harga='.urlencode($harga).'&url_gambar='.urlencode($url_gambar).'&kategori='.urlencode($kategori));
        }
        
        $data = json_decode($response);
        
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage;
        } else {
            // return redirect()->route('product_list');
            return redirect()->route('editproduct', ['id' => $id]);
        }
    }

    public function list_product(Request $request){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct');
        $data = json_decode($response);

        return view('public/shop', compact('data'));
    }

    public function show_product($id) {
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/getProduct?id='.urlencode($id));
        $data = json_decode($response)[0];
        return view('public/showproduct', compact('data'));
    }



    public function delete_product($id) {
        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/deleteProduct?id='.urlencode($id));
        if ($response->failed()) {
            $errorMessage = $response->body();
            return $errorMessage; 
        } else {
            return redirect()->route('product_list');
        }
    }
}

?>