<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangan Warga</title>
    <style>
       
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .status-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .status-container div {
            font-size: 18px;
        }
        .status {
            background-color: #eaf4ff;
            padding: 5px 10px;
            border-radius: 5px;
            color: #333;
        }
        .list-container {
            background-color: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
        }
        .item {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            align-items: center;
        }
        .item:last-child {
            border-bottom: none;
        }
        .item .name {
            font-size: 16px;
            color: #333;
        }
        .item .status-icon {
            font-size: 18px;
            color: #5bc0de;
        }
        .status-icon.lunas {
            color: #5bc0de; /* Biru untuk lunas */
        }
        .status-icon.belum-lunas {
            color: #ccc; /* Abu-abu untuk belum lunas */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sumbangan Warga</h1>

    <?php
    // Data contoh: Daftar warga dengan status pembayaran
    $warga = [
        ["nama" => "Arsyad", "lunas" => true],
        ["nama" => "Herman", "lunas" => true],
        ["nama" => "Febri", "lunas" => true],
        ["nama" => "Rio", "lunas" => false],
        ["nama" => "Iqbal", "lunas" => false],
        ["nama" => "Grego", "lunas" => true],
        ["nama" => "Erlangga", "lunas" => false],
        ["nama" => "Candra", "lunas" => false],
        ["nama" => "Figo", "lunas" => false]
    ];

    // Hitung total warga dan jumlah yang sudah lunas
    $total_warga = count($warga);
    $lunas_count = count(array_filter($warga, fn($w) => $w["lunas"]));

    // Tampilkan status total dan lunas
    echo '
    <div class="status-container">
        <div>Total Warga: <span class="status">' . $total_warga . '</span></div>
        <div>Lunas: <span class="status">' . $lunas_count . '</span></div>
    </div>';

    // Tampilkan daftar warga
    echo '<div class="list-container">';
    foreach ($warga as $orang) {
        $status_icon = $orang["lunas"] ? "✔" : "❌"; // Centang untuk lunas, X untuk belum lunas
        $status_class = $orang["lunas"] ? "lunas" : "belum-lunas";
        echo '
        <div class="item">
            <div class="name">' . $orang["nama"] . '</div>
            <div class="status-icon ' . $status_class . '">' . $status_icon . '</div>
        </div>';
    }
    echo '</div>';
    ?>

</div>

</body>
</html>

</x-layout>