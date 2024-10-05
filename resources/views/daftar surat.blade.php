<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Permintaan Surat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .table-container {
           
            
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .request-btn {
            background-color: #5bc0de;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .request-btn:hover {
            background-color: #46a2c6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 60px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        th.sortable:hover {
            background-color: #ddd;
        }
        .action-btns {
            display: flex;
            justify-content: center;
        }
        .print-btn {
            color: #5bc0de;
            cursor: pointer;
            font-size: 18px;
            margin: 0 5px;
        }
        .print-btn:hover {
            color: #46a2c6;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pagination button {
            background-color: white;
            border: 1px solid #ddd;
            padding: 8px 16px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .pagination button:hover {
            background-color: #f2f2f2;
        }
        .pagination .active {
            background-color: #5bc0de;
            color: white;
            border-color: #5bc0de;
        }
    </style>
</head>
<body>

<div class="table-container">
    <a href="/permintaan surat" :active="request()->is('permintaan surat')"
    class="request-btn">Mintak surat</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Surat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Surat Pengantar RT</td>
                <td class="action-btns">
                    <i class="fas fa-print print-btn"></i>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Surat Keterangan</td>
                <td class="action-btns">
                    <i class="fas fa-print print-btn"></i>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Surat Domisili</td>
                <td class="action-btns">
                    <i class="fas fa-print print-btn"></i>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <div class="pagination">
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <!-- Add more pages as needed -->
    </div>
</div>

</body>
</html>

</x-layout>