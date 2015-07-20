function SetFormAction () {
	var form = GetNode("AccountNumberForm");
	form.setAttribute("onsubmit","return TryGetForm()");
}

function TryGetForm(){
	var number = GetNode("accountNumber");
	if(ValidateAccountNumber(number.value)){
		AddForm(GetForm(GetCrucialNumber(number.value)));
	}
	else{
		number.setAttribute("class","badNumber");
	}
	return false;
}

function AddForm(form) {
	var div = GetNode("FormContainer");
	AddHtmlNode(div,form);
}

function ValidateAccountNumber(number){
	var regexp = new RegExp("[0-9]{6}");
	return regexp.test(number);
}

function GetCrucialNumber(number){
	return number.substr(2, 4);
}

document.addEventListener('DOMContentLoaded',SetFormAction);
