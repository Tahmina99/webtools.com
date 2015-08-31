<!doctype html>
<html>
<head>
<title>adding rows to a table</title>
<link rel="stylesheet" type="text/css" href="styles/tu12.css"/>
<style>
#customer
{
position:absolute;
	top:80px;
	left:400px;
	width:300px;
	height:500px;
	padding:10px;
	background-color:#C7DF4E;	
}
#displaycustomer 
{
	position:absolute;
	top:80px;
	left:10px;
	width:300px;
	height:500px;
	padding:10px;
	background-color:#C7DF4E;
}

</style>
</head>
<body>
<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h2>Adding Rows to a Table</h2>
<div id='customer'>
<h3>Add Customer</h3>
<p>Enter custome name:<br />
<input type='text' name='cus_name' size='10'/>
</p>
<p>Enter custome street:<br />
<input type='text' name='cus_street' size='10'/>
</p>
<p>Enter custome city:<br />
<input type='text' name='cus_city' size='10'/>
</p>
<input type="submit" value="Add customer"/>
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
// add customer to a table
if(isset($POST['cus_name']))
{
	$cus_name=trim($_POST['cus_name']);
}
else{
	$cus_name='';
}
if(isset($POST['cus_street']))
{
	$cus_street=trim($_POST['cus_street']);
}
else{
	$cus_street='';
}
if(isset($POST['cus_city']))
{
	$cus_city=trim($_POST['cus_city']);
}
else{
	$cus_city='';
}
if(empty($cus_name)||empty($cus_street)||empty($cus_city))
{
	$rtncode='';
}
else
{
	$rtncode=insertcustomer($db,$cus_name,$cus_street,$cus_city);
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
		if($rtncode==$cus_name)
		{
			$outputDisplay.="<td style='color:red;'>".$cus_name."</td>";
		}
		else
		{
			$outputDisplay.="<td>".$cus_name."</td>";
		}
		//$outputDisplay.="<td>".$cus_name."</td>";
		$outputDisplay.="<td>".$cus_street."</td>";
		$outputDisplay.="<td>".$cus_city."</td>";
		$outputDisplay.="</tr>";
	}
	$outputDisplay.="</table>";
}

?>
</div>
<div id='displaycustomer'>
<?php 

$outputDisplay.="<br/><br/><b>number of rows in results:$rowcount </b><br/><br/>";
echo $outputDisplay;
?>
</div>
</form>
</body>
</html>


<?php 
function insertcustomer($db,$cus_name,$cus_street,$cus_city)
{
	$statement="insert into customer (cus_name,cus_street,cus_city)";
	$statement.="values (";
	$statement.="'".$cus_name."',".$cus_street."',".$cus_city."'";
	$statement.=")";
	
	$result=mysql_query($statement);
	if($result)
	{
		echo "<br>customer added:".$cus_street.",".$cus_city;
		return $cus_name;
		
	}
	else{
		$errno=mysql_errno($db);
		if($errno=='1062')
		{
			echo "customer is already in table:<br/>".$cus_street.",".$cus_city;
		}
		else
		{
			echo ("<h4>mysql no:".mysql_errno($result)."</h4>");
			echo ("<h4>mysql error:".mysql_error($result)."</h4>");
			echo ("<h4>SQL:".$statement."<h4>");
			echo ("<h4>mysql affected rows:".mysql_affected_rows($result)."</h4>");
		}
		return 'NotAdded';
	}
}

?>