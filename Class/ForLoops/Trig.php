<?php
/*
	Kakile Mark
	9/15/14
	Loop
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For loop table</title>
</head>

<body>
<h1>Trig table</h1>
<table width="200" border="1">
<tr>
	<th>Radians</th>
    <th>Degrees</th>
    <th>Sine</th>
    <th>Cosine</th>
    <th>Tangent</th>
</tr>
<?php

for ($angle=0;$angle<=180;$angle+=1){
	echo "<tr>";
	echo "<td>";
	echo "$angle";
	echo "</td>";
	$rad=$angle*atan(1)/45;
	$sine=sin ($rad);
	$consine=cos($rad);
	$tangent=tan($rad);
	echo "<td>$rad</td>";
	echo "<td>$sine</td>";
	echo "<td>$consine</td>";
	echo "<td>$tangent</td>";
	echo "</tr>";
}

?>
</table>
</body>
</html>