<html>
<head>
<!-- baris comment -->
<link rel="shortcut icon" href="img/android.jpg">
<title> Tampil PHP </title>
</head>

<body>
<table border="1" align="center">
<tr>
<td colspan="6" align="center"><h3> Tabel User </h3></td>
</tr>
<tr>
<td>NIP</td><td>Nama</td><td>Username</td><td>Password</td><td colspan="2">Modify</td>
</tr>
<?php
include "config.php";

$data = mysql_query("select * from tbl_contact");
while($que = mysql_fetch_array($data)){
?>
<tr>
<td><?php echo"$que[nip]"; ?></td>
<td><?php echo"$que[nama]"; ?></td>
<td><?php echo"$que[username]"; ?></td>
<td><?php echo"$que[password]"; ?></td>
<td><img src="img/edit.gif"></td>
<td><img src="img/delete.png"></td>
</tr>
<?php } ?>
</table>
</body>
</html>
