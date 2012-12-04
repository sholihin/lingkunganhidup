<?php
include "config.php";

$input = $_POST[pass1];
$confirm = $_POST[pass2];

$nip = $_POST[nip];
$nm = $_POST[nm];
$username = $_POST[username];
$pass1 = $_POST[pass1];

if ($input == $confirm){

$save = mysql_query("insert into tbl_contact values('$nip','$nm','$username','$pass1')");
	
	if ($save) { echo"data berhasil disimpan..!!"; }
	else { echo"data gagal disimpan..!!"; }

}else { echo"password tidak valid"; }

?>
