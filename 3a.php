<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
   <script>
function validateForm() {
	
	var xn = document.forms ["pg3a"]["g"].value;
	var yn = document.forms ["pg3a"]["d"].value;
	var zn = document.forms ["pg3a"]["f"].value;
	var wn = yn-zn;
	
	var a = document.forms ["pg3a"]["j"].value;
	var b = document.forms ["pg3a"]["g"].value;
	var c = document.forms ["pg3a"]["h"].value;
	var d = b-c;
	
	var ax = document.forms ["pg3a"]["l"].value;
	var bx = document.forms ["pg3a"]["j"].value;
	var cx = document.forms ["pg3a"]["k"].value;
	var dx = bx-cx;
	
	var aq = document.forms ["pg3a"]["x"].value;
	var bq = document.forms ["pg3a"]["l"].value;
	var cq = document.forms ["pg3a"]["z"].value;
	var dq = bq-cq;
	
	var av = document.forms ["pg3a"]["b"].value;
	var bv = document.forms ["pg3a"]["c"].value;
	var cv = document.forms ["pg3a"]["v"].value;
	var dv = bv-cv;
	
	var aw = document.forms ["pg3a"]["n"].value;
	var bw = document.forms ["pg3a"]["x"].value;
	var cw = document.forms ["pg3a"]["b"].value;
	var dw = +bw + +cw;
	
	if (xn != wn){
		if (confirm ("Error in calculation in  1455. Please check."))
			return false;
		return true;
	} else if (a != d){
		if (confirm ("Error in calculation in 1467. Please check."))
			return false;
		return true;
	} else if (ax != dx){
		if (confirm ("Error in calculation in 1468. Please check."))
			return false;
		return true;
	}  else if (aq != dq){
		if (confirm ("Error in calculation in 1475. Please check."))
			return false;
		return true;
	}   else if (av != dv){
		if (confirm ("Error in calculation in 1495. Please check."))
			return false;
		return true;
	}   else if (aw != dw){
		if (confirm ("Please check your calculation again in 1600. please check."))
			return false;
		return true;
	}
	
}
</script> 
</head>
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
	<form name="pg3a" action="db2a.php" onsubmit="return validateForm()" method="post">
	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-3a</h3>
	
	<h3 align="left">3a. PROFIT AND LOSE ACCOUNT</h3>

	<tr><td width=15>
		<strong>Sr. No</strong>  <td><strong>Items</strong>  <td width=15><strong>Item Code</strong> <td><strong>Current Year</strong>  

	

	<tr><td width=15>
		<strong>3.4</strong> <td><strong>DEPRECIATION, DEPLETION & AMORTISATION</strong>  <td width=15><strong>1435</strong> <td><input type="text" name="a" size="20"></td> 

	<tr><td width=15>
		<strong>3.5</strong> <td><strong>IMPAIRMENT</strong>  <td width=15><strong>1436</strong> <td><input type="text" name="s" size="20"></td> 

	<tr><td width=15>
		<strong>3.6</strong> <td><strong>PROFIT BEFORE INT. EXCEPTIONAL AND EXTRA-ORDINARY ITEMS AND TAXES (PBEET)</strong>  <td width=15><strong>1437</strong> <td><input type="text" name="d" size="20"></td> 

	<tr><td width=15>
		<strong>3.7</strong> <td><strong> TOTAL FINANCE COST CHARGED TO P&L ACCOUNT (INTEREST+FINANCE CHARGES)</strong>  <td width=15><strong>1450</strong> <td><input type="text" name="f" size="20"></td> 

	<tr><td width=15>
		<strong>3.8</strong> <td><strong>PROFIT BEFORE EXCEPTIONAL,EXTRA-ORDINARY ITEM & TAX (PBEET)(1437-1450)</strong>  <td width=15><strong>1455</strong> <td><input type="text" name="g" size="20"></td> 

	<tr><td width=15>
		<strong>3.9</strong> <td><strong> EXCEPTIONAL ITEM</strong>  <td width=15><strong>1427</strong> <td><input type="text" name="h" size="20"></td> 

	<tr><td width=15>
		<strong>3.10</strong> <td><strong>PROFIT BEFORE EXTRA-ORDINARY ITEMS & TAX (PBEET)(1455-1427)</strong>  <td width=15><strong>1467</strong> <td><input type="text" name="j" size="20"></td> 

	<tr><td width=15>
		<strong>3.11</strong> <td><strong>EXTRA-ORDINARY ITEM</strong>  <td width=15><strong>1426</strong> <td><input type="text" name="k" size="20"></td> 


	
	<tr><td width=15>
		<strong>3.12</strong> <td><strong>PROFIT BEFORE TAX (PBT)(1467-1426)</strong>  <td width=15><strong>1468</strong> <td><input type="text" name="l" size="20"></td> 

	<tr><td width=15>
		<strong>3.13</strong> <td><strong>TOTAL TAX</strong>  <td width=15><strong>1465</strong> <td><input type="text" name="z" size="20"></td> 

	<tr><td width=15>
		<strong>3.14</strong> <td><strong> NET PROFIT/LOSS AFTER TAX(PAT)(1468-1465) </strong>  <td width=15><strong>1475</strong> <td><input type="text" name="x" size="20"></td>


	<tr><td width=15>
		<strong>3.15</strong> <td><strong>PROFIT/(LOSS) FROM DISCONTINUING OPERATIONS </strong>  <td width=15><strong>1491</strong> <td><input type="text" name="c" size="20"></td> 


	<tr><td width=15>
		<strong>3.16</strong> <td><strong> TAX EXPENSE OF DISCONTINUING OPERATIONS </strong>  <td width=15><strong>1492</strong> <td><input type="text" name="v" size="20"></td> 


	<tr><td width=15>
		<strong>3.17</strong> <td><strong>PROFIT/(LOSS) FROM DISCONTINUING OPERATIONS AFTER TAX (1491-1492)</strong>  <td width=15><strong>1495</strong> <td><input type="text" name="b" size="20"></td> 

	<tr><td width=15>
		<strong>3.18</strong> <td><strong>NET PROFIT/LOSS FROM CONTINUING AND DISCONTINUING OPERATIONS(1475+1495)</strong>  <td width=15><strong>1600</strong> <td><input type="text" name="n" size="20"></td> 


	</table>

		<input type="submit" value="Submit">


          <br>NOTE: Item Code 1339 should be same as Item Code 1600


</form>
</body>
</html>