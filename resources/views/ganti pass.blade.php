<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <style>
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           
            width: 100%;
            margin: auto;
        }
        .form-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container input, .form-container button {
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
    </style>
</head>
<body>

<div class="form-container">
    
    
    <form id="changePasswordForm">
        <label for="current_password">Password Saat Ini</label>
        <input type="password" id="current_password" name="current_password" placeholder="Masukkan password saat ini" required>

        <label for="new_password">Password Baru</label>
        <input type="password" id="new_password" name="new_password" placeholder="Masukkan password baru" required>

        <label for="confirm_password">Konfirmasi Password Baru</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru" required>

        <button type="submit">Ganti Password</button>
    </form>
</div>

</body>
</html>

</x-layout>