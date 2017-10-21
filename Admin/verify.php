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

session_start();
$_SESSION['user']=$id; // You can set the value however you like.

$sql = "SELECT usname,pwd FROM admindata";
$result = $conn->query($sql);

$correct = false;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if ((strcmp($row["usname"],$id)==0) && (strcmp($row["pwd"],$password)==0)){
            header("Location:./adminsuite.php");
            exit;
            $correct=true;
        }
    }
}

$sql = "SELECT usname,pwd FROM usernames";
$result = $conn->query($sql);

$correct = false;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if ((strcmp($row["usname"],$id)==0) && (strcmp($row["pwd"],$password)==0)){
            header("Location:../page0.php");
            exit;
            $correct=true;
        }
    }
}

if ($correct==false)
    echo "<br><br><br><br><br><font face =\"Verdana\" size=\"6\" color=\"#676767\">Login unsuccessful</font>";

$conn->close();
?>