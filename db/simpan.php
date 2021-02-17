<?php
include "koneksi.php";
$user = $_POST['user'];
$password = md5($_POST['password']);
if ($user != "") {
    mysqli_query($conn, "insert into user(user,password)values('$user','$password')");
}
