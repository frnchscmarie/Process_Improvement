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

function showotrate()
{
	var select_status=$('#rate').val();
	if (select_status == '1.25')
	 {
		$('#1.25_a').show();
		$('#1.25_b').show();
	 } 
	 else {
		$('#1.25_a').hide();
		$('#1.25_b').hide();
	}

	if(select_status == '1.50')
	{
	$('#1.50_a').show();
	$('#1.50_b').show();
	}
	else{
	$('#1.50_a').hide();
	$('#1.50_b').hide();
}
}