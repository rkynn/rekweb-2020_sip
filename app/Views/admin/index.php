<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'sepatu');
$data_sepatu = mysqli_query($koneksi, "SELECT * FROM sepatu");
$jumlah_sepatu = mysqli_num_rows($data_sepatu);
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm">
            <h3><i class="fas fa-tachometer-alt mr-2 p-2"></i>DASHBOARD</h3>
            <hr>
        </div>
    </div>
</div>

<div class="container card-dashboard">

    <div class="card float-left mr-5" style="width: 18rem;">
        <div class="card-body card-dashboard-sepatu">
            <div class="card-body-icon"><i class="fas fa-shoe-prints mr-2"></i></div>
            <h5 class="card-title">Jumlah Sepatu</h5>
            <h1 class="display-4">
                <?= $jumlah_sepatu; ?>
            </h1>
            <a href="/admin/daftar-sepatu">
                <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
        </div>
    </div>

    <div class="card float-left mr-5" style="width: 18rem;">
        <div class="card-body card-dashboard-user">
            <div class="card-body-icon"><i class="fas fa-user mr-2"></i></div>
            <h5 class="card-title">Jumlah User</h5>
            <h1 class="display-4">200</h1>
            <a href="">
                <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
        </div>
    </div>

    <div class="card float-left mr-5" style="width: 18rem;">
        <div class="card-body card-dashboard-order">
            <div class="card-body-icon"><i class="fas fa-receipt mr-2"></i></div>
            <h5 class="card-title">Jumlah Order</h5>
            <h1 class="display-4">200</h1>
            <a href="">
                <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>