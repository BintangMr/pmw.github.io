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
              <a class="nav-link" href="#">About</a>
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
          <div class="card shadow mb-2" style="width: 1065px; background-color: #F9966B" >
            <!-- <img src="img/poster/bw.jpeg" class="card-img-top" alt="..." /> -->
            <h2 class="text-center mt-4 fw-bold now-play-title">Daftar Pesanan Tiket</h2>
            <div class="card-body">
              <table class="table table-secondary">
                <thead>
                  <tr class="text-center">
                    <th scope="col">Judul Film</th>
                    <th scope="col">Jadwal Tayang</th>
                    <th scope="col">Bangku</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>Dilan 1990</td>
                    <td>15 Januari 2023, 10:00</td>
                    <td>D4</td>
                    <td>Belum Dibayar</td>
                    <td><button type="submit" class="btn" style="color: orange; border-color: #FAF5EF">Cetak</button><button type="submit" class="btn" style="color: orange; border-color: #FAF5EF">Detail</button></td>
                  </tr>
                  <tr>
                    <td>Freedom</td>
                    <td>24 Desember 2022, 13:00</td>
                    <td>F5</td>
                    <td>Lunas</td>
                    <td><button type="submit" class="btn" style="color: orange; border-color: #FAF5EF">Cetak</button><button type="submit" class="btn" style="color: orange; border-color: #FAF5EF">Detail</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- bagian kiri -->
        <div class="bagian-kiri">
        <div class="card shadow border-0 rounded-3" style="width: 500px; padding: 30px; background-color: #F9966B">
          <div class="card-body p-4">
            <h4 class="card-title fw-bold pb-3 text-center mb-4">Login Pesan Tiket</h4>
            <div class="form-login">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="USERNAME" required/>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div>
                <button type="submit" class="btn" style="color: #FAF5EF; border-color: #FAF5EF">Login</button>
                <a href="halaman-regist.php" class="text-decoration-none ms-2" style="color: #FAF5EF">Daftar</a>
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
    <script src="../sup/js/bootstrap.bundle.js"></script>
  </body>
</html>
