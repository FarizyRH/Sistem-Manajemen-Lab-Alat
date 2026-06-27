<?php
session_start();
include('cruduser.php');
$username = $_POST['email'];
$password = $_POST['password'];
if (otentikAdmin($username, $password)) {
    $_SESSION['username'] = $username;
    $dataUser = array(); 
    $dataUser = cariUserDaripg_email($username); 
    $_SESSION['namaAdmin'] = $dataUser['pg_nama'];
    $_SESSION['jabatanuser'] = $dataUser['pg_jabatan'];
    $_SESSION['NIP'] = $dataUser['NIP'];
    

    header("Location: ../../MVC");
} else if(otentikMHS($username, $password)) {
    $_SESSION['username'] = $username;
    $dataUser = array(); 
    $dataUser = cariUserDariMHS_email($username); 
    $_SESSION['namaMHS'] = $dataUser['MHS_NAMA'];
    $_SESSION['kelas'] = $dataUser['Kelas'];
    $_SESSION['NIM'] = $dataUser['NIM'];
    header("Location: ../../MVC");
}else{
    header("Location: ../index.php?login=error");
}
