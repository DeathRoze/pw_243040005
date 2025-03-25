<?php
$film = [
    [
        "judul" => "Shin Ultraman",
        "rumahProduksi" => "TOHO",
        "tahun" => "2022",
        "genre" => "Action",
        "durasi" => "112 menit",
        "sutradara" => "Hideki-Anno.jpg"
    ],
    [
        "judul" => "JoJo Bizzare Adventure: Phantom Blood",
        "rumahProduksi" => "A.P.P.P.",
        "tahun" => "2007",
        "genre" => "Horor, Action",
        "durasi" => "90 menit",
        "sutradara" => "Jūnichi-Hayama.jpg"
    ],
    [
        "judul" => "Back To the Future",
        "rumahProduksi" => "Amblin Entertainment",
        "tahun" => "1985",
        "genre" => "Drama, action",
        "durasi" => "166 menit",
        "sutradara" => "Robert-Zemeckis.jpg"
    ],
    [
        "judul" => "ROCKY",
        "rumahProduksi" => "Chartoff-Winkler Productions",
        "tahun" => "1976",
        "genre" => "Drama, Action",
        "durasi" => "116 menit",
        "sutradara" => "John G. Avildsen.jpg"
    ],
    [
        "judul" => "ROCKY II",
        "rumahProduksi" => "John Guilbert Avildsen (",
        "tahun" => "1977",
        "genre" => "Drama, Action",
        "durasi" => "120 menit",
        "sutradara" => "Sylvester Stallone.jpg"
    ],
    [
        "judul" => "ROCKY III",
        "rumahProduksi" => "John Guilbert Avildsen",
        "tahun" => "1982",
        "genre" => "Drama, Action",
        "durasi" => "100 menit",
        "sutradara" => "Sylvester Stallone.jpg"
    ],
    [
        "judul" => "ROCKY IV",
        "rumahProduksi" => "John Guilbert Avildsen",
        "tahun" => "1985",
        "genre" => "Drama, Action",
        "durasi" => "93menit",
        "sutradara" => "Sylvester Stallone.jpg"
    ],
    [
        "judul" => "Back To the Future Part II",
        "rumahProduksi" => "Amblin Entertainment",
        "tahun" => "1989",
        "genre" => "Drama, action",
        "durasi" => "108 menit",
        "sutradara" => "Robert-Zemeckis.jpg"
    ],
    [
        "judul" => "Back To the Future Part II",
        "rumahProduksi" => "Amblin Entertainment",
        "tahun" => "1990",
        "genre" => "Drama, action",
        "durasi" => "118 menit",
        "sutradara" => "Robert-Zemeckis.jpg"
    ],
    [
        "judul" => "Dragon Ball Super: Broly",
        "rumahProduksi" => "Toei Animation",
        "tahun" => "2018",
        "genre" => "ACtion",
        "durasi" => "108 menit",
        "sutradara" => "Tatsuya Nagamine.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
</head>

<body>
    <h2 style="margin-left: 1.7rem;">Daftar Film</h2>
    <ul>
        <?php foreach ($film as $f) : ?>
            <li>
                <strong>Judul:</strong> <?= $f["judul"]; ?><br>
                <strong>Rumah Produksi:</strong> <?= $f["rumahProduksi"]; ?><br>
                <strong>Tahun:</strong> <?= $f["tahun"]; ?><br>
                <strong>Genre:</strong> <?= $f["genre"]; ?><br>
                <strong>Durasi:</strong> <?= $f["durasi"]; ?><br>
                <strong>Sutradara:</strong><br>
                <img src="img/<?= $f["sutradara"]; ?>" ? width="100">
            </li>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>