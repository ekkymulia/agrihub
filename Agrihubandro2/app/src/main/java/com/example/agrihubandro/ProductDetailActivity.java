package com.example.agrihubandro;

import static com.example.agrihubandro.CONSTANT.BASE_URL;
import static com.example.agrihubandro.CONSTANT.IMG_BASE_URL;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;
import com.example.agrihubandro.adapter.ProductAdapter;
import com.example.agrihubandro.adapter.ProductDetailImageAdapter;
import com.example.agrihubandro.models.ProductModel;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class ProductDetailActivity extends AppCompatActivity {

    private ProductDetailImageAdapter adapter;
    private ArrayList<String> imageUrls = new ArrayList<>();

    TextView pd_title, pd_kategori, pd_description, pd_moq, pd_sertifikasi, pd_vendor_name;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_product_detail);

        pd_title = findViewById(R.id.pd_title);
        pd_kategori = findViewById(R.id.pd_kategori);
        pd_description = findViewById(R.id.pd_description);
        pd_moq = findViewById(R.id.pd_moq);
        pd_sertifikasi = findViewById(R.id.pd_sertifikasi);
        pd_vendor_name = findViewById(R.id.pd_vendorname);

        RecyclerView recyclerView = findViewById(R.id.imgslider);
        adapter = new ProductDetailImageAdapter(this, imageUrls);
        recyclerView.setAdapter(adapter);

        String productId = ""; // Initialize productId

        Intent intent = getIntent();
        if (intent != null) {
            productId = intent.getStringExtra("pid");
        }

        String urlEndpoint = BASE_URL + "/api/showproduct/" + productId;
        RequestQueue queue = Volley.newRequestQueue(this);
        ProductModel productModel = new ProductModel();

        JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(Request.Method.GET, urlEndpoint, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try {
                            if (response.length() > 0) {
                                JSONObject jsonObject = response.getJSONObject(0);

                                ProductModel productModel = new ProductModel();
                                productModel.set_id(jsonObject.optString("_id"));
                                // Set other fields in productModel similarly...

                                // Handle URL modifications
                                String imageUrl = jsonObject.optString("url_gambar");
                                if (!imageUrl.isEmpty()) {
                                    String modifiedUrl = IMG_BASE_URL + imageUrl;
                                    productModel.setUrl_gambar(modifiedUrl);
                                    imageUrls.add(modifiedUrl); // Add URL to the list for RecyclerView
                                    adapter.notifyDataSetChanged(); // Notify adapter of data change
                                }


                                // Parse individual fields of the JSON object and set them in ProductModel
                                productModel.set_id(jsonObject.optString("_id"));
                                productModel.setNama(jsonObject.optString("nama"));
                                productModel.setHarga(jsonObject.optDouble("harga"));
                                productModel.setDeskripsi(jsonObject.optString("deskripsi"));
                                Log.d("API_Res", jsonObject.optString("deskripsi"));


                                // Check if the "url_sertifikasi" key exists before setting the value
                                if (jsonObject.has("url_sertifikasi")) {

//                                    productModel.setUrl_sertifikasi(jsonObject.optString("url_sertifikasi"));
                                    String originalUrl = jsonObject.optString("url_sertifikasi");
                                    String modifiedUrl = IMG_BASE_URL + originalUrl;

                                    productModel.setUrl_sertifikasi(modifiedUrl);
                                } else {

                                    // Set a default or handle the absence of this key based on your requirements
                                    productModel.setUrl_sertifikasi(""); // You can set an empty string or any default value
                                }

                                // Check if the "url_gamber" key exists before setting the value
                                if (jsonObject.has("url_gambar")) {

//                                    productModel.seturl_gamber(jsonObject.optString("url_gambar"));
                                    String originalUrl = jsonObject.optString("url_gambar");
                                    String modifiedUrl = IMG_BASE_URL + originalUrl;
                                    Log.d("API_Response", modifiedUrl);

                                    productModel.setUrl_gambar(modifiedUrl);

                                } else {
                                    Log.d("API_Response", "gambar failed");

                                    // Set a default or handle the absence of this key based on your requirements
                                    productModel.setUrl_gambar(""); // You can set an empty string or any default value
                                }

                                productModel.setKategori(jsonObject.optString("kategori"));
                                productModel.setMoq(jsonObject.optString("moq"));
                                productModel.setSertifikasi(jsonObject.optString("nama_sertifikasi"));

                                productModel.setVendor_id(jsonObject.optString("vendor_id"));
                                productModel.setVendor_name(jsonObject.optString("vendor_nama"));
                                productModel.setVendor_alamat(jsonObject.optString("vendor_alamat"));
                                productModel.setVendor_no_telp(jsonObject.optString("vendor_no_telp"));
                                // Add the populated ProductModel to the list

                                pd_title.setText(productModel.getNama()); // Assuming the title is retrieved in productModel
                                pd_kategori.setText(productModel.getKategori() + " - Rp " + productModel.getHarga() + "per Kg"); // Assuming category is retrieved in productModel
                                pd_description.setText(productModel.getDeskripsi()); // Assuming description is retrieved in productModel
                                pd_moq.setText(productModel.getMoq()); // Assuming moq is retrieved in productModel
                                pd_sertifikasi.setText(productModel.getSertifikasi()); // Assuming sertifikasi is retrieved in productModel
                                pd_vendor_name.setText(productModel.getVendor_name() + " - " + productModel.getVendor_alamat());

                                // Set other data in productModel...

                                Log.d("API_Response", "Response received: " + response.toString());
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                            Log.e("API_Response", "JSON parsing error: " + Log.getStackTraceString(e));
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Error", "Error occurred: " + error.getMessage());
                Toast.makeText(ProductDetailActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        });

        queue.add(jsonArrayRequest);
    }

    public void backToMain(View view) {
        // Handle the back button click here
        Intent intent = new Intent(ProductDetailActivity.this, MainActivity.class);
        startActivity(intent);
        finish(); // Optional: Close this activity when navigating back to MainActivity
    }
}
