<?php
require 'connect.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {
    $id_user = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];

    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender' WHERE id_user = '$id_user'";
    mysqli_query($connect, $query);
    echo "
    <script>
        alert('User Berhasil diubah');
        document.location.href = './users.php';
    </script>
    ";
    return false;
} else {
    echo "
            <script>
                alert('Edit User Terlebih dahulu!');
                document.location.href = './editUser.php?id=" . $id_user . "';
            </script>
        ";
    return false;
}
