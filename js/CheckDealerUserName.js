$(document).ready(function(){
$('#DealerUserName').keyup(DealerUserName_check);
});
	
function DealerUserName_check(){	
var DealerUserName = $('#DealerUserName').val();
if(DealerUserName == "" || DealerUserName.length < 4){
$('#DealerUserName').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "checkDealerUsername.php",
   data: 'DealerUserName='+ DealerUserName,
   cache: false,
   success: function(response){
if(response == 1){
	$('#DealerUserName').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}else{
	$('#DealerUserName').css('border', '3px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }
}
});
}
}
