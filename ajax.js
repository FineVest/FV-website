$(function()
{

	$("#btnSubmit").click(function()
	{

		var email = $('#mail').val();
		var message = $('#message').val();



		$.post('submitform.php',{mail:email,message:message},
			function(data)
		{
			$('#result').html(data);
		});

	});


});
