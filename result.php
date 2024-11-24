<?php
session_start();
$data = $_SESSION["data"] ?? null;

if (!$data) {
    die("Tidak ada data yang diterima.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9966, #ff5e62);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff4500;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f4a460;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pendaftaran</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?= htmlspecialchars($data["nama"]) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($data["email"]) ?></td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td><?= htmlspecialchars($data["telepon"]) ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= htmlspecialchars($data["tanggal_lahir"]) ?></td>
            </tr>
            <tr>
                <th>Browser/OS</th>
                <td><?= htmlspecialchars($data["user_agent"]) ?></td>
            </tr>
        </table>

        <h3>Isi File:</h3>
        <table>
            <tr>
                <th>Baris</th>
                <th>Isi</th>
            </tr>
            <?php foreach ($data["file_lines"] as $index => $line): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($line) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
