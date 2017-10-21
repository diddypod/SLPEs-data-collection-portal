<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
<script>
function validateForm() {
    var o = document.forms ["pg2"]["ab"].value;
    var p = document.forms ["pg2"]["h"].value;
	
	var u = document.forms ["pg2"]["f"].value;
	var g = document.forms ["pg2"]["a"].value;
	var j = document.forms ["pg2"]["s"].value;
	var d = document.forms ["pg2"]["d"].value;
	var e = +g + +j + +d;
		
	
	var a = document.forms ["pg2"]["w"].value;
	var x = document.forms ["pg2"]["r"].value;
	var y = document.forms ["pg2"]["k"].value;
	var z = document.forms ["pg2"]["l"].value;
	var w = document.forms ["pg2"]["z"].value;
	var b = document.forms ["pg2"]["q"].value;
	var q = +x + +y + +z + +w + +b;
	
	var t = document.forms ["pg2"]["p"].value;
	var r = document.forms ["pg2"]["t"].value;
	var h = document.forms ["pg2"]["y"].value;
	var f = document.forms ["pg2"]["u"].value;
	var i = document.forms ["pg2"]["i"].value;
	var k = document.forms ["pg2"]["o"].value;
	var c = +r + +h + +f + +i + +k;
	
    if (o < p) {
        if (confirm ("Authorised Capital must be greater than Paid up Capital. Please check."))
			return false;
		return true;
    } else if (u != e){
		if(confirm ("Error in calculation in 1008. Please check."))
			return false;
		return true; 
		
	} else if (a != q){
		if (confirm ("Error in calculation in 1030. Please check."))
			return false;
		return true;
	} else if (t != c){
		if (confirm ("Error in calculation in 1025. Please check."))
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
</HEAD>
<BODY>
	<form name="pg2" action="db1.php" onsubmit="return validateForm()"  method="post">
<h3>(Mandatory)<h3>
	<h3>Note: Without filling data, no further entry would be allowed. NULL or zero entry will not be accepted in Part-I.




	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-2</h3>
	<h3 align="left"> 2 BALANCE SHEET DATA</h3>

	<tr><td width=15>
		<strong>Sr. No</strong>  <td><strong>Items</strong>  <td width=15><strong>Item Code</strong> <td><strong>Current Year</strong>  


	<tr><td width=15>
		<strong>2.1</strong>  <td colspan="5"><strong>EQUITY AND LIABILITIES:</strong>

	<tr><td width=15>
		<strong>2.1.1</strong>  <td colspan="5"><strong>SHAREHOLDERS FUNDS</strong>
		
	<tr><td width=15>
		<strong>(a)</strong>  <td colspan="5"><strong>SHARE CAPITAL</strong>
		
	<tr><td width=15>
		<strong> </strong> <td><strong>AUTHORISED CAPITAL</strong>  <td width=15><strong>1000</strong> <td><input type="text" name="ab" required size="20"></td> 

		
		
	<tr><td width=15>
		<strong> </strong>  <td colspan="5"><strong>PAID-UP CAPITAL:</strong>
		
		
	<tr><td width=15>
		<strong> </strong>  <td colspan="5"><strong>EQUITY SHARES</strong>
		
	<tr><td width=15>
		<strong> </strong> <td><strong>CENTRAL GOVERNMENT</strong>  <td width=15><strong>1001</strong> <td><input type="text" name="a"  size="20"></td> 

		
	<tr><td width=15>
		<strong> </strong> <td><strong>STATE GOVERNMENT</strong>  <td width=15><strong>1002</strong> <td><input type="text" name="s"  size="20"></td> 

		
	<tr><td width=15>
		<strong> </strong> <td><strong>OTHER (DOMESTIC)</strong>  <td width=15><strong>1007</strong> <td><input type="text" name="d"  size="20"></td> 

		
	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL EQUITY SHARES (1001 TO 1007)</strong>  <td width=15><strong>1008</strong> <td><input type="text" name="f"  size="20"></td> 

		
		
	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL PREFERENCE SHARES</strong>  <td width=15><strong>1340</strong> <td><input type="text" name="g"  size="20"></td> 

		
	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL PAID-UP CAPITAL (1008+1340)</strong>  <td width=15><strong>1010</strong> <td><input type="text" name="h" required size="20"></td> 
		
		
	<tr><td width=15>
		<strong>(b)</strong>  <td colspan="5"><strong>RESERVES & SURPLUS</strong>
		
	<tr><td width=15>
		<strong> </strong> <td><strong>CAPITAL RESERVE</strong>  <td width=15><strong>1021</strong> <td><input type="text" name="j" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong>GENERAL RESERVE</strong>  <td width=15><strong>1036</strong> <td><input type="text" name="k" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong>OTHER RESERVE</strong>  <td width=15><strong>1028</strong> <td><input type="text" name="l" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong>OTHER FUNDS</strong>  <td width=15><strong>1034</strong> <td><input type="text" name="z" size="20"></td> 
		
	<tr><td width=15>
		<strong></strong>  <td colspan="5"><strong>SURPLUS (CREDIT/DEBIT)</strong>	


	<tr><td width=15>
		<strong> </strong> <td><strong>OPENING BALANCE OF P/L ACCOUNT AT THE START OF F.Y. (1ST APRIL) (A)</strong>  <td width=15><strong>1338</strong> <td><input type="text" name="x" size="20"></td> 
			
	<tr><td width=15>
		<strong> </strong> <td><strong>PROFIT/LOSS OF CURRENT YEAR (B) (ITEM CODE 1339 Should be same as item code 1600)</strong>  <td width=15><strong>1339</strong> <td><input type="text" name="c" size="20"></td>
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL DIVIDED DECLARED (C)</strong>  <td width=15><strong>1480</strong> <td><input type="text" name="v" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL DIVIDED TAX (D)</strong>  <td width=15><strong>1490</strong> <td><input type="text" name="b" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>RETAINDED PROFITE (E)= (B-C-D)</strong>  <td width=15><strong>1500</strong> <td><input type="text" name="n" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TRANSFERRED TO RESERVES (F)</strong>  <td width=15><strong>1023</strong> <td><input type="text" name="m" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>CLOSING BALANCE AS ON 21ST MARCH OF THE F.Y (G)=(A+E-F) </strong>  <td width=15><strong>1026</strong> <td><input type="text" name="q" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL RESERVE & SURPLUS  FUNDS (1020 + 1036 + 1028 + 1034 + 1026)</strong>  <td width=15><strong>1030</strong> <td><input type="text" name="w" size="20"></td> 
		

	<tr><td width=15>
		<strong>(C) </strong> <td><strong>MONEY RESERVED AGAINST SHARE WARRANTS </strong>  <td width=15><strong>1035</strong> <td><input type="text" name="e" size="20"></td> 
		

	<tr><td width=15>
		<strong>2.1.2 </strong> <td><strong>TOTAL SHARE APPLICATION MONEY PENDING ALLOTMENT FUNDS</strong>  <td width=15><strong>1020</strong> <td><input type="text" name="r" size="20"></td> 
		
	<tr><td width=15>
		<strong>2.1.3 </strong> <td colspan="5"><strong>NON-CURRENT LIABILITIES</strong>  
		
	<tr><td width=15>
		<strong>(a) </strong> <td><strong>TOTAL LONG TERM BORROWINGS (SECURED)</strong>  <td width=15><strong>1110</strong> <td><input type="text" name="t" size="20"></td> 
		
	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL LONG TERM BORROWINGS (UNSECURED)</strong>   <td width=15><strong>1065</strong> <td><input type="text" name="y" size="20"></td> 
		

	<tr><td width=15>
		<strong>(b) </strong> <td><strong> DEFERRED TAX  LIABILITY (NET) (F)</strong>  <td width=15><strong>1080</strong> <td><input type="text" name="u" size="20"></td> 


	<tr><td width=15>
		<strong>(C) </strong> <td><strong> TOTAL OTHER LONG TERM  LIABILITIES</strong>  <td width=15><strong>1090</strong> <td><input type="text" name="i" size="20"></td> 

	<tr><td width=15>
		<strong>(d) </strong> <td><strong> TOTAL LONG TERM LIABILITIES </strong>  <td width=15><strong>1119</strong> <td><input type="text" name="o" size="20"></td> 

	<tr><td width=15>
		<strong> </strong> <td><strong> TOTAL NON-CURRENT LIABILITIES ( 1110 + 1065 + 1080 + 1090 + 1119)</strong>  <td width=15><strong>1025</strong> <td><input type="text" name="p" size="20"></td> 



	</table>
<input type="submit" value="Submit">

</form>
</body>
</html>