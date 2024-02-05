<?php
include_once 'controller/movie-controller.php';
$movies = movieAll();
?>

<section class="top-movie">
    <div class="d-flex justify-content-around flex-wrap mt-4">
        <?php
        foreach ($movies as $movie) {
            ?>
            <div class="poster mt-3">
                <a href="?page=info-film&id=<?= $movie[0] ?>"><img src="<?= $movie[2] ?>" alt=""/></a>
            </div>
            <?php
        }
        ?>
    </div>
</section>