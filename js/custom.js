$(document).ready(function() {
	$('.chatbot_icon').click(function() {
		$('.chat_box').toggleClass('active');
	});

	$('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
});
