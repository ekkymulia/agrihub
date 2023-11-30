package com.example.agrihubandro.models;

public class ProductModel {
    private String _id;
    private String nama;
    private double harga;
    private String deskripsi;
    private String moq;
    private String sertifikasi;

    private String url_gambar = null;
    private String kategori;
    private String url_sertifikasi = null;

    private String vendor_id;
    private String vendor_name;
    private String vendor_alamat;
    private String vendor_no_telp;



    // Getters and setters (You can generate these methods in your IDE or write them manually)
    // For example:

    public String get_id() {
        return _id;
    }

    public void set_id(String _id) {
        this._id = _id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public double getHarga() {
        return harga;
    }

    public void setHarga(double harga) {
        this.harga = harga;
    }

    public String getDeskripsi() {
        return deskripsi;
    }

    public void setDeskripsi(String deskripsi) {
        this.deskripsi = deskripsi;
    }

    public String getUrl_gambar() {
        return url_gambar;
    }

    public void setUrl_gambar(String url_gambar) {
        this.url_gambar = url_gambar;
    }

    public String getKategori() {
        return kategori;
    }

    public void setKategori(String kategori) {
        this.kategori = kategori;
    }

    public String getUrl_sertifikasi() {
        return url_sertifikasi;
    }

    public void setUrl_sertifikasi(String url_sertifikasi) {
        this.url_sertifikasi = url_sertifikasi;
    }

    public String getVendor_id() {
        return vendor_id;
    }

    public void setVendor_id(String vendor_id) {
        this.vendor_id = vendor_id;
    }

    public String getVendor_name() {
        return vendor_name;
    }

    public void setVendor_name(String vendor_name) {
        this.vendor_name = vendor_name;
    }

    public String getVendor_alamat() {
        return vendor_alamat;
    }

    public void setVendor_alamat(String vendor_alamat) {
        this.vendor_alamat = vendor_alamat;
    }

    public String getVendor_no_telp() {
        return vendor_no_telp;
    }

    public void setVendor_no_telp(String vendor_no_telp) {
        this.vendor_no_telp = vendor_no_telp;
    }

    public String getMoq() {
        return moq;
    }

    public void setMoq(String moq) {
        this.moq = moq;
    }

    public String getSertifikasi() {
        return sertifikasi;
    }

    public void setSertifikasi(String sertifikasi) {
        this.sertifikasi = sertifikasi;
    }
}

