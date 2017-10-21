<?php
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$typ = isset($_POST["type"])?$_POST["type"]:'';
echo $typ;

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

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
//Insert our data

$exists = false;
echo '$exists';

$sql = "SELECT usname,year FROM sheet1";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if ((strcmp($row["usname"],$usname)==0)&&(strcmp($row["year"],$yr)==0)){
            $exists=true;
            $sql = "UPDATE sheet1 SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet2 SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet2a SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet3 SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet3a SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet4 SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
            $sql = "UPDATE sheet5 SET type='{$connect->real_escape_string($_POST['type'])}' where usname='$usname'";
            $connect->query($sql);
        }
    }
}
if ($exists == false){
    $sql = "INSERT INTO sheet1 (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet2 (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet3 (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet4 (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet5 (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet2a (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
    $sql = "INSERT INTO sheet3a (usname,type,year) VALUES ('$usname','{$connect->real_escape_string($_POST['type'])}','$yr');";
    $connect->query($sql);
}
header("Location: ./1.php");
?>