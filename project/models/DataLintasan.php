<?php

class DataLintasan{

    private $id_lintasan;
    private $nama_lintasan;
    private $negara;
    private $panjang_km;
    private $jumlah_tikungan;
    private $tipe_lintasan;


    public function __construct($id_lintasan, $nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan){
        $this->id_lintasan = $id_lintasan;
        $this->nama_lintasan = $nama_lintasan;
        $this->negara = $negara;
        $this->panjang_km = $panjang_km;
        $this->jumlah_tikungan = $jumlah_tikungan;
        $this->tipe_lintasan = $tipe_lintasan;
    }

    public function getIdLintasan(){
        return $this->id_lintasan;
    }
    public function getNamaLintasan(){
        return $this->nama_lintasan;
    }
     public function getNegaraLintasan(){
        return $this->negara;
    }
    public function getPanjang(){
        return $this->panjang_km;
    }
    public function getJumlahTikungan(){
        return $this->jumlah_tikungan;
    }
    public function getTipeLintasan(){
        return $this->tipe_lintasan;
    }

    public function setNamaLintasan($nama_lintasan){
        $this->nama_lintasan = $nama_lintasan;
    }
    public function setNegaraLintasan($negara){
        $this->negara = $negara;
    }
    public function setPanjang($panjang_km){
        $this->panjang_km = $panjang_km;
    }
    
    public function setJumlahTikungan($jumlah_tikungan){
        $this->jumlah_tikungan = $jumlah_tikungan;
    }
    public function setTipeLintasan($tipe_lintasan){
        $this->tipe_lintasan = $tipe_lintasan;
    }
}
?>