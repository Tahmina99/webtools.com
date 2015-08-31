<!doctype html>
<html>
<head>
<title>pass data to select</title>
<link rel="stylesheet" type="text/css" href="styles/tu12.css"/>
</head>
<body>
<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h2>pass data to a select statement</h2>
<p>
Enter State Code to see Authors by State:
<input type='text' name='statecode' size='2'/>
</p>
<?php 
// get setcode
 if(isset($_POST['statecode']))
 {
	 $statecode=$_POST['statecode'];
	 if(empty($statecode)){ $statecode='ALL';}
 }
	 else{
		 $statecode='ALL';
	 }
$db=mysql_connect('localhost','root','');
if(!$db){
	echo "<h1> unable to connect to mysql</h1>";
}
$dbname='database1';
$test=mysql_select_db($dbname);
if(!$test){
	echo "<h1>unable to select database</h1>";
}
$sql_statement="SELECT cus_name,cus_street,cus_city ";
$sql_statement.="FROM customer ";
if($statecode !='ALL')
{
	$sql_statement.="WHERE cus_city='".$statecode."'";
}
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
		if($statecode=='ALL'){
		$outputDisplay="<h3>customer name and street</h3>";}
		else{
			$outputDisplay="<h3>customer who lives in".$statecode."</h3>";
		}
	$outputDisplay.='<table border=1 style="color:black;">';
	$outputDisplay.='<tr><th>cus_name</th><th>cus_street</th><th>cus_city</th></tr>';
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
		$cus_city=$row['cus_city'];
		$outputDisplay.="<td>".$cus_name."</td>";
		$outputDisplay.="<td>".$cus_street."</td>";
		$outputDisplay.="<td>".$cus_city."</td>";
		$outputDisplay.="</tr>";
	}
	$outputDisplay.="</table>";
}

?>
<br /><br /><input type="submit" value="submit sql statement"/>
<hr size="4" style="background-color:#F5DEB3"; color:#F5DEB3;>
<?php 

$outputDisplay.="<br/><br/><b>number of rows in results:$rowcount </b><br/><br/>";
echo $outputDisplay;
?>
</form>
</body>
</html>