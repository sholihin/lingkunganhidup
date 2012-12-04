<?php
$i = "$_GET[angka]";

echo"<table border='1'><td>";
if($i == "1"){
	echo"<script>alert('satu');</script>";
}
elseif ($i == "2") {
	echo"dua";
}
elseif ($i == "3"){
	echo"tiga";
}
else { echo "gagal"; }
echo "</td></table>";
?>
