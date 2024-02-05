<?php
include_once 'controller/user-controller.php';

if (isset($_POST['register'])) {
    $data = userCreate($_POST);
}
?>
<div class="bagian-kanan">
    <div class="card shadow border-0 rounded-3 mb-5" style="width: 650px; padding: 30px; background-color: #F9966B">
        <div class="card-body p-4">
            <h2 class="card-title fw-bold pb-3 text-center">Daftar</h2>
            <div class="form-regist">
                <form action="?page=register&action=register#register" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username"
                               aria-describedby="emailHelp" required/>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required/>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" required/>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required/>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">No Telp</label>
                        <input type="number" class="form-control" name="nohp" id="telp" required/>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required/>
                    </div>
                    <button type="submit" name="register" class="btn" style="color: #FAF5EF; border-color: #FAF5EF">
                        Daftar
                    </button>
                    <button type="reset" class="btn" style="color: #FAF5EF; border-color: #FAF5EF">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>