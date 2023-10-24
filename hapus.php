<?php
$id = $_GET["id"];

require "inc/koneksi.php";

$query = "DELETE FROM motor WHERE id_motor = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "
    <script>
    alert('Berhasil Menghapus Data!');
    document.location.href='index.php';
    </script>";
}
