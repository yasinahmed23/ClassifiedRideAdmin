<script src="autocomplete/search_EmployeeName.js"></script>
<center><font size="-1"><br />Start typing the Employee's first name... Select from drop-down menu</font>
<div>&nbsp;</div>	
<form action="search_results_TransactionEmployee.php" method="post" id="SearchTransEmployee" name="SearchTransEmployee">
	<div class="dropdown">
		<input type="text" name="search_string" class="autocomplete">
	</div>
	<div class="dropdown">
		<ul class="result"></ul>
			<input type="submit" value="Submit" align="middle" class="Button">
		</ul>
	</div>
</form>
