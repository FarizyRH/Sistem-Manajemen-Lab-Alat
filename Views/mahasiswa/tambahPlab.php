<?php
require_once 'Core/Database.php';
?>
<div class="container mt-5">
        <form id="submitForm" action="index.php?page=insertPlab" method="post">
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
                <label for="lab">Lab:</label>
                <select class="form-control" name="lab" required>
                    <option value=""></option>
                    <?php
                    $con = new Database();
                    $conn = $con->getConnection();
                    $sql = "SELECT l.*
                            FROM lab l
                            LEFT JOIN pinjam_lab pl ON l.LAB_ID = pl.LAB_ID 
                            AND pl.status IN ('pending', 'approved', 'in use')
                            WHERE pl.LAB_ID IS NULL;";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['LAB_ID'] . "'>" . $row['lab_nama'] . "</option>";
                    }
                    $conn->close();
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Jam:</label>
                <input type="time" class="form-control" id="time" name="time" required>
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