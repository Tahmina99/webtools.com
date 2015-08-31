<!doctype html>
<html>
<head>
<title>connect php with mysql</title>
<link rel="stylesheet" type="text/css" href="styles/tu12.css"/>
</head>
<body>
<h2>connect to database -SELECT from table</h2>
<?php 
$db=mysql_connect('localhost','root','');
if(!$db){
	echo "<h1> unable to connect to mysql</h1>";
}
$dbname='database1';
$test=mysql_select_db($dbname);
if(!$test){
	echo "<h1>unable to select database</h1>";
}
$sql_statement="SELECT cus_name,cus_street ";
$sql_statement.="FROM customer ";
$sql_statement.="WHERE cus_city='Harrison' ";
$sql_statement.="ORDER BY cus_name";
$result=mysql_query($sql_statement);
$outputDisplay="";
$rowcount=0;
if(!$result)
{
$outputDisplay.="<br/>MYSQL No:".mysql_errno();	
$outputDisplay.="<br/>MYSQL Error:".mysql_error();
$outputDisplay.="<br/>SQL Statement:".$sql_statement;
$outputDisplay.="<br/>MYSQL Effected rows:".mysql_affected_rows()."<br/>";			
}
else
{
	$outputDisplay="<h3>customer name and street based on city</h3>";
	$outputDisplay.='<table border=1 style="color:black;">';
	$outputDisplay.='<tr><th>cus_name</th><th>cus_street</th></tr>';
	$numresult=mysql_num_rows($result);
	for($i=0;$i<$numresult;$i++)
	{
		if(!($i%2)==0)
		{
			$outputDisplay.="<tr style=\"background-color:#F5DEB3;\">";
		}
		else{
			$outputDisplay.="<tr style=\"background-color:#F5DEB3;\">";
		}
		$rowcount++;
		$row=mysql_fetch_array($result);
		$cus_name=$row['cus_name'];
		$cus_street=$row['cus_street'];
		$outputDisplay.="<td>".$cus_name."</td>";
		$outputDisplay.="<td>".$cus_street."</td>";
		$outputDisplay.="</tr>";
	}
	$outputDisplay.="</table>";
}

?>
<hr size="4" style="background-color:#F5DEB3"; color:#F5DEB3;>
<?php 

$outputDisplay.="<br/><br/><b>number of rows in results:$rowcount </b><br/><br/>";
echo $outputDisplay;
?>
</body>
</html>