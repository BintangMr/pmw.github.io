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
        <a href="../index.php" class="text-decoration-none"><h1 class="fw-bold">Bioskop 9999</h1></a>
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
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="now-playing.php">Now Playing</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">Coming Soon</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">Theater</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Top Movie -->
    <section class="top-movie">
      <div class="d-flex justify-content-around flex-wrap mt-4">
        <div class="poster mt-3">
          <a href=""><img src="../img/balck.jpg" alt="" /></a>
        </div>
        <div class="poster mt-3">
          <a href=""><img src="../img/bebas.jpg" alt="" /></a>
        </div>
        <div class="poster mt-3">
          <a href=""><img src="../img/dewa.jpg" alt="" /></a>
        </div>
        <div class="poster mt-3">
          <a href=""><img src="../img/cektoko.jpg" alt="" /></a>
        </div>
        <div class="poster mt-3">
          <a href=""><img src="../img/freedom.jpg" alt="" /></a>
        </div>
         <div class="poster mt-3">
          <a href=""><img src="../img/dilan.jpg" alt="" /></a>
        </div>
         <div class="poster mt-3">
          <a href=""><img src="../img/hitsrun.jpg" alt="" /></a>
        </div>
      </div>
    </section>
    <!-- Akhir Top Movie -->

    <!-- Konten -->
    <main>
      <div class="content mt-5 d-flex justify-content-around flex-wrap">
        <!-- bagian kanan -->
        <div class="bagian-kanan">
          <div class="card shadow border-0 rounded-3 mb-5" style="width: 700px; padding: 30px; background-color: #F9966B">
            <div class="card-body p-4">
              <h2 class="card-title fw-bold pb-3 text-center">Pemesanan Tiket</h2>
              <div class="form-regist">
                <form>
                  <div class="mb-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Anda" required />
                  </div>
                  <div class="mb-3">
                    <h5 style="font-family: var(--font3); font-size: 32px">Studio</h5>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" />
                      <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="judul" class="form-label">Judul Film</label>
                    <select class="form-select" aria-label="Default select example" id="judul-film">
                      <option selected  style=" font-family: var(--font3);">pilih Judul Film</option>
                      <option value="1" style=" font-family: var(--font3);">Black Widow</option>
                      <option value="2" style=" font-family: var(--font3);">Dilan 1990</option>
                      <option value="3" style=" font-family: var(--font3);">Cek Toko Sebelah</option>
                      <option value="4" style=" font-family: var(--font3);">Freedom</option>
                      <option value="5" style=" font-family: var(--font3);">Satria Dewa Gatot Kaca</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="jam" class="form-label">Jam Tayang</label>
                    <select class="form-select" aria-label="Default select example" id="jam">
                      <option selected  style=" font-family: var(--font3);">Pilih Jam</option>
                      <option value="1" style=" font-family: var(--font3);">10:00</option>
                      <option value="2" style=" font-family: var(--font3);">13:00</option>
                      <option value="3" style=" font-family: var(--font3);">16:00</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" placeholder="Cantumkan Tanggal" required/>
                  </div>
                  <div class="mb-3">
                    <label for="kursi" class="form-label">No Kursi</label>
                    <input type="text" class="form-control" id="kursi" placeholder="Masukan Nomor Kursi Anda" required/>
                  </div>
                  <div class="mb-3">
                    <label for="tiket" class="form-label">Jumlah Tiket</label>
                    <input type="number" class="form-control" id="tiket" placeholder="Masukan Jumlah Tiket Anda" required />
                  </div>
                  <div class="mb-3">
                    <label for="harga" class="form-label">Total Harga</label>
                    <input type="number" class="form-control" id="harga" disabled />
                  </div>
                  <button type="submit" class="btn" href="sub-page/daftar-pesanan-tiket.php" style="color: #06beb6; border-color: #48b1bf">Beli Tiket</button>
                  <button type="submit" class="btn" href="sub-page/daftar-pesanan-tiket.php" style="color: #28B463; border-color: #28B463">Pesan Tiket</button>
                  <button type="submit" class="btn"style="color: #42275a; border-color: #734b6d">Keluar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <!-- Footer-->
        <footer class="bg-light py-5" style="width: 1500px; height: 10px">
            <div class="container"><div class="small text-center text-muted" style="font-family: var(--font3)">
            Copyright © 2022 - Bioskop 9999 Made By Bintang Muhammad Rizqi 2112</div></div>
        </footer>
        <!--end footer-->
    </main>
    <script src="sup/js/bootstrap.bundle.js"></script>
  </body>
</html>
