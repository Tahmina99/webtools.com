<!doctype html>
<html>
<head>
<title>Feild validation</title>
<link rel="stylesheet" type="text/css" href="styles/tu4_8.css"/>
</head>
<body>
<h4>Feild validation</h4>
<?php
$name=$_POST['name'];
$hourslept=$_POST['hourslept'];
$year=$_POST['year'];
$current_year=date('Y');
if(empty($name)){
	echo "you must enter a name";
	echo "<br/>Go back and try again";
	echo "</body></html>";
	exit;
}
if(empty($hourslept)){
	echo "you must the hours you sleep ";
	echo "<br/>Go back and try again";
	echo "</body></html>";
	exit;
}
else
{
	if(!is_numeric($hourslept)){
	echo "The hours you sleep must be numeric";;
	echo "<br/>Go back and try again";
	echo "</body></html>";
	exit;
	}
}
if(empty($year)){
	echo "you must enter a your birthyear";
	echo "<br/>Go back and try again";
	echo "</body></html>";
	exit;
}
else{
	if(!is_numeric($year)){
	echo "your birthyear  must be numeric.'".$year."'";
	echo "<br/>Go back and try again";
	echo "</body></html>";
	exit;
	}
	else{
		$length_of_year=strlen($year);
		if($length_of_year!=4)
		{
			echo "your birthyear must be exactly four numbers";
			echo "<br/>Go back and try again";
			echo "</body></html>";
			exit;

		}
	}
}
$current_year=date('Y');
$age=$current_year-$year;
$years_slept=($hourslept/24)*$age;
print "<p> your name is $name and your ";
print "spent $years_slept years of your life sleeping</p>";
if($age>40){
	print "<p>Better start playing for retriment!</p>";
	
	if($years_slept>15){
		echo "<p> you sleep too much!</p>";
	}
	}
else
{
	print "<p>Time is on your side!Really.</p>";
}
print "<p>-END-</p>";
?>

</body>
</html>
