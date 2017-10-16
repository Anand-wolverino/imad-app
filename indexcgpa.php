<html>
<style type="text/css">

body {
	background-repeat: repeat-x;
	background-color: #F4F4F9;
	float: none;
	opacity: 0.96;
	color: #0A0000;
	text-align: center;
	text-indent: 0px;
	border: thin double #0F55FB;
	text-shadow: 0px 0px #639BF1;
	background-image: url(cal.jpg);
}
.note {
	background-color: #25204B;
	color: #ECE7E7;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-variant: normal;
	font-weight: bolder;
	font-size: medium;
	text-align: center;
	border-width: thin;
	border-style: groove;
}
</style>
<body>


<h1 align="center"> SRM GPA CALCULATOR </h1>
<form action="cgpacal.php" method="GET">
	SUB1 CREDIT:<input type=" int" name="sc1"/>
	SUB1 GRADEPT:<input type="int" name="sg1"/><br><br>
	SUB2 CREDIT:<input type=" int" name="sc2"/>
	SUB2 GRADEPT:<input type="int" name="sg2"/><br><br>
	SUB3 CREDIT:<input type="int" name="sc3"/>
	SUB3 GRADEPT:<input type=" int" name="sg3"/><br><br>
	SUB4 CREDIT:<input type=" int" name="sc4"/>
	SUB4 GRADEPT:<input type="int" name="sg4"/><br><br>
	SUB5 CREDIT:<input type=" int" name="sc5"/>
	SUB5 GRADEPT:<input type="int" name="sg5"/><br><br>
	SUB6 CREDIT:<input type=" int" name="sc6"/>
	SUB6 GRADEPT:<input type="int" name="sg6"/><br><br>
	SUB7 CREDIT:<input type=" int" name="sc7"/>
	SUB7 GRADEPT:<input type="int" name="sg7"/><br><br>
	SUB8 CREDIT:<input type=" int" name="sc8"/>
	SUB8 GRADEPT:<input type="int" name="sg8"/><br><br>
	SUB9 CREDIT:<input type=" int" name="sc9"/>
	SUB9 GRADEPT:<input type="int" name="sg9"/><br><br>
	SUB10 CREDIT:<input type=" int" name="sc10"/>
	SUB10 GRADEPT:<input type="int" name="sg10"/><br><br>
	SUB11 CREDIT:<input type=" int" name="sc11"/>
	SUB11 GRADEPT:<input type="int" name="sg11"/><br><br>
	SUB12 CREDIT:<input type=" int" name="sc12"/>
	SUB12 GRADEPT:<input type="int" name="sg12"/><br><br>
  <input type="submit"/>
  <br>
  <br>
<div class="note">
  <p>
  NOTE:
  <ul><li>Please enter the subject credits for each subject ,if the number of subjects is less than 12 then enter 0 for those subjects</li>
  <li> Enter the grade points for each subjects ,if the number of subjects is less than the above specified values enter 0</li>
  </ul>
   
  </p>
  
</div>
</form>
</body>
</html>