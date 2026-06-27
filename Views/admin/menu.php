<?php
if(in_array($_SESSION['jabatanuser'], ["PLP","KALAB"])):
?>
<h1>Tabel Pinjam Alat</h1>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>ID Alat</th>
                <th>Nama Alat</th>
                <th>Status</th>
                <th>Tanggal Permohonan</th>
                <th>Tanggal Pengambilan</th>
                <th>Tanggal Pengembalian</th>
                <th>Keterangan</th>
                <th>Penyerah Alat</th>
                <th>Penerima Alat</th>
                <th>Verifikasi PLP</th>
                <th>Verifikasi KALAB</th>
                <th>Jumlah Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($dataAlat as $row){
                    echo "<tr>
                        <td>$i</td>
                        <td>".$row['pinjam_alat_id']."</td>
                        <td>".$row['NIM']."</td>
                        <td>".$row['mahasiswa_nama']."</td>
                        <td>".$row['ALAT_ID']."</td>
                        <td>".$row['alat_nama']."</td>
                        <td>".$row['status']."</td>
                        <td>".$row['tgl_permohonan']."</td>
                        <td>".$row['tgl_pengambilan']."</td>
                        <td>".$row['tgl_pengembalian']."</td>
                        <td>".$row['Keterangan']."</td>
                        <td>".$row['penyerah_alat_nama']."</td>
                        <td>".$row['penerima_alat_nama']."</td>
                        <td>".$row['verifikasi_plp_nama']."</td>
                        <td>".$row['verifikasi_kalab_nama']."</td>
                        <td>".$row['Jumlah_pinjam']."</td>
                        <td><button class='btn btn-success'>Beri Izin</button></td>
                    </tr>";
                    $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
    endif;
    ?>
<br>
<?php
if(in_array($_SESSION['jabatanuser'], ["PLP","KALAB","KAJUR","PUDIR"])):
?>
    <h1>Tabel Pinjam Lab</h1>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>ID Lab</th>
                <th>Nama Lab</th>
                <th>Status</th>
                <th>Tanggal Permohonan</th>
                <th>Tanggal Penggunaan</th>
                <th>Tanggal Pengambilan Kunci</th>
                <th>Tanggal Pengembalian Kunci</th>
                <th>Keterangan</th>
                <th>Penyerah Kunci</th>
                <th>Penerima Kunci</th>
                <th>Verifikasi PLP</th>
                <th>Verifikasi KALAB</th>
                <th>Verifikasi PUDIR</th>
                <th>Verifikasi KAJUR</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($data as $row){
                    echo "<tr>
                        <td>$i</td>
                        <td>".$row['pinjam_lab_id']."</td>
                        <td>".$row['NIM']."</td>
                        <td>".$row['mahasiswa_nama']."</td>
                        <td>".$row['LAB_ID']."</td>
                        <td>".$row['lab_nama']."</td>
                        <td>".$row['status']."</td>
                        <td>".$row['tgl_permohonan']."</td>
                        <td>".$row['tgl_penggunaan_lab']."</td>
                        <td>".$row['tgl_pengambilan_kunci']."</td>
                        <td>".$row['tgl_pengembalian_kunci']."</td>
                        <td>".$row['Keterangan']."</td>
                        <td>".$row['penyerah_kunci_nama']."</td>
                        <td>".$row['penerima_kunci_nama']."</td>
                        <td>".$row['verifikasi_plp_nama']."</td>
                        <td>".$row['verifikasi_kalab_nama']."</td>
                        <td>".$row['verifikasi_pudir_nama']."</td>
                        <td>".$row['verifikasi_kajur_nama']."</td>
                        <td>".$row['level']."</td>
                        <td>
                            <a href='index.php?page=BeriIzin&id=" . $row['pinjam_lab_id'] . "' class='btn btn-success'>Beri Izin</a> 
                            <a href='index.php?page=TolakIzin&id=" . $row['pinjam_lab_id'] . "' class='btn btn-danger'>Tolak</a>
                        </td>
                    </tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
    <?php
    endif;
    ?>
