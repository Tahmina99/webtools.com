<!doctype html>
<html>
<head>
<title>Debugging Fruits table</title>

<link rel="stylesheet" type="text/css" href="styles/tu4_14.css"/>
</head>
<body>
<h4>Debugging Fruits Table</h4>
<?php 
$apples=$_POST['apples'];
 
 //print "<br/>DEBUG:'".$apples."'";
$pears=$_POST['pears'];

$totalfruit=$apples+$pears;

$diff=$apples-$pears;

$reversediff=-$diff;
print "<br/>DEBUG:'".$reversediff."'";
$multipliedapples=$apples*5;

$dividedapples=$apples/3;

$moduloapples=$apples%3;
print "<br/>-END-";
?>
<table border='1'>
<tr>
<th>Description</th>
<th>Calculated amount</th>
</tr>
<?php 
print "<tr><td>The number of apples is</td><td> $apples</td></tr> \n";
print "<tr><td>The number of pears is</td><td>$pears</td></tr>\n";
print "<tr><td>The number of apples than pears</td><td>$diff</td></tr>\n";
print "<tr><td>The reverse of that would be</td><td>$reversediff</td></tr>\n";
print "<tr><td>Five times as many apples as would be</td><td>$multipliedapples</td></tr>\n";
print "<tr><td>Apples divided between three would be</td><td>";
print $dividedapples;
print "</td></tr>\n";
print "<tr><td>Rounded to two decimal place would be:</td><td>";
print number_format($dividedapples,2);
print "</td></tr>\n";
print "<tr><td>Apples left over between three would be</td><td>";
print $moduloapples;
print "</td></tr>\n";

?>

</table>

</body>
</html>
