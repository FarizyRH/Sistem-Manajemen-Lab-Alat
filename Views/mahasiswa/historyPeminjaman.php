<div class="container mt-5">
        <h2>Tabel Peminjaman Lab</h2>
        <table class="table table-striped table-bordered usage-table" id="lab-table">
            <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>Nama Lab</th>
                    <th>Nomor Ruangan</th>
                    <th>Tanggal Permohonan Peminjaman</th>
                    <th>Tanggal Penggunaan Lab</th>
                    <th>Verifikasi PLP</th>
                    <th>Verifikasi KALAB</th>
                    <th>Verifikasi KAJUR</th>
                    <th>Verifikasi PUDIR</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $row) {
                    echo "
                    <tr>
                        <td class='table-cell'>$i</td>
                        <td class='table-cell'>".$row['lab_nama']."</td>
                        <td class='table-cell'>".$row['Ruang_No']."</td>
                        <td class='table-cell'>".$row['tgl_permohonan']."</td>
                        <td class='table-cell'>".$row['tgl_penggunaan_lab']."</td>
                        <td class='table-cell'>".$row['Verifikasi_PLP']."</td>
                        <td class='table-cell'>".$row['Verifikasi_KALAB']."</td>
                        <td class='table-cell'>".$row['Verifikasi_KAJUR']."</td>
                        <td class='table-cell'>".$row['Verifikasi_PUDIR']."</td>
                        <td class='table-cell'>".$row['Keterangan']."</td>
                        <td class='table-cell'>".$row['status']."</td>
                        <td class='table-cell'>".$row['level']."</td>
                    </tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <br>

        <h2>Tabel Peminjaman Alat</h2>
        <table class="table table-striped table-bordered usage-table" id="equipment-table">
            <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>Nama Alat</th>
                    <th>Jumlah Peminjaman</th>
                    <th>Tanggal Permohonan Peminjaman</th>
                    <th>Verifikasi PLP</th>
                    <th>Verifikasi KALAB</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($dataAlat as $row) {
                    echo "
                    <tr>
                        <td class='table-cell'>$i</td>
                        <td class='table-cell'>".$row['ALAT_NAMA']."</td>
                        <td class='table-cell'>".$row['Jumlah_pinjam']."</td>
                        <td class='table-cell'>".$row['tgl_permohonan']."</td>
                        <td class='table-cell'>".$row['Verifikasi_PLP']."</td>
                        <td class='table-cell'>".$row['Verifikasi_KALAB']."</td>
                        <td class='table-cell'>".$row['Keterangan']."</td>
                        <td class='table-cell'>".$row['status']."</td>
                    </tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
