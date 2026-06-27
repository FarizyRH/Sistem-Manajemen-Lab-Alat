<?php
include_once 'Models/Logbook_model.php';

class Logbook{
    var $db;
    function __construct(){
        $this->db = new Logbook_model();
    }
    function login(){
        require_once 'Views/header.php';
        require_once 'Views/login.php';
        require_once 'Views/footer.php';
    }
    function loginError(){
        require_once 'Views/header.php';
        require_once 'Views/login.php?error';
        require_once 'Views/footer.php';
    }
    function index(){
        require_once 'Views/header.php';
        require_once 'Views/navbar.php';
        require_once 'Views/mahasiswa/index.php';
        require_once 'Views/footer.php';
    }

    function history(){
        $dataAlat=$this->db->getHisdataAlat();
        $data=$this->db->getHisData();
        require_once 'Views/header.php';
        require_once 'Views/navbar.php';
        require_once 'Views/mahasiswa/historyPeminjaman.php';
        require_once 'Views/footer.php';
    }
    function pinjamAlat(){
        require_once 'Views/header.php';
        require_once 'Views/navbar.php';
        require_once 'Views/mahasiswa/tambahPalat.php';
        require_once 'Views/footer.php';
    }

    function pinjamLab(){
        require_once 'Views/header.php';
        require_once 'Views/navbar.php';
        require_once 'Views/mahasiswa/tambahPlab.php';
        require_once 'Views/footer.php';
    }
    function menuAdmin(){
        $jabatan = $_SESSION['jabatanuser'];
        $dataAlat=$this->db->getDataAlatAdmin($jabatan);
        $data=$this->db->getDataLabAdmin($jabatan);
        require_once 'Views/header.php';
        require_once 'Views/navbar.php';
        require_once 'Views/admin/menu.php';
        require_once 'Views/footer.php';
    }
    function tambahData($data){
        $this->db->tambahDataPlab($data);
    }
    function tambahDataPalat($data){
        $this->db->tambahDataPalat($data);
    }
}
?>