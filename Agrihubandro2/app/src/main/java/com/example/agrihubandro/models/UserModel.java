package com.example.agrihubandro.models;


public class UserModel {
    private String id;
    private String username;
    private String fullName;
    private String email;
    private String phoneNumber;
    private String address;
    private int roleId;
    private int isSubscribe;
    private int isVerified;

//    public UserModel(String username, String fullName, String email, String phoneNumber, String address, int roleId, int isSubscribe, int isVerified) {
//        this.username = username;
//        this.fullName = fullName;
//        this.email = email;
//        this.phoneNumber = phoneNumber;
//        this.address = address;
//        this.roleId = roleId;
//        this.isSubscribe = isSubscribe;
//        this.isVerified = isVerified;
//    }
//

    // Getters and setters for each field


    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getFullName() {
        return fullName;
    }

    public void setFullName(String fullName) {
        this.fullName = fullName;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(String phoneNumber) {
        this.phoneNumber = phoneNumber;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public int getRoleId() {
        return roleId;
    }

    public void setRoleId(int roleId) {
        this.roleId = roleId;
    }

    public int getIsSubscribe() {
        return isSubscribe;
    }

    public void setIsSubscribe(int isSubscribe) {
        this.isSubscribe = isSubscribe;
    }

    public int getIsVerified() {
        return isVerified;
    }

    public void setIsVerified(int isVerified) {
        this.isVerified = isVerified;
    }
}
