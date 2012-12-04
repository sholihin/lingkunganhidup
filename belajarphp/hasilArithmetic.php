<?php
$perhitungan = $_GET[operand1] . $_GET[op] . $_GET[operand2];
eval("\$hasil = $perhitungan;");

echo("Hasil Perhitungan");
print"<br>";
echo("$hasil");
?>
