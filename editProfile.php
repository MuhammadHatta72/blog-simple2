<?php
require 'connect.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['submit'])) {
    $id_user = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password_new = $_POST['password_new'];
    $password_old = $_POST['password_old'];

    $user = "SELECT * FROM users WHERE id_user = $id_user";
    $result = mysqli_query($connect, $user);
    $row = mysqli_fetch_assoc($result);
    $password = $row["password"];

    if ($password_old === '' && $password_new === '') {
        $password_update = $password;
    } else {
        if (password_verify($password_old, $password)) {
            $password_update = password_hash($password_new, PASSWORD_DEFAULT);
        } else {
            $password_update = $password;
        }
    }

    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', email = '$email', password = '$password_update' WHERE id_user = '$id_user'";
    mysqli_query($connect, $query);
    echo "
    <script>
        alert('Profil user Berhasil diubah');
        document.location.href = './user.php';
    </script>
    ";
    return false;
} else {
    echo "
            <script>
                alert('Edit profil user Terlebih dahulu!');
                document.location.href = './user.php';
            </script>
        ";
    return false;
}
