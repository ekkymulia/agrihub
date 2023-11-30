//package com.example.agrihubandro.database.databaseRepository;
//
//import android.app.Application;
//import android.os.AsyncTask;
//import android.util.Log;
//
//import androidx.lifecycle.LiveData;
//
//import com.example.monuapp.database.databaseDao.databaseUserDao;
//import com.example.monuapp.database.databaseUtil;
//import com.example.monuapp.model.User;
//
//import java.util.List;
//
//public class databaseUserRepository {
//
//    private databaseUserDao dao;
//    private LiveData<List<User>> allUser;
//    private LiveData<Integer> userAmount;
//
//    public databaseUserRepository(Application application) {
//        databaseUtil database = databaseUtil.getInstance(application);
//        dao = database.databaseUserDao();
//
//        //fetching
//        userAmount = dao.getDbCountUserData();
//        allUser = dao.getDbUserData();
//    }
//
//    //creating a method to insert the data to our database.
//    public void insert(User model) {
//        Log.d("creation", "arrive DUR DB REPO, data " + model.toString());
////        InsertUserAsyncTask insertUserAsyncTask = new InsertUserAsyncTask(dao);
////        insertUserAsyncTask.execute(model);
//        new InsertUserAsyncTask(dao).execute(model);
//    }
//
//    //creating a method to update data in database.
//    public void update(User model) {
//        new UpdateUserAsyncTask(dao).execute(model);
//    }
//
//    //creating a method to delete the data in our database.
//    public void delete(User model) {
//        new DeleteUserAsyncTask(dao).execute(model);
//    }
//
//    //below is the method to delete all the Users.
//    public void deleteAllUsers() {
//        new DeleteAllUsersAsyncTask(dao).execute();
//    }
//
//    //below method is to read all the Users.
//    public LiveData<List<User>> getAllUser() {
//        return allUser;
//    }
//
//    public LiveData<Integer> getCountUser(){
//        return userAmount;
//    }
//
//
//    //async class
//
//    public static class InsertUserAsyncTask extends AsyncTask<User, Void, Void> {
//
//        private databaseUserDao dao;
//
//        private InsertUserAsyncTask(databaseUserDao dao) {
//            this.dao = dao;
//        }
//
//        @Override
//        protected Void doInBackground(User... Users) {
//            //below line is use to insert our modal in dao.
//            Log.d("creation", "arrive in IUAT DB REPO DUR, data " + Users[0].toString());
//            dao.insertDbUser(Users[0]);
//            return null;
//        }
//    }
//
//    //we are creating a async task method to update our User.
//    private static class UpdateUserAsyncTask extends AsyncTask<User, Void, Void> {
//        private databaseUserDao dao;
//
//        private UpdateUserAsyncTask(databaseUserDao dao) {
//            this.dao = dao;
//        }
//
//        @Override
//        protected Void doInBackground(User... models) {
//            //below line is use to update our modal in dao.
//            dao.updateDbUser(models[0]);
//            return null;
//        }
//    }
//
//    //we are creating a async task method to delete User.
//    private static class DeleteUserAsyncTask extends AsyncTask<User, Void, Void> {
//        private databaseUserDao dao;
//
//        private DeleteUserAsyncTask(databaseUserDao dao) {
//            this.dao = dao;
//        }
//
//        @Override
//        protected Void doInBackground(User... models) {
//            //below line is use to delete our User modal in dao.
//            dao.deleteDbUser(models[0]);
//            return null;
//        }
//    }
//
//    //we are creating a async task method to delete all courses.
//    private static class DeleteAllUsersAsyncTask extends AsyncTask<Void, Void, Void> {
//        private databaseUserDao dao;
//
//        private DeleteAllUsersAsyncTask(databaseUserDao dao) {
//            this.dao = dao;
//        }
//
//        @Override
//        protected Void doInBackground(Void... voids) {
//            //on below line calling method to delete all courses.
//            dao.deleteDbAllUsers();
//            return null;
//        }
//    }
//
//
//}
