<?php

$user = "user"; //Enter the user name
$password = "password"; //Enter the password
$host = "host"; //Enter the host
$dbase = "database"; //Enter the database
$table = "table"; //Enter the table name

$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$email= $_POST['maill'];
$country= $_POST['country'];
$iama= $_POST['iama'];

$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($database, $connection);


$username_table= mysql_query( "SELECT username FROM $table WHERE username= '$username'" ) 
or die("SELECT Error: ".mysql_error()); 

mysql_query("INSERT INTO $table (column1, column2, column3, column4, column5)
VALUES (value1, value2, value3, value4, value5 )");

echo 'data entered';
mysql_close($connection);

?>
