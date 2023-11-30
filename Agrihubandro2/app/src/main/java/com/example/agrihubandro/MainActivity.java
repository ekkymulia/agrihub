package com.example.agrihubandro;

import static com.example.agrihubandro.CONSTANT.BASE_URL;
import static com.example.agrihubandro.CONSTANT.IMG_BASE_URL;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;
import com.example.agrihubandro.adapter.ProductAdapter;
import com.example.agrihubandro.adapter.VendorAdapter;
import com.example.agrihubandro.components.SupplierActivity;
import com.example.agrihubandro.components.fragments.UserListActivity;
import com.example.agrihubandro.models.ProductModel;
import com.example.agrihubandro.models.UserModel;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity implements ProductAdapter.ItemClickListener, VendorAdapter.ItemClickListener, OnMapReadyCallback {

    private ProductAdapter adapter;
    private VendorAdapter adapter2;
    private GoogleMap mMap;


    private ArrayList<ProductModel> productModels = new ArrayList<>();
    private ArrayList<UserModel> userModels = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        RecyclerView recyclerView = findViewById(R.id.rv_product);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        adapter = new ProductAdapter(this, productModels);
        adapter.setClickListener(this);
        recyclerView.setAdapter(adapter);

        RecyclerView recyclerView2 = findViewById(R.id.rv_vendor);
        recyclerView2.setLayoutManager(new LinearLayoutManager(this));
        adapter2 = new VendorAdapter(this, userModels); // Initialize VendorAdapter
        adapter2.setClickListener(this);
        recyclerView2.setAdapter(adapter2); // Set the adapter for recyclerVie

        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
        //-------

        String urlEndpoint = BASE_URL + "/api/list-product";

        RequestQueue queue = Volley.newRequestQueue(this);

        JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(Request.Method.GET, urlEndpoint, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try {
                            // Clear existing data before adding new items
                            productModels.clear();

                            // Iterate through the JSON array to parse individual product objects
//                            response.length()
                            for (int i = 0; i < 3; i++) {
                                JSONObject jsonObject = response.getJSONObject(i);
                                ProductModel productModel = new ProductModel();

                                // Parse individual fields of the JSON object and set them in ProductModel
                                productModel.set_id(jsonObject.optString("_id"));
                                productModel.setNama(jsonObject.optString("nama"));
                                productModel.setHarga(jsonObject.optDouble("harga"));
                                productModel.setDeskripsi(jsonObject.optString("deskripsi"));
                                productModel.setKategori(jsonObject.optString("kategori"));

                                // Check if the "url_sertifikasi" key exists before setting the value
                                if (jsonObject.has("url_sertifikasi")) {

//                                    productModel.setUrl_sertifikasi(jsonObject.optString("url_sertifikasi"));
                                    String originalUrl = jsonObject.optString("url_sertifikasi");
                                    String modifiedUrl = BASE_URL + originalUrl;

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

                                productModel.setVendor_id(jsonObject.optString("vendor_id"));
                                productModel.setVendor_name(jsonObject.optString("vendor_nama"));
                                productModel.setVendor_alamat(jsonObject.optString("vendor_alamat"));
                                productModel.setVendor_no_telp(jsonObject.optString("vendor_no_telp"));
                                // Add the populated ProductModel to the list
                                productModels.add(productModel);
                            }
                            Log.d("API_Response", "Response received: " + response.toString());
                            // Notify the adapter that data set has changed
                            adapter.notifyDataSetChanged();
                        } catch (JSONException e) {
                            e.printStackTrace();
                            Log.e("API_Response", "JSON parsing error: " + Log.getStackTraceString(e));
                            // Handle JSON parsing errors
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Error", "Error occurred: " + error.getMessage());
                Toast.makeText(MainActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        });

        // Add the request to the RequestQueue
        queue.add(jsonArrayRequest);

        String urlEndpoint2 = BASE_URL + "/api/list-user";

        RequestQueue queue2 = Volley.newRequestQueue(this);

        JsonArrayRequest jsonArrayRequest2 = new JsonArrayRequest(Request.Method.GET, urlEndpoint2, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try {
                            // Clear existing data before adding new items
                            userModels.clear();

                            // Iterate through the JSON array to parse individual product objects
//                            response.length()
                            for (int i = 0; i < 5; i++) {
                                JSONObject jsonObject = response.getJSONObject(i);

                                if(jsonObject.optString("role_id").equals("2")){
                                    UserModel userModel = new UserModel();

                                    userModel.setId(jsonObject.optString("_id"));
                                    userModel.setFullName(jsonObject.optString("nama_lengkap"));
                                    userModel.setUsername(jsonObject.optString("username"));
                                    userModel.setEmail(jsonObject.optString("email"));
                                    userModel.setPhoneNumber(jsonObject.optString("no_telp"));
                                    userModel.setAddress(jsonObject.optString("alamat"));
                                    userModel.setRoleId(jsonObject.optInt("role_id"));
                                    userModel.setIsSubscribe(jsonObject.optInt("is_subscribe"));
                                    userModel.setIsVerified(jsonObject.optInt("is_verified"));

                                    // Add the populated ProductModel to the list
                                    userModels.add(userModel);
                                }

                            }
                            Log.d("API_Response", "Response received: " + response.toString());
                            // Notify the adapter that data set has changed
                            adapter2.notifyDataSetChanged();
                        } catch (JSONException e) {
                            e.printStackTrace();
                            Log.e("API_Response", "JSON parsing error: " + Log.getStackTraceString(e));
                            // Handle JSON parsing errors
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Error", "Error occurred: " + error.getMessage());
                Toast.makeText(MainActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        });

        // Add the request to the RequestQueue
        queue.add(jsonArrayRequest);
        queue2.add(jsonArrayRequest2);


    }

    @Override
    public void onItemClick(View view, int position) {
        RecyclerView.Adapter clickedAdapter = null;

        // Check which adapter is associated with the clicked view
        RecyclerView clickedRecyclerView = (RecyclerView) view.getParent();
        if (clickedRecyclerView != null) {
            if (clickedRecyclerView.getAdapter() == adapter) {
                // Clicked item is from the ProductAdapter
                clickedAdapter = adapter;
            } else if (clickedRecyclerView.getAdapter() == adapter2) {
                // Clicked item is from the VendorAdapter
                clickedAdapter = adapter2;
            }
        }

        // Handle clicks based on the adapter associated with the clicked view
        if (clickedAdapter != null) {
            if (clickedAdapter == adapter) {
                // Handle click on the ProductAdapter
                ProductModel clickedProduct = adapter.getItem(position);
                if (clickedProduct != null) {
                    String productName = clickedProduct.getNama();
                    Toast.makeText(this, "You clicked product: " + productName + " on row number " + position, Toast.LENGTH_SHORT).show();

                    Intent intent = new Intent(MainActivity.this, ProductDetailActivity.class);
                    intent.putExtra("pid", clickedProduct.get_id());
                    startActivity(intent);
                }
            } else if (clickedAdapter == adapter2) {
                // Handle click on the VendorAdapter
                UserModel clickedUser = adapter2.getItem(position);
                if (clickedUser != null) {
                    String userName = clickedUser.getFullName();
                    Toast.makeText(this, "You clicked user: " + userName + " on row number " + position, Toast.LENGTH_SHORT).show();

                    // Add handling for user clicks (e.g., launching a user detail activity)
                    Intent intent = new Intent(MainActivity.this, SupplierActivity.class);
                    intent.putExtra("uid", clickedUser.getId());
                    startActivity(intent);
                }
            }
        }
    }

    public void redirectChatbot(View view){
        Intent i = new Intent(MainActivity.this, ChatbotActivity.class);
        startActivity(i); // invoke the SecondActivity.
        finish();
    }


    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        // Add a marker in Sydney and move the camera
        LatLng sv = new LatLng(-6.589741047779353, 106.8063307861199);
        mMap.addMarker(new MarkerOptions()
                .position(sv)
                .title("Marker in SV"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.587690212054588, 106.8092522945839))
                .title("Marker in Lodaya"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.593281405036393, 106.80607648660646))
                .title("Marker in Malabar"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.591228592936871, 106.80122389783182))
                .title("Marker in Istana"));


        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.596892256520918, 106.79873894511536))
                .title("Marker in KRB"));


        float zoomLevel = 15.0f; // Change this value to adjust the zoom level
        mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(sv, zoomLevel));
    }




}
