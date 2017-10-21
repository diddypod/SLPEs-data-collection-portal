<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
   <script>
function validateForm() {
	var znx = document.forms ["pg4"]["z"].value;
	var a = document.forms ["pg4"]["f"].value;
	var x = document.forms ["pg4"]["a"].value;
	var y = document.forms ["pg4"]["s"].value;
	var z = document.forms ["pg4"]["d"].value;
	var xn = document.forms ["pg4"]["h"].value;
	var zn = document.forms ["pg4"]["g"].value;
	var ynx = document.forms ["pg4"]["l"].value;
    var xnc = document.forms ["pg4"]["k"].value;
	var znc = document.forms ["pg4"]["j"].value;
	var wnc =  +a + +x + +y + +z + +xn + +zn + +ynx + +xnc + +znc;
	
	var ds = document.forms ["pg4"]["m"].value;
	var dx = document.forms ["pg4"]["n"].value;
	var dq = document.forms ["pg4"]["x"].value;
	var dv = document.forms ["pg4"]["b"].value;
	var dw = document.forms ["pg4"]["c"].value;
	var df = document.forms ["pg4"]["v"].value;
	var dl = +dx + +dq + +dv + +dw + +df;
	
		
    if (znx != wnc) {
        if (confirm ("Error in calculation in 2020. Please check."))
			return false;
		return true;
    } else if (ds != dl) {
        if (confirm ("Error in calculation in 2030. Please check."))
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
 </head>
<BODY>
	<form name="pg4" action="db3.php" onsubmit="return validateForm()" method="post">
	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-4</h3>
	<h3 align="left">4 OTHER MISCELLANEOUS DATA*</h3>

	<tr><td width=15>
		<strong>Sr. No</strong>  <td><strong>Items</strong>  <td width=15><strong>Item Code</strong> <td><strong>Current Year</strong> 


	<tr><td width=15>
		<strong>4.1</strong>  <td colspan="5"><strong>PAYMENT OF CENTRAL EXCHEQUER(ACTUAL ON CASH BASIS)</strong>


	<tr><td width=15>
		<strong>4.1.1</strong> <td><strong> INTEREST ON CENTRAL GOVERNMENT LONES </strong>  <td width=15><strong>2011</strong> <td><input type="text" name="a" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.2</strong> <td><strong> DIVIDEND ON CENTRAL GOVERNMENT EQUITY </strong>  <td width=15><strong>2012</strong> <td><input type="text" name="s" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.3</strong> <td><strong> CENTRAL SALES TAX #</strong>  <td width=15><strong>2013</strong> <td><input type="text" name="d" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.4</strong> <td><strong> CENTRAL EXCISE #</strong>  <td width=15><strong>2014</strong> <td><input type="text" name="f" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.5</strong> <td><strong> SERVICES TAX #</strong>  <td width=15><strong>2019</strong> <td><input type="text" name="g" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.6</strong> <td><strong> CUSTOMS DUTY #</strong>  <td width=15><strong>2015</strong> <td><input type="text" name="h" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.7</strong> <td><strong> CORPORATE TAX(incl. Fringe Benefit Tax) </strong>  <td width=15><strong>2016</strong> <td><input type="text" name="j" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.8</strong> <td><strong> DIVIDEND TAX # </strong>  <td width=15><strong>2017</strong> <td><input type="text" name="k" size="20"></td> 

	<tr><td width=15>
		<strong>4.1.9</strong> <td><strong> OTHER TAXES AND DUTIES #</strong>  <td width=15><strong>2018</strong> <td><input type="text" name="l" size="20"></td> 

	<tr><td width=15>
		<strong></strong> <td><strong> TOTAL (2011 TO 2019)*</strong>  <td width=15><strong>2020</strong> <td><input type="text" name="z" size="20"></td> 



	<tr><td width=15>
		<strong>4.2</strong> <td colspan="5"><strong> PAYMENT TO STATE EXCHEQUER ( ACTUALOF CASH BASIS)</strong>

	<tr><td width=15>
		<strong>4.2.1</strong> <td><strong> INTEREST ON STATE GOVERNMENT LONES </strong>  <td width=15><strong>2021</strong> <td><input type="text" name="x" size="20"></td> 
	<tr><td width=15>
		<strong>4.2.2</strong> <td><strong> DIVIDEND ON STATE GOVERNMENT EQUITY </strong>  <td width=15><strong>2025</strong> <td><input type="text" name="c" size="20"></td> 
		
	<tr><td width=15>
		<strong>4.2.3</strong> <td><strong> STATE TAX/STATE VAT #</strong>  <td width=15><strong>2022</strong> <td><input type="text" name="v" size="20"></td> 
		
	<tr><td width=15>
		<strong>4.2.4</strong> <td><strong> STATE EXCISE DUTY #</strong>  <td width=15><strong>2023</strong> <td><input type="text" name="b" size="20"></td> 
		
	<tr><td width=15>
		<strong>4.1.5</strong> <td><strong> OTHER TAXES AND DUTIES #</strong>  <td width=15><strong>2024</strong> <td><input type="text" name="n" size="20"></td> 

	<tr><td width=15>
		<strong></strong> <td><strong> TOTAL (2021 TO 2025)*</strong>  <td width=15><strong>2030</strong> <td><input type="text" name="m" size="20"></td> 

		
	<tr><td width=15>
		<strong>4.3</strong> <td><strong> EXPENDITURE ON R&D* </strong>  <td width=15><strong>2050</strong> <td><input type="text" name="q" size="20"></td> 

	<tr><td width=15>
		<strong>4.3</strong> <td><strong> RENT/ROYALTY/CESS PAID* </strong>  <td width=15><strong>2052</strong> <td><input type="text" name="w" size="20"></td></tr>

	<tr><td width=15>
		<strong>4.5</strong> <td><strong> TOTAL SUBSIDES/GRANT RECEIVED FROM CENTRAL&STATE GOVERNMENT*</strong>  <td width=15><strong>2057</strong> <td><input type="text" name="e" size="20"></td> 

	<tr><td width=15>
		<strong>4.6</strong> <td><strong> TOTAL FOREGIN EXCHANGE EARNED*</strong>  <td width=15><strong>1510</strong> <td><input type="text" name="r" size="20"></td> 

	<tr><td width=15>
		<strong>4.7</strong> <td><strong> TOTAL FOREGIN EXCHANGE INCURRED*</strong>  <td width=15><strong>1580</strong> <td><input type="text" name="t" size="20"></td> 

</table>

<h3>#Net Of MODVAT    *If Zero Kindly Enter as Zero and Confirm.</h3>

<input type="submit" value="Submit">




</form>
</body>
</html>