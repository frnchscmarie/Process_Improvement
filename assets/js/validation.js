function showradiobutton()
{
	var select_status=$('#type').val();
	if (select_status == 'Vacation Leave(International)')
	 {
		$('#vl_int').show();
	 } 
	 else {
		$('#vl_int').hide();
	}

	if(select_status == 'Sick Leave')
	{
	$('#sick_leave').show();
	$('#sick_leave_specify').show();
	}
	else{
	$('#sick_leave').hide();
	$('#sick_leave_specify').hide();
	}

	if (select_status == 'Others')
	 {
		$('#others').show();
	 } 
	 else {
		$('#others').hide();
	}
}