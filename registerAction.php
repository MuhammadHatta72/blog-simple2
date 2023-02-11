<?php
require 'connect.php';

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_new = password_hash($password, PASSWORD_DEFAULT);

    $query_check_user = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $query_check_user);
    if (mysqli_fetch_assoc($result)) {
        echo "
                <script>
                    alert('User Telah Terdaftar!');
                    document.location.href = './login.php';
                </script>
            ";
    } else {
        $query = "INSERT INTO users VALUES (NULL, '$first_name', '$last_name', '$gender', '$email', 'Belum Ditambahkan', '$password_new', 2)";
        mysqli_query($connect, $query);
        echo "
                <script>
                    alert('User Berhasil Daftar!');
                    document.location.href = './login.php';
                </script>
            ";
    }
} else {
    echo "
        <script>
            alert('Register Terlebih Dahulu!');
            document.location.href = './register.php';
        </script>
        ";
}
