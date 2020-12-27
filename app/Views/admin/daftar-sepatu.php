<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <h3><i class="fas fa-shoe-prints mr-2 p-2"></i>DAFTAR SEPATU</h3>
        </div>

        <div class="col-4">
            <form action="/admin/Admin/daftar_sepatu" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="masukan keyword.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark btn-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

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
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Gambar</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Size</th>
                        <th scope="col" class="text-center">Style</th>
                        <th scope="col" class="text-center">Deskripsi</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (3 * ($currentPage - 1)); ?>
                    <?php foreach ($sepatu as $s) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $s['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['size']; ?></td>
                            <td><?= $s['style']; ?></td>
                            <td><?= $s['deskripsi']; ?></td>
                            <td>
                                <div class="container">
                                    <!-- hapus data -->
                                    <form action="/admin/daftar-sepatu/<?= $s['id']; ?>" method="post">
                                        <a href="/admin/detail-sepatu/<?= $s['slug']; ?>" class="btn btn-primary mb-2 "><i class="far fa-eye" data-toggle="tooltip" data-placement="left" title="Detail"></i></a>
                                        <a href="/admin/edit-sepatu/<?= $s['slug']; ?>" class="btn btn-warning mb-2 "><i class="fas fa-edit" data-toggle="tooltip" data-placement="left" title="Edit"></i></a>
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('Apakah anda yakin?')"><i class="far fa-trash-alt mr-1" data-toggle="tooltip" data-placement="left" title="Delete"></i></button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('sepatu', 'sepatu_pagination'); ?>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>