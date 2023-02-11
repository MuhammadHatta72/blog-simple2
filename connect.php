<?php

$connect = mysqli_connect("localhost", "root", "", "uas_rania_rahmi");

if (!$connect) {
    echo "Error, Gagal Koneksi ke Database";
}
