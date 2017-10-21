<HEAD>
 <TITLE>Manage Accounts</TITLE>
 <STYLE type="text/css">
  BODY {text-align: center;
    font-family: sans-serif;
  }
  TABLE{
	border: 1px solid black;
	border-collapse: collapse;
	margin: 0 auto;}
  TR {
	height: 30px;}
  input[type=text], select {
    width: 200px;
    margin: 8px 10px;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;}
  input[type=submit] {
    width: 160px;
    background-color: #ffffff;
    color: black;
    font-weight: bold;
    padding: 14px 20px;
    margin: 8px 10px;
    border: 2px solid black;
    border-radius: 4px;
    cursor: pointer;}
  input[type=submit]:hover {
    background-color: #d3d3d3;}
  textarea {
    width: 300px;}
	height:50px; }
  h3 {
    text-align: center;
    font-size: 1.5em;
    color: #a9a9a9;
    font-family: "Verdana",sans-serif;}
    div{
    text-align: center;}
    form {
  display: inline-block;}
 </STYLE>
</HEAD>
<BODY>
    <br>
    <h3 align="center">Manage existing accounts</h3>
    <br>
    <form action="./quick.php" method="post">
        <input type="text" name="id" placeholder="Username"><input type="text" name="password" placeholder="Password"><input align="right" type="submit" value="Add New">
    </form>
    <br>
    <table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">
    <tr><th>Username</th><th>Password</th></tr>
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

    $sql = "SELECT usname,pwd FROM usernames";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $un = $row["usname"];
            $pw = $row["pwd"];
            echo ("<tr><td>$un</td><td>$pw</td></tr>");
        }
    }

    $conn->close();
    ?>
    </table>
    <br>
    <br>
    <div>
        <form align="center" action="./manage.php" method="post">
            <input type="submit" name="edit" value="Edit Usernames">
            <input type="submit" name="delete" value="Delete Usernames">
        </form>
    </div>
    <form align="center" action="./adminsuite.php" method="post">
            <input type="submit" name="edit" value="Done">
        </form>
  </BODY>
</HTML>