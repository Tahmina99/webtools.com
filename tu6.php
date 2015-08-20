<!doctype html>
<html>
<head>
<title>html form</title>
<link rel="stylesheet" type="text/css" href="styles/tu6.css"/>
</head>
<body>
<h3>Using radiobutton</h3>
<?php
$firstname=$_POST['firstname'];
$etype=$_POST['etype'];
print "<p>you are <span class='textblue'> $firstname</span> and";
print " your employment type is:";
print "<span class='textblue'> $etype</span></p>";
?>
</body>
</html>
