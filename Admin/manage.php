<HTML>
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
  td {
    text-align: center;
    vertical-align: middle;
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
 </STYLE>
</HEAD>
<BODY>
    <br>
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

    $typ="";
    if (isset($_POST['edit']))
        $typ='e';
    elseif (isset($_POST['delete']))
        $typ='d';

    if ($typ=='e')
        echo "<h3>Edit Accounts</h3>";
    elseif ($typ=='d')
        echo "<h3>Delete Usernames</h3><form action='./edits.php'>";
    echo "<table cellspacing='1' cellpadding='10' border='1' border='black' bgcolor='white' width='700'>";
    echo "<tr><th>Username</th><th>Password</th>";
    if ($typ=='e')
        echo "<th>Submit</th></tr>";
    elseif ($typ=='d')
        echo "<th>Select</th></tr>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $un = $row["usname"];
            $pw = $row["pwd"];
            if ($typ=='e')
                echo ("<form action='./edits.php' method=\"get\"><tr><td><input type='text' value='$un' name='$un' placeholder='Username'></td><td><input type='text' value='$pw' name='$pw' placeholder='Password'></td><td><input name='$un$pw' type='submit' value='Update'></td></tr></form>");
            if ($typ=='d')
                echo ("<tr><td>$un</td><td>$pw</td><td><input name='$un' type='checkbox' value = 'de'></td></tr>");
        }
    }
    echo "</table><br><br>";
    if ($typ=='e')
        echo ("<form align='center' action='./adminsuite.php'><input type='submit' value='Done Editing'></form>");
    if ($typ=='d')
        echo ("<input type='submit' name= 'delete' value='Delete Selected'></form><form align='center' action='./adminsuite.php'><input type='submit' value='Done'></form>");
    $conn->close();
    ?>
  </BODY>
</HTML>