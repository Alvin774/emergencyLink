<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmergencyLink Indonesia - Layanan Darurat Medis</title>
    <meta name="description" content="EmergencyLink Indonesia menyediakan layanan darurat medis, pelatihan, dan penelitian untuk meningkatkan keamanan dan kesejahteraan masyarakat.">
    <meta name="keywords" content="EmergencyLink, layanan darurat, pelatihan medis, ambulans, Indonesia, kesehatan, darurat medis">
    <meta name="author" content="EmergencyLink Indonesia">

    <!-- Style CSS Link -->
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<!-- Header dan Navigasi -->
<header>
    <div class="navbar">
        <img src="logo.png" alt="EmergencyLink Indonesia Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Section Hero -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Connecting You with Expertise</h1>
        <p>Menghubungkan Anda dengan para ahli untuk keselamatan dan kesejahteraan Anda.</p>
    </div>
</section>

<!-- Section Tentang Kami -->
<section id="about" class="about">
    <h2>EmergencyLink Indonesia</h2>
    <p>EmergencyLink Indonesia adalah platform yang berfokus pada penyediaan layanan darurat medis dan pelatihan. Kami berkomitmen untuk menyediakan layanan terbaik bagi masyarakat umum untuk situasi darurat dan kebutuhan medis.</p>
    <div class="about-img">
    <img src="https://images.unsplash.com/photo-1580795479333-6638312a2f6b" alt="Emergency" class="hero-image">
    </div>
</section>

<!-- Section Layanan -->
<section id="services" class="services">
    <h2>Layanan</h2>
    <div class="service">
        <img src="https://images.unsplash.com/photo-1593565531769-a751d6c5bff9" alt="Training">
        <h3>Pelatihan</h3>
        <p>Kami menawarkan pelatihan darurat medis untuk individu dan organisasi.</p>
        <a href="pelatihan.php" class="btn">Lihat Selengkapnya</a>
    </div>
    <div class="service">
        <img src="research.jpg" alt="Jurnal Penelitian">
        <h3>Jurnal Penelitian</h3>
        <p>Menyediakan informasi terbaru dan hasil penelitian dalam bidang kesehatan dan darurat medis.</p>
        <a href="jurnal.php" class="btn">Lihat Selengkapnya</a>
    </div>
    <div class="service">
        <img src="ambulance.jpg" alt="Ambulance Base">
        <img src="https://images.unsplash.com/photo-1551198297-5737bbcceecb" alt="Medical Team">
        <h3>Ambulance Base</h3>
        <p>Layanan ambulans siap siaga untuk kebutuhan darurat di berbagai lokasi.</p>
        <a href="ambulance.php" class="btn">Lihat Selengkapnya</a>
    </div>
</section>

<!-- Section Kontak -->
<section id="contact" class="contact">
    <h2>Kontak</h2>
    <p>Hubungi kami untuk pertanyaan darurat atau informasi umum.</p>
    <form action="send_mail.php" method="POST">
        <input type="email" name="email" placeholder="Email Anda" required>
        <textarea name="message" placeholder="Masukkan pesan Anda" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2023 EmergencyLink Indonesia. All rights reserved.</p>
    <div class="social-links">
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384005.png" alt="Facebook" class="social-icon"></a>
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" class="social-icon"></a>
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" class="social-icon"></a>
    </div>
</footer>

</body>
<script async src="https://unsplash.com/embeds.js"></script>
</html>