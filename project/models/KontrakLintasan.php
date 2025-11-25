<?php

/*

    Interface ini mendefinisikan struktur dasar yang harus dimiliki oleh setiap Model 
    dalam arsitektur MVP (Model–View–Presenter).

    Interface ini berfungsi sebagai kontrak antara Presenter dan Model, 
    yang menentukan metode-metode CRUD (Create, Read, Update, Delete) 
    yang wajib diimplementasikan oleh Model.

    Dengan adanya kontrak ini, setiap anggota tim dapat 
    bekerja dengan pola yang sama, menjaga konsistensi struktur kode,  
    dan memungkinkan dikerjakan secara paralel 
    tanpa saling mengganggu bagian kode lainnya.

*/
interface KontrakLintasan
{
    public function getAllLintasan(): array;
    public function getLintasanById($id): ?array;

    // CRUD lintasan
    public function addLintasan($nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void;
    public function updateLintasan($id, $nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void;
    public function deleteLintasan($id): void;
}
?>