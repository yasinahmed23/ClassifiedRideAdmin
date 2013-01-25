<!--View My Profile-->
<div>
	<a href="/AccountsReceivable/index.php"><strong>ACCOUNTS RECEIVABLE</strong></a>
	<br /><br />
</div>

<!--View Dealers-->
<div>
	<a href="/AccountsReceivable/index.php"><strong>DEALERS</strong></a>
	<form action="/searchDealerNameAR.php" name="search_blog" id="search_blog">
		<input class="Button" type="submit" id="search_blog" name="search_blog" value="Search Dealers"  />
</form>	
	<br />

</div>

<!--Admin Access-->
<div>
<?php	
	if (!isset($_SESSION[admin])) {
		require_once 'NoAdminAccess.php';
	}
	else {
			include 'AdminAccess.php';
		}
	
	?>
</div>

