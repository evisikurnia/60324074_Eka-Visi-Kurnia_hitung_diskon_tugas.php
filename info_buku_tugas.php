<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Informasi Buku</h1>

    <?php
    // Buku 1
    $judul1 = "Laravel: From Beginner to Advanced";
    $pengarang1 = "Budi Raharjo";
    $penerbit1 = "Informatika";
    $tahun1 = 2023;
    $harga1 = 125000;
    $stok1 = 18;
    $isbn1 = "978-602-1234-56-7";
    $kategori1 = "Programming";
    $bahasa1 = "Indonesia";
    $halaman1 = 320;
    $berat1 = 500;

    // Buku 2
    $judul2 = "Pemrograman PHP Modern";
    $pengarang2 = "Andi Setiawan";
    $penerbit2 = "Elex Media";
    $tahun2 = 2022;
    $harga2 = 95000;
    $stok2 = 10;
    $isbn2 = "978-602-9876-11-2";
    $kategori2 = "Programming";
    $bahasa2 = "Indonesia";
    $halaman2 = 450;
    $berat2 = 600;

    // Buku 3
    $judul3 = "MySQL Database Administration";
    $pengarang3 = "John Smith";
    $penerbit3 = "O'Reilly";
    $tahun3 = 2021;
    $harga3 = 150000;
    $stok3 = 7;
    $isbn3 = "978-149-205-63-2";
    $kategori3 = "Database";
    $bahasa3 = "Inggris";
    $halaman3 = 500;
    $berat3 = 700;

    // Buku 4
    $judul4 = "Web Design for Beginners";
    $pengarang4 = "Sarah Johnson";
    $penerbit4 = "Packt Publishing";
    $tahun4 = 2020;
    $harga4 = 110000;
    $stok4 = 12;
    $isbn4 = "978-178-953-12-4";
    $kategori4 = "Web Design";
    $bahasa4 = "Inggris";
    $halaman4 = 280;
    $berat4 = 450;

    // Fungsi badge kategori
    function badgeKategori($kategori) {
        if ($kategori == "Programming") return "bg-primary";
        if ($kategori == "Database") return "bg-success";
        if ($kategori == "Web Design") return "bg-warning text-dark";
        return "bg-secondary";
    }
    ?>

    <div class="row">

        <!-- Buku 1 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><?= $judul1; ?></h5>
                    <span class="badge <?= badgeKategori($kategori1); ?>"><?= $kategori1; ?></span>
                </div>
                <div class="card-body">
                    <p><b>Pengarang:</b> <?= $pengarang1; ?></p>
                    <p><b>Penerbit:</b> <?= $penerbit1; ?></p>
                    <p><b>Tahun:</b> <?= $tahun1; ?></p>
                    <p><b>ISBN:</b> <?= $isbn1; ?></p>
                    <p><b>Harga:</b> Rp <?= number_format($harga1,0,',','.'); ?></p>
                    <p><b>Stok:</b> <?= $stok1; ?></p>
                    <p><b>Bahasa:</b> <?= $bahasa1; ?></p>
                    <p><b>Halaman:</b> <?= $halaman1; ?></p>
                    <p><b>Berat:</b> <?= $berat1; ?> gram</p>
                </div>
            </div>
        </div>

        <!-- Buku 2 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><?= $judul2; ?></h5>
                    <span class="badge <?= badgeKategori($kategori2); ?>"><?= $kategori2; ?></span>
                </div>
                <div class="card-body">
                    <p><b>Pengarang:</b> <?= $pengarang2; ?></p>
                    <p><b>Penerbit:</b> <?= $penerbit2; ?></p>
                    <p><b>Tahun:</b> <?= $tahun2; ?></p>
                    <p><b>ISBN:</b> <?= $isbn2; ?></p>
                    <p><b>Harga:</b> Rp <?= number_format($harga2,0,',','.'); ?></p>
                    <p><b>Stok:</b> <?= $stok2; ?></p>
                    <p><b>Bahasa:</b> <?= $bahasa2; ?></p>
                    <p><b>Halaman:</b> <?= $halaman2; ?></p>
                    <p><b>Berat:</b> <?= $berat2; ?> gram</p>
                </div>
            </div>
        </div>

        <!-- Buku 3 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><?= $judul3; ?></h5>
                    <span class="badge <?= badgeKategori($kategori3); ?>"><?= $kategori3; ?></span>
                </div>
                <div class="card-body">
                    <p><b>Pengarang:</b> <?= $pengarang3; ?></p>
                    <p><b>Penerbit:</b> <?= $penerbit3; ?></p>
                    <p><b>Tahun:</b> <?= $tahun3; ?></p>
                    <p><b>ISBN:</b> <?= $isbn3; ?></p>
                    <p><b>Harga:</b> Rp <?= number_format($harga3,0,',','.'); ?></p>
                    <p><b>Stok:</b> <?= $stok3; ?></p>
                    <p><b>Bahasa:</b> <?= $bahasa3; ?></p>
                    <p><b>Halaman:</b> <?= $halaman3; ?></p>
                    <p><b>Berat:</b> <?= $berat3; ?> gram</p>
                </div>
            </div>
        </div>

        <!-- Buku 4 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5><?= $judul4; ?></h5>
                    <span class="badge <?= badgeKategori($kategori4); ?>"><?= $kategori4; ?></span>
                </div>
                <div class="card-body">
                    <p><b>Pengarang:</b> <?= $pengarang4; ?></p>
                    <p><b>Penerbit:</b> <?= $penerbit4; ?></p>
                    <p><b>Tahun:</b> <?= $tahun4; ?></p>
                    <p><b>ISBN:</b> <?= $isbn4; ?></p>
                    <p><b>Harga:</b> Rp <?= number_format($harga4,0,',','.'); ?></p>
                    <p><b>Stok:</b> <?= $stok4; ?></p>
                    <p><b>Bahasa:</b> <?= $bahasa4; ?></p>
                    <p><b>Halaman:</b> <?= $halaman4; ?></p>
                    <p><b>Berat:</b> <?= $berat4; ?> gram</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>