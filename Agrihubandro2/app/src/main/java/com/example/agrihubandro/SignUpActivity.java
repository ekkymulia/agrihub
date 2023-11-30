package com.example.agrihubandro;

import static com.example.agrihubandro.CONSTANT.BASE_URL;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class SignUpActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);
    }

    public void postSignup(View view) {
        EditText et_nama_lengkap = findViewById(R.id.su_nama_lengkap);
        EditText et_username = findViewById(R.id.su_username);
        EditText et_email = findViewById(R.id.su_email);
        EditText et_no_telp = findViewById(R.id.su_no_telp);
        EditText et_alamat = findViewById(R.id.su_alamat);
        EditText et_password = findViewById(R.id.su_password);

        String username = et_username.getText().toString();
        String password = et_password.getText().toString();
        String namaLengkap = et_nama_lengkap.getText().toString();
        String email = et_email.getText().toString();
        String noTelp = et_no_telp.getText().toString();
        String alamat = et_alamat.getText().toString();

        String urlEndpoint = BASE_URL + "/api/auth/register"; // URL to post the username and password

        RequestQueue queue = Volley.newRequestQueue(this);

        StringRequest stringRequest = new StringRequest(Request.Method.POST, urlEndpoint,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        Log.d("Response", response);
                        // Handle the response here, maybe validate the response or extract necessary information

                        // If the response indicates success or contains necessary data, move to MainActivity
                        Intent i = new Intent(SignUpActivity.this, MainActivity.class);
                        startActivity(i);
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Error", "Error occurred: " + error.getMessage());
                Toast.makeText(SignUpActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        }) {
            // Override the method to pass user details in the request body
            @Override
            protected Map<String, String> getParams() {
                Map<String, String> params = new HashMap<>();
                params.put("username", username);
                params.put("password", password);
                params.put("nama_lengkap", namaLengkap);
                params.put("email", email);
                params.put("no_telp", noTelp);
                params.put("alamat", alamat);
                params.put("role_id", "1");
                return params;
            }
        };


        queue.add(stringRequest);
    }
}