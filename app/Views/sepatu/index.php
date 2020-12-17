<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="product-card">
                <div class="product-inner">
                    <?php foreach ($sepatu as $s) : ?>
                        <img src="/img/<?= $s['gambar']; ?>" width="300" alt="">
                        <p><?= $s['nama']; ?> </p>
                        <p>Size : <?= $s['size']; ?> </p>
                        <button onclick="window.location.href='/'">Detail</button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>