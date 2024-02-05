<?php
include_once 'controller/movie-controller.php';
$moviesTayang = movieTayang();
?>

<div class="bagian-kanan">
    <div class="card shadow mb-2" style="max-width: 700px; background-color: #F9966B">
        <h2 class="text-center mt-5 fw-bold now-play-title">Now Playing</h2>
        <div class="card-body d-flex justify-content-around flex-wrap">
            <?php
            foreach ($moviesTayang as $movie) {
                ?>
                <div class="list-now-playing">
                    <a href="?page=info-film&id=<?= $movie[0] ?>">
                        <img src="<?= $movie[2] ?>"
                             class="card-img-top rounded-3 mt-3"
                             alt="<?= $movie[1] ?>"
                             style="width: 290px; height: 400px"/></a>
                    <h4 class="text-center mt-2 mb-4"><?= $movie[1] ?></h4>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
