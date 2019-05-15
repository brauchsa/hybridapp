<?php

include("admin/functions.php");
$missingCIF = 0;

if(isset($_GET['id']))
{
	$link = connectDB();
	$enrollment = $_GET['id'];
	
	if(verifyMSSales($enrollment, $link))
	{
		if(verifyCIF($enrollment, $link))
		{
			getTrackingNumber($enrollment, $link);
		}
		else 
		{
			echo "Customer Referral Form is missing.</br>";
			echo "Please go to <a href='http://storsimpleorder.azurewebsites.net/' target='new'>Customer Referral Form</a></br></br>";
		}
		
	}
	else
	{
		echo "Enrollment #: <b>$enrollment</b> does not have a StorSimple device associated.</br>";
	}
}
else
 echo "Enrollment # Missing<br/>";
	
	
	
	
?>