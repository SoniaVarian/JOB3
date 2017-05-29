<html>
<head>
<title>Perulangan For</title>
</head>
<body>
<?php

echo "<table border = 2 cellpadding = 5 cellpacing = 5>";

$b=1;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$b*$a; echo("$b x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";

$d=2;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$d*$a; echo("$d x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";
$e=3;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$e*$a; echo("$e x $a = $c");
	echo("<br>");
echo "</td>";
}

echo"<tr>";
$f=7;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$f*$a; echo("$f x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";
$g=12;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$g*$a; echo("$g x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";
?>
</body>
</html>
