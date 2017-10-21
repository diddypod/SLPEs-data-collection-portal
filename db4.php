<html>
<head>
<title>Finished</title>
<style>
input[type=submit] {
    width: 250px;
    background-color: #ffffff;
    color: black;
    font-weight: bold;
    padding: 14px 20px;
    margin: 8px 10px;
    border: 2px solid black;
    border-radius: 3px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #d3d3d3;}
</style>
</head>
<body>
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

$sql = "UPDATE sheet5 SET 4_8_1N='{$connect->real_escape_string($_POST['a'])}',4_8_2N='{$connect->real_escape_string($_POST['s'])}',4_8_3N='{$connect->real_escape_string($_POST['d'])}',TOTAL='{$connect->real_escape_string($_POST['f'])}',4_8_4N='{$connect->real_escape_string($_POST['g'])}',4_8_5N='{$connect->real_escape_string($_POST['h'])}',4_8_6N='{$connect->real_escape_string($_POST['j'])}',4_8_7N='{$connect->real_escape_string($_POST['k'])}',4_8_8N='{$connect->real_escape_string($_POST['AB'])}' WHERE usname='$usname' AND year='$yr';";
$connect->query($sql);

$connect->close();

echo "<br><br><br><br><br><font face =\"Verdana\" size=\"6\" color=\"#676767\">Finished</font><br><br><br>";
echo "<form align='center' action='./login.php'><input type='submit' value='Go back to Login'></form>";

?>
</body>
</html>