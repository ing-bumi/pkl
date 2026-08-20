<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jurusan - SMKN Kabuh</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
<?= $this->include('layouts/navbar') ?>

    <section class="page-header">
        <span class="small-title">PROGRAM KEAHLIAN</span>        
        <h1>Jurusan</h1>
        <p>Kenali konsentrasi keahlian yang tersedia di SMKN Kabuh</p>
    </section>

    <section class="program">
        <h2>Konsentrasi Keahlian</h2>

        <div class="program-grid">

            <div class="program-card">
                    <h3>Teknik Kimia Industri</h3>
                    <p>
                        Teknik Kimia Industri merupakan salah satu program keahlian yang ada di SMK Negeri Kabuh - Jombang. Program keahlian ini berfokus pada penerapan proses kimia dan fisika untuk mengubah bahan mentah menjadi produk bernilai tambah melalui proses industri, serta mempelajari analisis bahan kimia dan operasi peralatan industri.                    
                    </p>
            </div>

                <div class="program-card">
                    <h3>Teknik Farmasi Industri</h3>
                    <p>
                        Teknik Farmasi Industri merupakan salah satu program keahlian yang ada di SMK Negeri Kabuh - Jombang. Program keahlian ini berfokus pada penguasaan teknologi dan proses dalam pengembangan, produksi, serta pengemasan obat dan produk farmasi lainnya dalam skala industri, dengan tujuan menghasilkan produk yang aman, berkualitas, dan sesuai standar ketat.                    
                    </p>
                </div>

                <div class="program-card">
                    <h3>Analisis Pengujian Laboratorium</h3>
                    <p>
                        Analisis Pengujian Laboratorium merupakan salah satu program keahlian yang ada di SMK Negeri Kabuh - Jombang. Program keahlian ini berfokus pada pemahaman dan penerapan metode analisis dan pengujian di laboratorium dengan mempelajari teknik kimia, fisika, biologi, dan mikrobiologi untuk mengetahui komposisi, kualitas, dan karakteristik berbagai bahan dan produk.                    
                    </p>
                </div>

                <div class="program-card">
                    <h3>Sistem Informasi, Jaringan, dan Aplikasi (SIJA)</h3>
                    <p>
                        Sistem Informasi Jaringan dan Aplikasi (SIJA) merupakan program keahlian baru yang dibuka pada tahun 2023/2024 di SMK Negeri Kabuh - Jombang. Program keahlian ini menggabungkan materi dari Teknik Komputer Jaringan (TKJ) dan Rekayasa Perangkat Lunak (RPL). Program keahlian ini berfokus pada Teknologi Informasi dan Komunikasi (TIK).                    
                    </p>
                </div>

            
        </div>

    </selection>
<?= $this->include('layouts/footer') ?>
</body>
</html>