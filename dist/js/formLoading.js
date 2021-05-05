
function addForm(target){

	var card = document.querySelector(target);

	const div = document.createElement('div');

		div.className = 'card-loading'
		div.innerHTML = `<div class="lds-ripple">
								<div>
								</div>
								<div>
								</div>
						</div>`;
						
	card.appendChild(div);

}

function removeLoading(target, message, respType){

	$(target+' .card-loading').remove();

	var notification_list = document.querySelector('#notification-list');

	const div = document.createElement('div');

	var classAlert = 'alert alert-danger alert-remove';
	
	if(respType == 'success'){
	
		classAlert = 'alert alert-success alert-remove';
	
	}

	div.className = classAlert;
	div.innerHTML = message;

	notification_list.append(div);

	setTimeout(function(){
		$('#notification-list').contents().remove();
	}, 3000);
}
