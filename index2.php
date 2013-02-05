<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script>
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
   url: "check.php",
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

</script>

<style>
#DealerUserName{
}

#tick{display:none}
#cross{display:none}
	

</style>


DealerUserName: <input name="DealerUserName" id="DealerUserName" type="text" />
<img id="tick" src="/images/tick.png" width="16" height="16"/>
<img id="cross" src="/images/cross.png" width="16" height="16"/>


