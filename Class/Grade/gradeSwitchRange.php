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

switch (true){
case $score>=90:           $grade='A';break;
case $score>=80&&$score<90:$grade='B';break;
case $score>=70&&$score<80:$grade='C';break;
case $score>=60&&$score<70:$grade='D';break;
default:                    $grade='F';
}
echo "<h1> A score of $score = $grade</h1>";
?>
</body>
</html>