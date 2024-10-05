<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sumbangan Warga</title>
        <style>
            /* Global styling */
            
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
            }
          
            .card {
                background-color: white;
                margin: 20px 0;
                padding: 15px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .card img {
                width: 150px;
                height: 100px;
                border-radius: 10px;
                margin-right: 20px;
            }
            .card-content {
                flex-grow: 1;
            }
            .card-content h3 {
                margin: 0;
                font-size: 18px;
                color: #333;
            }
            .card-content p {
                margin: 5px 0;
                font-size: 14px;
                color: #555;
            }
            .btn {
                background-color: #5bc0de;
                color: white;
                padding: 10px 15px;
                text-decoration: none;
                border-radius: 5px;
            }
            .btn:hover {
                background-color: #46a2c6;
            }
    
            /* Media queries untuk tampilan mobile */
            @media (max-width: 600px) {
                .card {
                    flex-direction: column; /* Tata letak vertikal */
                    align-items: flex-start; /* Pastikan elemen diatur ke kiri */
                }
                .card img {
                    width: 100%; /* Gambar menyesuaikan lebar layar */
                    height: auto; /* Menyesuaikan tinggi gambar secara proporsional */
                    margin: 0 0 15px 0; /* Margin bawah untuk spasi dengan teks */
                }
                .btn {
                    width: 100%; /* Tombol menyesuaikan lebar layar */
                    text-align: center; /* Teks di tengah */
                }
            }
        </style>
    </head>
    <body>

<div class="container">
    <h1>Sumbangan Warga</h1>

    <?php
    // Daftar Sumbangan (bisa diambil dari database)
    $sumbangan = [
        [
            "gambar" => "img/gambar17an.jpg", // Ganti dengan link gambar yang valid
            "judul" => "Sumbangan - Acara Lomba 17an bentuk perayaan HUT RI",
            "terkumpul" => "Rp100.000",
            "target" => "Rp5.000.000"
        ],
        [
            "gambar" => "https://example.com/image2.jpg", // Ganti dengan link gambar yang valid
            "judul" => "Sumbangan - Tahun Baru",
            "terkumpul" => "Rp10.000",
            "target" => "Rp5.000.000"
        ]
    ];

    // Loop untuk menampilkan daftar sumbangan
    foreach ($sumbangan as $item) {
        echo '
        <div class="card">
            <img src="' . $item["gambar"] . '" alt="Gambar">
            <div class="card-content">
                <h3>' . $item["judul"] . '</h3>
                <p>Terkumpul ' . $item["terkumpul"] . ' dari ' . $item["target"] . '</p>
            </div>
            <a href="/list iuran" class="btn">Lihat Detail</a>
        </div>';
    }
    ?>

</div>

</body>
</html>

</x-layout>