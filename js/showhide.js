$(document).ready(function() {
	$('#submitreset').hide(); //hide field on start

	$('#mySelect').change(function() {
		
		var $index = $('#mySelect').index(this);

		if($('#mySelect').val() == '') { //if this value is NOT selected
			$('#submitreset').hide(); //this field is hidden
	 	} 
		else {
			$('#submitreset').show();//else it is shown
		}
	});
});