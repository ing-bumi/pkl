<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri Kabuh</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<?= $this->include('layouts/navbar') ?>

<section class="hero">
    <div class="hero-content">
        <p class="small-title">SMK NEGERI KABUH JOMBANG</p>

        <h1>Membangun Generasi<br>
            <span>Kompeten & Berdaya Saing</span>
        </h1>

        <p class="hero-text">
            Mempersiapkan peserta didik dengan pengetahuan,
            keterampilan, dan karakter untuk menghadapi dunia kerja
            dan perkembangan teknologi.
        </p>

        <a href="/profil" class="btn">Kenali Sekolah Kami</a>
    </div>
</section>

<section class="intro">
    <div class="section-title">
        <p>SELAMAT DATANG</p>
        <h2>Mengenal SMK Negeri Kabuh</h2>
    </div>

    <div class="intro-content">
        <div>
            <p>
                SMK Negeri Kabuh merupakan sekolah menengah kejuruan
                yang berada di Kabupaten Jombang, Jawa Timur.
                Sekolah berfokus pada pengembangan keahlian dan
                keterampilan peserta didik.
            </p>

            <p>
                Melalui pendidikan kejuruan, siswa dibekali kemampuan
                yang dapat mendukung kesiapan mereka untuk melanjutkan
                pendidikan maupun memasuki dunia kerja.
            </p>
        </div>

        <div class="info-box">
            <div>
                <strong>SMK NEGERI KABUH</strong>
                <span>Jombang, Jawa Timur</span>
            </div>

            <div>
                <strong>(0321) 3759214</strong>
                <span>Informasi Sekolah</span>
            </div>
        </div>
    </div>
</section>

<section class="principal">
    <div class="principal-box">
        <div class="principal-content">
            <p class="small-title">SAMBUTAN</p>
            <h2>Kepala Sekolah</h2>

            <p>
                Selamat datang di website SMK Negeri Kabuh Jombang.
                Website ini menjadi sarana informasi dan komunikasi
                antara sekolah dengan masyarakat serta memberikan
                informasi mengenai kegiatan dan perkembangan sekolah.
            </p>

            <h3>Ika Fariana Afan, S.Pd., M.Pd.</h3>
            <span>Kepala Sekolah SMK Negeri Kabuh</span>
        </div>
    </div>
</section>

<section class="program">
    <div class="section-title center">
        <p>KOMPETENSI KEAHLIAN</p>
        <h2>Program Keahlian</h2>
        <span>
            Kenali kompetensi keahlian yang tersedia di SMK Negeri Kabuh.
        </span>
    </div>

    <div class="program-grid">

        <div class="program-card">
            <div class="number">01</div>
            <h3>Teknik Kimia Industri</h3>
            <p>
                Program keahlian yang mempersiapkan siswa
                dalam bidang proses dan teknologi industri kimia.
            </p>
        </div>

        <div class="program-card">
            <div class="number">02</div>
            <h3>Teknik Farmasi Industri</h3>
            <p>
                Membekali siswa dengan pengetahuan dan keterampilan
                yang berkaitan dengan bidang farmasi industri.
            </p>
        </div>

        <div class="program-card">
            <div class="number">03</div>
            <h3>Analisis Pengujian Laboratorium</h3>
            <p>
                Mempelajari proses analisis dan pengujian
                menggunakan metode laboratorium.
            </p>
        </div>

        <div class="program-card">
            <div class="number">04</div>
            <h3>Sistem Informasi, Jaringan, dan Aplikasi</h3>
            <p>
                Membekali siswa dalam bidang sistem informasi,
                jaringan komputer, dan pengembangan aplikasi.
            </p>
        </div>

    </div>
</section>

<section class="contact-banner">
    <div>
        <p class="small-title">INFORMASI SEKOLAH</p>
        <h2>SMK Negeri Kabuh</h2>
        <p>Jl. Kabuh-Tapen Km. 6, Kabuh, Jombang</p>
    </div>

    <a href="/kontak" class="btn light">Hubungi Kami</a>
</section>

<?= $this->include('layouts/footer') ?>

</body>
</html>