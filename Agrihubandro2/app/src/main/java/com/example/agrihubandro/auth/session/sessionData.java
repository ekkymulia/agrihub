package com.example.agrihubandro.auth.session;

public class sessionData {
    private String access_token, token_type;
    private Integer status_code;

    public sessionData(String access_token, String token_type, Integer status_code) {
        this.access_token = access_token;
        this.token_type = token_type;
        this.status_code = status_code;
    }

    public String getAccess_token() {
        return access_token;
    }

    public void setAccess_token(String access_token) {
        this.access_token = access_token;
    }

    public String getToken_type() {
        return token_type;
    }

    public void setToken_type(String token_type) {
        this.token_type = token_type;
    }

    public Integer getStatus_code() {
        return status_code;
    }

    public void setStatus_code(Integer status_code) {
        this.status_code = status_code;
    }

    @Override
    public String toString() {
        return "SessionData{" +
                "access_token='" + access_token + '\'' +
                ", token_type='" + token_type + '\'' +
                ", status_code=" + status_code +
                '}';
    }
}
