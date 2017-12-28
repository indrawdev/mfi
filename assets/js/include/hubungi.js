$(function(){
	
	$("#contact").submit(function(event) {
		event.preventDefault();
		dataString = $("#contact").serialize();
		
		$.ajax({
			type: "POST",
			url: "hubungi/iskirim",
			dataType: "json",
			data: dataString,
			success: function(data) {
				if (data.response == 'failed') {
					message = '<div class="ui error message">' + data.message + '</div>'
					$('#response').html(message);
				} else {
					message = '<div class="ui success message">' + data.message + '</div>'
					$('#response').html(message);
					clearfield();
				}
			}
		});
		return false;
	});

});

function clearfield() {
	$(function(){
	    $('input').val('');
	});
}