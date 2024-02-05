<?php
include_once 'controller/movie-controller.php';
$moviesTayang = movieAll();
?>
<div class="card-bdy">
    <div class="title-mov">
        <h3>List Atau Daftar Film Semua Film</h3>
    </div>
    <div class="bdy-lis">
        <div class="row mx-1 my-4">
            <?php
            foreach ($moviesTayang as $movie) {
                ?>
                <div class="card col-6 my-3" style="width: 30rem;">
                    <video src="<?= $movie[3] ?>" controls><?= $movie[1] ?></video>
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie[1] ?></h5>
                        <p class="card-text"><?= $movie[9] ?></p>
                        <a href="?page=edit-movie&id=<?= $movie[0] ?>" class="btn btn-warning">Edit</a>
                        <a href="?page=hapus-movie&id=<?= $movie[0] ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>