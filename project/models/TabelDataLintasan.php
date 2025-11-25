<?php

include_once ("models/DB.php");
include_once ("KontrakLintasan.php");

class TabelDataLintasan extends DB implements KontrakLintasan {  

    // Konstruktor untuk inisialisasi database  
    public function __construct($host, $db_name, $username, $password) {  
        parent::__construct($host, $db_name, $username, $password);  
    }  

    // Method untuk mendapatkan semua lintasan  
    public function getAllLintasan(): array {  
        $query = "SELECT * FROM data_lintasan";  
        $this->executeQuery($query);  
        return $this->getAllResult();  
    }  

    // Method untuk mendapatkan lintasan berdasarkan ID  
    public function getLintasanById($id): ?array {  
        $this->executeQuery(
            "SELECT * FROM data_lintasan WHERE id_lintasan = :id", 
            ['id' => $id]
        );  
        $results  =  $this->getAllResult();  
        return $results[0] ?? null;  
    }  

    // implementasikan metode CRUD di bawah ini sesuai kebutuhan

    public function addLintasan($nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void {
        $query = "INSERT INTO data_lintasan (nama_lintasan, negara, panjang_km, jumlah_tikungan, tipe_lintasan)
                VALUES (:nama, :negara, :panjang, :tikungan, :tipe)";
        $params = [
            'nama' => $nama_lintasan,
            'negara' => $negara,
            'panjang' => $panjang_km,
            'tikungan' => $jumlah_tikungan,
            'tipe' => $tipe_lintasan
        ];
        $this->executeQuery($query, $params);
    }

    public function updateLintasan($id, $nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void {
        $query = "UPDATE data_lintasan 
                SET nama_lintasan = :nama, negara = :negara, panjang_km = :panjang, jumlah_tikungan = :tikungan, tipe_lintasan = :tipe 
                WHERE id_lintasan = :id";
        $params = [
            'id' => $id,
            'nama' => $nama_lintasan,
            'negara' => $negara,
            'panjang' => $panjang_km,
            'tikungan' => $jumlah_tikungan,
            'tipe' => $tipe_lintasan
        ];
        $this->executeQuery($query, $params);
    }

    public function deleteLintasan($id): void {
        $query = "DELETE FROM data_lintasan WHERE id_lintasan = :id";
        $params = ['id' => $id];
        $this->executeQuery($query, $params);
    }

}

?>