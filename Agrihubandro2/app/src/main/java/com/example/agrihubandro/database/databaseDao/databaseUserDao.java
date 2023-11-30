//package com.example.agrihubandro.database.databaseDao;
//
//import androidx.lifecycle.LiveData;
//import androidx.room.Dao;
//import androidx.room.Delete;
//import androidx.room.Insert;
//import androidx.room.Query;
//import androidx.room.Update;
//
//import com.example.monuapp.model.User;
//
//import java.util.List;
//
////Adding annotation to our Dao class
//@Dao
//public interface databaseUserDao {
//
//    @Query("Select Count(*) from user")
//    LiveData<Integer> getDbCountUserData();
//
//    @Query("Select * from user")
//    LiveData<List<User>> getDbUserData();
//
//    @Insert
//    void insertDbUser(User user);
//
//    @Update
//    void updateDbUser(User user);
//
//    @Delete
//    void deleteDbUser(User user);
//
//    @Query("DELETE FROM user")
//    void deleteDbAllUsers();
//
//}
