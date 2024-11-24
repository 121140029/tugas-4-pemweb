<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #d16ba5, #86a8e7, #5ffbf1);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #4b0082;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: #6a5acd;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #483d8b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <form action="process.php" method="POST" enctype="multipart/form-data">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required maxlength="50">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" id="telepon" name="telepon" required maxlength="15">

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="file">Unggah File Teks:</label>
            <input type="file" id="file" name="file" accept=".txt" required>

            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
