function GenerateNordeaBankForm() {	
	var form = GenerateForm("nordeaForm",actionForm, "post");
	for(var i = 0; i < 5; i++){
		var div = GenerateElement("div", "");
		AddHtmlNode(form,div);
		AddHtmlNode(div,GenerateLabel(Labels[i], Labels[i]));
		AddHtmlNode(div,GenerateInput(Labels[i], "text", "", "input"));
	}
	AddSubmitButton(form);
	return form;
}

function GenerateLabel(attrFor, text) {
	var label = GenerateElement("label", "");
	label.setAttribute("for",attrFor);
	label.textContent = text;
	return label;
}

function GenerateInput(id, type, value, attrClass) {
	var input = GenerateElement("input",id, attrClass);
	input.type = type;
	input.value = value != undefined ? value : "";
	return input;
}

function GenerateForm(id,action,method) {
	var form = GenerateElement("form",id);
	form.addEventListener('submit', action); 
	form.method = method;
	return form;
}

function AddSubmitButton(parentNode){
	var div = GenerateElement("div","","button");
	AddHtmlNode(parentNode, div);
	AddHtmlNode(div,GenerateInput("", "submit", "Wyslij"));
}

function AddHtmlNode(parentNode, childNode) {
    parentNode.appendChild(childNode);
}

function GetNode(containerId) {
	return document.getElementById(containerId);
}
		
function GenerateElement(elementName, id, attrClass) {
    var element = document.createElement(elementName);
    element.id = id;
    if(attrClass != undefined)
    	element.setAttribute("class",attrClass);
    return element;
} 

function actionForm(){
	var form = GetNode("nordeaForm");
	for(var i = 0; i < 5; i++){
		console.log(form[Labels[i]].value);
	}
}

var Labels = ["Nazwa odbiorcy","Numer rachunku:","Tytul platnosci:","Data:","Kwota:"];



