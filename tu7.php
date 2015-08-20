<!doctype html>
<html>
<head>
<title>Using Checkboxes</title>
<link rel="stylesheet" type="text/css" href="styles/tu7.css"/>
</head>
<body>
<h3>Using Checkboxes </h3>
<?php
$firstname=$_POST['firstname'];

if(isset($_POST['Phd'])){
$Phd=$_POST['Phd'];	
}
else
{
	$Phd="";
}
if(isset($_POST['MA'])){
$MA=$_POST['MA'];	
}
else
{
	$MA="";
}
if(isset($_POST['BA'])){
$Phd=$_POST['BA'];	
}
else
{
	$BA="";
}


print "<p>you are <span class='textblue'> $firstname</span> and";
print " the degree you have earned are:</p>";

print "<p><span class='textblue'> $BA</span></p>";
print "<p><span class='textblue'> $MA</span></p>";
print "<p><span class='textblue'> $Phd</span></p>";
?>
</body>
</html>
