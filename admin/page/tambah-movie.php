<?php
include_once 'controller/movie-controller.php';
if (isset($_POST['tambah'])) {
    movieCreate($_POST);
}
?>
<link rel="stylesheet" type="text/css" href="sup/css/select2.css">

<div class="card-title text-center">
    <h3>Tambah Film</h3>
</div>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-4">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="mb-4">
        <label for="rilis" class="form-label">Tanggal Rilis</label>
        <input type="date" class="form-control" id="rilis" name="rilis" required>
    </div>
    <div class="mb-4">
        <label for="durasi" class="form-label">Durasi</label>
        <input type="number" class="form-control" id="durasi" name="durasi" required>
    </div>
    <div class="mb-4">
        <label for="durasi" class="form-label">Sutradara</label>
        <input type="text" class="form-control" name="sutradara" required>
    </div>
    <div class="mb-4">
        <div>
            <label for="genre" class="form-label">Genre</label>
        </div>
        <select class="form-select" style="width: 100%" id="genre" name="genre[]" required multiple="multiple">
            <option value="Action">Action</option>
            <option value="Horor">Horor</option>
            <option value="Thriller">Thriller</option>
            <option value="Animation">Animation</option>
            <option value="Family">Family</option>
        </select>
    </div>
    <div class="mb-4">
        <div>
            <label for="genre" class="form-label">Studio</label>
        </div>
        <select class="form-select" style="width: 100%" id="studio" name="studio[]" required multiple="multiple">
            <option value="Studio 1">Studio 1</option>
            <option value="Studio 2">Studio 2</option>
            <option value="Studio 3">Studio 3</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="produksi" class="form-label">Harga Tiket</label>
        <input type="number" class="form-control" id="produksi" name="harga_tiket" required>
    </div>
    <div class="mb-4">
        <div>
            <label for="status" class="form-label">Status</label>
        </div>
        <select class="form-select" id="status" style="width: 100%" name="status" required>
            <option value="now-play">Now Play</option>
            <option value="on-going">On Going</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="sinopsis" class="form-label">Sinopsis</label>
        <textarea type="text" class="form-control" id="sinopsis" name="sinopsis"
                  required></textarea>
    </div>
    <div class="mb-4">
        <label for="poster" class="form-label">Poster</label>
        <input type="file" class="form-control" id="poster" name="poster" accept="image/png, image/jpeg, image/jpg"
               required>
    </div>
    <div class="mb-4">
        <label for="poster" class="form-label">Trailer</label>
        <input type="file" class="form-control" id="video" name="video" accept="video/mp4,video/mkv" required>
    </div>
    <button type="submit" name="tambah" class="btn btn-outline-success">Tambah</button>
</form>

<script src="sup/js/jquery.js"></script>
<script src="sup/js/select2.js"></script>
<script>
    $(document).ready(function () {
        $('.form-select').select2();
    });
</script>