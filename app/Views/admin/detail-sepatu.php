<?php

use CodeIgniter\Filters\CSRF;
?>

<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Sepatu</h2>
            <div class="card mb-3" style="max-width: 440px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $sepatu['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sepatu['nama']; ?></h5>

                            <a href="/admin/daftar-sepatu">Kembali ke daftar sepatu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>