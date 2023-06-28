<?php

include "koneksi.php";

$id = $_POST['id'];
$namaPer = $_POST['fname'];
$namaBel = $_POST['lname'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];

$insert = mysqli_query($mysqli, "insert into identitas set id='$id', fname='$namaPer', lname='$namaBel', password='$password'  ,gender='$gender', alamat='$alamat'");

?>