<?php
include_once 'controller/movie-controller.php';
$movie = movieDetail($_GET['id']);
$harga = $movie['harga_tiket'];
?>

<link rel="stylesheet" href="sup/css/seatchart.css">
<style>
    .reguler {
        color: white;
        background-color: #43aa8b;
    }
</style>
<link rel="stylesheet" href="sup/css/sweetalert.css">

<div class="bagian-kanan">
    <div class="card shadow border-0 rounded-3 mb-5" style="padding: 30px; background-color: #F9966B">
        <div class="card-body p-4">
            <h2 class="card-title fw-bold pb-3 text-center">Pemesanan Tiket</h2>
            <div class="form-regist">
                <form>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?= $_SESSION['user']['name'] ?>"
                               placeholder="Masukan Nama Anda" required readonly/>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Film</label>
                        <input type="text" class="form-control" value="<?= $movie['judul'] ?>"
                               placeholder="Masukan Nama Anda" required readonly/>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" class="form-control" value="Rp. <?= number_format($movie['harga_tiket']) ?>"
                               required readonly/>
                    </div>
                    <div class="mb-3">
                        <h5 style="font-family: var(--font3); font-size: 32px">Studio</h5>
                        <?php
                        $studioMovie = str_replace("[", "", $movie['studio']);
                        $studioMovie = str_replace("]", "", $studioMovie);
                        $studioMovie = str_replace('"', "", $studioMovie);
                        if (in_array("Studio1", explode(',', $studioMovie))) {
                            ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="studio" id="inlineRadio1"
                                       value="1" required/>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <?php
                        }
                        if (in_array("Studio2", explode(',', $studioMovie))) {
                            ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="studio" id="inlineRadio2"
                                       value="2"/>
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <?php
                        }
                        if (in_array("Studio3", explode(',', $studioMovie))) {
                            ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="studio" id="inlineRadio3"
                                       value="3"/>
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                    <div class="mb-3">
                        <label for="jam" class="form-label">Jam Tayang</label>
                        <select class="form-select" aria-label="Default select example" id="jam" name="jam">
                            <option selected style=" font-family: var(--font3);">Pilih Jam</option>
                            <option value="10:00" style=" font-family: var(--font3);">10:00</option>
                            <option value="13:00" style=" font-family: var(--font3);">13:00</option>
                            <option value="16:00" style=" font-family: var(--font3);">16:00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Cantumkan Tanggal"
                               name="tanggal"
                               required/>
                    </div>
                    <div id="container"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="sup/js/jquery.js"></script>
<script src="sup/js/sweetalert.min.js"></script>
<script>
    window.simpanPemesanan = function (e) {
        // / Fire off the request to /form.php
        console.log(e);
        Swal.fire({
            title: 'Masukkan nominal bayar',
            input: 'number',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            showLoaderOnConfirm: true,
            preConfirm: (value) => {
                let harga = e.cart.length * <?= $harga ?>;
                if (value < harga) {
                    Swal.showValidationMessage(
                        `Nominal yang di masukkan harus lebih atau sama dengan Rp. ${harga}`
                    )
                } else {
                    return value
                }

            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.showLoading()
                let kursi = []
                e.cart.map(function (item, index) {
                    kursi.push(item.label)
                });
                console.log($('#jam').val())
                request = $.ajax({
                    url: "controller/pemesanan-controller.php",
                    type: "post",
                    data: {
                        'id_pemesan': '<?= $_SESSION['user']['user_id']?>',
                        'total': e.cart.length * <?= $harga ?>,
                        'bayar': result.value,
                        'kursi': kursi,
                        'id_film': <?= $_GET['id'] ?>,
                        'studio': $('input[name="studio"]:checked').val(),
                        'tanggal': $('input[name="tanggal"]').val(),
                        'jam_tayang': $('#jam').val()
                    }
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR) {
                    // Log a message to the console
                    Swal.fire({
                        type: "success",
                        title: `Sukses pemesanan berhasil di simpan`,
                    })
                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown) {
                    // Log the error to the console
                    Swal.fire({
                        type: "error",
                        title: textStatus,
                        text: errorThrown,
                    })
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function () {
                    // Reenable the inputs
                    // $inputs.prop("disabled", false);
                    Swal.hideLoading()
                });
            }
        })


    }
</script>
<script type="text/javascript" src="sup/js/seatchart.js"></script>
<script>
    var element = document.getElementById('container');
    var options = {
        map: {
            rows: 7,
            columns: 7,
            seatTypes: {
                default: {
                    label: 'Reguler',
                    cssClass: 'reguler',
                    price: <?= $harga ?>,
                },
            },
        },
        cart: {
            currency: "Rp. "
        }
    };
    var sc = new Seatchart(element, options);
</script>
