<?php
$anggota = [
    [
        "nama" => "Anggun",
        "nim" => "2405551014",
        "warna" => "#c9b6ff",
        "ikon"  => "gambar/bunga2.PNG"
    ],
    [
        "nama" => "Rahma",
        "nim" => "2405551017",
        "warna" => "#ffb6d5",
        "ikon"  => "gambar/bunga1.PNG"
    ],
    [
        "nama" => "Rai",
        "nim" => "2405551074",
        "warna" => "#b9ddff",
        "ikon"  => "gambar/bunga3.PNG"
    ],
    [
        "nama" => "Devina",
        "nim" => "2405551149",
        "warna" => "#ffb39c",
        "ikon"  => "gambar/bunga4.PNG"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kelompok 7 mau dong Tuhan pliss</title>
    <link rel="stylesheet" href="style_baru.css">
</head>

<body>

    <h1>Kelompok 7</h1>
    <p class="welcome">Selamat datang di halaman kelompok 7 kami</p>

    <div class="container">
        <?php foreach ($anggota as $a): ?>
            <div class="card" style="background-color: <?= $a['warna']; ?>">
                <img src="<?= $a['ikon']; ?>" alt="ikon">
                <div class="text">
                    <h3><?= $a['nama']; ?></h3>
                    <span><?= $a['nim']; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>
