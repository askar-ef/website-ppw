<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "response";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $status = $_POST["status"];
    $title = $_POST["title"];
    $message = $_POST["message"];

    $sql = "INSERT INTO comments (name, status, title, message) VALUES ('$name', '$status', '$title', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

