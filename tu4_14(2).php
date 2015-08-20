<!doctype html>
<html>
<head>
<title>Your age</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_8.css"/>
</head>
<body>
<h4>Your age</h4>
<?php
$name=$_POST['name'];
$year=$_POST['year'];
if($name=='Tani')
{
	echo "<p>I am a student of cste dept</p>";
}
else{
	if($name>"M"){
		echo "<p>you are $name,which comes after L in the alphabet</p>";
	}
	else{
		echo "<p>you are $name,which comes after M in the alphabet</p>";
	}
}
if($year<1980)
{
	echo "<p>you were born before 1980</p>";
}
else if($year==1980)
{
	echo "<p>you were born in 1980</p>";
}
else{
	echo "<p>you were after in 1980</p>";
}
print "<p>-END-</p>";
?>

</body>
</html>
