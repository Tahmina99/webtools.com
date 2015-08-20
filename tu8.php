<!doctype html>
<html>
<head>
<title>Using Checkboxes</title>
<link rel="stylesheet" type="text/css" href="styles/tu8.css"/>
</head>
<body>
<h3>Using Checkboxes </h3>
<?php
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];
$age=$_POST['age'];
$fullname="$firstname $lastname";
$factor=5;
$ageplus=$age+$factor;
$current_year=date('Y');
$birth_year=$current_year-$ageplus;
print "<p> your name is $fullname ";
print " and you say your age is $age ";
print " but i bet you r really $ageplus ";
print " and were born is $birth_year</p>";
?>
</body>
</html>
