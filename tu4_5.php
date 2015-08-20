<!doctype html>
<html>
<head>
<title>The ELSE Statement</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_4.css"/>
</head>
<body>
<h4>The ELSE Statement</h4>
<?php
$name=$_POST['name'];
$year=$_POST['year'];
$current_year=date('Y');
$age=$current_year-$year;
print "<p> your name is $name and your are $age years old</p>";
if($age>40){
	print "<p>Better start playing for retriment!</p>";
	 
}
else
{
	print "<p>This is not your side</p>";
}
print "<p>-END-</p>";
?>

</body>
</html>
