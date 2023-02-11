<?php
require 'connect.php';

if (isset($_POST['submit'])) {
    $id_user = $_POST['id'];
    $picture = $_FILES['picture_profile']['name'];
    $ukuranFile = $_FILES['picture_profile']['size'];
    $error = $_FILES['picture_profile']['error'];
    $tmpName = $_FILES['picture_profile']['tmp_name'];
    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $picture);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('Yang anda upload bukan gambar!');
            </script>
            ";
        return false;
    }
    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar!');
            </script>
            ";
        return false;
    }
    // lolos pengecekan, gambar siap diupload

    //hapus gambar lama
    $user = "SELECT * FROM users WHERE id_user = $id_user";
    $result = mysqli_query($connect, $user);
    $row = mysqli_fetch_assoc($result);
    $picture_old = $row["picture_profile"];
    if ($picture_old != "Belum Ditambahkan") {
        unlink("./dist/img/users/$picture_old");
    }

    // generate nama gambar baru
    $picture_new = "picture_" . $row['email'];
    $picture_new .= '.';
    $picture_new .= $ekstensiGambar;
    move_uploaded_file($tmpName, './dist/img/users/' . $picture_new);
    $namaPictureNew = $picture_new;

    $query = "UPDATE users SET picture_profile = '$namaPictureNew' WHERE id_user = $id_user";
    mysqli_query($connect, $query);
    echo "
            <script>
                alert('Foto user berhasil diubah!');
                document.location.href = './user.php';
            </script>
        ";
    return false;
} else {
    echo "
            <script>
                alert('Edit foto user Terlebih dahulu!');
                document.location.href = './user.php';
            </script>
        ";
    return false;
}
