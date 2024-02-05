<?php
include_once 'controller/movie-controller.php';
$film = movieDetail($_GET['id']);
?>
    <div class="bagian-kanan">
        <div class="card shadow mb-3" style="max-width: 700px; padding: 20px; background-color: #F9966B">
            <div class="card-vid">
                <div class="title-mov">
                </div>
                <video src="<?= $film['movie_video'] ?>" controls><?= $film['judul'] ?></video>
            </div>
            <div class="card-body">
                <h2 class="card-title mt-4 info-film-title fw-bold"><?= $film['judul'] ?></h2>
                <p class="card-text"><small class="text-muted"><?= $film['durasi'] ?> Menit</small></p>
                <p class="card-text">
                    <?= $film['description'] ?>
                </p>
                <p class="card-text">
                <ul class="list-unstyled">
                    <!--                <li class="mb-1">Pemain : Iqbaal Ramadhan sebagai Dilan, Vanesha Prescilla sebagai Milea Adnan Hussain</li>-->
                    <li class="mb-1">Genre : <?= $film['genre'] ?></li>
                    <li class="mb-1">Tanggal Rilis : <?= $film['tanggal_rilis'] ?></li>
                    <li class="mb-1">Sutradara : <?= $film['sutradara'] ?></li>
                </ul>
                </p>
                <?php if (isset($_SESSION['user'])) { ?>
                    <a class="btn" href="?page=form-pemesanan&id=<?= $film['movie_id'] ?>" style="color: #FAF5EF; border-color: #FAF5EF">Pesan Tiket</a>
                <?php } ?>
            </div>
        </div>
    </div>