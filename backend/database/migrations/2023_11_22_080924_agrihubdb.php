<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->string('username', 25);
            $table->string('email', 50);
            $table->string('no_hp', 100);
            $table->boolean('terverifikasi');
            $table->string('password', 100);
            $table->string('alamat', 100);
            $table->unsignedBigInteger('role_id');
            $table->timestamps();
        });

        Schema::create('harga_product', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->integer('moq');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });

        Schema::create('katalog', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('akun_id');
            $table->timestamps();
        });

        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->timestamps();
        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->string('grade', 25);
            $table->string('sub_kategori', 25); 
            $table->unsignedBigInteger('katalog_id');
            $table->unsignedBigInteger('akun_id');
            $table->timestamps();
        });

        Schema::create('product_masa_panen', function (Blueprint $table) {
            $table->id();
            $table->integer('tgl_panen');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('status_product_id');
            $table->integer('estimasi_jumlah');
            $table->timestamps();
        });

        Schema::create('product_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('sertifikasi_namefile', 25);
            $table->unsignedBigInteger('sertifikasi_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });

        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi', 100);
            $table->unsignedBigInteger('for_akun_id');
            $table->unsignedBigInteger('by_akun_id');
            $table->integer('rating_score');
            $table->timestamps();
        });

        Schema::create('sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->timestamps();
        });

        Schema::create('status_product', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->timestamps();
        });

        Schema::create('sub_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25);
            $table->timestamps();
        });

        Schema::create('tipe_akun', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 25); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
        Schema::dropIfExists('harga_product');
        Schema::dropIfExists('katalog');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_masa_panen');
        Schema::dropIfExists('product_sertifikasi');
        Schema::dropIfExists('rating');
        Schema::dropIfExists('sertifikasi');
        Schema::dropIfExists('status_product');
        Schema::dropIfExists('sub_kategori');
        Schema::dropIfExists('tipe_akun');
    }
};
