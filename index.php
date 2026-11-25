<?php
// Front controller: semua URL masuk lewat file ini.

// 1. Ambil path dari URL (tanpa query string)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');

// 2. Jika proyek ada di subfolder (mis. localhost/router-php), buang prefix-nya
$basis = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
if ($basis !== '' && str_starts_with($path, $basis)) {
    $path = trim(substr($path, strlen($basis)), '/');
}

// URL dasar, dipakai untuk membuat link di menu
$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

// 3. Route statis: path => file
$routes = [
    ''          => 'halaman/beranda.php',
    'profil'    => 'halaman/profil.php',
    'mahasiswa' => 'halaman/mahasiswa.php',
];

// 4. Route dengan parameter: pola regex => file
$dynamicRoutes = [
    '#^mahasiswa/(\d+)$#' => 'halaman/detail-mahasiswa.php',
];

$judul = 'Router PHP Native';
$file  = null;
$params = [];

if (array_key_exists($path, $routes)) {
    $file = $routes[$path];
} else {
    foreach ($dynamicRoutes as $pola => $target) {
        if (preg_match($pola, $path, $m)) {
            $file = $target;
            $params = array_slice($m, 1);
            break;
        }
    }
}

if ($file === null) {
    http_response_code(404);
    $file = 'halaman/404.php';
}

require 'halaman/layout-atas.php';
require $file;
require 'halaman/layout-bawah.php';
