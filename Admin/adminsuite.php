<html>
<head>
<title>Administrator</title>
<style>
input[type=text], select {
    width: 20 %;
    margin: 8px 10px;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit] {
    width: 180px;
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
    background-color: #d3d3d3;
}
form {
  display: inline-block;
}
h3 {
    text-align: center;
    font-family: "Verdana",sans-serif;
    font-size: 2em;
    color: #a9a9a9;
}
h4 {
    margin: 0px 20px;
    font-family: "Verdana",sans-serif;
    font-size: 1.2em;
    color: #676767;
}
a {
    margin: 0px 20px;
    font-family: "Verdana",sans-serif;
    font-size: .9em;
    color: #000000;
    font-weight: bold;
}
body {
    margin: 100px 200px;
    text-align: left;
}
div{
    text-align: center;
}
</style>
</head>
<body>
    <h3>Administrator</h3>
    <br>
    <h4>New Username and Password</h4>
    <form action="./quick.php" method="post">
        <input type="text" name="id" placeholder="Username"><input type="text" name="password" placeholder="Password"><input type="submit" value="Quick Add">
        <br>
    </form>
    <form align="left" action="./acctmanage.php">
        <input type="submit" value="Manage Existing">
    </form>
    <br>
    <br>
    <h4>Update Administrator Password</h4>
    <form action="./quick.php" method="post">
        <input type="text" name="old" placeholder="Previous Password"><input type="text" name="new" placeholder="New Password"><input type="submit" value="Update">
    </form>
    <br>
    <br>
    <h4>Set Year</h4>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datacollection";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$sql = "SELECT year FROM admindata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $year = $row['year'];
}} 
echo "<form action='./quick.php' method='post'><input type='text' name='yr' value='$year'><input type='submit' value='Update'></form>";
$conn->close();
?>
    <br>
    <br>
    <div>
        <form align="center" action="../login.php">
            <input type="submit" value="Fill Form">
        </form> 
    </div>
</body>
</html>