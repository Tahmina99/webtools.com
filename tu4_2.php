<!doctype html>
<html>
<head>
<title>simple math</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_2.css"/>
</head>
<body>
<h4>simple math</h4>
<?php
$apples=$_POST['apples'];
$Peares=$_POST['Peares'];
$totalfruit=$apples+$Peares;
$diff=$apples-$Peares;
$reversediff=-$diff;
$multipliedapples=$apples*5;
$dividedapples=$apples/3;
$moduloapples=$apples%3;
print "<p>The number of apples is $apples ane the number of peares is $Peares";
print "<p>there $diff more than apples than peares";
print "<p>the reverse of that would be $reversediff";
print "<p>five times as many apples would be $multipliedapples apples";
print "<p>If i divided the apples equally between three of us,each person ";
print "would get $dividedapples apples";
print "<p>If i rounded the number above to two decimal places it would be";
print number_format($dividedapples,2);
print "<p> If i divided the apples equally between three of us,there ";
print "would be $moduloapples apples left over";
?>

</body>
</html>
