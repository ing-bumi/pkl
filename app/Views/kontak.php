<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - SMKN Kabuh</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

<?= $this->include('layouts/navbar') ?>

    <section class="page-header">
        <span class="small-title">INFORMASI SEKOLAH</span>        
        <h1>Kontak</h1>
            <p>Hubungi SMKN Kabuh</p>
    </section>

        <section class="intro">
            <h2>Informasi Kontak</h2>

            <div class="info-box">

                <div class="info-item">
                    <strong>Alamat</strong>
                    <span>
                        Jl. Kabuh-Tapen Km. 6 Kabuh Jombang
                    </span>
                </div>

                <div class="info-item">
                    <strong>Telepon</strong>
                    <span>
                        (0321) 3759214
                    </span>
                </div>

                <div class="info-item">
                    <strong>Email</strong>
                    <span>
                        smknalaska2012@gmail.com
                    </span>
                </div>

            </div>
        </section>

<?= $this->include('layouts/footer') ?>
</body>
</html>