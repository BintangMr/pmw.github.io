<?php
include_once 'controller/movie-controller.php';
$moviesTayang = movieComingSoon();
?>

<div class="content mt-5 d-flex justify-content-around flex-wrap">
    <!-- bagian kanan -->
    <div class="bagian-kanan">
        <div class="info-film">
            <?php
            foreach ($moviesTayang as $movie) {
                ?>
                <div class="card shadow mb-3" style="max-width: 700px; background-color: #F9966B">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $movie[2] ?>" class="img-fluid rounded-start" alt="<?= $movie[1] ?>"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold mt-3"><?= $movie[1] ?></h3>
                                <div class="card-text">
                                    <ul class="list-unstyled">
                                        <li class="mb-1">Genre : <?= $movie[5] ?></li>
                                        <li class="mb-1">Tanggal Rilis : <?= $movie[6] ?></li>
                                        <li class="mb-1">Sutradara : <?= $movie[7] ?></li>
                                        <li class="mb-1">Durasi : <?= $movie[8] ?> Menit</li>
                                        <li>
                                            Sinopsis : <?= $movie[9] ?>.
                                            <a href="?page=info-film&id=<?= $movie[0] ?>"
                                               class="stretched-link text-decoration-none">Selengkapnya...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>