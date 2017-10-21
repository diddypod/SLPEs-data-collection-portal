<html>
<head>
<title>Form</title>
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
    margin: 6px 10px;
    font-weight: bold;
    padding: 14px 20px;
    border: 2px solid black;
    border-radius: 3px;
    cursor: pointer;    
}
input[type=submit]:hover {
    background-color: #d3d3d3;
}
form {
    width: auto;
    margin: 0 auto;
}
h3 {
    text-align: center;
    font-family: "Verdana",sans-serif;
    font-size: 2em;
    color: #a9a9a9;
    margin: 0px 20px;
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
    margin: 100px;
}
h4 {
    margin: 0px 20px;
    font-family: "Verdana",sans-serif;
    font-size: 1.2em;
    color: #676767;
}
h2 {
	text-align: center;
    font-size: 1.7em;}
div{
    text-align: center;
}
</style>
</head>
<body>
<H2>DATA SHEET FOR THE SURVEY ON STATE LEVEL PUBLIC SECTOR ENTERPRISES (SLPEs)
<br><br>
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
$sql = "SELECT year FROM admindata";
$result = $conn->query($sql);
if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()){
        $yr = $row['year'];
        echo "$yr";}

session_start();
$_SESSION['year']=$yr; // You can set the value however you like.

$conn->close();
?>
</H2>
<br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h4>Upload Balance Sheet:</h4>
    <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br><br><br>
    <h4>Select Sector:</h4>
    <br>    
    <select name="type">
    <option value="engg">Engineering</option>
    <option value="pnp">Printing & Publication</option>
    <option value="enr">Energy</option>
    <option value="phrm">Pharmaceuticals</option>
    <option value="txt">Textile</option>
    <option value="trad">Trading</option>
    <option value="manu">Manufacturing</option>
    <option value="chem">Chemicals</option>
    <option value="agro">Agro-Industries</option>
    <option value="tran">Transport</option>
    <option value="misc">Development of Service & Misc.Sectors</option>
    </select>
    <input type="submit" align='middle' value="Next" name="submit">
</form>
</body>
</html>