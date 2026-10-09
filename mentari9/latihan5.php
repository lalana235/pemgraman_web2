<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Getdate</title>
</head>
<body>
    <center>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $sekarang = getdate();
        $bulan = $sekarang['month'];
        $hari = $sekarang['mday'];
        $tahun = $sekarang['year'];
        $jam = $sekarang['hours'];

        if ($jam <= 11) {
            $sapaan = 'Selamat Pagi';
        } elseif ($jam <= 15) {
            $sapaan = 'Selamat Siang';
        } elseif ($jam <= 18) {
            $sapaan = 'Selamat Sore';
        } else {
            $sapaan = 'Selamat Malam';
        }
        ?>
        <h1><?= $sapaan ?></h1>
        <h2>Selamat datang</h2>
        <h3>Sekarang adalah tanggal <?= $hari ?> <?= $bulan ?> <?= $tahun ?></h3>
    </center>
</body>
</html>