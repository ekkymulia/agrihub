package com.example.agrihubandro;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.webkit.WebView;

public class ChatbotActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chatbot);

        WebView webView = (WebView) findViewById(R.id.webview);
        webView.loadUrl("http://192.168.137.134:8000/chatbot");
    }
}