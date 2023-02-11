<?php
require 'connect.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $date_update = date('d-m-Y H:i:s');

    $namaFile = $_FILES['picture']['name'];
    $ukuranFile = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmpName = $_FILES['picture']['tmp_name'];

    if ($error === 4) {
        echo "
            <script>
                alert('Pilih Gambar dulu');
                document.location.href = './addBlog.php';
            </script>
            ";
        return false;
    }

    $query_check_blog = "SELECT * FROM blogs WHERE title = '$title'";
    $result = mysqli_query($connect, $query_check_blog);
    if (mysqli_fetch_assoc($result)) {
        echo "
                <script>
                    alert('Blog Telah Ditambahkan!');
                    document.location.href = './addBlog.php';
                </script>
            ";
        return false;
    }

    // cek apakah yang diupload adalah picture
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('Gambar yang di upload bukan format gambar!');
                document.location.href = './addBlog.php';
            </script>
            ";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "
            <script>
                alert('Ukuran gambar yang di upload terlalu besar!');
                document.location.href = './addBlog.php';
            </script>
            ";
        return false;
    }

    $random_name = random_int(0, 999999999);

    $namaFileBaru = $random_name . "." . $ekstensiGambar;
    move_uploaded_file($tmpName, './images/blogs/' . $namaFileBaru);

    $sql = "INSERT INTO blogs VALUES (NULL, '$title', '$description', '$author', '$namaFileBaru', '$date_update')";
    mysqli_query($connect, $sql);

    echo "
    <script>
        alert('Blog Berhasil ditambahkan');
        document.location.href = './blogs.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('Tambah Blog Terlebih Dahulu!');
            document.location.href = './blogs.php';
        </script>
        ";
}
