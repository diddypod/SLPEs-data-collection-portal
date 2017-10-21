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

$sql = "UPDATE sheet4 SET 2011IT='{$connect->real_escape_string($_POST['a'])}',2012IT='{$connect->real_escape_string($_POST['s'])}',2013IT='{$connect->real_escape_string($_POST['d'])}',2014IT='{$connect->real_escape_string($_POST['f'])}',2019IT='{$connect->real_escape_string($_POST['g'])}',2015IT='{$connect->real_escape_string($_POST['h'])}',2016IT='{$connect->real_escape_string($_POST['j'])}',2017IT='{$connect->real_escape_string($_POST['k'])}',2018IT='{$connect->real_escape_string($_POST['l'])}',2020IT='{$connect->real_escape_string($_POST['z'])}',2021IT='{$connect->real_escape_string($_POST['x'])}',2025IT='{$connect->real_escape_string($_POST['c'])}',2022IT='{$connect->real_escape_string($_POST['v'])}',2023IT='{$connect->real_escape_string($_POST['b'])}',2024IT='{$connect->real_escape_string($_POST['n'])}',2030IT='{$connect->real_escape_string($_POST['m'])}',2050IT='{$connect->real_escape_string($_POST['q'])}',2052IT='{$connect->real_escape_string($_POST['w'])}',2057IT='{$connect->real_escape_string($_POST['e'])}',1510IT='{$connect->real_escape_string($_POST['r'])}',1580IT='{$connect->real_escape_string($_POST['t'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./5.php");

$connect->close();
?>