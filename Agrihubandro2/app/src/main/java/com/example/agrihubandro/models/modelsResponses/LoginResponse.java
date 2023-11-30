package com.example.agrihubandro.models.modelsResponses;

import com.example.agrihubandro.models.UserModel;

public class LoginResponse {
    private boolean success;
    private UserModel user;

    // Constructor
    public LoginResponse(boolean success, UserModel user) {
        this.success = success;
        this.user = user;
    }

    // Getters and setters for success and user fields
    public boolean isSuccess() {
        return success;
    }

    public void setSuccess(boolean success) {
        this.success = success;
    }

    public UserModel getUser() {
        return user;
    }

    public void setUser(UserModel user) {
        this.user = user;
    }

}
