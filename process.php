<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $file = $_FILES["file"];

    // Validasi file
    $file_error = $file["error"];
    $file_size = $file["size"];
    $file_type = pathinfo($file["name"], PATHINFO_EXTENSION);

    if ($file_error !== 0 || $file_size > 500000 || $file_type !== "txt") {
        die("File harus berupa .txt dan tidak boleh lebih dari 500KB");
    }

    // Membaca isi file
    $file_content = file_get_contents($file["tmp_name"]);
    $file_lines = explode("\n", $file_content);

    // Mendapatkan informasi user-agent
    $user_agent = $_SERVER["HTTP_USER_AGENT"];

    // Simpan data ke sesi
    session_start();
    $_SESSION["data"] = [
        "nama" => $nama,
        "email" => $email,
        "telepon" => $telepon,
        "tanggal_lahir" => $tanggal_lahir,
        "file_lines" => $file_lines,
        "user_agent" => $user_agent
    ];

    header("Location: result.php");
    exit();
}
?>
