<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section id="team">
    <h1 class="heading"><i class="fas fa-rocket"></i>
        Anggota
    </h1>
    <?php foreach ($About as $b) : ?>
        <div class="content">
            <div class="box">
                <div class="top-bar"></div>
                <div class="navB">
                    <i class="verify fas fa-check-circle"></i>
                    <input class="heart-btn" id="heart-btn" type="checkbox" />
                    <label class="heart"></label>
                </div>
                <div class="details">
                    <img alt="" src="/img/<?= $b['gambar']; ?>" />
                    <strong><?= $b['nama']; ?></strong>
                    <p>NRP : <?= $b['nrp']; ?></p>
                    <p><?= $b['tugas']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
</section>

<?= $this->endSection(); ?>