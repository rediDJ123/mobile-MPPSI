<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Permintaan</title>
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
        .form-container input, .form-container select, .form-container textarea, .form-container button {
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
        /* Notification Style */
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
    </style>
</head>
<body>

    <div id="notification" class="notification">
        Permintaan sudah terkirim!
    </div>

<div class="form-container">
    <h1>Ajukan Permintaan</h1>

    

    <form id="requestForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Ketik disini" required>

        <label for="phone">Nomor Handphone</label>
        <input type="text" id="phone" name="phone" placeholder="+62" required>

        <label for="jenis_surat">Jenis Surat</label>
        <select id="jenis_surat" name="jenis_surat" required>
            <option value="Surat Pengantar RT">Surat Pengantar RT</option>
            <option value="Surat Keterangan">Surat Keterangan</option>
            <option value="Surat Domisili">Surat Domisili</option>
        </select>

        <label for="perihal">Perihal</label>
        <textarea id="perihal" name="perihal" rows="4" placeholder="Masukkan perihal Anda di sini" required></textarea>

        <button type="submit">Kirim</button>
    </form>
</div>

<script>
    document.getElementById('requestForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Show notification
        var notification = document.getElementById('notification');
        notification.style.display = 'block';

        // Optionally, hide the notification after a few seconds
        setTimeout(function() {
            notification.style.display = 'none';
        }, 3000); // Hides after 3 seconds
    });
</script>

</body>
</html>


</x-layout>