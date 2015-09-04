<?php // query-mysqli.php
require_once 'login.php';
$connection =new mysqli($db_hostname, $db_username, $db_password, $db_database);
if ($connection->connect_error) die($connection->connect_error);
$query = "SELECT * FROM customer";
$result = $connection->query($query);
if (!$result) die($connection->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
echo 'cus_name.: ' . $result->fetch_assoc()['cus_name'] . '<br>';
$result->data_seek($j);
echo 'cus_street: ' . $result->fetch_assoc()['cus_street'] . '<br>';
$result->data_seek($j);
echo 'cus_city: ' . $result->fetch_assoc()['cus_city'] . '<br>';
}
$result->close();
$connection->close();
?>