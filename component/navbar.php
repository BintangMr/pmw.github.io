<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="link" class="navbar-nav ms-2">
            <li class="nav-item me-5">
                <a class="nav-link active" style="border-color: #FAF5EF" aria-current="page"
                   href="index.php">Home</a>
            </li>
            <?php if (isset($_SESSION['user'])) { ?>
                <li class="nav-item me-5">
                    <a class="nav-link" href="?page=now-playing">Now Playing</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="?page=coming-soon">Coming Soon</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="?page=theater">Theater</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=help">Help</a>
                </li>
                <li class="nav-item align-content-end">
                    <a class="nav-link" href="?page=riwayat-pemesanan"> <?= $_SESSION['user']['name'] ?></a>
                </li>
                <li class="nav-item align-content-end">
                    <a class="nav-link" href="?action=logout"> Logout </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>