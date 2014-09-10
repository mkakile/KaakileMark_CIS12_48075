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
$grade='';

switch ($score>=90){ case true:$grade='A';break; default:
switch ($score>=80){ case true:$grade='B';break; default:
switch ($score>=70){ case true:$grade='C';break; default:
switch ($score>=60){ case true:$grade='D';break; default:$grade='F';
}
}
}
}
echo "<h1> A score of $score = $grade</h1>";
?>
</body>
</html>