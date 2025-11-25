<?php

include_once("models/DB.php");
include_once("models/TabelDataLintasan.php");
include_once("views/ViewLintasan.php");
include_once("presenters/PresenterLintasan.php");

// Inisialisasi model, view, dan presenter lintasan
$tabelLintasan = new TabelDataLintasan('localhost', 'mvp_db', 'root', '');
$viewLintasan = new ViewLintasan();
$presenterLintasan = new PresenterLintasan($tabelLintasan, $viewLintasan);

// Handle GET requests (tampil form)
if (isset($_GET['screen'])) {
    if ($_GET['screen'] === 'add') {
        echo $presenterLintasan->tampilkanFormLintasan();
        exit;
    } elseif ($_GET['screen'] === 'lintasan_edit' && isset($_GET['id'])) {
        echo $presenterLintasan->tampilkanFormLintasan($_GET['id']);
        exit;
    }
}

// Handle POST requests (submit form)
if (isset($_POST['action'])) {
    $action = $_POST['action'] ?? '';
    $id = $_POST['id'] ?? null;
    $nama = $_POST['nama_lintasan'] ?? '';
    $negara = $_POST['negara'] ?? '';
    $panjang = $_POST['panjang_km'] ?? 0;
    $tikungan = $_POST['jumlah_tikungan'] ?? 0;
    $tipe = $_POST['tipe_lintasan'] ?? '';

    switch ($action) {
        case 'add':
            $presenterLintasan->tambahLintasan($nama, $negara, $panjang, $tikungan, $tipe);
            break;
        case 'edit':
            if ($id) $presenterLintasan->ubahLintasan($id, $nama, $negara, $panjang, $tikungan, $tipe);
            break;
        case 'delete':
            if ($id) $presenterLintasan->hapusLintasan($id);
            break;
    }

    // Setelah submit, redirect ke list
    header("Location: indexLintasan.php");
    exit;
}

// Default: tampilkan daftar lintasan
echo $presenterLintasan->tampilkanLintasan();
?>