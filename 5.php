<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
    <script>
function validateForm() {
	
	var a = document.forms ["pg5"]["f"].value;
	var x = document.forms ["pg5"]["a"].value;
	var y = document.forms ["pg5"]["s"].value;
	var z = document.forms ["pg5"]["d"].value;
	
	var wnc =  +x + +y + +z;
	
	
	
		
    if (a != wnc) {
        if (confirm ("Error in calculation in TOTAL ( 4.8.1 + 4.8.2 + 4.8.3).Please Check."))
			return false;
        return true;
    }
	
}
</script>
 <STYLE type="text/css">
  BODY {text-align: center}
  TABLE{
	border: 1px solid black;
	border-collapse: collapse;
	margin: 0 auto;}
  TR {
	height: 30px;}
  input[type=text] {
    width: 100%;
	height: 20px;
    padding: 10px 10px;	}
  input[type=submit] {
    width: 50%;
    background-color: #ffffff;
    color: black;
	font-weight: bold;
    padding: 14px 20px;
    margin: 8px 0;
    border:2px solid black;
	border-radius: 3px;
    cursor: pointer;}
  input[type=submit]:hover {
    background-color: #d3d3d3;}
  textarea {
    width: 300px;
	height:50px; }
  h3 {
	text-align: center}
 </STYLE>
<BODY>
	<form name="pg5" action="db4.php"  onsubmit="return validateForm()" method="post">
	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-5</h3>

	<tr><td width=15>
		<strong>4.8</strong>  <td><strong>Employment(in nos.)*</strong>  <td width=15><strong>as of 31.3."current year"</strong> </td>  

	


	<tr><td width=15>
		<strong>4.8.1 </strong> <td><strong> NUMBER OF FUNCTIONAL DIRECTORS</strong> <td><input type="text" name="a" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.2 </strong> <td><strong> MANAGERIAL/SUPERVISORY LEVEL </strong>  <td><input type="text" name="s" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.3 </strong> <td><strong> BELOW SUPERVISORY LEVEL</strong> <td><input type="text" name="d" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong> TOTAL ( 4.8.1 + 4.8.2 + 4.8.3)*  </strong>   <td><input type="text" name="f" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.4</strong> <td><strong> CASUAL WORKER </strong> <td><input type="text" name="g" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.5</strong> <td><strong> CONTRACTUAL WORKER</strong>  <td><input type="text" name="h" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.6</strong> <td><strong> TOTAL NUMBER OF MALE EMPLOYEES </strong>  <td><input type="text" name="j" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.7</strong> <td><strong> TOTAL NUMBER OF FEMALE EMPLOYEES</strong> <td><input type="text" name="k" size="20"></td> 

	<tr><td width=15>
		<strong>4.8.8</strong> <td><strong> TOTAL NUMBER OF EMPLOYEES</strong> <td><input type="text" name="AB" size="20"></td> 


	

	</table>


<input type="submit" value="Submit">




</form>
</body>
</html>