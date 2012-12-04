<html>
<head>
<!-- baris comment -->
<link rel="shortcut icon" href="img/android.jpg">

<title> Form Daftar</title>
</head>

<body>
<form action="save.php" method="POST">
<table>
<tr>
<td colspan="3"><h2>Form Daftar</h2></td>
</tr>
<tr>
<td>NIP</td><td>:</td><td><input type="text" name="nip"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>:</td><td><input type="text" name="nm"></td>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="pass1"></td>
</tr>
<tr>
<td>Konfirmasi</td><td>:</td><td><input type="password" name="pass2"></td>
</tr>
<tr>
<td colspan="2"></td><td><input type="submit" value="save"><input type="reset" value="batal"></td>
</tr>
</table>
</form>
</body>
</html>
