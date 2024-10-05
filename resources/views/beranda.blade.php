
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <style>
        .berita-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .berita-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .berita-item img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #eee;
        }
        .berita-item .content {
            padding: 15px;
        }
        .berita-item .content h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }
        .berita-item .content p {
            margin: 0;
            color: #777;
        }
        .berita-item .date {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="berita-container">
    <h1>Berita</h1>

    <?php
    // Array contoh berita
    $berita = [
        [
            "judul" => "Acara lomba 17an untuk perayaan kemerdekaan Indonesia",
            "tanggal" => "18/08/2024",
            "gambar" => "img/gambar17an.jpg",
        ],
        [
            "judul" => "Kegiatan gotong royong perbaikan jalan",
            "tanggal" => "20/08/2024",
            "gambar" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhiOYPCthfujld1uYEhZOv4T7rLrW6tHn_1xFGV3Bn5_Qc-wt-JqePirGZssBe3FXWiyuzb87vhUH3FhtTYCIGqXHQ79EqarBdfFLyo02CcbqdNVEmIzWvvx71kNqLJBgJA14zTjkzb1hPFikQg1jj5zJqigKOc6bdSz_goe_uYT_tLFMAETAu6XjOE/s320/WhatsApp%20Image%202023-01-24%20at%2010.44.43.jpeg",
        ],
        [
            "judul" => "Kegiatan yasinan mingguan RT xx",
            "tanggal" => "22/08/2024",
            "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfYT-8KqnkFeu0C6e04vA7p-CCDTMlnPL8Gg&s",
        ],
    ];

    // Loop untuk menampilkan berita
    foreach ($berita as $item) {
        echo '<div class="berita-item">';
        echo '<img src="' . $item['gambar'] . '" alt="Gambar Berita">';
        echo '<div class="content">';
        echo '<h3>' . $item['judul'] . '</h3>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
</x-layout>