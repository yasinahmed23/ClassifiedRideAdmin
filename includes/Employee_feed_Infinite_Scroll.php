<ul id="infinite_scroll">
			<div id="postedEmployees">
				<?php 
				$SQLquery = mysql_query("
					SELECT *
					FROM employees 
					ORDER BY employeeID ASC
					LIMIT 5");
				
				$lastId ;
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
						<li><b>Employee ID : </b>"."$employeeID </li> 
						<li><b>Employee Firstname : </b>"."$EmplFirstName </li>
						<li><b>Employee Lastname : </b>"."$EmplLastName</li> 
						<li><b>Employee Email : </b>"."<a href='mailto:$EmplEmail'>$EmplEmail</a></li>	
						<li><b>Employee City : </b>"."$EmplCity </li>		
						<li><b>Employee State : </b>"."$EmplState </li>			
						<li>";
							if ($pic == null || $pic == "") {
								printf("<img src='/images/No_Image_Available.gif' width='100'>");
							}
							else {
								printf("<img src='/uploads/$pic' width='100'>");
							}
							echo "</li>
								<hr /></div>";
							 } 
				?>
		
				<div id="loadMoreEmployees" style="display:none;" > 
					<script type="text/javascript">
					$(document).ready(function() { 
						$(window).scroll(function() {
						   	if($(window).scrollTop() == $(document).height() - $(window).height()) {	
								$('div#loadMoreEmployees').show();
								$.ajax({
									url: "InfiniteScroll/loadMoreEmployees.php?lastEmployee="+ $(".postedEmployee:last").attr('employeeID') ,
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
			</div>
		</ul>
