//package com.example.agrihubandro;
//
//import android.util.Log;
//
//import com.example.agrihubandro.apiservice.apiservice;
//import com.google.gson.Gson;
//import com.google.gson.GsonBuilder;
//
//import java.io.IOException;
//
//import okhttp3.Interceptor;
//import okhttp3.OkHttpClient;
//import okhttp3.Request;
//import okhttp3.Response;
//import retrofit2.Retrofit;
//import retrofit2.converter.gson.GsonConverterFactory;
//
//public class RetrofitClient {
//
//    private static String BASE_URL = "http://127.0.0.1:8000/api/";
//    public static Retrofit retrofit;
//
//    public static Retrofit getRetrofitInstance(){
//
//        if(retrofit == null) {
////            HttpLoggingInterceptor interceptor = new HttpLoggingInterceptor();
////            interceptor.level(HttpLoggingInterceptor.Level.BODY);
//            OkHttpClient client = new OkHttpClient.Builder()
////                    .addInterceptor(interceptor)
//                    .addInterceptor(new Interceptor() {
//                        @Override
//                        public Response intercept(Chain chain) throws IOException {
//                            Request newRequest  = chain.request().newBuilder()
////                                    .addHeader("Authorization", "Bearer " + API_KEY)
//                                    .build();
//                            return chain.proceed(newRequest);
//                        }
//                    })
//                    .build();
//
//            Gson gson = new GsonBuilder()
//                    .setLenient()
//                    .create();
//
//            retrofit = new Retrofit.Builder()
//                    .baseUrl(BASE_URL)
//                    .client(client)
//                    .addConverterFactory(GsonConverterFactory.create())
//                    .build();
//
//            Log.d("creation", "retrofit builded");
//        }
//        return retrofit;
//    }
//}
