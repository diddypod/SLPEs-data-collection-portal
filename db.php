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

$sql = "UPDATE sheet1 SET state='{$connect->real_escape_string($_POST['UT'])}',NOE='{$connect->real_escape_string($_POST['NOE'])}', HOLDING='{$connect->real_escape_string($_POST['HOL'])}', NOC='{$connect->real_escape_string($_POST['NOF'])}', YDOI='{$connect->real_escape_string($_POST['YOI'])}', ACTINCORPORATION='{$connect->real_escape_string($_POST['AUWI'])}',  ADDRESS='{$connect->real_escape_string($_POST['ADDR'])}', DISTRICT='{$connect->real_escape_string($_POST['DIST'])}', stateCORRPoffc='{$connect->real_escape_string($_POST['STST'])}', PIN='{$connect->real_escape_string($_POST['P'])}', URLAddress='{$connect->real_escape_string($_POST['URL'])}', Email='{$connect->real_escape_string($_POST['EMAIL'])}', TELNUMcorpOFFC='{$connect->real_escape_string($_POST['TELPN'])}', FAXNUMBER='{$connect->real_escape_string($_POST['FN'])}', EmailCMD='{$connect->real_escape_string($_POST['EMAILCMD'])}', NAME='{$connect->real_escape_string($_POST['NM'])}', DESIGNATION='{$connect->real_escape_string($_POST['DISIG'])}', TELNUMoffcINCHARfd='{$connect->real_escape_string($_POST['TELLPN'])}', EmailNODALOFFIC='{$connect->real_escape_string($_POST['EMAILNO'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

header ("Location: ./2.php");

$connect->close();
?>