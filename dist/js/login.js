

$('#formLogin').submit(function(e){
	e.preventDefault();
	var data = $(this).serialize();
	addForm('#formLogin');
	$.ajax({
		url: API_URL+'api/client/login',
		type: 'post',
		dataType: 'json',
		data: data,
		success: function(resp){
			console.log(resp);
			removeLoading('#formLogin', resp.message, resp.respType);

			
			if(resp.error == false){

				createSession(resp.client);

			}

			
		}
	}).fail(function(resp){

		removeLoading('#formLogin', resp.message, resp.respType);

	})
});

$('#formRegister').submit(function(e){

	e.preventDefault();

	var data = $(this).serialize();

	var confirmPassword = document.querySelector('#confirmPasswordRegister')
	var password = document.querySelector('#passwordRegister')

	addForm('#formRegister');

	if(confirmPassword.value === password.value){

		$.ajax({
			url: API_URL+'api/client/register',
			type: 'post',
			dataType: 'json',
			data: data,
			success: function(resp){

				removeLoading('#formRegister', resp.message, resp.respType);

				
				if(resp.error == false){

					createSession(resp.client);

				}

				
			}
		}).fail(function(resp){

			removeLoading('#formRegister', resp.message, resp.respType);

		})

	} else {

		password.setAttribute('class', 'form-control is-invalid');
		confirmPassword.setAttribute('class', 'form-control is-invalid')
		removeLoading('#formRegister', 'No coinciden las contraseñas', 'error');
	}

});

function changeForm(request){

	if(request === 'register'){

		$('#login').fadeOut();

		$('#register').removeClass('d-none');
		$('#register').fadeIn();

	} else {

		$('#login').fadeIn();
		$('#register').fadeOut();

	}
	console.log(request);
}

function createSession(data){
	$.ajax({
		url: 'database/session.php',
		type: 'post',
		dataType: 'json',
		data: data,
		success: function(resp){

			console.log(resp);

		}
		
	}).fail(function(resp){
		
		console.log(resp);
		
	})
}