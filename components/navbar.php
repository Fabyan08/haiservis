<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
?>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-lg-auto">
        <li class="nav-item">
            <a class="nav-link <?= $page === 'index' ? 'active' : ''; ?>" href="?page=index">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $page === 'about' ? 'active' : ''; ?>" href="?page=about">Tentang Kami</a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $page === 'pesan' ? 'active' : ''; ?>" href="?page=pesan">Pesan Sekarang!</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page === 'pengaduan' ? 'active' : ''; ?>" href="?page=pengaduan">Pengaduan</a>
        </li>
    </ul>

    <div class="ms-4">
        <a href="#section_3" class="btn custom-btn custom-border-btn smoothscroll">Login</a>
    </div>
</div>