<?php
/*
Mark Kakile
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade</title>
</head>

<body>
<?php
$score=rand (50, 100);
if ($score>=90){$grade='A';}
else if ($score>=80){$grade='B';}
else if ($score>=70){$grade='C';}
else if ($score>=60){$grade='D';}
else {$grade='F';}
echo "<h1> A score of $score = $grade</h1>";
?>
</body>
</html>