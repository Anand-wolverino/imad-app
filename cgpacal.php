<?php 
$i=0;
$num=$denum=0;
$cgpa=0;
echo "<body style='background: url(cal.jpg);'>";
echo "<body 
	'font-style: normal;'
	'font-variant: normal;'
	'font-weight: bolder;'
	'font-size: xx large;'
	'text-align: center;'>";
	if($_GET["sc1"])
	{
		$credit= array($_GET['sc1'],$_GET['sc2'],$_GET['sc3'],$_GET['sc4'],$_GET['sc5'],$_GET['sc6'],$_GET['sc7'],$_GET['sc8'],$_GET['sc9'],$_GET['sc10'],$_GET['sc11'],$_GET['sc12']);
		$gradept= array($_GET['sg1'],$_GET['sg2'],$_GET['sg3'],$_GET['sg4'],$_GET['sg5'],$_GET['sg6'],$_GET['sg7'],$_GET['sg8'],$_GET['sg9'],$_GET['sg10'],$_GET['sg11'],$_GET['sg12']);
		for($i=0;$i<12;$i++)
		{
		
				$num=$num+($credit[$i]*$gradept[$i]);
				$denum=$denum+$credit[$i];
			
		}
		$cgpa=$num/$denum;
		echo "CGPA:$cgpa";
	}
    ?>