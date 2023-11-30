package com.example.agrihubandro.components;

import android.os.Bundle;
import androidx.appcompat.app.AppCompatActivity;

import com.example.agrihubandro.R;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

public class MapsActivity extends AppCompatActivity implements OnMapReadyCallback {

    private GoogleMap mMap;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);

    }

    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     *
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        // Add a marker in Sydney and move the camera
        LatLng sv = new LatLng(-6.589741047779353, 106.8063307861199);
        mMap.addMarker(new MarkerOptions()
                .position(sv)
                .title("Puncak Pass Farm"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.587690212054588, 106.8092522945839))
                .title("Marsya Halya Afrida"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.593281405036393, 106.80607648660646))
                .title("Bogor Farm"));

        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.591228592936871, 106.80122389783182))
                .title("Malabar Fram"));


        mMap.addMarker(new MarkerOptions()
                .position(new LatLng(-6.596892256520918, 106.79873894511536))
                .title("Halo Farm"));


        mMap.moveCamera(CameraUpdateFactory.newLatLng(sv));
    }
}

