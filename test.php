<?php
//Calculate Commission & Referral Fee
	$Program="798";
	if ($Program == "798") {
		$Commission = "300";
		$ReferralAmount="60";
	}
	else {
		$Commission = "150";
		$ReferralAmount="30";
	}

	$DirPrice=(99*.2);
	$FBPrice=(1490*.2);
	$SMSPrice=(990*.2);
	$YouTubePrice=(199*.2);
	$CaBIDPrice=(399*.2);
	
	echo "Dir Commission: " . $DirPrice . "<br />";	
	echo "FB Commission: " . $FBPrice . "<br />";
	echo "SMS Commission: " . $SMSPrice . "<br />";
	echo "YT Commission: " . $YouTubePrice . "<br />";
	echo "Cabid Commission: " . $CaBIDPrice . "<br /><br />";
	
	$Total= $DirPrice + $FBPrice + $SMSPrice + $YouTubePrice + $CaBIDPrice;
	
	echo "Total Feature Comm " . $Total . "<br /><br />";
	echo "Commission before Features is :  " . $Commission;

	$Commission=$Commission+($DirPrice)+($FBPrice)+($SMSPrice)+($YouTubePrice)+($CaBIDPrice);

	echo "<br />Commission AFTER Features is :  " . $Commission;
?>	
