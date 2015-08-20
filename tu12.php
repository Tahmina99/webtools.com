<!doctype html>
<html>
<head>
<title>Assignment 1</title>
<link rel="stylesheet" type="text/css" href="styles/tu12.css"/>
</head>
<body>
<img src="images/02.jpeg " alt="web development">
<h4> Thank you!  A representative will contact you soon</h4>
<?php
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];
$city=$_POST['city'];
$comments=$_POST['comments'];
$contactchoice=$_POST['contact'];

$phoneoremail=$_POST['phoneoremail'];
$fullname=$firstname.' '.$lastname;
print "<p>information submitted for:$fullname</p>\n";
print "<p>your $contactchoice is $phoneoremail<br/>\n";
print " and you are interested in living in $city</p>\n";
print "<textarea cols='60' rows='5' disabled='disabled' ";
print "class='textdisabled'>".$comments."</textarea>\n";
?>

</body>
</html>
