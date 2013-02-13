<?php
	function TurnCabidOff() {
		$DealerName = "My Dealership";
		
		$UpdateCabid=mysql_query("
			UPDATE dealers 
			SET CaBID='CaBIDDeclined'	
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		//UPDATE MONTHLY PAYMENT
		$MthlyPmt=$MthlyPmt-399;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}

	function TurnCabidOn() {
		$UpdateCabid=mysql_query("
		UPDATE dealers 
		SET CaBID='CaBIDON	'
		WHERE DealerName='$DealerName'");

	$GetPmt=mysql_query("
		SELECT MthlyPmt 
		FROM  dealers
		WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+399;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
?>
