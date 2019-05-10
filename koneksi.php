<?php
$dbhost = "localhost";
$dbname = "db_login";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword) or die ("koneksi lo ke server eror !!!");
mysql_select_db($dbname,$koneksi) or die ("koneksi ke database lo error  juga");
   
    mysql_connect("localhost","root","db_penjualan");
    mysql_select_db("db_penjualan");

 ?>
 
 
