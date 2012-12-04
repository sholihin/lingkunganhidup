<h1><marquee bhviour="scroll">Tanggal PHP</marquee></h1>
<marquee bhviour="scroll"><img src="img/android.jpg"></marquee>
<?php
echo"<select name='tgl'>";

for ($i = 1; $i <= 30; $i++){
echo "<option value='$i'>$i</option>";
}

echo"</select>";
echo'
<select name="bulan">
<option value="jan"> Januari </option>
<option value="feb"> Februari </option>
<option value="mart"> Maret </option>
<option value="aprl"> April </option>
<option value="mei"> Mei </option>
<option value="jun"> Juni </option>
<option value="jul"> Juli </option>
<option value="agust"> Agustus </option>
<option value="sep"> September </option>
<option value="okt"> Oktober </option>
<option value="nov"> November </option>
<option value="des"> Desember </option>
</select>
';

echo"<select name='combobox'>";

for ($i = 1991; $i <= 2012; $i++) {
echo "<option value='$i'>$i</option>";
}

echo"</select>";
?>

