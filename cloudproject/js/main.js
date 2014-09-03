//ajax call to botoexec.php
$('.terminate').click(function(){

	var status=$(this).closest('tr').find('.terminate-status')

	$.get("botoexec.php").done(function(data) {
		console.log(data);
		$(status).html('<span style="color:red">Terminated</span>');
	});	

	return false;
});

