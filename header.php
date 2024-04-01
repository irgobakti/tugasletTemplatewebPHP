<?php
$menu_atas = [
    "home" => "Beranda",
    "produk" => "Produk",
    "pesan" => "Pesan",
    "galeri" => "Galeri",
    "guestbook" => "Buku Tamu"
];
?>

<header>
    <!-- Logo atau Judul Website -->
    <h1>Websiteku</h1>

    <!-- Navigasi Menu -->
    <nav>
        <?php
        foreach ($menu_atas as $key => $value) {
            echo "<a href='index.php?hal=$key'>$value</a> | ";
        }
        ?>
    </nav>
</header>