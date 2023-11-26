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
        $path_gambar = $gambar->store('public/uploads');
        $url_gambar = '/storage/uploads/' . basename($path_gambar);
        // // // // // //
        $kategori = $request->input('kategori');
        
        $nama_sertifikasi = $request->input('nama_sertifikasi');
        $sertifikasi = $request->file('sertifikasi');
        $path_sertifikasi = $sertifikasi->store('public/uploads');
        // $url_sertifikasi = asset('storage/uploads/' . basename($path_sertifikasi));
        $url_sertifikasi = '/storage/uploads/' . basename($path_sertifikasi);


        
        $vendor_id = $request->input('vendor_id');
        $vendor_nama = $request->input('vendor_nama');
        $vendor_alamat = $request->input('vendor_alamat');
        $vendor_no_telp = $request->input('vendor_no_telp');

        $response = Http::post('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/addProduct?nama='.urlencode($nama).'&harga='.urlencode($harga).'&deskripsi='.urlencode($deskripsi).'&url_gambar='.urlencode($url_gambar).'&kategori='.urlencode($kategori).'&url_sertifikasi='.urlencode($url_sertifikasi).'&nama_sertifikasi='.urlencode($nama_sertifikasi).'&vendor_id='.urlencode($vendor_id).'&vendor_nama='.urlencode($vendor_nama).'&vendor_alamat='.urlencode($vendor_alamat).'&vendor_no_telp='.urlencode($vendor_no_telp));


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
        $nama_sertifikasi = $request->input('nama_sertifikasi');
        $sertifikasi = $request->file('sertifikasi'); // Tambahkan baris ini untuk mendapatkan file sertifikasi

        // Upload gambar produk
        if ($gambar != null){ 
            $pathGambar = $gambar->store('public/uploads');
            $url_gambar = asset('storage/uploads/' . basename($pathGambar));
        } else {
            $url_gambar = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/getProduct?id='.urlencode($id)))[0]->url_gambar;
        }

        // Upload sertifikasi
        if ($sertifikasi != null) {
            $pathSertifikasi = $sertifikasi->store('public/uploads');
            $url_sertifikasi = asset('storage/uploads/' . basename($pathSertifikasi));
        } else {
            $url_sertifikasi = json_decode(Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/getProduct?id='.urlencode($id)))[0]->url_sertifikasi;
        }

        $vendor_id = $request->input('vendor_id');
        $vendor_nama = $request->input('vendor_nama');
        $vendor_alamat = $request->input('vendor_alamat');
        $vendor_no_telp = $request->input('vendor_no_telp');

        $response = Http::put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/editProduct?id=".urlencode($id)."&nama=".urlencode($nama)."&harga=".urlencode($harga)."&deskripsi=".urlencode($deskripsi)."&url_gambar=".urlencode($url_gambar)."&kategori=".urlencode($kategori)."&url_sertifikasi=".urlencode($url_sertifikasi)."&nama_sertifikasi=".urlencode($nama_sertifikasi)."&vendor_id=".urlencode($vendor_id)."&vendor_nama=".urlencode($vendor_nama)."&vendor_alamat=".urlencode($vendor_alamat)."&vendor_no_telp=".urlencode($vendor_no_telp));


        
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

    public function api_product_list(Request $request){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-1-nzgdf/endpoint/listProduct');
        
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data from the API'], 500);
        }
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