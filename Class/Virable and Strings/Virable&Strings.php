<?php
/*
Kakile Mark
08/27/2014
pupse: Comments/Strings and Variables

*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Strings and Variables</title>
</head>

<body>
<?php

//Declare Virables
$hours=40; //hours workerd
$payRate=9;//hour
//calculate the paycheck
$grossPay=$hours*$payRate;
//Output the result
echo"<p>Hours Worked = $hours (hrs)</p>";
echo '<p>Pay rate = $$payRate </p>';
echo "Paycheck = $".$grossPay.'</p>';
?>
</body> 
</html>