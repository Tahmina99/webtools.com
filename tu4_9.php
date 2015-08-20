<!doctype html>
<html>
<head>
<title>Using AND</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_8.css"/>
</head>
<body>
<h4>Using AND</h4>
<?php
$name=$_POST['name'];
$hourslept=$_POST['hourslept'];
$year=$_POST['year'];
$current_year=date('Y');
$age=$current_year-$year;
$years_slept=($hourslept/24)*$age;
print "<p> your name is $name and your ";
print "spent $years_slept years of your life sleeping</p>";
if($age>40&& $years_slept>15){
	print "<p>Better start playing for retriment and you sleep too much!</p>";
	}
else
{
	print "<p>Time is on your side!Really.</p>";
}
print "<p>-END-</p>";
?>

</body>
</html>
