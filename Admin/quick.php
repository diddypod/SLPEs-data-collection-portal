<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datacollection";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = isset($_POST["id"])?$_POST["id"]:'';
$password = isset($_POST["password"])?$_POST["password"]:'';
$oldpass = isset($_POST["old"])?$_POST["old"]:'';
$newpass = isset($_POST["new"])?$_POST["new"]:'';
$year = isset($_POST["yr"])?$_POST["yr"]:'';

$sql = "SELECT year FROM admindata;";
$result = $conn->query($sql);
if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()){
        $yr = $row['year'];}

if (($id!='')&&($password!='')){
    $sql = "INSERT INTO usernames (usname, pwd) VALUES ('$id', '$password');";
    $conn->query($sql);}
if (($oldpass!='')&&($newpass!='')){
    $sql = "UPDATE admindata SET pwd = '$newpass' WHERE pwd like '$oldpass';";
    $conn->query($sql);}
if (!(strcmp($year,$yr)==0)&&($year!='')){
    $sql = "UPDATE admindata SET year = '$year'";
    $result = $conn->query($sql);}

header('Location: ' . $_SERVER['HTTP_REFERER']);


$conn->close();
?>