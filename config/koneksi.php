<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_inventory_akmal');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}
