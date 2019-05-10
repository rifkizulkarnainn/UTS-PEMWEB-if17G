<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:form_login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?>
?> 
<link rel="stylesheet" href="style_form.css">
<h1>Form  Registrasi</h1>
<pre>
<form method="post" action ="proses_registrasi.php">
 Username :
 <input type="text" name="username" required />
 Password :
 <input type="password" name="password" required />
 <input type="submit" value="Daftar">
 </form>
 <pre>
 <?php } ?> 
 
 
 