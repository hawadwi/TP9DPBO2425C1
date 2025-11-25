<?php

include_once(__DIR__ . "/KontrakPresenterLintasan.php");
include_once(__DIR__ . "/../models/TabelDataLintasan.php");
include_once(__DIR__ . "/../models/DataLintasan.php");
include_once(__DIR__ . "/../views/ViewLintasan.php");

class PresenterLintasan implements KontrakPresenterLintasan
{
    // Model DataLintasan untuk operasi database
    private $tabelLintasan; // Instance dari TabelDataLintasan (Model)
    private $viewLintasan;  // Instance dari ViewLintasan (View)

    // Data list lintasan
    private $listLintasan = []; // Menyimpan array objek Lintasan

    public function __construct($tabelLintasan, $viewLintasan)
    {
        $this->tabelLintasan = $tabelLintasan;
        $this->viewLintasan = $viewLintasan;
        $this->initListLintasan();
    }

    // Method untuk initialisasi list lintasan dari database
    public function initListLintasan()
    {
        $data = $this->tabelLintasan->getAllLintasan();

        $this->listLintasan = [];
        foreach ($data as $item) {
            $lintasan = new DataLintasan(
                $item['id_lintasan'],
                $item['nama_lintasan'],
                $item['negara'],
                $item['panjang_km'],
                $item['jumlah_tikungan'],
                $item['tipe_lintasan']
            );
            $this->listLintasan[] = $lintasan;
        }
    }

    // Method untuk menampilkan daftar lintasan menggunakan View
    public function tampilkanLintasan(): string
    {
        return $this->viewLintasan->tampilLintasan($this->listLintasan);
    }

    // Method untuk menampilkan form lintasan
    public function tampilkanFormLintasan($id = null): string
    {
        $data = null;
        if ($id !== null) {
            $data = $this->tabelLintasan->getLintasanById($id);
        }
        return $this->viewLintasan->tampilFormLintasan($data);
    }

    // Implementasi metode CRUD lintasan

    public function tambahLintasan($nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void
    {
        $this->tabelLintasan->addLintasan($nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan);
        $this->initListLintasan(); // update list setelah tambah
    }

    public function ubahLintasan($id, $nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan): void
    {
        $this->tabelLintasan->updateLintasan($id, $nama_lintasan, $negara, $panjang_km, $jumlah_tikungan, $tipe_lintasan);
        $this->initListLintasan(); // update list setelah ubah
    }

    public function hapusLintasan($id): void
    {
        $this->tabelLintasan->deleteLintasan($id);
        $this->initListLintasan(); // update list setelah hapus
    }
}

?>