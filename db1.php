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


$sql = "UPDATE sheet2 SET 1000IT={$connect->real_escape_string($_POST['ab'])},1001IT='{$connect->real_escape_string($_POST['a'])}',1002IT='{$connect->real_escape_string($_POST['s'])}',1007IT='{$connect->real_escape_string($_POST['d'])}',1008IT='{$connect->real_escape_string($_POST['f'])}',1340IT='{$connect->real_escape_string($_POST['g'])}',1010IT='{$connect->real_escape_string($_POST['h'])}',1021IT='{$connect->real_escape_string($_POST['j'])}',1036IT='{$connect->real_escape_string($_POST['k'])}',1028IT='{$connect->real_escape_string($_POST['l'])}',1034IT='{$connect->real_escape_string($_POST['z'])}',1338IT='{$connect->real_escape_string($_POST['x'])}',1339IT='{$connect->real_escape_string($_POST['c'])}',1480IT='{$connect->real_escape_string($_POST['v'])}',1490IT='{$connect->real_escape_string($_POST['b'])}',1500IT='{$connect->real_escape_string($_POST['n'])}',1023IT='{$connect->real_escape_string($_POST['m'])}',1026IT='{$connect->real_escape_string($_POST['q'])}',1030IT='{$connect->real_escape_string($_POST['w'])}',1035IT='{$connect->real_escape_string($_POST['e'])}',1020IT='{$connect->real_escape_string($_POST['r'])}',1110IT='{$connect->real_escape_string($_POST['t'])}',1065IT='{$connect->real_escape_string($_POST['y'])}',1080IT='{$connect->real_escape_string($_POST['u'])}',1090IT='{$connect->real_escape_string($_POST['i'])}',1119IT='{$connect->real_escape_string($_POST['o'])}',1025IT='{$connect->real_escape_string($_POST['p'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./2a.php");

$connect->close();
?>



