package com.example.agrihubandro.components;

import static com.example.agrihubandro.CONSTANT.BASE_URL;

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
import com.example.agrihubandro.MainActivity;
import com.example.agrihubandro.R;
import com.example.agrihubandro.adapter.ProductAdapter;
import com.example.agrihubandro.adapter.ProductDetailImageAdapter;
import com.example.agrihubandro.models.ProductModel;
import com.example.agrihubandro.models.UserModel;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class SupplierActivity extends AppCompatActivity {

    private ProductDetailImageAdapter adapter;
    private ArrayList<String> imageUrls = new ArrayList<>();

    TextView
    vd_vendorname,
    vd_vendordesc,
    vd_vendor_moq,
    vd_sertif,
    vd_vendor_panen;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_supplier);

        vd_vendorname = findViewById(R.id.vd_vendorname);
        vd_vendordesc = findViewById(R.id.vd_vendordesc);
        vd_vendor_moq = findViewById(R.id.vd_vendor_moq);
        vd_sertif = findViewById(R.id.vd_vendor_sertif);
        vd_vendor_panen = findViewById(R.id.vd_vendor_panen);

        String uid = ""; // Initialize productId

        Intent intent = getIntent();
        if (intent != null) {
            uid = intent.getStringExtra("uid");
        }

        final String finalUid = uid;

        String urlEndpoint = BASE_URL + "/api/list-user/" + uid;
        RequestQueue queue = Volley.newRequestQueue(this);
        UserModel userModel = new UserModel();

        JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(Request.Method.GET, urlEndpoint, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try {
                            if (response.length() > 0) {
                                JSONObject jsonObject = response.getJSONObject(0);

                                for (int i = 0; i < 5; i++) {
                                    if(jsonObject.optString("_id").equals(finalUid)){
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

                                        vd_vendordesc.setText(jsonObject.optString("vendor_deskripsi"));
                                        vd_vendor_moq.setText(jsonObject.optString("vendor_moq"));
                                        vd_sertif.setText(jsonObject.optString("vendor_sertif"));
                                        vd_vendor_panen.setText(jsonObject.optString("vendor_panen"));

                                    }
                                }
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
                Toast.makeText(SupplierActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        });

        queue.add(jsonArrayRequest);
    }

    public void backToMain(View view) {
        // Handle the back button click here
        Intent intent = new Intent(SupplierActivity.this, MainActivity.class);
        startActivity(intent);
        finish(); // Optional: Close this activity when navigating back to MainActivity
    }
}
