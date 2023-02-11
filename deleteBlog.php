<?php
require './connect.php';

if ($_GET["id"]) {
    $id = $_GET["id"];
    $blog = "SELECT * FROM blogs WHERE id_blog = $id";
    $result = mysqli_query($connect, $blog);
    $row = mysqli_fetch_assoc($result);
    $gambar = $row["picture"];

    unlink("./images/blogs/$gambar");

    //hapus data
    $query = "DELETE FROM blogs WHERE id_blog = $id";
    mysqli_query($connect, $query);

    echo "
        <script>
            alert('Blog Berhasil dihapus');
            document.location.href = './blogs.php';
        </script>
        ";
    return false;
} else {
    echo "
        <script>
            alert('Hapus blog Terlebih dahulu!');
            document.location.href = './blogs.php';
        </script>
    ";
    return false;
}
