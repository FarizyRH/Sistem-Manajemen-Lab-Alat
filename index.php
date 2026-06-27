<?php
session_start();
require_once 'Controllers/Logbook.php';
if (!isset($_SESSION['username'])) {
    $Controller = new Logbook();
    $Controller->login();
} else if (!isset($_SESSION['username']) && $_GET['login'] == "error") {
    $Controller = new Logbook();
    $Controller->loginError();
} else if (isset($_SESSION['namaAdmin'])) {
    $Controller = new Logbook();
    $Controller->menuAdmin();
} else if (isset($_SESSION['namaMHS']) && !isset($_GET['page'])) {
    $Controller = new Logbook();
    $Controller->index();
}else if (isset($_SESSION['namaMHS']) && isset($_GET['page']) && $_GET['page'] == "pinjamalat") {
    $Controller = new Logbook();
    $Controller->pinjamAlat();
}else if (isset($_SESSION['namaMHS']) && isset($_GET['page']) && $_GET['page'] == "pinjamlab") {
    $Controller = new Logbook();
    $Controller->pinjamLab();
}else if (isset($_SESSION['namaMHS']) && isset($_GET['page']) && $_GET['page'] == "history"){
    $Controller = new Logbook();
    $Controller->history();
}else if (isset($_SESSION['namaMHS']) && isset($_GET['page']) && $_GET['page'] == "insertPlab"){
    $Controller = new Logbook();
    $data = [];
    $data['NIM'] = $_POST['nim'];
    $data['LAB_ID'] = $_POST['lab'];
    $data['tgl_permohonan'] = $_POST['submit_date'];
    $data['tgl_penggunaan_lab'] = $_POST['date'];
    $data['Keterangan'] = $_POST['keterangan'];
    $data['level'] = $_POST['time'];
    $Controller->tambahData($data);
}
else if(isset($_SESSION['namaMHS']) && isset($_GET['page']) && $_GET['page'] == "insertPalat"){
    $Controller = new Logbook();
    $data = [];
    $data['NIM'] = $_POST['nim'];
    $data['ALAT_ID'] = $_POST['alat'];
    $data['tgl_permohonan'] = $_POST['submit_date'];
    $data['Jumlah_pinjam'] = $_POST['jumlah'];
    $data['Keterangan'] = $_POST['Keterangan'];
    $Controller->tambahDataPalat($data);
} 
else if(isset($_SESSION['namaAdmin']) && $_GET['page'] == "BeriIzin"){
    $Controller = new Logbook();
    $jabatan = $_SESSION['jabatanuser'];
    $NIP = $_SESSION['NIP'];
}
else {
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
}
