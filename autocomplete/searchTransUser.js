$(document).ready(function() {
	$('.autocomplete').keyup(function() {
	
	var search_term = $(this).attr('value');

	//alert(search_term);

	$.post('autocomplete/searchTransUser.php', {search_term:search_term}, function(data) {
		
		//alert(data);
		$('.result').html(data);

		$('.result li').click(function() {
			var result_value = $(this).text();
			//alert(result_value);
			$('.autocomplete').attr('value', result_value);
			$('.result').html('');
		});		

		});

	});
});
	
