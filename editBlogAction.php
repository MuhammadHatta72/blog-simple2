<?php
require 'connect.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {
    $id_blog = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $picture = $_POST['picture'];
    $date_update = date('d-m-Y H:i:s');

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['picture_new']['error'] === 4) {
        $namaGambarBaru = $picture;
    } else {
        $namaFile = $_FILES['picture_new']['name'];
        $ukuranFile = $_FILES['picture_new']['size'];
        $error = $_FILES['picture_new']['error'];
        $tmpName = $_FILES['picture_new']['tmp_name'];
        // cek apakah yang diupload adalah book_cover_new
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
            <script>
                alert('Gambar yang di upload bukan format gambar!');
                document.location.href = './editBlog.php?id=" . $id_blog . "';
            </script>
            ";
            return false;
        }
        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 1000000) {
            echo "
            <script>
                alert('Ukuran gambar yang di upload terlalu besar!');
                document.location.href = './editBlog.php?id=" . $id_blog . "';
            </script>
            ";
            return false;
        }
        // lolos pengecekan, gambar siap diupload

        //hapus gambar lama
        unlink("./images/blogs/$picture");

        // generate nama gambar baru
        $random_name = random_int(0, 999999999);
        $picture_blog = $random_name . "." . $ekstensiGambar;
        move_uploaded_file($tmpName, './images/blogs/' . $picture_blog);
        $namaGambarBaru = $picture_blog;
    }

    $query = "UPDATE blogs SET title = '$title', description = '$description', author = '$author', picture = '$namaGambarBaru', date_update = '$date_update' WHERE id_blog = '$id_blog'";
    mysqli_query($connect, $query);

    echo "
    <script>
        alert('Blog Berhasil diubah');
        document.location.href = './blogs.php';
    </script>
    ";
} else {
    echo "
            <script>
                alert('Edit Blog Terlebih dahulu!');
                document.location.href = './editBlog.php?id=" . $id_blog . "';
            </script>
        ";
}
