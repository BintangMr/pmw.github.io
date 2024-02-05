<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../sup/css/bootstrap.css" />

    <!-- My Css -->
    <link rel="stylesheet" href="../style.css" />
    <title>Bioskop 9999</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="judul py-4 ms-3">
        <a class="text-decoration-none"><h1 class="fw-bold">Bioskop 9999</h1></a>
        <h6 class="ms-2 cn">Tempat Beli Tiket Bioskop Kesayangan Anda</h6>
      </div>
    </header>
    <!-- Akhir header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark text-center">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul id="link" class="navbar-nav ms-2">
            <li class="nav-item me-5">
              <a class="nav-link" style="border-color: #FAF5EF" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="../sub-page/now-playing.php">Now Playing</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link active" href="../sub-page/coming-soon.php">Coming Soon</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">Theater</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="../sub-page/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
        <!-- bagian kanan -->
        <div class="bagian-kanan">
          <div class="info-film">
            <div class="card shadow mb-3" style="max-width: 100%; background-color: #F9966B">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../img/dilan.jpg" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title fw-bold mt-3">Dilan 1990</h3>
                    <div class="card-text">
                      <ul class="list-unstyled">
                        <li class="mb-1">Genre : Romantis, Drama</li>
                        <li class="mb-1">Tanggal Rilis : 25 Januari 2018</li>
                        <li class="mb-1">Sutradara : Fajar Bustomi,Pidi Baiq</li>
                        <li class="mb-1">Durasi : 1 Jam 50 Menit</li>
                        <li>
                          Sinopsis : ini menceritakan pertemuan yang dialami oleh dua remaja SMA di Bandung. Namun, perkenalan mereka pun tidak biasa dikarenakan daya tarik yang dimiliki oleh Dilan tiada duanya.

                          Romansa berawal pada tahun 1990 ketika Milea datang ke sekolah barunya. Ia adalah seorang anak pindahan dari Jakarta ke Bandung. Lalu, perkenalan membuat mereka semakin dekat karena keunikan Dilan yang baik, pintar, bahkan romantis. Cara Dilan menggaet hati Mile tidak sama dengan teman-teman laki-laki lain.
                          <a href="sub-page/info-film.php" class="stretched-link text-decoration-none">Selengkapnya...</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bagian-kanan">
          <div class="info-film">
            <div class="card shadow mb-3" style="max-width: 100%; background-color: #F9966B">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../img/cektoko.jpg" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title fw-bold mt-3">Cek Toko Sebelah </h3>
                    <div class="card-text">
                      <ul class="list-unstyled">
                        <li class="mb-1">Genre : Comedy</li>
                        <li class="mb-1">Tanggal Rilis : xxxxxx</li>
                        <li class="mb-1">Sutradara : xxxxx</li>
                        <li class="mb-1">Durasi : xxxxx</li>
                        <li>
                          Sinopsis : xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.
                          <a href="sub-page/info-film.php" class="stretched-link text-decoration-none">Selengkapnya...</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Footer-->
        <footer class="py-5" style="width: 1500px; height: 10px; background-color: #41434E">
            <div class="container"><div class="small text-center text-muted" style="font-family: var(--font3);">
            Copyright © 2022 - Bioskop 9999 Made By Bintang Muhammad Rizqi 2112</div></div>
        </footer>
        <!--end footer-->
    </main>

    <script src="../sup/js/bootstrap.bundle.js"></script>
  </body>
</html>
