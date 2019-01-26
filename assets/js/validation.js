function showradiobutton()
{
	var select_status=$('#type').val();
	if(select_status == 'Sick Leave')
	{
	$('#in_hospital').show();
	$('#out_patient').show();
	}
	else{
		$('#in_hospital').hide();
	$('#out_patient').hide();
	}
}