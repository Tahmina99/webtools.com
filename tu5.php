<!doctype html>
<html>
<head>
<title>html form</title>
<link rel="stylesheet" type="text/css" href="styles/tu5.css"/>
</head>
<body>
<h3>Using textarea</h3>
<?php
$firstname=$_POST['firstname'];
$comments=$_POST['comments'];
print "<p>you are <span class='textblue'> $firstname</span> and";
print " your comments about the college are:</p>";
//print "<p><span class='textblue'> $comments</span></p>";


//alternative process
print "<textarea name='comments' rows='7' cols='50' disabled='disabled' class='textdisabled'>";
print $comments;
print "</textarea>";
?>
</body>
</html>
