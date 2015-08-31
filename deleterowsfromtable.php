<!doctype html>
<html>
<head>
<title>deleting rows to a table</title>
<link rel="stylesheet" type="text/css" href="styles/tu12.css"/>
<style> 
#displaycustomer 
{
	position:absolute;
	top:80px;
	left:10px;
	width:390px;
	height:500px;
	padding:10px;
	background-color:#C7DF4E;
}

</style>
</head>
<body>
<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h2>deleting Rows from a Table</h2>
<div id="displaycustomer">
<?php  
	 // connect database
$db=mysql_connect('localhost','root','');
if(!$db){
	echo "<h1> unable to connect to mysql</h1>";
}
$dbname='database1';
$test=mysql_select_db($dbname);
if(!$test){
	echo "<h1>unable to select database</h1>";
}
// select table and display result


$sql_statement="SELECT cus_name,cus_street,cus_city ";
$sql_statement.="FROM customer ";
$sql_statement.="ORDER BY cus_name";
$result=mysql_query($sql_statement);
$outputDisplay="";
$rowcount=0;
if(!$result)
{
$outputDisplay.="<br/><font color=red>MYSQL No:".mysql_errno();	
$outputDisplay.="<br/>MYSQL Error:".mysql_error();
$outputDisplay.="<br/>SQL Statement:".$sql_statement;
$outputDisplay.="<br/>MYSQL Effected rows:".mysql_affected_rows()."</font><br/>";			
}
else
{
		$outputDisplay="<h3>customer table data</h3>";
		
	$outputDisplay.='<table border=1 style="color:black;">';
	$outputDisplay.='<tr><th>delete?</th<th>cus_name</th><th>cus_street</th><th>cus_city</th></tr>'."\n";
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
		
		
		$row=mysql_fetch_array($result);
		$cus_name=$row['cus_name'];
		$cus_street=$row['cus_street'];
		$cus_city=$row['cus_city'];
		if(isset($_POST[$cus_name]))
		{
			$checked=$_POST[$cus_name];
		}
		else
		{
			
			$checked='N';
		}
		if($checked=='Y'){
			deletecustomer($db,$cus_name,$cus_street,$cus_city);
		}
		else
		{
			$rowcount++;
			$outputDisplay.="<td><input type='checkbox' name='.$cus_name 'value='Y'></td>";
			$outputDisplay.="<td>".$cus_name."</td>";
		    $outputDisplay.="<td>".$cus_street."</td>";
		    $outputDisplay.="<td>".$cus_city."</td>";
		    $outputDisplay.="</tr>\n";
		}
	}
	$outputDisplay.="</table>";
}
$outputDisplay.='<br/><input type="submit" value="delete customer"/>';
$outputDisplay.="<br /><br/><b>number of rows in result:$rowcount</b><br/><br/>";
echo $outputDisplay;

?>
</div>
</form>
</body>
</html>


<?php 
function deletecustomer($db,$cus_name,$cus_street,$cus_city)
{
	$statement="DELETE FROM customer ";
	$statement.="WHERE cus_name='.$cus_name'";
	
	$result=mysql_query($statement);
	if($result)
	{
		echo "<br>customer deleted:".$cus_name.",".$cus_street.",".$cus_city;
		
	}
	else{
			echo ("<h4>mysql no:".mysql_errno($result)."</h4>");
			echo ("<h4>mysql error:".mysql_error($result)."</h4>");
			echo ("<h4>SQL:".$statement."<h4>");
			echo ("<h4>mysql affected rows:".mysql_affected_rows($result)."</h4>");
		
	}
}

?>