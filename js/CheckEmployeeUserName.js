$(document).ready(function(){
$('#EmplUserName').keyup(EmplUserName_check);
});
	
function EmplUserName_check(){	
var EmplUserName = $('#EmplUserName').val();
if(EmplUserName == "" || EmplUserName.length < 4){
$('#EmplUserName').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "Functions/checkEmployeeUsername.php",
   data: 'EmplUserName='+ EmplUserName,
   cache: false,
   success: function(response){
if(response == 1){
	$('#EmplUserName').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}else{
	$('#EmplUserName').css('border', '1px #CCC solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }
}
});
}
}
