$(function(){
	
	$("#admin").submit(function(event) {
		event.preventDefault();
		dataString = $("#admin").serialize();
		
		$.ajax({
			type: "POST",
			url: "admin/islogin",
			dataType: "json",
			data: dataString,
			success: function(data) {
				if (data.response == 'failed') {
					message = '<div class="ui error message">' + data.message + '</div>'
					$('#response').html(message);
				} else {
					message = '<div class="ui success message">' + data.message + '</div>'
					$('#response').html(message);

					setInterval(function() {
						uri = data.redirect;
						self.location = uri;
					}, 1000);
				}
			}
		});
		return false;
	});

});