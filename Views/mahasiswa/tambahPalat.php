<?php
require_once 'Core/Database.php';
?>
<div class="container mt-5">
        <form id="submitForm" action="index.php?page=insertPalat" method="post">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" value="<?php echo $_SESSION['namaMHS']?>" name="name" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" value="<?php echo $_SESSION['NIM']?>" name="nim" required>
            </div>

            <div class="form-group">
                <label for="class">Kelas:</label>
                <input type="text" class="form-control" value="<?php echo $_SESSION['kelas']?>" name="class" required>
            </div>

            <div class="form-group">
                <label for="alat">Alat:</label>
                <select class="form-control" name="alat" required>
                    <option value=""></option>
                    <?php
                    $con = new Database();
                    $conn = $con->getConnection();
                    $sql = "SELECT a.ALAT_ID, a.ALAT_NAMA, a.Alat_jumlah - COALESCE(SUM(pa.JUMLAH_PINJAM), 0) AS SISA_JUMLAH
                            FROM alat a
                            LEFT JOIN pinjam_alat pa ON a.ALAT_ID = pa.ALAT_ID AND pa.STATUS IN ('pending', 'approved', 'in use')
                            GROUP BY a.ALAT_ID, a.ALAT_NAMA, a.Alat_jumlah
                            HAVING SISA_JUMLAH > 0;";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['ALAT_ID'] . "'>" . $row["ALAT_NAMA"] . " - Jumlah Yang tersedia: " . $row["SISA_JUMLAH"] .  "</option>";
                    }
                    $conn->close();
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Peminjaman:</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan"></textarea>
            </div>

            <input type="hidden" id="submit_date" name="submit_date">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('submitForm').addEventListener('submit', function() {
            var now = new Date();
            var year = now.getFullYear();
            var month = String(now.getMonth() + 1).padStart(2, '0'); 
            var day = String(now.getDate()).padStart(2, '0');
            var formattedDate = year + '-' + month + '-' + day;
            document.getElementById('submit_date').value = formattedDate;
        });
    </script>