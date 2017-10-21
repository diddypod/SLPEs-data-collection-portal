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

$typ="";
if (isset( $_GET["delete"] ))
    $typ='d';
else
    $typ='e';

$sql = "SELECT usname,pwd FROM usernames";
$result = $conn->query($sql);

if ($typ=='d'){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $un = $row["usname"];
            $pw = $row["pwd"];
            if(isset($_GET["$un"])){
                $sql = "DELETE FROM `usernames` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet1` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet2` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet2a` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet3` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet3a` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet4` where usname like '$un';";
                $conn->query($sql);
                $sql = "DELETE FROM `sheet5` where usname like '$un';";
                $conn->query($sql);
            }
        }
    }
}
if ($typ=='e'){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $us = $row["usname"];
            $pw = $row["pwd"];
            if (isset( $_GET["$us$pw"] )){
                $newus=$_GET["$us"];
                $newpass=$_GET["$pw"];
                $sql = "UPDATE usernames SET usname = '$newus',pwd = '$newpass' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet1 SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet2 SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet2a SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet3 SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet3a SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet4 SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
                $sql = "UPDATE sheet5 SET usname = '$newus' WHERE usname ='$us';";
                $conn->query($sql);
            }
        }
    }
}

if ($conn->query($sql) === TRUE) {
    header('Location: ' . 'acctmanage.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>