<!doctype html>
<html>
<head>
<title>html form</title>
<link rel="stylesheet" type="text/css" href="styles/tu4.css"/>
</head>
<body>
<h3>College report</h3>
<?php
$firstname=$_POST['firstname'];
$position=$_POST['position'];
print "<p>you are <span class='textblue'> $firstname</span> and";
print " your position at the college is:<span class='textblue'> $position</span></p>";

?>
<p>it is another practice program of php</p>

</body>

</html>
