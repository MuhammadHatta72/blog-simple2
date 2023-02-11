<?php
require 'connect.php';

if (isset($_POST["submit"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["id_user"] = $row["id_user"];

            echo "
                <script>
                    alert('Berhasil Login !');
                    document.location.href = 'dashboard.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal Login !');
                    document.location.href = 'login.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Gagal Login !');
                document.location.href = 'login.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Login Terlebih Dahulu!');
            document.location.href = 'login.php';
        </script>
    ";
}
