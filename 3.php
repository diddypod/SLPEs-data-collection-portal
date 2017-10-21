<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
  <script>
function validateForm() {
	var a = document.forms ["pg3"]["f"].value;
	var x = document.forms ["pg3"]["a"].value;
	var y = document.forms ["pg3"]["s"].value;
	var z = document.forms ["pg3"]["d"].value;
	var w = +x + +y + +z;
	
	var xn = document.forms ["pg3"]["h"].value;
	var yn = document.forms ["pg3"]["f"].value;
	var zn = document.forms ["pg3"]["g"].value;
	var wn = yn-zn;
	
    var xnc = document.forms ["pg3"]["k"].value;
	var ync = document.forms ["pg3"]["h"].value;
	var znc = document.forms ["pg3"]["j"].value;
	var wnc = +ync + +znc;
	
	
	var rnx = document.forms ["pg3"]["n"].value;
	var xnx = document.forms ["pg3"]["x"].value;
	var ynx = document.forms ["pg3"]["l"].value;
	var znx = document.forms ["pg3"]["z"].value;
	var anx = document.forms ["pg3"]["b"].value;
	var yxn = document.forms ["pg3"]["c"].value;
	var znb = document.forms ["pg3"]["v"].value;
	var wnx = +xnx + +ynx + +znx + +anx + +yxn + +znb;
		
    if (a != w) {
        if (confirm ("Error in calculation in 1410. Please check."))
			return false;
		return true;
    } else if (xn != wn) {
        if (confirm ("Error in calculation in 1403. Please check."))
			return false;
		return true;
    } else if (xnc != wnc) {
        if(confirm ("Error in calculation in 1405. Please check."))
			return false;
		return true;
    } else if (rnx != wnx) {
        if (confirm ("Error in calculation in 1420. Please check."))
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
	<form name="pg3" action="db2.php" onsubmit="return validateForm()" method="post">
	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-3</h3>
	<h3 align="center"> PROFIT AND LOSE ACCOUNT DATA REVENUE FROM OPERATIONS(Continuing Operations)</h3>
	<h3 align="left">3 PROFIT AND LOSE ACCOUNT</h3>

	<tr><td width=15>
		<strong>Sr. No</strong>  <td><strong>Items</strong>  <td width=15><strong>Item Code</strong> <td><strong>Current Year</strong>  

	<tr><td width=15>
		<strong>3.1</strong>  <td colspan="5"><strong>REVENUE</strong>
	<tr><td width=15>
		<strong>3.1.1</strong>  <td colspan="5"><strong>REVENUE FROM OPERATIONS</strong>


	<tr><td width=15>
		<strong>(a) </strong> <td><strong> SALE OF PRODUCTS/INTEREST INCOME IN CASE OF FINANCIAL ENTERPRISES</strong>  <td width=15><strong>1401</strong> <td><input type="text" name="a" size="20"></td> 

	<tr><td width=15>
		<strong>(b) </strong> <td><strong> SALE OF SERVICES </strong>  <td width=15><strong>1404</strong> <td><input type="text" name="s" size="20"></td> 

	<tr><td width=15>
		<strong>(c) </strong> <td><strong> OTHER OPERATING REVENUE/REVENUE FROM OTHER FINANCIAL SERVICES IN CASE OF FINANCIAL ENTERPRISES</strong>  <td width=15><strong>1417</strong> <td><input type="text" name="d" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong> TOTAL GROSS TURNOVER/REVENUE ( 1401 + 1404 + 1417)  </strong>  <td width=15><strong>1410</strong> <td><input type="text" name="f" size="20"></td> 

	<tr><td width=15>
		<strong>3.1.2</strong> <td><strong> LESS: EXCISE DUTY </strong>  <td width=15><strong>1411</strong> <td><input type="text" name="g" size="20"></td> 

	<tr><td width=15>
		<strong>3.1.3</strong> <td><strong> NET TURNOVER/REVENUE (1410 - 1411)</strong>  <td width=15><strong>1403</strong> <td><input type="text" name="h" size="20"></td> 

	<tr><td width=15>
		<strong>3.1.4</strong> <td><strong> OTHER INCOME </strong>  <td width=15><strong>1402</strong> <td><input type="text" name="j" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong> TOTAL REVENUE (1403 + 1402)</strong>  <td width=15><strong>1405</strong> <td><input type="text" name="k" size="20"></td> 


	<tr><td width=15>
		<strong>3.2</strong> <td colspan="5"><strong> EXPENDITURE ON</strong>  

	<tr><td width=15>
		<strong>3.2.1</strong> <td><strong> COST OF MATERIAL CONSUMED</strong>  <td width=15><strong>1407</strong> <td><input type="text" name="l" size="20"></td> 

	<tr><td width=15>
		<strong>3.2.2</strong> <td><strong> POWER AND FUEL</strong>  <td width=15><strong>1412</strong> <td><input type="text" name="z" size="20"></td> 

	<tr><td width=15>
		<strong>3.2.3</strong> <td><strong> SALARY, WAGES & BENEFITS/EMPLOYEES EXPENSES </strong>  <td width=15><strong>1409</strong> <td><input type="text" name="x" size="20"></td>


	<tr><td width=15>
		<strong>3.2.4</strong> <td><strong> OTHER OPERATING/DIRECT/MANUFACTURING EXPENSES</strong>  <td width=15><strong>1415</strong> <td><input type="text" name="c" size="20"></td> 


	<tr><td width=15>
		<strong>3.2.5</strong> <td><strong> EXPENDITURE ON CSR ACTIVITES </strong>  <td width=15><strong>1413</strong> <td><input type="text" name="v" size="20"></td> 


	<tr><td width=15>
		<strong>3.2.6</strong> <td><strong> OTHER EXPENSES</strong>  <td width=15><strong>1414</strong> <td><input type="text" name="b" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong> TOTAL EXPENDITURE (1407 + 1412 + 1409 + 1415 + 1414 +1413)  </strong>  <td width=15><strong>1420</strong> <td><input type="text" name="n" size="20"></td> 


	<tr><td width=15>
		<strong>3.3</strong> <td><strong> PROFIT BEFORE DEPRECIATION IMPAIRMENT INTEREST, TAXES, EXCEPTIONAL AND EXTRA ORDINARY ITEM (PBDITEE) (1405-1420)  </strong>  <td width=15><strong>1425</strong> <td><input type="text" name="m" size="20"></td>


	</table>


<input type="submit" value="Submit">




</form>
</body>
</html>