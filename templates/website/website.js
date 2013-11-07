$(function () {

	$('#password').on('keyup',function(e) {
		$(this).css('background','#fff');
		if (e.which == 13) doLogin();		
	});
	
	$('#login').on('click',function() {
		doLogin();
	});
	$('form.login input').on('focus',function() {
		$(this).css('background','#fff');
	});
	
	if ($('.breadcrumb').html()) $('.breadcrumb').animate({opacity:1});

});

function doLogin () {
	var data = {
		login_username: $('#username').val(),
		login_password: $('#password').val()		
	}
	$.post('/ajax/login-skybox/authenticate',data,function(req) {
		if ($.trim(req) == 'true') {
			window.location.href = '/account';
		}
		else $('form.login input').css('background','#fed5d5');
		
	});
}