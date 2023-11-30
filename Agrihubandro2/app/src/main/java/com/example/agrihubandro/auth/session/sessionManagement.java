//package com.example.agrihubandro.auth.session;
//
//import static com.example.monuapp.constants.AppConstant.API_KEY;
//
//import android.content.Context;
//import android.content.SharedPreferences;
//import android.se.omapi.Session;
//import android.util.Log;
//import android.widget.ListView;
//
//import com.example.agrihubandro.models.modelsResponses.LoginResponse;
//import com.example.monuapp.network.auth.authResponse.authLoginResponse;
//
//import org.json.JSONArray;
//
//import java.util.ArrayList;
//import java.util.List;
//
//public class sessionManagement {
//
//    SharedPreferences sharedPreferences;
//    SharedPreferences.Editor editor;
//
//
//    private String SHARED_PREF_NAME = "session";
//    private String SHARED_PREF_KEY_TOKEN;
////    private String SHARED_PREF_KEY_TYPE;
//
//    private ArrayList<sessionData> sessionDataArrayList = new ArrayList<>();
//
//    public sessionManagement(Context context){
//        sharedPreferences = context.getSharedPreferences(SHARED_PREF_NAME, Context.MODE_PRIVATE);
//        editor = sharedPreferences.edit();
//    }
//
//    public void saveSession(LoginResponse authLoginResponse){
//        //save user session
//
//        List<sessionData> loginContent = authLoginResponse.getUser();
//        sessionDataArrayList.addAll(loginContent);
//
//        sessionData sessionData = sessionDataArrayList.get(0);
//        editor.putString(SHARED_PREF_KEY_TOKEN, sessionData.getAccess_token()).commit();
////        editor.putString(SHARED_PREF_KEY_TYPE, sessionData.getToken_type()).commit();
//
//        Log.d("creation", "sessionDAL " + sessionData);
//        Log.d("creation", "sesionDkeytoken "+ sessionData.getAccess_token());
//        API_KEY = sessionData.getAccess_token();
//    }
//
//    public String getSessionToken(){
//        //get user session token
//        Log.d("creation", "sharedkeytoken " + sharedPreferences.getString(SHARED_PREF_KEY_TOKEN, null));
////        Log.d("creation", "sharedkeytype " + sharedPreferences.getString(SHARED_PREF_KEY_TYPE, null));
//        return sharedPreferences.getString(SHARED_PREF_KEY_TOKEN, null);
//    }
//
//    public boolean getSessionCheck(){
//        String sToken = sharedPreferences.getString(SHARED_PREF_KEY_TOKEN, "");
//        if(sToken != ""){
//            API_KEY = sharedPreferences.getString(SHARED_PREF_KEY_TOKEN, "");
//            return true;
//        }else{
//            API_KEY = "";
//            return false;
//        }
//    }
//
//    public void removeSession(){
////        editor.remove(SHARED_PREF_KEY_TYPE).commit();
//        editor.remove(SHARED_PREF_KEY_TOKEN).commit();
//
//        API_KEY = "";
//    }
//
//
//
//}
//
