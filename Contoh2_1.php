<html><head><title>Statement IF</title></head>
<body>
<?php echo"<form action=\"$php_selt\" method=\"post\">";
$nilail=$_POST['nilai'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilail\" value=\"$nilail\" size=\"3\" type=\"text\" value=\
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol Cek
{ echo"<br><hl>";
	if($nilail=="")
		{ echo"Anda Belum menentukan Nilai..!";}
	elseif(!is_numeric($nilail)) //jika nilail tidak bertype numerik
		{ echo" Ini Bukan Nilai Angka"; }
	else
		{
				if($nilail<=30) // statement pertama
					{ echo"Anda mendapat nilai huruf <b> E </b>"; }
				elseif($nilail<=50)// statement kedua
					{ echo"Anda mendapat nilai huruf <b> D </b>"; }
				elseif($nilail<=70)// statement ketiga
					{ echo"Anda mendapat nilai huruf <b> C </b>"; }
				elseif($nilail<=85)// statement keempat
					{ echo"Anda mendapat nilai huruf <b> B </b>"; }
				else
					{ echo"Anda mendapat nilai huruf <b> A </b>"; }
		}
	echo"</hl>";
}
?>
</body>
</html>