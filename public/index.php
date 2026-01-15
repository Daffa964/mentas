<?php
include '../app/views/home/index.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mentas.id</title>
    <link rel="stylesheet" href="assets/css/mentas.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="assets/images/Mentas-logo.png" alt="Mentas Logo">
            </div>
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">Blog</a>
                <a href="#">Bulletin Sastra</a>
                <a href="#">Katalog</a>
                <a href="#">Jual Beli</a>
                <a href="#">Halaman Tiket</a>
                <a href="#">About</a>
                <a href="#">Contribute</a>
            </nav>
            <a href="login.php" class="profile-icon" title="Login">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>Ruang Arsip, Wacana, dan Ekosistem Seni-Budaya</h1>
            <p>Mentas.id adalah platform seni dan kebudayaan yang memuat tulisan,bulletin sastra, katalog riset, agenda peristiwa, serta ruang jual beli untuk mendukung ekosistem kreatif.</p>
            <a href="#" class="btn-orange">Lihat</a>
        </div>
    </section>

    <section class="stats">
        <div class="stat-item"><strong>> 100</strong><br />Artikel & Karya sastra</div>
        <div class="stat-item"><strong>85</strong><br />Komunitas & Mitra</div>
        <div class="stat-item"><strong>80</strong><br />Agenda & Peristiwa budaya</div>
    </section>

    <!-- PROGRAM CARD -->
    <section class="program-section">
        <div class="program-card">
            <h3>Blog & Wacana</h3>
            <ul>
                <li>Berita Seni & Budaya</li>
                <li>Esai & Opini</li>
                <li>Tradisi & Ekosistem</li>
            </ul>
            <a href="#" class="btn-outline">Baca Artikel</a>
        </div>

        <div class="program-card">
            <h3>Bulletin Sastra</h3>
            <ul>
                <li>Puisi</li>
                <li>Prosa</li>
                <li>Esai Sastra</li>
            </ul>
            <a href="#" class="btn-outline">Lihat Bulletin</a>
        </div>

        <div class="program-card">
            <h3>Agenda & Event</h3>
            <ul>
                <li>Diskusi & Pameran</li>
                <li>Pertunjukan</li>
                <li>Ticketing Event</li>
            </ul>
            <a href="#" class="btn-outline">Lihat Event</a>
        </div>
    </section>

    <!-- KONSULTASI -->
    <section class="consult-section">
        <div class="consult-container">
            <div class="consult-left">
                <h2>Ingin Terlibat dalam Ekosistem Seni & Budaya?</h2>
                <p>Mentas membuka ruang bagi penulis, peneliti, komunitas, kurator, dan pelaku seni untuk berkontribusi dan berkolaborasi.</p>
                <a href="#" class="btn-green">Mulai berkontribusi</a>
            </div>

            <div class="consult-right">
                <img src="assets/images/mentas-putih.png" alt="Maskot" class="maskot-img">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-grid">
            <div>
                <h4>Tentang</h4>
                <a href="#">Tentang Kami</a><br />
                <a href="#">Visi & Misi</a><br />
                <a href="#">Hubungi</a>
            </div>
            <div>
                <h4>Koleksi</h4>
                <a href="#">Karya Kreator</a><br />
                <a href="#">Galeri Komunitas</a><br />
                <a href="#">Arsip Digital</a>
            </div>
            <div>
                <h4>Info</h4>
                <a href="#">Kebijakan Privasi</a><br />
                <a href="#">Panduan Upload</a>
            </div>
        </div>
    </footer>

    <script>
    window.addEventListener("scroll", function() {
        const header = document.querySelector(".header");
        if (window.scrollY > 20) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
    </script>

</body>
</html>