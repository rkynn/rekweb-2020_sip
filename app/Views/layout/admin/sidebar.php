<ul class="nav flex-column ml-3 mb-2 sidebar">
    <li class="nav-item">
        <div class="container">
            <div class="text-center mt-3">
                <img class="rounded-circle mx-auto d-block" src="/img/unknown.png" width="100px">
                <h6 class="mt-3 text-secondary">Admin</h6>
            </div>
        </div>
    <li class="header-menu mt-3 text-secondary">
        <span>General</span>
    </li>
    <li class="header-menu nav-item">
        <a class="nav-link active aHover" href="<?= base_url('/admin'); ?>"><i class="fas fa-tachometer-alt mr-2 "></i>Dashboard</a>
    </li>
    <hr class="bg-white">
    <li class="header-menu nav-item">
        <a class="nav-link aHover" href="<?= base_url('/admin/daftar-sepatu'); ?>"><i class="fas fa-shoe-prints mr-2"></i>Daftar Sepatu</a>
    </li>
    <hr class="bg-white">
    <li class="header-menu nav-item">
        <a class="nav-link disabled" href="<?= base_url('/admin/daftar-user'); ?>"><i class="fas fa-user mr-2"></i>Daftar User</a>
    </li>
    <hr class="bg-white">
    <li class="header-menu nav-item">
        <a class="nav-link disabled" href="<?= base_url('/admin/daftar-order'); ?>"><i class="fas fa-receipt mr-2"></i>Daftar Order</a>
    </li>
    <hr class="bg-white">
</ul>