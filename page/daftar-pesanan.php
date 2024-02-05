<?php
include_once 'controller/riwayat-pemesanan-controller.php';
$listPesanan = pesananList();
?>
<div class="card shadow mb-2" style="width: 1065px; background-color: #F9966B">
    <!-- <img src="img/poster/bw.jpeg" class="card-img-top" alt="..." /> -->
    <h2 class="text-center mt-4 fw-bold now-play-title">Daftar Pesanan Tiket</h2>
    <div class="card-body">
        <table class="table table-secondary" id="table-pesanan">
            <thead>
            <tr class="text-center">
                <th scope="col">Judul Film</th>
                <th scope="col">Jadwal Tayang</th>
                <th scope="col">Bangku</th>
                <th scope="col">Status</th>
                <th scope="col" class="action">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <?php
            foreach ($listPesanan as $pesanan) {
                ?>
                <tr>
                    <td><?= $pesanan[0] ?></td>
                    <td><?= $pesanan[1] ?>, <?= $pesanan[2] ?></td>
                    <td><?= $pesanan[3] ?></td>
                    <td>LUNAS</td>
                    <td class="action">
                        <button type="submit" class="btn " style="color: orange; border-color: #FAF5EF"
                                onclick="cetak()">Cetak
                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
<script src="sup/js/jquery.js"></script>
<script src="sup/js/jsPDF.js"></script>
<script src="sup/js/jsPdfAutotable.js"></script>
<script src="sup/js/table-html-export.js"></script>
<script>
    const doc = new jsPDF()

    function cetak() {
        $("#table-pesanan").tableHTMLExport({
            type: 'pdf',
            filename: 'Pesanan.pdf',
            ignoreColumns: '.action',
            ignoreRows: '#ultimo'
        });
    }
</script>