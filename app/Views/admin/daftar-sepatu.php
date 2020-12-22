<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">

    <h3><i class="fas fa-shoe-prints mr-2 p-2"></i>DAFTAR SEPATU</h3>
    <hr>

</div>



<div class="container">
    <button class="btn btn-success">Tambah Sepatu</button>
    <div class="row">
        <div class="col-sm">
            <div class="product-card">
                <div class="product-inner">
                    <?php foreach ($sepatu as $s) : ?>
                        <img src="/img/<?= $s['gambar']; ?>" width="300" alt="">
                        <p><?= $s['nama']; ?> </p>
                        <p>Size : <?= $s['size']; ?> </p>
                        <button class="btn btn-danger float-left">Detail</button>
                        <button class="btn btn-warning float-left">Detail</button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>