<?php

/*

    Interface ini mendefinisikan struktur dasar yang harus dimiliki oleh setiap Presenter 
    dalam arsitektur MVP (Model–View–Presenter).

    Interface ini berfungsi sebagai kontrak antara View dan Presenter, 
    yang menentukan metode-metode CRUD (Create, Read, Update, Delete) 
    yang wajib diimplementasikan oleh Presenter .

    Dengan adanya kontrak ini, setiap anggota tim dapat 
    bekerja dengan pola yang sama, menjaga konsistensi struktur kode,  
    dan memungkinkan dikerjakan secara paralel 
    tanpa saling mengganggu bagian kode lainnya.

*/
require_once __DIR__ . '/../models/DB.php';

interface KontrakPresenterLintasan
{
    // Method untuk menampilkan daftar lintasan
    public function tampilkanLintasan(): string;

    // Method untuk menampilkan form lintasan (untuk tambah / edit)
    public function tampilkanFormLintasan($id = null): string;

    // Method CRUD lintasan
    public function tambahLintasan($nama_lintasan,$negara,$panjang_km,$jumlah_tikungan,$tipe_lintasan): void;
    public function ubahLintasan($id,$nama_lintasan,$negara,$panjang_km,$jumlah_tikungan,$tipe_lintasan): void;
    public function hapusLintasan($id): void;
}
