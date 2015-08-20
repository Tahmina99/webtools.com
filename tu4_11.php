<!doctype html>
<html>
<head>
<title>Using NOT</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_11.css"/>
</head>
<body>
<?php 
$firstname=$_POST['firstname'];
$city=$_POST['city'];
echo "<p>Hello $firstname</p>";
if(!($city=='Dhaka' || $city=='Noakhali'))
{
	echo "<p>Luxmipur Rocks!</p>";
}
else
{
	echo "<p>you can't live in the best city</p>";
}
echo "<p>-END-</p>";
?>

</body>
</html>
