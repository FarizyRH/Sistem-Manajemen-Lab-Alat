<div class="container">
    <h1 class="mt-5">Login</h1>
    <?php
        if(array_key_exists('login', $_GET)){
            echo "<p class='alert alert-danger'>Salah username atau password</p>";
        }
    ?>
    <form method="post" action="../../../TA_KELOMPOK1/MVC/Controllers/proseslogin.php" id="login-form">
        <div class="form-group">
            <label for="email">Masukkan email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Masukkan password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">OK</button>
    </form>
</div>
