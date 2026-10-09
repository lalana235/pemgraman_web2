<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tanggal</title>
</head>
<body>
    <p style="font-size: 10px">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        echo 'Sekarang tanggal ' . date('d-F-Y');
        echo '<br>dan jam ' . date('h:i:s A');
        ?>
    </p>
</body>
</html>