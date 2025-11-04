<?php
$host = "localhost";
$user_db = "id20053137_root";
$pass_db = "V8\MK%8wS!Q6?f2>";
$db = "id20053137_company";
$koneksi = mysqli_connect($host, $user_db, $pass_db) or die(mysqli_error($koneksi));
mysqli_select_db($koneksi, $db) or die(mysqli_error($koneksi));