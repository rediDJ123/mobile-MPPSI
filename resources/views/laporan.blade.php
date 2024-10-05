<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Laporan</title>
    <style>
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            position: relative;
        }
        .form-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container input, .form-container textarea, .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .form-container button {
            background-color: #5bc0de;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #46a2c6;
        }
        .notification {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
            top: 40px;
            width: 100%;
        }
        .notification.show {
            display: block;
        }
    </style>
    <script>
        function showNotification() {
            // Cek validasi form (sederhana, jika semua field terisi)
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var keluhan = document.getElementById("keluhan").value;

            if (name && phone && keluhan) {
                var notification = document.getElementById("notification");
                notification.classList.add("show");

                // Sembunyikan notifikasi setelah 3 detik
                setTimeout(function() {
                    notification.classList.remove("show");
                }, 3000);

                return false; // Menghentikan form agar tidak reload halaman
            }
            return true; // Tetap kirim form jika validasi gagal
        }
    </script>
</head>
<body>

<div id="notification" class="notification">Laporan Anda telah terkirim!</div>
<div class="form-container">
    <h1>Ajukan Laporan</h1>

    <form action="" method="POST" onsubmit="return showNotification()">
        <label for="name">Nama  </label>
        <input type="text" id="name" name="name" placeholder="Ketik disini" required>

        <label for="phone">Nomor Handphone</label>
        <input type="text" id="phone" name="phone" placeholder="+62" required>

        <label for="keluhan">Keluhan</label>
        <textarea id="keluhan" name="keluhan" rows="4" placeholder="Masukkan keluhan Anda di sini" required></textarea>

        <button type="submit">Kirim</button>
    </form>
</div>

</body>
</html>
</x-layout>
