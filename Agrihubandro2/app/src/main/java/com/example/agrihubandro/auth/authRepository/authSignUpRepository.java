//package com.example.agrihubandro.auth.authRepository;
//
//import android.util.Log;
//
//import androidx.lifecycle.LiveData;
//import androidx.lifecycle.MutableLiveData;
//
//import com.example.agrihubandro.RetrofitClient;
//import com.example.agrihubandro.apiservice.apiservice;
//import com.example.agrihubandro.models.modelsResponses.LoginResponse;
//import com.example.monuapp.network.auth.authApiRequest;
//import com.example.monuapp.network.auth.authModel.authLoginModel;
//import com.example.monuapp.network.auth.authModel.authSignUpModel;
//import com.example.monuapp.network.auth.authResponse.authLoginResponse;
//import com.example.monuapp.network.auth.authResponse.authSignUpResponse;
//import com.example.monuapp.network.auth.authRetrofitRequest;
//
//import retrofit2.Call;
//import retrofit2.Callback;
//import retrofit2.Response;
//
//public class authSignUpRepository {
//
//    private apiservice.ApiService apiRequest;
//
//    public authSignUpRepository() {
//        apiRequest = RetrofitClient.getRetrofitInstance().create(apiservice.ApiService.class);
//    }
//
//    public LiveData<LoginResponse> postSignUp(authSignUpModel authSignUpModel){
//
//        final MutableLiveData<authSignUpResponse> data = new MutableLiveData<>();
//
//        Log.d("creation", "reached postsignup");
//
//        Log.d("creation", authSignUpModel.toString());
//
//        apiRequest.postSignUp(authSignUpModel).enqueue(new Callback<authSignUpResponse>() {
//            @Override
//            public void onResponse(Call<authSignUpResponse> call, Response<authSignUpResponse> response) {
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
//            public void onFailure(Call<authSignUpResponse> call, Throwable t) {
//                data.setValue(null);
//                Log.d("creation", "failure");
//                Log.d("creation", t.toString());
//            }
//        });
//
//        return data;
//    }
//
//
//}
