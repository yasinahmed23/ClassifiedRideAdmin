<table width="700" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
	<tr>
		<td>
			<ul id="infinite_scroll">
				<div id="postedEmployees">
					<table width="700" cellpadding="0" cellspacing="0" border="0" align="center">
						<tr>
							<td align="center"><strong>Employee ID</strong></td>
							<td align="center"><strong>Firstname</strong></td>
							<td align="center"><strong>Lastname</strong></td>
							<td align="center"><strong>Email</strong></td>
							<td align="center"><strong>City</strong></td>
							<td align="center"><strong>State</strong></td>
							<td align="center"><strong>Pic</strong></td>
						</tr>			
						<?php 
						$SQLquery = mysql_query("
							SELECT *
							FROM employees 
							ORDER BY employeeID ASC
							LIMIT 5
							");

						while($data = mysql_fetch_object($SQLquery)){
							$TimeRegistered = $data->TimeRegistered;
							$employeeID = $data->employeeID ;
							$EmplFirstName = $data->EmplFirstName;
							$EmplLastName = $data->EmplLastName ;
							$EmplEmail = $data->EmplEmail ;
							$EmplCity = $data->EmplCity ;
							$EmplState = $data->EmplState ;
							$pic = $data->pic ;
						?>
						<!--Disply data from database into a table -->

						<?php echo "
						<div class='postedEmployee' employeeID=\"$data->employeeID \">
							<tr valign='top'>
								<td colspan='7' align='center'><hr /></td>
							</tr>
							<tr>					
								<td align='center'><li>"."$employeeID </li></td>
									<td align='center'><li>"."$EmplFirstName </li></td>
									<td align='center'><li>"."$EmplLastName</li> </td>
									<td align='center'><li>"."<a href='mailto:$EmplEmail'>$EmplEmail</a></li></td>	
									<td align='center'><li>"."$EmplCity </li></td>		
									<td align='center'><li>"."$EmplState </li></td>			
									<td align='center'><li>";if ($pic == null || $pic == "") {
											printf("<img src='/images/No_Image_Available.gif' width='100'>");
										}
										else {
											printf("<img src='/uploads/$pic' width='100'>");
										};echo "</li></td>
							</tr>
						</div>";
						 } 
						?>

						<div id="loadMoreEmployees" style="display:none;" > 
							<script type="text/javascript">
							$(document).ready(function() { 
								$(window).scroll(function() {
								   	if($(window).scrollTop() == $(document).height() - $(window).height()) {	
										$('div#loadMoreEmployees').show();
										$.ajax({
											url: "InfiniteScroll/loadMoreEmployeesTable.php?lastEmployee="+ $(".postedEmployee:last").attr('employeeID') ,
											success: function(html) {
											if(html){		
												$("#postedEmployees").append(html);
												$('div#loadMoreEmployees').hide();
												}else{		
												$('div#loadMoreEmployees').replaceWith("<center><h1 style='color:red'>You are viewing all of the employees.</h1></center>");
												}
											}
										});
									}
								});
							});
							</script>
						</div>
					</table>
				</div>
			</ul>
		</td>
	</tr>
</table>