<!doctype html>
<html>
<head>
<title>Using Checkboxes</title>
<link rel="stylesheet" type="text/css" href="styles/tu8.css"/>
</head>
<body>
<h3>Appending </h3>
<?php
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];
$age=$_POST['age'];
$middle_init='Q.';
$fullname=$firstname.' ' .$middle_init.' '.$lastname;
$factor=5;
$ageplus=$age+$factor;
//$current_year=date('Y');
$birth_year=date('Y')-$ageplus;
print "<p>Regarding".$fullname ;
print "<br/>Entered age of".$age;
print "<br/> our profile program concludes that your real age is:".$ageplus;
print "<br/> and were born in the year:".$birth_year;
print "<br/> the current year is ".date('Y')."</p>";
?>

</body>
</html>
