<?php
include 'Core/Database.php';

class Logbook_model extends Database
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }
    function getHisData()
    {
        $query = "SELECT l.lab_nama, l.Ruang_No, pl.tgl_permohonan, pl.tgl_penggunaan_lab, 
       plp.pg_nama AS Verifikasi_PLP,
       kalab.pg_nama AS Verifikasi_KALAB,
       kajur.pg_nama AS Verifikasi_KAJUR, 
       pudir.pg_nama AS Verifikasi_PUDIR, 
       pl.Keterangan, pl.status, pl.level 
       FROM pinjam_lab pl 
    INNER JOIN mahasiswa m ON pl.NIM = m.NIM
    INNER JOIN lab l ON pl.LAB_ID = l.LAB_ID
    LEFT JOIN pegawai plp ON plp.NIP = pl.Verifikasi_PLP
    LEFT JOIN pegawai kalab ON kalab.NIP = pl.Verifikasi_KALAB
    LEFT JOIN pegawai kajur ON kajur.NIP = pl.Verifikasi_KAJUR
    LEFT JOIN pegawai pudir ON pudir.NIP = pl.Verifikasi_PUDIR;
    ";
        $data = $this->db->execute($query);
        return $data;
    }
    function getHisdataAlat()
    {
        $query = "SELECT 
        a.ALAT_NAMA, 
        pl.Jumlah_pinjam, 
        pl.tgl_permohonan,
        plp.pg_nama as Verifikasi_PLP, 
        kalab.pg_nama as Verifikasi_KALAB, 
        pl.Keterangan, 
        pl.status  
        from 
            pinjam_alat pl
        inner join 
            mahasiswa m on pl.NIM = m.NIM
        inner join 
            alat a on pl.ALAT_ID = a.ALAT_ID
        LEFT JOIN 
            pegawai plp ON plp.NIP = pl.Verifikasi_PLP
        LEFT JOIN 
            pegawai kalab ON kalab.NIP = pl.Verifikasi_KALAB;";
        $dataAlat = $this->db->execute($query);
        return $dataAlat;
    }

    function tambahDataPlab($data)
    {
        $date = $data['tgl_penggunaan_lab'];
        $time = $data['level'];
        $data['level'] = $this->db->PenentuLevel($date, $time);
        $col = ['NIM', 'LAB_id', 'tgl_permohonan', 'tgl_penggunaan_lab', 'Keterangan', 'level'];
        $status = $this->db->insert('pinjam_lab', $col, $data);
        if ($status) {
            echo "<script>
            alert('Data Berhasil ditambah!');
            window.location.href='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambah!');
            </script>";
        }
    }
    function tambahDataPalat($data)
    {
        $col = ['NIM', 'ALAT_ID', 'tgl_permohonan', 'jumlah_pinjam', 'Keterangan'];
        $status = $this->db->insert('pinjam_alat', $col, $data);
        if ($status) {
            echo "<script>
            alert('Data Berhasil ditambah!');
            window.location.href='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambah!');
            </script>";
        }
    }
    function getDataAlatAdmin($jabatan)
    {
        $query = "SELECT 
        pa.pinjam_alat_id,
        pa.NIM,
        m.MHS_nama AS mahasiswa_nama,
        pa.ALAT_ID,
        a.alat_nama,
        pa.status,
        pa.tgl_permohonan,
        pa.tgl_pengambilan,
        pa.tgl_pengembalian,
        pa.Keterangan,
        p1.pg_nama AS penyerah_alat_nama,
        p2.pg_nama AS penerima_alat_nama,
        p3.pg_nama AS verifikasi_plp_nama,
        p4.pg_nama AS verifikasi_kalab_nama,
        pa.Jumlah_pinjam
    FROM 
        Pinjam_alat pa
    LEFT JOIN 
        Mahasiswa m ON pa.NIM = m.NIM
    LEFT JOIN 
        Alat a ON pa.ALAT_ID = a.ALAT_ID
    LEFT JOIN 
        Pegawai p1 ON pa.penyerah_alat = p1.NIP
    LEFT JOIN 
        Pegawai p2 ON pa.penerima_alat = p2.NIP
    LEFT JOIN 
        Pegawai p3 ON pa.Verifikasi_PLP = p3.NIP
    LEFT JOIN 
        Pegawai p4 ON pa.Verifikasi_KALAB = p4.NIP";

        if ($jabatan === 'PLP' || $jabatan === 'KALAB') {
            $dataAlat =  $this->db->execute($query);
            return $dataAlat;
        } else {
            return null; 
        }
    }
    function getDataLabAdmin($jabatan)
    {
        $query = "SELECT 
        pl.pinjam_lab_id,
        pl.NIM,
        m.MHS_nama AS mahasiswa_nama,
        pl.LAB_ID,
        l.lab_nama,
        pl.status,
        pl.tgl_permohonan,
        pl.tgl_penggunaan_lab,
        pl.tgl_pengambilan_kunci,
        pl.tgl_pengembalian_kunci,
        pl.Keterangan,
        p1.pg_nama AS penyerah_kunci_nama,
        p2.pg_nama AS penerima_kunci_nama,
        p3.pg_nama AS verifikasi_plp_nama,
        p4.pg_nama AS verifikasi_kalab_nama,
        p5.pg_nama AS verifikasi_pudir_nama,
        p6.pg_nama AS verifikasi_kajur_nama,
        pl.level
    FROM 
        Pinjam_lab pl
    LEFT JOIN 
        Mahasiswa m ON pl.NIM = m.NIM
    LEFT JOIN 
        Lab l ON pl.LAB_ID = l.LAB_ID
    LEFT JOIN 
        Pegawai p1 ON pl.penyerah_kunci = p1.NIP
    LEFT JOIN 
        Pegawai p2 ON pl.penerima_kunci = p2.NIP
    LEFT JOIN 
        Pegawai p3 ON pl.Verifikasi_PLP = p3.NIP
    LEFT JOIN 
        Pegawai p4 ON pl.Verifikasi_KALAB = p4.NIP
    LEFT JOIN 
        Pegawai p5 ON pl.Verifikasi_PUDIR = p5.NIP
    LEFT JOIN 
        Pegawai p6 ON pl.Verifikasi_KAJUR = p6.NIP";

        if ($jabatan === 'PLP' || $jabatan === 'KALAB' || $jabatan === 'Security') {
            $data =  $this->db->execute($query);
            return $data;
        } elseif ($jabatan === 'KAJUR') {
            $data =  $this->db->execute($query . " WHERE pl.level IN (2, 3) AND pl.Verifikasi_KALAB IS NOT NULL AND pl.Verifikasi_KAJUR IS NULL");
            return $data;
        } elseif ($jabatan === 'PUDIR') {
            $data =  $this->db->execute($query . " WHERE pl.level = 3 AND pl.Verifikasi_KAJUR IS NOT NULL AND pl.Verifikasi_PUDIR IS NULL ");
            return $data;
        } else {
            return null;
        }
    }
    // function beriIzin($NIP, $jabatan){
    //     $query = "UPDATE pinjam_lab"
    // }
}
