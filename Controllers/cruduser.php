<?php


function cariUserDaripg_email($username){
    $koneksi = mysqli_connect("localhost", "root", "", "db_ta_fariz");
    $sql = "SELECT * FROM pegawai WHERE pg_email='$username'";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil);
        $data['pg_email']=$baris['pg_email'];
        $data['pg_password']=$baris['pg_password'];
        $data['pg_jabatan']=$baris['pg_jabatan'];
        $data['pg_nama']=$baris['pg_nama'];
        $data['NIP']=$baris['NIP'];

        mysqli_close($koneksi);
        return $data;
    }else{
        mysqli_close($koneksi);
        return null;
    }
}


function otentikAdmin($username, $password){
    $dataUser = array();
    $dataUser = cariUserDaripg_email($username);
    if($dataUser != null){
        if($password==$dataUser['pg_password']){
            return true;
        }else{return false;}
    }else{
        return false;
    }
}
function cariUserDariMHS_email($username){
    $koneksi = mysqli_connect("localhost", "root", "", "db_ta_fariz");
    $sql = "SELECT * FROM mahasiswa WHERE MHS_email='$username'";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil);
        $data['MHS_email']=$baris['MHS_email'];
        $data['MHS_password']=$baris['MHS_password'];
        $data['Kelas']=$baris['Kelas'];
        $data['MHS_NAMA']=$baris['MHS_NAMA'];
        $data['NIM']=$baris['NIM'];

        mysqli_close($koneksi);
        return $data;
    }else{
        mysqli_close($koneksi);
        return null;
    }
}


function otentikMHS($username, $password){
    $dataUser = array();
    $dataUser = cariUserDariMHS_email($username);
    if($dataUser != null){
        if($password==$dataUser['MHS_password']){
            return true;
        }else{return false;}
    }else{
        return false;
    }
}
?>