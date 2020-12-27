<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">

    <h3><i class="fas fa-shoe-prints mr-2 p-2"></i>DAFTAR SEPATU</h3>
    <hr>

</div>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/admin/create-sepatu" class="btn btn-success mb-3">Tambah Sepatu</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table  table-striped table-hover border-dark table-dark">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Size</th>
                        <th scope="col">Style</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sepatu as $s) : ?>
                        <tr class="">
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $s['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['size']; ?></td>
                            <td><?= $s['style']; ?></td>
                            <td><?= $s['deskripsi']; ?></td>
                            <td>
                                <div class="text-center">
                                    <a href="/admin/detail-sepatu/<?= $s['slug']; ?>" class="btn btn-primary mb-2">Detail</a>
                                    <a href="/admin/edit-sepatu/<?= $s['slug']; ?>" class="btn btn-warning mb-2">Edit</a>
                                    <!-- hapus data -->
                                    <form action="/admin/daftar-sepatu/<?= $s['id']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?= $this->endSection(); ?>