<?php
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	//Get data from database and assign to a variable
	$DealerName= $_POST['search_string'];

	$GetDealerInfo = mysql_query("
		SELECT *
		FROM dealers
		WHERE DealerName='".$DealerName."'");

	
		while ($row = mysql_fetch_array($GetDealerInfo)) 
			{
				$DealerID = $row['DealerID'];
				$AccountPayFirstName = $row['AccountPayFirstName'];
				$AccountPayLastName = $row['AccountPayLastName'];
				$DealerName = $row['DealerName'];
				$DealerStreet1 = ($row['DealerStreet1']);
				$DealerStreet2 = ($row['DealerStreet2']);
				$DealerCity = ($row['DealerCity']);
				$DealerState = $row['DealerState'];
				$DealerZip = $row['DealerZip'];
				$AccountPayableCell1 = $row['AccountPayableCell1'];
				$AccountPayableCell2 = $row['AccountPayableCell2'];
				$AccountPayableCell3 = $row['AccountPayableCell3'];
				$AccountPayableEmail = $row['AccountPayableEmail'];
				$RepName = $row['RepName'];
				$Program = $row['Program'];
				$MthlyPmt = $row['MthlyPmt'];
				$StartDate = $row['StartDate'];
				$Notes = $row['Notes'];
				$directory = $row['directory'];
				$facebook = $row['facebook'];
				$YouTube = $row['YouTube'];
				$CaBID = $row['CaBID'];
				$SMS = $row['SMS'];	

				if (isset($DealerStreet2)) {
					$DealerAddress = $DealerStreet1 . " " .  $DealerStreet2 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				else {
					$DealerAddress = $DealerStreet1 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				$AccountPayableCell= $AccountPayableCell1 . "-" . $AccountPayableCell2 . "-" .  $AccountPayableCell3;
				$Contact=$AccountPayFirstName . " " . $AccountPayLastName;
			}

?>
