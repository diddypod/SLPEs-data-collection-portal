<html>
<HEAD>
 <TITLE>SLPEs Form</TITLE>
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
  img {
	max-height: 100px;
	align: center;}
 </STYLE>
</HEAD>
<BODY>
	<form  action="db.php" method="post">
	<img  src='logo.jpg'/>
	<H2>DATA SHEET FOR THE SURVEY ON STATE LEVEL PUBLIC SECTOR ENTERPRISES (SLPEs)</H2>
	<table cellspacing="1" cellpadding="10" border="1" border="black" bgcolor="white" width="700">
	
	<h3 align="center">PART-1</h3>
	<h3>Name of the state/union territory (UT)* <input name = UT style=" width: 200px; height:20px;"></h3>
	<tr>
	<td colspan="2"><strong>1.COMPANY/CORPORATION PROFILE*</strong></tr></td>


	<tr>
		<td><strong>1.1  NAME OF THE ENTERPRISE</strong>
		<td><textarea name="NOE"></textarea></td>
	</tr>
	
	<tr>
	<td><strong>1.2   HOLDING/SUBSIDIARY COMPANY </strong></td>
		<td><textarea name="HOL" ></textarea></td>
	</tr>

	<tr>
	<td><strong>1.3   NAME OF CHAIRMAN/MANAGING DIRECTOR</strong></td>
		<td><textarea name="NOF" ></textarea></td>
	</tr>
		
	<tr>
	<td><strong>1.4   YEAR OF INCORPORATION<br>(FORMAT: yyyymmdd)</strong>	
		<td><input type="text" name="YOI" size="15"></td>
	</tr>
		
	<tr>
	<td><strong>1.5   ACT UNDER WHICH INCORPORATED (TEXT)</strong>	
		<td><textarea name="AUWI" ></textarea></td>
	</tr>


	

	<tr>
	<td colspan="2"><strong>1.7   CONTACT DETAILS(Registered/Coporate Office)</strong></td>
	</tr>

	<tr>
	<td><strong>1.7.1  ADDRESS</strong>	
		<td><textarea name="ADDR" ></textarea></td>
	</tr>

	<tr>
	<td><strong>1.7.2   DISTRICT</strong>	
		<td><input type="text" name="DIST" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.3   STATE</strong>	
		<td><input type="text" name="STST" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.4   PIN</strong>	
		<td><input type="text" name="P" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.5   URL Address (if any)</strong>	
		<td><input type="text" name="URL" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.6   E-mail Address,if any</strong>	
		<td><input type="text" name="EMAIL" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.7   Telephone Number,if any (along with STD code, CMD)</strong>	
		<td><input type="text" name="TELPN" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.8   FAX NUMBER (CMD)</strong>	
		<td><input type="text" name="FN" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.9   E-mail OF CMD</strong>	
		<td><input type="text" name="EMAILCMD" size="20"></td>
	</tr>

	<tr>
	<td colspan="2"><strong> Contact details of office In-charge of the Finance Department/Nodal Officer for verification of data</strong></td>
	</tr>

		
	<tr>
	<td><strong>1.7.10   NAME</strong>	
		<td><input type="text" name="NM" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.11   DESIGNATION</strong>	
		<td><input type="text" name="DISIG" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.12   TELEPHONE NUMBER (with STD code)</strong>	
		<td><input type="text" name="TELLPN" size="20"></td>
	</tr>
		
		
	<tr>
	<td><strong>1.7.13  E-mail OF NODAL OFFICER</strong>	
		<td><input type="text" name="EMAILNO" size="20"></td>
	</tr>
		


	</table>


<input type="submit" value="Submit">





</form>
</body>
</html>