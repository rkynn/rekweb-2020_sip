<nav>
    <div class="logo">
        <h4>.SIP</h4>
    </div>
    <ul class="nav-links mr-3">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/sepatu">Libary</a>
        <li>
            <a href="/about">About us!</a>
        </li>
        </li>
        <li>
            <?php if (logged_in()) : ?>
                <a href="/admin" class="">Admin</a>
            <?php else : ?>
                <a href="/login">login</a>
            <?php endif; ?>
        </li>
        <li>
            <?php if (logged_in()) : ?>
                <a href="/logout" class="text-white"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Logout"></i></a>
            <?php endif; ?>
        </li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>