<?php

$db_name="datacollection";
$mysql_user="root";
$mysql_pass="";
$server_name="localhost";


$connect = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name) or die('could not connect');
if ($connect -> connect_error){
	die('connection failed');
}

session_start();
$usname = $_SESSION['user'];
$yr=$_SESSION['year'];


$sql = "UPDATE sheet3a SET  1435IT='{$connect->real_escape_string($_POST['a'])}',1436IT='{$connect->real_escape_string($_POST['s'])}',1437IT='{$connect->real_escape_string($_POST['d'])}',1450IT='{$connect->real_escape_string($_POST['f'])}',1455IT='{$connect->real_escape_string($_POST['g'])}',1427IT='{$connect->real_escape_string($_POST['h'])}',1467IT='{$connect->real_escape_string($_POST['j'])}',1426IT='{$connect->real_escape_string($_POST['k'])}',1468IT='{$connect->real_escape_string($_POST['l'])}',1465IT='{$connect->real_escape_string($_POST['z'])}',1475IT='{$connect->real_escape_string($_POST['x'])}',1491IT='{$connect->real_escape_string($_POST['c'])}',1492IT='{$connect->real_escape_string($_POST['v'])}',1495IT='{$connect->real_escape_string($_POST['b'])}',1600IT='{$connect->real_escape_string($_POST['n'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./4.php");

$connect->close();






?>