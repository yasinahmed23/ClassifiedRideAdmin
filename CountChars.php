<form method="POST">

<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%">
<input type="text" name="charcount">
      </td>
    </tr>
    <tr>
      <td width="100%"><div align="right"><p><input type="button" value="Calculate Characters"
      onClick="countit(this)"> <input type="text" name="displaycount" size="20"></p>
      </td>
    </tr>
  </table>

</form>

<script language="JavaScript">

$('.charcount').keyup(function() {
	
	var stringcount = $(this).attr('value');

	alert(stringcount);
	
});
</script>


	
