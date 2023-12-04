<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'index':
            include 'pages/index.php';
            break;
        case 'about':
            include 'pages/about/about.php';
            break;
        case 'pesan':
            include 'pages/pesan/pesan.php';
            break;
        case 'pengaduan':
            include 'pages/pengaduan/pengaduan.php';

            // Auth

            // case 'login':
            //     include 'auth/login.php';
            //     break;
            // case 'register':
            //     include 'auth/register.php';
            //     break;
    }
} else {
    include "pages/index.php";
}
