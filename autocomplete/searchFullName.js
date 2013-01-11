$(document).ready(function() {
	$('.autocomplete').keyup(function() {
	
	var search_FullName = $(this).attr('value');

	//alert(search_FullName);

	$.post('autocomplete/searchFullName.php', {search_FullName:search_FullName}, function(data) {
		
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
	
