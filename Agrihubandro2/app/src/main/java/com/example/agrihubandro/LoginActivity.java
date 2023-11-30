package com.example.agrihubandro;

import static com.example.agrihubandro.CONSTANT.BASE_URL;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class LoginActivity extends AppCompatActivity {

    EditText username;
    EditText password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        if (getSupportActionBar() != null) {
            getSupportActionBar().hide();
        }
    }

    public void postLogin(View view) {
        EditText usernameEditText = findViewById(R.id.usernameEditText); // Assuming IDs for username and password fields are usernameEditText and passwordEditText
        EditText passwordEditText = findViewById(R.id.passwordEditText);

        String username = usernameEditText.getText().toString();
        String password = passwordEditText.getText().toString();

        String urlEndpoint = BASE_URL + "/api/auth/login"; // URL to post the username and password

        RequestQueue queue = Volley.newRequestQueue(this);

        StringRequest stringRequest = new StringRequest(Request.Method.POST, urlEndpoint,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        Log.d("Responsesss", response);
                        // Handle the response here, maybe validate the response or extract necessary information

                        // If the response indicates success or contains necessary data, move to MainActivity
                        Intent i = new Intent(LoginActivity.this, MainActivity.class);
                        startActivity(i);
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Error", "Error occurred: " + error.getMessage());
                Toast.makeText(LoginActivity.this, "Error occurred. Please check logs for details.", Toast.LENGTH_SHORT).show();
            }
        }) {
            // Override the method to pass username and password in the request body
            @Override
            protected Map<String, String> getParams() {
                Map<String, String> params = new HashMap<>();
                params.put("username", username);
                params.put("password", password);
                return params;
            }
        };

        queue.add(stringRequest);
    }

    public void redirectSignup(View view){
        Intent i = new Intent(LoginActivity.this, SignUpActivity.class);
        startActivity(i);
    }


}
