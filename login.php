<html>
<head>
<title>Login</title>
<style>
input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=password], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    width: 16%;
    background-color: #ffffff;
    color: black;
    font-weight: bold;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid black;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #d3d3d3;
}

body{
    margin: margin: 0 auto;
    text-align: center
}
</style>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<font face ="Verdana" size="6" color="#676767">Log in to enter and edit data</font>
<br>
<br>
<br>

<form action="./Admin/verify.php" method="post">
<input type="text" name="id" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password"><br>
<input type="submit" value ="Log In">
</form>

</body>
</html>