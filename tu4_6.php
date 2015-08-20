<!doctype html>
<html>
<head>
<title>The nested ifs Statement</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_4.css"/>
</head>
<body>
<h4>The nested ifs Statement</h4>
<?php
$name=$_POST['name'];
$hourslept=$_POST['hourslept'];
$year=$_POST['year'];
$current_year=date('Y');
$age=$current_year-$year;
$years_slept=($hourslept/24)*$age;
print "<p> your name is $name and your ";
print "spent $years_slept years of your life sleeping</p>";
if($age>40){
	print "<p>Better start playing for retriment!</p>";
	if($years_slept>15){
		print "<p>you sleep too much</p>";
	}
	 else{
		 print "<p>yes,I mean it</p>";
	 }
}
else
{
	print "<p>Time is on your side!Really.</p>";
}
print "<p>-END-</p>";
?>

</body>
</html>
