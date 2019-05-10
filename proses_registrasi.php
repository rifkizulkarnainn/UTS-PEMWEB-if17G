<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:form_login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?>
?> 
<html>
<body>
<link rel="stylesheet" href="style_form.css">
<pre>
   <h1> PHP - Output Database </h1>
   <?php
     // koneksi database
	 include("koneksi.php");
	 //mengambil data inputan dari Form Input data
	 $id = $_POST["id"];
	 $username = $_POST["username"];
	 $password = $_POST["password"];
	 // Query Simpan Data Kedatabase Mysql
	 $kueri = "INSERT INTO(username,password) tb_login values('$username','$password'); ";
     $simpan = mysql_query($kueri);	
     if($simpan){ 
	   echo "<script> alert('Data Tersimpan'); </script>";
	 }	 
   ?>
   <table>
     <tr>
	   <th> No </th>
	   <th> Id Product </th> 
	   <th> Product name </th>
	   <th> Price </th>
       <th> Qty </th>	       		   
	 </tr>
	 <?php 
      // Mengambil data dati database Mysql
	  $no=1;
      $proses = "SELECT * FROM tb_login";
	  $lihat = mysql_query($proses);
	  while($data=mysql_fetch_array($lihat)){
	 ?>
	 <tr>
	   <td> <?php echo $no; ?> </td>
	   <td> <?php echo $data[0]; ?> </td>
	   <td> <?php echo $data[1]; ?> </td>
	   <td> <?php echo $data[2]; ?> </td>   	   
	 </tr>
	 <?php $no++; } ?>
   </table>   
</pre>
<p>
   <a href="form_registrasi.php">  
      <input type="button" value="<<back to form"> 
   </a>
</p>
</body>
</html>
 <? } ?>



