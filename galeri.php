<?php include 'file-loader.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto - Websiteku</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include $files["header"]; ?>
    <header>
        <h1>Websiteku</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pesan.php">Pesan</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="guestbook.php">Buku Tamu</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="galeri">
            <h2>Galeri Foto</h2>
            <div class="gallery">
                <img src="foto1.jpg" alt="Foto 1">
                <img src="foto2.jpg" alt="Foto 2">
                <img src="foto3.jpg" alt="Foto 3">
            </div>
        </section>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Websiteku. All rights reserved.</p>
    </footer>
    <?php include $files["footer"]; ?>

    <script src="<?php echo $files['script']; ?>"></script>

</body>

</html>