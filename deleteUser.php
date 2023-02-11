<?php
require './connect.php';

if ($_GET["id"]) {
    $id = $_GET["id"];
    $user = "SELECT * FROM users WHERE id_user = $id";
    $result = mysqli_query($connect, $user);
    $row = mysqli_fetch_assoc($result);
    $gambar = $row["picture_profile"];

    if ($gambar !== "Belum Ditambahkan") {
        unlink("./dist/img/users/$gambar");
    }

    //hapus data
    $query = "DELETE FROM users WHERE id_user = $id";
    mysqli_query($connect, $query);

    echo "
        <script>
            alert('User Berhasil dihapus');
            document.location.href = './users.php';
        </script>
        ";
    return false;
} else {
    echo "
        <script>
            alert('Hapus user Terlebih dahulu!');
            document.location.href = './users.php';
        </script>
    ";
    return false;
}
