	<div id="postedEmployees">
		<table cellpadding="0" cellspacing="0" border="0" width="750" align="center">
			<tr valign="top">
				<td align="center" width="22">&nbsp;</td>
				<td align="center" width="256"><strong>Name</strong></td>
				<td align="center" width="236"><strong>Location</strong></td>
				<td align="center" width="236"><strong>Pic</strong></td>
			</tr>	
		</table>
		<ul id="infinite_scroll">
		<table cellpadding="0" cellspacing="0" border="0" width="750" align="center">		
			<?php 
			$SQLquery = mysql_query("
				SELECT *
				FROM employees 
				ORDER BY employeeID ASC
				LIMIT 5");
			$rownumber=0;
			while($data = mysql_fetch_object($SQLquery)){
				$TimeRegistered = $data->TimeRegistered;
				$employeeID = $data->employeeID ;
				$EmplFirstName = $data->EmplFirstName;
				$EmplLastName = $data->EmplLastName ;
				$EmplEmail = $data->EmplEmail ;
				$EmplCity = $data->EmplCity ;
				$EmplState = $data->EmplState ;
				$pic = $data->pic ;
				$location = $EmplCity . ",&nbsp;" . $EmplState;
				$rowNumber++;
			?>
			<!--Disply data from database into a table -->

			<?php echo "
			<div class='postedEmployee' employeeID=\"$data->employeeID \">
				<tr valign='top'>
					<td colspan='4' align='center'><hr /></td>
				</tr>
				<tr valign='top'>				
					<td align='center' width='22'><li>"."$rowNumber </li></td>
					<td align='center' width='256'><li><p><a href='mailto:$EmplEmail'>" . "$EmplFirstName $EmplLastName</a></p></li></td>
					<td align='center' width='256'><li>" . "$location </li></td>		
					<td align='center' width='236'><li>";if ($pic == null || $pic == "") {
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
		</ul>
	</div>
