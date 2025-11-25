<?php

include_once("models/DB.php");
include_once("models/TabelPembalap.php");
include_once("views/ViewPembalap.php");
include_once("presenters/PresenterPembalap.php");

// ======= Inisialisasi Model, View, Presenter =======
$tabelPembalap = new TabelPembalap('localhost', 'mvp_db', 'root', '');
$viewPembalap = new ViewPembalap();
$presenter = new PresenterPembalap($tabelPembalap, $viewPembalap);

// ======= Tangani aksi form =======
if(isset($_POST['action'])){
    $action = $_POST['action'];

    if($action == 'add'){
        $presenter->tambahPembalap(
            $_POST['nama'],
            $_POST['tim'],
            $_POST['negara'],
            $_POST['poinMusim'],
            $_POST['jumlahMenang']
        );
    }
    else if($action == 'edit' && isset($_POST['id'])){
        $presenter->ubahPembalap(
            $_POST['id'],
            $_POST['nama'],
            $_POST['tim'],
            $_POST['negara'],
            $_POST['poinMusim'],
            $_POST['jumlahMenang']
        );
    }
    else if($action == 'delete' && isset($_POST['id'])){
        $presenter->hapusPembalap($_POST['id']);
    }

    // Setelah CRUD selesai, redirect kembali ke daftar
    header("Location: index.php");
    exit();
}

// ======= Tangani tampilan form =======
if(isset($_GET['screen'])){
    if($_GET['screen'] == 'add'){
        echo $presenter->tampilkanFormPembalap();
        exit();
    }
    else if($_GET['screen'] == 'edit' && isset($_GET['id'])){
        echo $presenter->tampilkanFormPembalap($_GET['id']);
        exit();
    }
}

// ======= Tampilkan daftar pembalap =======
echo $presenter->tampilkanPembalap();

?>