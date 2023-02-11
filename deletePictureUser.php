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

    $query = "UPDATE users SET picture_profile = 'Belum Ditambahkan' WHERE id_user = $id";
    mysqli_query($connect, $query);

    echo "
        <script>
            alert('Foto user berhasil dihapus');
            document.location.href = './user.php';
        </script>
        ";
    return false;
} else {
    echo "
        <script>
            alert('Hapus foto user terlebih dahulu!');
            document.location.href = './user.php';
        </script>
    ";
    return false;
}
