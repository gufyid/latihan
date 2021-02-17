<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan";
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    echo "Koneksi error".error();
}
