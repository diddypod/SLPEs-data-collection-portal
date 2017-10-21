<?php
$db_name="datacollection";
$mysql_user="root";
$mysql_pass="";
$server_name="localhost";

$connect = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name) or die('could not connect');
if ($connect -> connect_error){
	die('connection faild');
}
session_start();
$usname = $_SESSION['user'];
$yr=$_SESSION['year'];

$sql = "UPDATE sheet3 SET  1401IT='{$connect->real_escape_string($_POST['a'])}',1404IT='{$connect->real_escape_string($_POST['s'])}',1417IT='{$connect->real_escape_string($_POST['d'])}',1410IT='{$connect->real_escape_string($_POST['f'])}',1411IT='{$connect->real_escape_string($_POST['g'])}',1403IT='{$connect->real_escape_string($_POST['h'])}',1402IT='{$connect->real_escape_string($_POST['j'])}',1405IT='{$connect->real_escape_string($_POST['k'])}',1407IT='{$connect->real_escape_string($_POST['l'])}',1412IT='{$connect->real_escape_string($_POST['z'])}',1409IT='{$connect->real_escape_string($_POST['x'])}',1415IT='{$connect->real_escape_string($_POST['c'])}',1413IT='{$connect->real_escape_string($_POST['v'])}',1414IT='{$connect->real_escape_string($_POST['b'])}',1420IT='{$connect->real_escape_string($_POST['n'])}',1425IT='{$connect->real_escape_string($_POST['m'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./3a.php");

$connect->close();
?>



