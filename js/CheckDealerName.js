$(document).ready(function(){
$('#DealerName').keyup(DealerName_check);
});
	
function DealerName_check(){	
var DealerName = $('#DealerName').val();
if(DealerName == "" || DealerName.length < 3){
$('#DealerName').css('border', '3px #CCC solid');
$('#tick2').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "Functions/CheckDealerName.php",
   data: 'DealerName='+ DealerName,
   cache: false,
   success: function(response){
if(response == 1){
	$('#DealerName').css('border', '3px #C33 solid');	
	$('#tick2').hide();
	$('#cross2').fadeIn();
	}else{
	$('#DealerName').css('border', '1px #CCC solid');
	$('#cross2').hide();
	$('#tick2').fadeIn();
	     }
}
});
}
}
