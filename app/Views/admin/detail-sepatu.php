<?php

use CodeIgniter\Filters\CSRF;
?>

<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>
<style>
    .ul-detail {
        list-style-type: none;
    }

    .container-detail {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .bg-container-detail {
        background-color: black;
        background-image: linear-gradient(45deg, black, white);
        border-radius: 10px;
        width: 95%;
    }

    .h1-detail {
        color: gold;
    }

    .hr-detail {
        width: 550px;
        color: blanchedalmond;
    }

    .h5-detail {
        color: cornsilk;
    }

    .h6-detail,
    .p-detail {
        color: goldenrod;
    }

    .aKembali {
        float: right;
        color: black;
    }

    .aKembali:hover {
        color: white;
    }

    .conInfo {
        background-color: rgba(0, 0, 0, 0.2);
    }
</style>

<div class="container container-detail mt-4">
    <div class="row">
        <div class="col">
            <h3><i class="fas fa-shoe-prints mr-2 p-2"></i>DETAIL SEPATU</h3>
        </div>

    </div>
    <hr>
</div>

<div class="container bg-container-detail bg-data py-4 my-4 mx-auto">
    <div class="header">
        <div class="row">
            <div class="col-md-9">
                <h1 class="h1-detail"><?= $sepatu['nama']; ?></h1>
                <hr class="hr-detail">
            </div>
            <div class="col-md-3 text-right ">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                <p class="text-right para">Based on 250 Review</p>
            </div>

        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row">
            <div class="col-md-3">
                <img src="/img/<?= $sepatu['gambar']; ?>" width="95%">
            </div>
            <div class="col-md-9 p-0 klo">
                <ul class="ul-detail">
                    <div class="container conInfo">
                        <li>

                            <div class="colId">
                                <h5 class="h5-detail"><u>ID</u></h5>
                                <h6 class="display-6 h6-detail"><?= $sepatu['id']; ?></h6>
                            </div>
                            <div class="colSize">
                                <h5 class="h5-detail"><u>SIZE AVAIBILITY</u></h5>
                                <h6 class="display-6 h6-detail"><?= $sepatu['size']; ?></h6>
                            </div>
                            <div class="colStyle">
                                <h5 class="h5-detail"><u>STYLE</u></h5>
                                <h6 class="h6-detail"><?= $sepatu['style']; ?></h6>
                            </div>
                            <div class="colDesc">
                                <h5 class="h5-detail"><u>DESCRIPTION</u></h5>
                                <h6 class="h6-detail"><?= $sepatu['deskripsi']; ?></h6>
                            </div>
                        </li>

                        <li>
                            <div class="colDate">
                                <h5 class="h5-detail"><u>CREATED AT</u></h5>
                                <p class="p-detail"><?= $sepatu['created_at']; ?></p>
                                <h5 class="h5-detail"><u>UPDATED AT</u></h5>
                                <p class="p-detail"><?= $sepatu['updated_at']; ?></p>
                            </div>
                        </li>
                        <li>
                            <a href="/admin/daftar-sepatu" class="aKembali">Kembali ke daftar sepatu</a>
                        </li>
                    </div>
                </ul>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>