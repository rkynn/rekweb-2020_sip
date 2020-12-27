<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <h3><i class=""></i>Form Edit Sepatu</h3>

        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-8">
            <form action="/admin/Admin/update/<?= $sepatu['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $sepatu['slug']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $sepatu['gambar']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="" value="<?= (old('nama')) ? old('nama') : $sepatu['nama'] ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('size')) ? 'is-invalid' : ''; ?>" id="size" name="size" placeholder="" value="<?= (old('size')) ? old('size') : $sepatu['size'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="style" class="col-sm-2 col-form-label">Style</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('style')) ? 'is-invalid' : ''; ?>" id="style" name="style" placeholder="" value="<?= (old('style')) ? old('style') : $sepatu['style'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('style'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" rows="4"><?= $sepatu['deskripsi']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $sepatu['gambar']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar"><?= $sepatu['gambar']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>