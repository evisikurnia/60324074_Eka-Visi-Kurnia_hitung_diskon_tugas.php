<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perhitungan Diskon - Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Sistem Perhitungan Diskon Bertingkat</h1>

    <?php
    // Data pembeli & buku
    $nama_pembeli = "Budi Santoso";
    $judul_buku = "Laravel Advanced";
    $harga_satuan = 150000;
    $jumlah_beli = 4;
    $is_member = true;

    // Subtotal
    $subtotal = $harga_satuan * $jumlah_beli;

    // Persentase diskon
    if ($jumlah_beli >= 1 && $jumlah_beli <= 2) {
        $persentase_diskon = 0;
    } elseif ($jumlah_beli >= 3 && $jumlah_beli <= 5) {
        $persentase_diskon = 0.10;
    } elseif ($jumlah_beli >= 6 && $jumlah_beli <= 10) {
        $persentase_diskon = 0.15;
    } else {
        $persentase_diskon = 0.20;
    }

    // Diskon utama
    $diskon = $subtotal * $persentase_diskon;

    // Total setelah diskon pertama
    $total_setelah_diskon1 = $subtotal - $diskon;

    // Diskon member
    $diskon_member = 0;
    if ($is_member) {
        $diskon_member = $total_setelah_diskon1 * 0.05;
    }

    // Total setelah semua diskon
    $total_setelah_diskon = $total_setelah_diskon1 - $diskon_member;

    // PPN 11%
    $ppn = $total_setelah_diskon * 0.11;

    // Total akhir
    $total_akhir = $total_setelah_diskon + $ppn;

    // Total hemat
    $total_hemat = $diskon + $diskon_member;
    ?>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Detail Pembelian</h5>
        </div>
        <div class="card-body">
            <p><b>Nama Pembeli:</b> <?= $nama_pembeli; ?></p>
            <p><b>Judul Buku:</b> <?= $judul_buku; ?></p>
            <p><b>Harga Satuan:</b> Rp <?= number_format($harga_satuan,0,',','.'); ?></p>
            <p><b>Jumlah:</b> <?= $jumlah_beli; ?> buku</p>
            <p>
                <b>Status:</b>
                <?php if ($is_member): ?>
                    <span class="badge bg-success">Member</span>
                <?php else: ?>
                    <span class="badge bg-secondary">Non Member</span>
                <?php endif; ?>
            </p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            <h5>Rincian Perhitungan</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Subtotal</th>
                    <td>Rp <?= number_format($subtotal,0,',','.'); ?></td>
                </tr>
                <tr>
                    <th>Diskon (<?= $persentase_diskon*100; ?>%)</th>
                    <td>- Rp <?= number_format($diskon,0,',','.'); ?></td>
                </tr>

                <?php if ($is_member): ?>
                <tr>
                    <th>Diskon Member (5%)</th>
                    <td>- Rp <?= number_format($diskon_member,0,',','.'); ?></td>
                </tr>
                <?php endif; ?>

                <tr>
                    <th>Total Setelah Diskon</th>
                    <td>Rp <?= number_format($total_setelah_diskon,0,',','.'); ?></td>
                </tr>
                <tr>
                    <th>PPN (11%)</th>
                    <td>Rp <?= number_format($ppn,0,',','.'); ?></td>
                </tr>
                <tr class="table-primary">
                    <th>Total Akhir</th>
                    <td><b>Rp <?= number_format($total_akhir,0,',','.'); ?></b></td>
                </tr>
                <tr class="table-warning">
                    <th>Total Hemat</th>
                    <td><b>Rp <?= number_format($total_hemat,0,',','.'); ?></b></td>
                </tr>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>