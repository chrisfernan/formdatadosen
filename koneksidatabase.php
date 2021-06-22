<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistempenjadwalandosen";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    else{
        echo "Koneksi ke Database Berhasil";
    }

?>