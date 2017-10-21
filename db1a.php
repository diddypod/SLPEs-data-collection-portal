<?php


$db_name="datacollection";
$mysql_user="root";
$mysql_pass="";
$server_name="localhost";

session_start();
$usname = $_SESSION['user'];
$yr=$_SESSION['year'];

$connect = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name) or die('could not connect');
if ($connect -> connect_error){
	die('connection failed');
}

$sql = "UPDATE sheet2a SET 1099IT='{$connect->real_escape_string($_POST['ab'])}',1060IT='{$connect->real_escape_string($_POST['AZ'])}',1350IT='{$connect->real_escape_string($_POST['a'])}',1360IT='{$connect->real_escape_string($_POST['s'])}',1262IT='{$connect->real_escape_string($_POST['d'])}',1265IT='{$connect->real_escape_string($_POST['f'])}',1100IT='{$connect->real_escape_string($_POST['g'])}',1206IT='{$connect->real_escape_string($_POST['l'])}',1209IT='{$connect->real_escape_string($_POST['z'])}',1210IT='{$connect->real_escape_string($_POST['x'])}',1220IT='{$connect->real_escape_string($_POST['c'])}',1221IT='{$connect->real_escape_string($_POST['v'])}',1700IT='{$connect->real_escape_string($_POST['b'])}',1240IT='{$connect->real_escape_string($_POST['n'])}',1245IT='{$connect->real_escape_string($_POST['m'])}',1275IT='{$connect->real_escape_string($_POST['q'])}',1310IT='{$connect->real_escape_string($_POST['w'])}',1327IT='{$connect->real_escape_string($_POST['e'])}',1250IT='{$connect->real_escape_string($_POST['r'])}',1281IT='{$connect->real_escape_string($_POST['t'])}',1320IT='{$connect->real_escape_string($_POST['y'])}',1330IT='{$connect->real_escape_string($_POST['u'])}',1230IT='{$connect->real_escape_string($_POST['i'])}',1540IT='{$connect->real_escape_string($_POST['o'])}',1550IT='{$connect->real_escape_string($_POST['AC'])}',1545IT='{$connect->real_escape_string($_POST['AD'])}',1560IT='{$connect->real_escape_string($_POST['AE'])}',1620IT='{$connect->real_escape_string($_POST['AF'])}',1308IT='{$connect->real_escape_string($_POST['AG'])}',1309IT='{$connect->real_escape_string($_POST['AH'])}',1300IT='{$connect->real_escape_string($_POST['AI'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./3.php");

$connect->close();



?>