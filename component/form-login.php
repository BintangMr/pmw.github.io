<?php
include_once 'controller/auth-controller.php';
include_once 'controller/movie-controller.php';

//Global Variable
$moviesTrailer = movieTrailer();
$message = false;

if (isset($_POST['login'])) {
    $data = login($_POST['username'], $_POST['password']);
    if (!$data['status']) {
        $message = "Username atau password salah";
    } else {
        $_SESSION['status'] = $data['status'];
        $_SESSION['user'] = $data['data'];
        if ($data['data']['level'] == "admin") {
            header("location: admin.php");
            exit();
        } else {
            header('Location: ' . '#', true, 301);
            exit();
        }
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    if (isset($_SESSION) && isset($_SESSION['user'])) {
        logout();
    }
}
?>

<?php if (!isset($_SESSION['user'])) { ?>
    <div class="bagian-kiri">
        <div class="card shadow border-0 rounded-3"
             style="width: 500px; padding: 30px; background-color: #F9966B">
            <div class="card-body p-4">
                <h4 class="card-title fw-bold pb-3 text-center mb-4">Login Pesan Tiket</h4>
                <?php if ($message) {
                    ?>
                    <div class="alert alert-danger" style="font-size: 20px" role="alert">
                        <?= $message ?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-login">
                    <form action="?action=login#login" method="post" id="login">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                   aria-describedby="emailHelp" placeholder="Username" required/>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required/>
                        </div>
                        <button type="submit" name="login" class="btn"
                                style="color: #FAF5EF; border-color: #FAF5EF">Login
                        </button>
                        <a href="?page=register" class="text-decoration-none ms-2"
                           style="border:1px solid #FAF5EF;">Daftar</a>
                    </form>
                </div>
            </div>
            <div class="card-vid">
                <div class="title-mov">
                    <h3>Trailer Baru Setiap Tahun</h3>
                </div>
                <?php
                foreach ($moviesTrailer as $movie) {
                    ?>
                    <h4><?= $movie[1] ?></h4>
                    <video src="<?= $movie[3] ?>" controls><?= $movie[1] ?></video>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
<?php } ?>