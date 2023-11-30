//package com.example.agrihubandro.auth.authRepository;
//
//import android.util.Log;
//
//import androidx.lifecycle.LiveData;
//import androidx.lifecycle.MutableLiveData;
//
//import com.example.agrihubandro.RetrofitClient;
//import com.example.agrihubandro.apiservice.apiservice;
//import com.example.agrihubandro.models.modelsRequests.LoginRequest;
//import com.example.agrihubandro.models.modelsResponses.LoginResponse;
//
//
//
//public class authLoginRepository {
//
//    private apiservice.ApiService apiRequest;
////    private authLoginModel loginModel;
//
//    public authLoginRepository(){
//        apiRequest = RetrofitClient.getRetrofitInstance().create(apiservice.ApiService.class);
//    }
//
//    public LiveData<LoginResponse> postLogin(LoginRequest loginRequest){
//
//        final MutableLiveData<LoginResponse> data = new MutableLiveData<>();
//
//        Log.d("creation", "reached postlogin");
//
//        Log.d("creation", loginRequest.getUsername());
//        Log.d("creation", loginRequest.getPassword());
//
//        apiRequest.postLogin(loginRequest).enqueue(new Callback<LoginResponse>() {
//
//            @Override
//            public void onResponse(Call<LoginResponse> call, Response<LoginResponse> response) {
//                if(response.body() != null){
//                    data.setValue(response.body());
//                    Log.d("creation", "success on response");
//                }else{
//                    data.setValue(response.body());
//                    Log.d("creation", "failure on respose");
//                }
//            }
//
//            @Override
//            public void onFailure(Call<LoginResponse> call, Throwable t) {
//                data.setValue(null);
//                Log.d("creation", "failure");
//                Log.d("creation", t.toString());
//            }
//
//        });
//
//        return data;
//
//    }
//
//
//
//
//
//
//}
