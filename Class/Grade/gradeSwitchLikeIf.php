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

switch ($score>=90){ case true:$grade='A'; default:}
switch ($score>=80&&$score<90){ case true:$grade='B'; default:}
switch ($score>=70&&$score<80){ case true:$grade='C'; default:}
switch ($score>=60&&$score<70){ case true:$grade='D'; default:}
switch ($score<60){ case true:$grade='F'; default:}
echo "<h1> A score of $score = $grade</h1>";
?>
</body>
</html>