<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
 <script>
function validateForm() {
    var o = document.forms ["pg2a"]["f"].value;
    var p = document.forms ["pg2a"]["ab"].value;
	var u = document.forms ["pg2a"]["AZ"].value;
	var g = document.forms ["pg2a"]["a"].value;
	var j = document.forms ["pg2a"]["s"].value;
	var d = document.forms ["pg2a"]["d"].value;
	var e = +p + +u + +g + +j + +d;
	
	
	var xn = document.forms ["pg2a"]["x"].value;
	var yn = document.forms ["pg2a"]["l"].value;
	var zn = document.forms ["pg2a"]["z"].value;
	var wn = +yn + +zn;
	
	var a = document.forms ["pg2a"]["b"].value;
	var x = document.forms ["pg2a"]["x"].value;
	var y = document.forms ["pg2a"]["c"].value;
	var z = document.forms ["pg2a"]["v"].value;
	var w = +x + +y + +z;
	
	var ab = document.forms ["pg2a"]["r"].value;
	var xa = document.forms ["pg2a"]["q"].value;
	var ya = document.forms ["pg2a"]["w"].value;
	var za = document.forms ["pg2a"]["e"].value;
	var wa = +xa + +ya + +za;
	
	
	var b = document.forms ["pg2a"]["i"].value;
	var q = document.forms ["pg2a"]["b"].value;
	var t = document.forms ["pg2a"]["n"].value;
	var r = document.forms ["pg2a"]["m"].value;
	var k = document.forms ["pg2a"]["r"].value;
	var h = document.forms ["pg2a"]["t"].value;
	var f = document.forms ["pg2a"]["y"].value;
	var i = document.forms ["pg2a"]["u"].value;
	var c = +q + +t + +r + +h + +f + +i + +k;
		
		
	var bq = document.forms ["pg2a"]["AH"].value;
	var qq = document.forms ["pg2a"]["o"].value;
	var tq = document.forms ["pg2a"]["AC"].value;
	var rq = document.forms ["pg2a"]["AD"].value;
	var kq = document.forms ["pg2a"]["AE"].value;
	var hq = document.forms ["pg2a"]["AF"].value;
	var fq = document.forms ["pg2a"]["AG"].value;
	var cq = +qq + +tq + +rq + +hq + +fq + +kq;
	
	var fx = document.forms ["pg2a"]["AI"].value;
	var cx = +bq + +b;	
	
    if (o != e) {
        if (confirm ("Error in calculation in 1265. Please check."))
			return false;
		return true;
    } else if (xn != wn) {
        if (confirm ("Error in calculation in 1210. Please check."))
			return false;
		return true;
    } else if (a != w) {
        if (confirm ("Error in calculation in 1700. Please check."))
			return false;
		return true;
    } else if (ab != wa) {
        if (confirm ("Error in calculation in 1250. Please check."))
			return false;
		return true;
    } else if (b != c) {
        if (confirm ("Error in calculation in 1230. Please check."))
			return false;
		return true;
    } else if (bq != cq) {
        if (confirm ("Error in calculation in 1309. Please check."))
			return false;
		return true;
    } else if (fx != cx) {
        if (confirm ("Error in calculation in 1300. Please check."))
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
	<form name="pg2a" action="db1a.php" onsubmit="return validateForm()" method="post">
<h3>(Mandatory)<h3>
	




	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">

	<h3 align="center">PART-2a</h3>
	<h3 align="left"> 2a. BALANCE SHEET DATA</h3>

	<tr><td width=15>
		<strong>Sr. No</strong>  <td><strong>Items</strong>  <td width=15><strong>Item Code</strong> <td><strong>Current Year</strong>  


	<tr><td width=15>
		<strong>2.1.4</strong>  <td colspan="5"><strong>CURRENT LIABILITIES</strong>

	
		
	<tr><td width=15>
		<strong>(a) </strong> <td><strong>TOTAL SHORT TERM BORROWINGS(SECURED)</strong>  <td width=15><strong>1099</strong> <td><input type="text" name="ab"  size="20"></td> 

	<tr><td width=15>
		<strong></strong> <td><strong>TOTAL SHORT TERM BORROWINGS(UNSECURED)</strong>  <td width=15><strong>1060</strong> <td><input type="text" name="AZ"  size="20"></td> 
	
		
	
	<tr><td width=15>
		<strong> (b)</strong> <td><strong>TRADE PAYABLE</strong>  <td width=15><strong>1350</strong> <td><input type="text" name="a"  size="20"></td> 

		
	<tr><td width=15>
		<strong>(c) </strong> <td><strong>OTHER CURRENT LIABILITIES</strong>  <td width=15><strong>1360</strong> <td><input type="text" name="s"  size="20"></td> 

		
	<tr><td width=15>
		<strong>(d)</strong> <td><strong>TOTAL SHORT TERM PROVISIONS</strong>  <td width=15><strong>1262</strong> <td><input type="text" name="d"  size="20"></td> 

		
	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL CURRENT LIABILITIES (1099 + 1060 + 1350 + 1360 + 1262)</strong>  <td width=15><strong>1265</strong> <td><input type="text" name="f"  size="20"></td> 

		
		
	<tr><td width=15>
		<strong> </strong> <td><strong>GRAND TOTAL (EQUITY AND LIABILITIES) (1010+1030+1035+1020+1025+1265)</strong>  <td width=15><strong>1100</strong> <td><input type="text" name="g"  size="20"></td> 

		
	<tr><td width=15>
		<strong>2.2</strong> <td  colspan="3"><strong>ASSETS:</strong>   
		
		
	
	<tr><td width=15>
		<strong> 2.2.1</strong> <td colspan="3"><strong>NON-CURRENT ASSETS</strong></td> 

	<tr><td width=15>
		<strong> (a)</strong> <td colspan="3"><strong>FIXED ASSETS:</strong>   

	<tr><td width=15>
		<strong>1</strong> <td><strong>TOTAL GROSS TANGIBLE ASSETS</strong>  <td width=15><strong>1206</strong> <td><input type="text" name="l" size="20"></td> 

	<tr><td width=15>
		<strong>2</strong> <td><strong>TOTAL GROSS INTANGIBLE ASSETS</strong>  <td width=15><strong>1209</strong> <td><input type="text" name="z" size="20"></td> 
		
	<tr><td width=15>
		<strong></strong><td ><strong>TOTAL GROSS FIXED ASSETS (1206+1209)</strong><td width=15><strong>1210</strong><td><input type="text" name="x" size="20"></td> 


	<tr><td width=15>
		<strong> </strong> <td><strong>ACCUMULATED DEPRECIATION,DEPLETION & AMORTISATION</strong>  <td width=15><strong>1220</strong> <td><input type="text" name="c" size="20"></td>
			
	<tr><td width=15>
		<strong> </strong> <td><strong>ACCUMULATED IMPAIRMENT</strong>  <td width=15><strong>1221</strong><td><input type="text" name="v" size="20"></td>
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL NET BLOCK(1210+1220+1221)</strong>  <td width=15><strong>1700</strong><td><input type="text" name="b" size="20"></td> 
		

	<tr><td width=15>
		<strong>3</strong> <td><strong>CAPITAL WORK IN PROGRESS</strong>  <td width=15><strong>1240</strong> <td><input type="text" name="n" size="20"></td> 
		

	<tr><td width=15>
		<strong>4</strong> <td><strong>INTANGIBLE ASSETS UNDER DEVELOPMENT</strong>  <td width=15><strong>1245</strong>  <td><input type="text" name="m" size="20"></td>
		

	<tr><td width=15>
		<strong>(b) </strong> <td colspan= "3"><strong>NON-CURRENT INVESTMENTS</strong>  
		

	<tr><td width=15>
		<strong>1</strong> <td><strong>NET INVESTMENT PROPERTY</strong>  <td width=15><strong>1275</strong> <td><input type="text" name="q" size="20"></td> 
		

	<tr><td width=15>
		<strong>2</strong> <td><strong>TOTAL INVESTMENT IN EQUITY INSTRUMENTS</strong>  <td width=15><strong>1310</strong> <td><input type="text" name="w" size="20"></td> 
		

	<tr><td width=15>
		<strong>3</strong> <td><strong>TOTAL OTHER INVESTMENT</strong>  <td width=15><strong>1327</strong> <td><input type="text" name="e" size="20"></td> 
		

	<tr><td width=15>
		<strong> </strong> <td><strong>TOTAL NON-CURRENT INVESTMENT(1275+1310+1327)</strong>  <td width=15><strong>1250</strong> <td><input type="text" name="r" size="20"></td> 
		
	
		
	<tr><td width=15>
		<strong>(C)</strong> <td><strong>DEFERRED TAX ASSETS(NET)</strong>  <td width=15><strong>1281</strong> <td><input type="text" name="t" size="20"></td> 
		
	<tr><td width=15>
		<strong>(d)</strong> <td><strong>TOTAL LONG TERM LOANS AND ADVANCES</strong>   <td width=15><strong>1320</strong> <td><input type="text" name="y" size="20"></td> 
		

	<tr><td width=15>
		<strong>(e) </strong> <td><strong> TOTAL OTHER NON-CURRENT ASSETS</strong>  <td width=15><strong>1330</strong> <td><input type="text" name="u" size="20"></td> 


	<tr><td width=15>
		<strong></strong> <td><strong> TOTAL NON CURRENT ASSETS(1700+1240+1245+1250+1281+1320+1330)</strong>  <td width=15><strong>1230</strong> <td><input type="text" name="i" size="20"></td> 

	<tr><td width=15>
		<strong>2.2.2</strong> <td colspan ="3"><strong> CURRENT ASSETS</strong>  

	<tr><td width=15>
		<strong>(a)</strong> <td><strong> TOTAL CURRENT INVESTMENTS</strong>  <td width=15><strong>1540</strong> <td><input type="text" name="o" size="20"></td> 


    <tr><td width=15>
		<strong>(b)</strong> <td><strong> TOTAL INVENTORIES</strong>  <td width=15><strong>1550</strong> <td><input type="text" name="AC" size="20"></td> 

		
	<tr><td width=15>
		<strong>(c)</strong> <td><strong> TOTAL TRADE RECEIVABLES(NET)</strong>  <td width=15><strong>1545</strong> <td><input type="text" name="AD" size="20"></td> 
	
		
		
	<tr><td width=15>
		<strong>(d)</strong> <td><strong> TOTAL CASH AND BANK BALANCE</strong>  <td width=15><strong>1560</strong> <td><input type="text" name="AE" size="20"></td> 
	
		
	<tr><td width=15>
		<strong>(e)</strong> <td><strong> TOTAL SHORT TERM LOANS AND ADVANCES</strong>  <td width=15><strong>1620</strong> <td><input type="text" name="AF" size="20"></td> 
	
		
	<tr><td width=15>
		<strong>(f)</strong> <td><strong> OTHER CURRENT ASSETS</strong>  <td width=15><strong>1308</strong> <td><input type="text" name="AG" size="20"></td> 
	
		
	<tr><td width=15>
		<strong></strong> <td><strong> TOTAL CURRENT ASSETS(1540+1550+1545+1560+1620+1308)</strong>  <td width=15><strong>1309</strong> <td><input type="text" name="AH" size="20"></td> 
	
		
		
	<tr><td width=15>
		<strong></strong> <td><strong> GRAND TOTAL ASSETS(1230+1309)</strong>  <td width=15><strong>1300</strong> <td><input type="text" name="AI" size="20"></td> 
			
		
		
	</table>
	
	
	Note: Item Code 1300 should be equal to Item Code 1100 i.e. Assets must be equal to liabilities 
<input type="submit" value="Submit">






</form>
</body>
</html>